import pathlib

import markdown

from repyct import *
import template

indent = template.indent

publications = []
talks = []

static_files = []


def parse_bibtex(contents):
    """This monster of a function is a small parser for BibTeX files."""

    def consume_whitespace(string, idx):
        whitespaces = "\t\n \r"
        while string[idx] in whitespaces:
            idx += 1
        return idx

    def read_type(string, idx):
        idx = consume_whitespace(string, idx)
        chars = ""
        while string[idx].lower() in "abcdefghikjlmnopqrstuvwxyz":
            chars += string[idx]
            idx += 1
        idx = consume_whitespace(string, idx)
        return chars, idx

    def read_citekey(string, idx):
        idx = consume_whitespace(string, idx)
        chars = ""
        while string[idx].lower() in "abcdefghikjlmnopqrstuvwxyz0123456789":
            chars += string[idx]
            idx += 1
        assert string[idx] == ","
        idx += 1
        idx = consume_whitespace(string, idx)
        return chars, idx

    def read_key(string, idx):
        idx = consume_whitespace(string, idx)
        chars = ""
        while string[idx].lower() in "abcdefghhijklmnopqrstuvwxyz-":
            chars += string[idx]
            idx += 1
        idx = consume_whitespace(string, idx)
        return chars, idx

    def read_value(string, idx):
        idx = consume_whitespace(string, idx)
        assert string[idx] == "{"
        idx += 1
        idx = consume_whitespace(string, idx)
        chars = ""
        while string[idx] != "}":
            chars += string[idx]
            idx += 1
        assert string[idx] == "}"
        idx += 1
        idx = consume_whitespace(string, idx)
        return chars, idx

    def read_attribute(string, idx):
        idx = consume_whitespace(string, idx)
        key, idx = read_key(string, idx)
        idx = consume_whitespace(string, idx)
        assert string[idx] == "="
        idx += 1
        idx = consume_whitespace(string, idx)
        attribute, idx = read_value(string, idx)
        idx = consume_whitespace(string, idx)
        return key, attribute, idx

    def parse(string, idx):
        parse_obj = {}
        idx = consume_whitespace(string, idx)
        assert string[idx] == "@"
        idx += 1
        entry_type, idx = read_type(string, idx)
        parse_obj["type"] = entry_type
        idx = consume_whitespace(string, idx)
        assert string[idx] == "{"
        idx += 1
        citekey, idx = read_citekey(string, idx)
        parse_obj["citekey"] = citekey
        idx = consume_whitespace(string, idx)
        while string[idx] != "}":
            label, value, idx = read_attribute(string, idx)
            parse_obj[label.lower()] = value
            idx = consume_whitespace(string, idx)
            if string[idx] == ",":
                idx += 1
                idx = consume_whitespace(string, idx)
        idx += 1
        return parse_obj, idx

    return parse(contents, 0)[0]


def talks_page(path, pred, succ):
    (name, date) = path.stem.rsplit(".", maxsplit=1)
    with open(path) as mdfile:
        content = markdown.markdown(
            mdfile.read(),
            extensions=["footnotes", "markdown_del_ins", "smarty"],
        )
    return lambda menu_links: template.Page(
        subtitle=name + " - Talks",
        description=template.description,
        active="research",
        menu_links=menu_links,
    )[
        div(class_="writing")[content],
        div(class_="post-links")[
            a(class_="prev", href=pred[0])[pred[1]] if pred else "",
            a(class_="up", href="/research/#Talks")["Up"],
            a(class_="next", href=succ[0])[succ[1]] if succ else "",
        ],
    ]


for path in pathlib.Path("dynamic", "talks").iterdir():
    if path.suffix == ".index":
        pass  # relic, ignore
    elif path.suffix == ".md":
        (name, date) = path.stem.rsplit(".", maxsplit=1)
        talks.append((name, date, path))
    else:
        static_files.append(path)
talks.sort(key=lambda v: v[1], reverse=True)
for i in range(len(talks)):
    if i == 0:
        pred = None
    else:
        pred = (
            "/talk/" + talks[i - 1][0].lower().replace(" ", "-") + "/",
            talks[i - 1][0],
        )
    if i == len(talks) - 1:
        succ = None
    else:
        succ = (
            "/talk/" + talks[i + 1][0].lower().replace(" ", "-") + "/",
            talks[i + 1][0],
        )
    talks[i] = (
        talks[i][0],
        talks[i][1],
        talks_page(path=talks[i][2], pred=pred, succ=succ),
    )


for path in pathlib.Path("dynamic", "publications").iterdir():
    if path.suffix == ".bib":
        pdf = path.stem + ".pdf"
        bib = path.stem + ".bib"
        with path.open("r") as f:
            bibtex = parse_bibtex(f.read())
            publications.append((bibtex, bib, pdf))
        static_files.append(path)
    else:
        static_files.append(path)


class publication_summary(CustomElement):
    def render(self, key, title, authors, info, abstract):
        def rev(name):
            (last, first) = name.split(", ")
            return f"{first} {last}"

        if len(authors) == 1:
            author_string = rev(authors[0])
        elif len(authors) == 2:
            author_string = f"{rev(authors[0])} and {rev(authors[1])}"
        else:
            author_string = (
                ", ".join(rev(a) for a in authors[:-1]) + ", and " + rev(authors[-1])
            )
        return div(class_="dynamic-link", id_=key, style="margin-bottom: 1rem;")[
            h2()[title],
            indent()[
                span(class_="authors")[author_string],
                info,
            ],
            # h3()["Abstract"],
            # div(class_="abstract")[abstract],
        ]


