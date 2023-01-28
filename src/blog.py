import pathlib
import itertools

import markdown

from repyct import *
import base

posts = []

static_files = []


def blog_page(path, pred, succ):
    (name, date) = path.stem.rsplit(".", maxsplit=1)
    with open(path) as mdfile:
        content = markdown.markdown(
            mdfile.read(),
            extensions=["footnotes", "markdown_del_ins", "smarty"],
        )
    return lambda menu_links: base.page(
        subtitle=name + " - Blog",
        description=base.description,
        active="blog",
        menu_links=menu_links,
    )[
        div(class_="writing")[content],
        div(class_="post-links")[
            a(class_="prev", href=pred[0])[pred[1]] if pred else "",
            a(class_="up", href="/blog/")["Up"],
            a(class_="next", href=succ[0])[succ[1]] if succ else "",
        ],
    ]


for path in itertools.chain(
    pathlib.Path("dynamic", "talks").iterdir(),
    pathlib.Path("dynamic", "blog").iterdir(),
):
    if path.suffix == ".index":
        pass  # relic, ignore
    elif path.suffix == ".md":
        (name, date) = path.stem.rsplit(".", maxsplit=1)
        posts.append((name, date, path))
    else:
        static_files.append(path)
posts.sort(key=lambda v: v[1], reverse=True)
for i in range(len(posts)):
    if i == 0:
        pred = None
    else:
        pred = (
            "/blog/" + posts[i - 1][0].lower().replace(" ", "-") + "/",
            posts[i - 1][0],
        )
    if i == len(posts) - 1:
        succ = None
    else:
        succ = (
            "/blog/" + posts[i + 1][0].lower().replace(" ", "-") + "/",
            posts[i + 1][0],
        )
    posts[i] = (
        posts[i][0],
        posts[i][1],
        blog_page(path=posts[i][2], pred=pred, succ=succ),
    )


class publication_summary(CustomElement):
    def render(self, children, key, title, authors, info, abstract):
        _ = children

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
        return div(class_="dynamic-link", id_=key)[
            h2()[title],
            span(class_="authors")[author_string],
            info,
            h3()["Abstract"],
            div(class_="abstract")[abstract],
        ]


class blog_link(CustomElement):
    def render(self, children, name, date):
        return div(class_="dynamic-link")[
            a(href="/blog/" + name.lower().replace(" ", "-") + "/")[name],
            span(class_="date talk-date")[date],
        ]


def blog_listing():
    links = []
    years = set()
    for (name, date, _) in sorted(posts, key=lambda v: v[1], reverse=True):
        year = date.split("-")[0]
        if year not in years:
            links.append(div(class_="date blog-year")[year])
            years.add(year)
        links.append(blog_link(name=name, date=date))
    return links


page = lambda menu_links: base.page(
    subtitle="Blog",
    description="My (very infrequently) updated blog. " + base.description,
    active="blog",
    menu_links=menu_links,
)[
    span(class_="anchor", id_="Blog"),
    h1()["Blog"],
    *blog_listing(),
]
