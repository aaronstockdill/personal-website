from repyct import *
import template

indent = template.indent


class education(CustomElement):
    def render(self, title, date, location=None):
        return [
            div()[
                h2(style="display: inline-block;")[title],
                *([location, template.hsep()] if location else []),
                div(class_="date ed-year", style="display: inline-block;")[date],
            ],
        ]


class company(CustomElement):
    def render(self, name):
        if len(self.children) == 1:
            return div()[h2(style="display: inline-block;")[name], *self.children]
        return div()[
            h2()[name],
            indent()[
                *[div()[c] for c in self.children],
            ],
        ]


class job(CustomElement):
    def render(self, title, date):
        return [
            h3(style="display: inline-block;")[title],
            div(class_="date work-year", style="display: inline-block;")[date],
        ]


class awards_year(CustomElement):
    def render(self, year):
        if len(self.children) == 1:
            return div()[
                h2(class_="date award-year", style="display: inline-block;")[year],
                self.children[0],
            ]
        return div()[
            h2(class_="date award-year")[year],
            indent()[*[div()[c] for c in self.children]],
        ]


class award(CustomElement):
    def render(self, name):
        return name


page = lambda menu_links: template.Page(
    subtitle="Curriculum Vit&aelig;",
    description="Everything (plus a bit more) that you want to know about me. "
    + template.description,
    active="cv",
    menu_links=menu_links,
)[
    h1(style="display: inline-block")["Curriculum Vit&aelig;"],
    a(href="/cv/AaronStockdill.pdf")["PDF"],
    template.hsep(),
    a(href="/cv/AaronStockdill.txt")["TXT"],
    span(class_="anchor", id_="About"),
    h1()["About"],
    indent()[
        p()[
            "I am a Quantitative Technologist at Qube Research and Technologies, where I develop Python tools for researchers. I am a Visiting Researcher at the University of Cambridge, and an Associate Research Fellow at the University of Sussex."
        ],
        p()[
            "My interests are widespread, from AI to algorithms and data structures to high performance computing. I am a strong proponent of functional programming and strong, static type systems. I believe software should be written to be ",
            em()["economical"],
            " &ndash; that is, not unduly wasteful of memory or CPU cycles.",
        ],
    ],
    hr(),
    span(class_="anchor", id_="Education"),
    h1()["Education"],
    indent()[
        education(
            title="Doctor of Philosophy",
            date="2017&ndash;2021",
            location="Cambridge, UK",
        )[
            "I completed my PhD at the University of Cambridge. I was under the supervision of ",
            a(href="http://www.cl.cam.ac.uk/~mj201/")["Prof. Mateja Jamnik"],
            ", with the thesis title &ldquo;Automating representation change across domains for reasoning.&rdquo;",
        ],
        education(
            title="Bachelor of Science with First Class Honours",
            date="2016",
            location="Canterbury, NZ",
        )[
            "Studied in the &lsquo;Honours year&rsquo; of a BSc(Hons), ",
            "working on my research project with ",
            a(
                href="http://www.canterbury.ac.nz/engineering/contact-us/people/kourosh-neshatian.html"
            )["Dr Kourosh Neshatian"],
            ". ",
            "My report was called ",
            "&ldquo;Neuromorphic Computing ",
            "with Reservoir Neural Networks ",
            "on Memristive Hardware&rdquo;. ",
            "My final GPA was 8.9 out of 9.",
        ],
        education(
            title="Bachelor of Science",
            date="2013&ndash;2015",
            location="Canterbury, NZ",
        )[
            "Double major in Computer Science and Mathematics. ",
            "I finished with an average GPA of 8.83 out of 9. ",
        ],
    ],
    hr(),
    span(class_="anchor", id_="Employment"),
    h1()["Employ&shy;ment"],
    indent()[
        company(name="Qube Research &amp; Technologies")[
            job(
                title="Quantitative Technologist",
                date=["Feb 2023 &ndash; now"],
            )
        ],
        company(name="University of Sussex")[
            job(
                title="Research Fellow in Informatics",
                date=["Sep 2021 &ndash; Jan 2023"],
            )[
                p()[
                    "Worked as part of the Representational Systems Lab with ",
                    a(href="https://profiles.sussex.ac.uk/p100650-peter-cheng")[
                        "Prof. Peter Cheng"
                    ],
                    ".",
                ],
            ],
        ],
        company(name="Jane Street")[
            job(
                title="Software Engineer",
                date="Jan 2021 &ndash; July 2021",
            ),
        ],
        company(name="University of Cambridge")[
            job(title="Supervisor", date="2017 &ndash; 2019",)[
                p()[
                    "I have supervised ",
                    "&ldquo;Foundations of Computer Science&rdquo;, ",
                    "&ldquo;Prolog&rdquo;, ",
                    "&ldquo;Logic and Proof&rdquo;, and ",
                    "&ldquo;Artificial Intelligence&rdquo;.",
                ],
            ],
        ],
        company(name="University of Canterbury")[
            job(title="Lecturer", date="2017 Semester 2",)[
                p()[
                    "During Term 3 2017, ",
                    "I lectured the paper &ldquo;",
                    span(class_="all-caps")["COSC122"],
                    ": Introduction to Computer Science.&rdquo; ",
                    "This was an amazing experience, ",
                    "helping teach one of the core computer science papers ",
                    "that builds the ground-work for many other courses.",
                ],
            ],
            job(title="Tutor", date="2015 &ndash; 2017")[
                p()[
                    "I used to work as a tutor ",
                    "at the University of Canterbury ",
                    "in the Department of Computer Science and Software Engineering.",
                ],
                ul(class_="tutoring_list")[
                    li()[
                        span(class_="all-caps")["COSC480S1"],
                        ": Computer Programming (2017)",
                    ],
                    li()[
                        span(class_="all-caps")["COSC367S1"],
                        ": Artificial Intelligence (2017)",
                    ],
                    li()[
                        span(class_="all-caps")["COSC262S1"],
                        ": Algorithms (2016, 2017)",
                    ],
                    li()[
                        span(class_="all-caps")["COSC264S2"],
                        ": Introduction to Computer Networks and the Internet (2016)",
                    ],
                    li()[
                        span(class_="all-caps")["COSC121S1"],
                        ": Introduction to Computer Programming (2015, 2017)",
                    ],
                    li()[
                        span(class_="all-caps")["COSC122S2"],
                        ": Introduction to Computer Science (2015, 2017)",
                    ],
                ],
            ],
        ],
    ],
    hr(),
    span(class_="anchor", id_="Awards"),
    h1()["Awards"],
    indent()[
        awards_year(year="2021")[
            award(name="Best Student Paper, Diagrams Conference")[
                p()[
                    "Awarded for ",
                    "&lsquo;Considerations in Representation Selection ",
                    "for Problem Solving: a Review&rsquo;.",
                ],
            ],
        ],
        awards_year(year="2017")[
            award(name="Hamilton Cambridge International Scholarship")[
                p()[
                    "Awarded to non-EU international students ",
                    "studying for a PhD at the University of Cambridge, ",
                    "residing at Selwyn College.",
                ],
            ],
        ],
        awards_year(year="2016")[
            award(name="Graduating BSc(Hons) Computer Science Student of the Year")[
                p()[
                    "Awarded for academic achievement ",
                    "throughout my undergraduate and honours study ",
                    "at the University of Canterbury.",
                ],
            ],
            award(name="G B Battersby-Trimble Scholarship in Computer Science")[
                p()[
                    "Awarded for academic merit, ",
                    "broad knowledge outside of computer science, ",
                    "and research of benefit to New Zealand.",
                ],
            ],
            award(name="Finalist for the Sir Paul Callaghan Award")[
                p()[
                    "Awarded for innovation and STEM communication.",
                ],
            ],
            award(name="Freemasons University Scholarship")[
                p()[
                    "Awarded for academic merit, ",
                    "community involvement, ",
                    "and leadership potential.",
                ],
            ],
            award(name="University of Canterbury Senior Scholarship")[
                p()[
                    "Awarded on the basis of academic merit ",
                    "from 200 and 300 level courses.",
                ],
            ],
        ],
        awards_year(year="2015")[
            award(name="Graduating BSc Computer Science Student of the Year")[
                p()[
                    "Awarded for academic achievement ",
                    "throughout my undergraduate study ",
                    "at the University of Canterbury.",
                ],
            ],
            award(name="Page Memorial Prize")[
                p()[
                    "Awarded for academic achievement in Level 300 Mathematics ",
                    "at the University of Canterbury.",
                ],
            ],
            award(name="Allied Telesis Labs Scholarship in Computer Science")[
                p()[
                    "Awarded through the University of Canterbury.",
                ],
            ],
            award(name="Mathematics and Statistics Scholarship, First Tier")[
                p()[
                    "Awarded by the University of Canterbury.",
                ],
            ],
        ],
        awards_year(year="2014")[
            award(name="Member of the Golden Key International Honour Society")[
                p()[
                    "A member of the University of Canterbury chapter.",
                ],
            ],
            award(name="Mathematics and Statistics Scholarship, Second Tier")[
                p()[
                    "Awarded by the University of Canterbury.",
                ],
            ],
        ],
        awards_year(year="2013")[
            award(name="Dean&rsquo;s Congratulations")[
                p()[
                    "Received in recognition of Academic Achievement ",
                    "from Associate Professor Catherine Moran, Dean of Science ",
                    "at the University of Canterbury.",
                ],
            ],
            award(name="Peter Bryant Memorial Prize")[
                p()[
                    "Awarded for First Place in 100-Level Mathematics ",
                    "at the University of Canterbury.",
                ],
            ],
            award(name="Computer Science High Achievers Scholarship")[
                p()[
                    "Awarded to high achieving students ",
                    "commencing a degree in Computer Science ",
                    "at the University of Canterbury.",
                ],
            ],
        ],
    ],
]
