from repyct import *
import template

page = lambda menu_links: template.Page(
    subtitle="Teaching",
    description="Current and previous teaching information. " + template.description,
    active="teaching",
    menu_links=menu_links,
)[
    h1()["University of Cambridge"],
    # p()[
    #     "Supervision work will be advised via email shortly after organising the date and time of supervisions. You can submit your supervision work either by email (",
    #     span(
    #         class_="email-holder",
    #         dataBeforeAt="nneba.fgbpxqvyy",
    #         dataAfterAt="cl.cam.ac.uk",
    #     )[noscript()["Email obfuscated. Please enable Javascript."]],
    #     ") or via the supervision submission box in the Computer Lab.",
    # ],
    # p()[
    #     "Please submit all supervision work by at latest 4pm on the day before your supervision. This gives me time to review it and prepare feedback for you. It is not graded."
    # ],
    h2(id_="y201920", class_="date")["2019/20"],
    ul(class_="tutoring-list")[
        li()["Foundations of Computer Science (Michaelmas)"],
        li()["Algorithms (Lent)"],
    ],
    h2(id_="y201819", class_="date")["2018/19"],
    ul(class_="tutoring-list")[
        li()["Foundations of Computer Science (Michaelmas)"],
        li()["Prolog (Lent)"],
        li()["Artificial Intelligence (Easter)"],
        li()["Interaction Design (Easter)"],
    ],
    h2(id_="y201718", class_="date")["2017/18"],
    ul(class_="tutoring-list")[
        li()["Foundations of Computer Science (Michaelmas)"],
        li()["Prolog (Lent)"],
        li()["Logic and Proof (Lent)"],
        li()["Artificial Intelligence (Easter)"],
    ],
    hr(),
    h1()["University of Canterbury"],
    h2(id_="y2017", class_="date")["2017"],
    p(class_="tight")["In semester one, I was a tutor for:"],
    ul(class_="tutoring-list")[
        li()[
            span(class_="all-caps")["COSC121"], ": Introduction to Computer Programming"
        ],
        li()[span(class_="all-caps")["COSC262"], ": Algorithms"],
        li()[span(class_="all-caps")["COSC367"], ": Artificial Intelligence"],
        li()[span(class_="all-caps")["COSC480"], ": Computer Programming"],
    ],
    p()[
        "In semester two, term one (i.e., term three) I was the lecturer, assignment writer, and a tutor for &ldquo;",
        span(class_="all-caps")["COSC122"],
        ": Introduction to Computer Science&rdquo;.",
    ],
    h2(id_="y2016", class_="date")["2016"],
    ul(class_="tutoring-list")[
        li()[span(class_="all-caps")["COSC262S1"], ": Algorithms"],
        li()[
            span(class_="all-caps")["COSC264S2"],
            ": Introduction to Computer Networks and the Internet",
        ],
    ],
    h2(id_="y2015", class_="date")["2015"],
    ul(class_="tutoring-list")[
        li()[
            span(class_="all-caps")["COSC121S1"],
            ": Introduction to Computer Programming",
        ],
        li()[
            span(class_="all-caps")["COSC122S2"], ": Introduction to Computer Science"
        ],
    ],
]