def publications_listing():
    def num(month):
        return [
            "jan",
            "feb",
            "mar",
            "apr",
            "may",
            "jun",
            "jul",
            "aug",
            "sep",
            "oct",
            "nov",
            "dec",
        ].index(month[:3].lower())

    return [
        publication_summary(
            key=bibtex["citekey"],
            title=bibtex["title"],
            authors=bibtex["author"].split(" and "),
            info=div(class_="pub-info")[
                span(class_="journal")[bibtex["journal"]]
                if "journal" in bibtex
                else span(class_="journal")[bibtex["booktitle"]]
                if "booktitle" in bibtex
                else "",
                div()[
                    a(class_="pdflink", href="/static/" + pdf)["Download PDF"],
                    template.hsep(),
                    a(class_="bibtex", href="/static/" + bib)["Download BibTeX"],
                    span(class_="date pub-date")[bibtex["month"], " ", bibtex["year"]],
                ],
                div()[bibtex["copyright"]] if "copyright" in bibtex else "",
            ],
            abstract=[p()[par] for par in bibtex["abstract"].strip().split("\n")],
        )
        for (bibtex, bib, pdf) in sorted(
            publications, key=lambda x: (x[0]["year"], num(x[0]["month"])), reverse=True
        )
    ]


class talk_link(CustomElement):
    def render(self, name, date):
        return div(class_="dynamic-link")[
            a(href="/talk/" + name.lower().replace(" ", "-") + "/")[name],
            span(class_="date talk-date")[date],
        ]


def talks_listing():
    return [
        talk_link(name=name, date=date)
        for (name, date, _) in sorted(talks, key=lambda v: v[1], reverse=True)
    ]


page = lambda menu_links: template.Page(
    subtitle="Research",
    description="A brief summary of my research interests and output. "
    + template.description,
    active="research",
    menu_links=menu_links,
)[
    span(class_="anchor", id_="Interests"),
    h1()["Research interests"],
    indent()[
        p()[
            f""" I am interested in human-like reasoning and the “third wave” of artificial intelligence. Humans are capable of finding patterns in remarkably small datasets, learning from just a handful of examples. We use a wide variety of strategies to solve a wide variety of problems. Truly intelligent systems should be able to do likewise. Third-wave AI focuses on systems that can not just make predictions, but form explanations. This goes far beyond the first-wave ({span(class_="all-caps")["GOFAI"]}, or good old fashioned AI) and second-wave (deep learning) AI. Furthermore, some speculate that third-wave AI might focus on teaching the AIs how to learn, or {em()["meta-learning"]}."""
        ],
    ],
    hr(),
    span(class_="anchor", id_="Publications"),
    h1()["Publications"],
    indent()[
        *publications_listing(),
    ],
    hr(),
    span(class_="anchor", id_="Talks"),
    h1()["Talks"],
    indent()[
        *talks_listing(),
    ],
    hr(),
    span(class_="anchor", id_="GitHub"),
    h1()["GitHub"],
    indent()[
        p()[
            f"""I infrequently put projects on GitHub, but you are welcome to view what is available there: {a(href="https://github.com/aaronstockdill")["Aaron Stockdill on GitHub"]}."""
        ],
    ],
]

vlhcc20 = lambda menu_links: template.Page(
    subtitle="VL/HCC 2020 Appendices Paper",
    description="A version of our accepted VL/HCC 2020 paper with appendices. "
    + template.description,
    active="research",
    menu_links=menu_links,
)[
    h1()["VL/HCC20"],
    p()[
        f"""Our work on {em()["correspondences"]} was published as part of the IEEE Symposium on Visual Languages and Human-Centric Computing (VL/HCC) 2020. While we submitted a full paper, we were accepted for publication as a short paper. This paper is listed in my {a(href="/research/#stockdill20")["publications"]}."""
    ],
    p()[
        """As suggested by the editors of VL/HCC20, we produced a second version of the paper with appendices to better capture the original content of the paper, along with the improvements suggested by the reviewers. The appendices include extended descriptions of property formulae, strength equations, and related work. We also extend the running example."""
    ],
    p()[
        f"""The paper with appendices is available here: {a(href="vlhcc20.pdf")["vlhcc20.pdf"]}"""
    ],
]

vlhcc22 = lambda menu_links: template.Page(
    subtitle="VL/HCC 2022 Appendices Paper",
    description="A version of our accepted VL/HCC 2022 paper with appendices. "
    + template.description,
    active="research",
    menu_links=menu_links,
)[
    h1()["VL/HCC 2022"],
    p()[
        "This work is a version of our publication accepted for VL/HCC 2022, including appendices that are too long for publication in the VL/HCC proceedings."
    ],
    p()[
        f"""The paper with appendices is available here: {a(href="vlhcc22.pdf")["vlhcc22.pdf"]}"""
    ],
]


subpages = [("vlhcc20", vlhcc20), ("vlhcc22", vlhcc22)]
