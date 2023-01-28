from repyct import *
import template


class education(CustomElement):
    def render(self, children, title, date):
        return [
            h2()[title],
            div(class_="date ed-year")[date],
            p()[children],
        ]


class company(CustomElement):
    def render(self, children, name):
        return [
            h2()[name],
            *children,
        ]


class job(CustomElement):
    def render(self, children, title, date):
        return [
            h3()[title],
            div(class_="date ed-year")[date],
            *children,
        ]


class awards_year(CustomElement):
    def render(self, children, year):
        return [h2(class_="date award-year")[year], *children]


class award(CustomElement):
    def render(self, children, name):
        return [h3()[name], *children]


page = lambda menu_links: template.Page(
    subtitle="Curriculum Vit&aelig;",
    description="Everything (plus a bit more) that you want to know about me. "
    + template.description,
    active="cv",
    menu_links=menu_links,
)[
    span(class_="anchor", id_="About"),
    h1()["About Me"],
    div(class_="precontent")[
        "Curriculum Vit&aelig; as ",
        a(href="/cv/AaronStockdill.pdf")["a PDF"],
        ".",
        br(),
        "A ",
        a(href="/cv/AaronStockdill.txt")["brief summary"],
        ".",
        br(),
        "For publications, see ",
        a(href="/research/#Publications")["Research"],
        ".",
    ],
    p()[
        "I am currently a Research Fellow in Informatics with the Representational Systems Lab, with Professor Peter Cheng. I am associated with the &lsquo;Rep2rep2&rsquo; project, joint between Sussex and Cambridge. The goal of this project is to intelligently recommend representations to support problem solving, considering both the problem to be solved, and the person doing the solving."
    ],
    p()[
        "My interests lie with anything that can make the world better. This primarily manifests as education: I have taught mathematics to high school students, and computer science to university students. I also work with Potato Softworks to help businesses and organisations get an online presence with affordable websites. Personally, I am passionate about Artificial Intelligence, as is reflected in my research."
    ],
    p()[
        "In 2016, I finished studying towards a Bachelor of Science with Honours in Computer Science at the University of Canterbury in Christchurch, New Zealand. The title of my dissertation was &ldquo;Neuromorphic Computing with Reservoir Neural Networks on Memristive Hardware.&rdquo; In 2015 I completed my final year of a BSc in Computer Science and Mathematics, and in 2017 commenced study towards a PhD in Computer Science at the University of Cambridge."
    ],
    hr(),
    span(class_="anchor", id_="Education"),
    h1()["Education"],
    education(title="Doctor of Philosophy", date="2017&ndash;2021")[
        "I am currently studying towards my PhD at the University of Cambridge. I am under the supervision of ",
        a(href="http://www.cl.cam.ac.uk/~mj201/")["Prof. Mateja Jamnik"],
        ", with the thesis title &ldquo;Automating representation change across domains for reasoning.&rdquo;",
    ],
    education(title="Bachelor of Science with First Class Honours", date="2016")[
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
    education(title="Bachelor of Science", date="2013&ndash;2015")[
        "Double major in Computer Science and Mathematics. ",
        "I finished with an average GPA of 8.83 out of 9. ",
    ],
    hr(),
    span(class_="anchor", id_="Employment"),
    h1()["Employ&shy;ment"],
    company(name="Qube Research &amp; Technologies")[
        job(
            title="Quantitative Technologist",
            date=["Feb 2023&ndash;", em()["present"]],
        )
    ],
    company(name="University of Sussex")[
        job(title="Research Fellow in Informatics", date=["Sep 2021&ndash;Jan 2023"],)[
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
            date="Jan 2021&ndash;July 2021",
        ),
    ],
    company(name="University of Cambridge")[
        job(title="Supervisor", date="2017&ndash;2019",)[
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
        job(title="Tutor", date="2015&ndash;2017")[
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
                li()[span(class_="all-caps")["COSC262S1"], ": Algorithms (2016, 2017)"],
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
    company(name="ARANZ Geo Leapfrog")[
        job(title="Software Developer Intern", date="Summer 2014/15")[
            p()[
                "In the Summer 2014/15 break, ",
                "I worked as a software developer intern ",
                "working on Geological Modelling Software for the mining industry. ",
                "This provided valuable experience working at ",
                "an established software company.",
            ],
        ],
    ],
    company(name="Potato Softworks")[
        job(title="Founder, Web Designer, Programmer", date="2014&ndash;2017")[
            p()[
                "I am co-founder of this web design company, ",
                "serving as lead web designer. ",
                "I also work as a software developer when required.",
            ]
        ],
    ],
    company(name="NumberWorks&rsquo;nWords")[
        job(title="Mathematics Tutor", date="2014&ndash;2016")[
            p()[
                "I was a Mathematics tutor for students of all ages, ",
                "specialising in High School material ",
                "with a strong focus on Algebra and Calculus.",
            ],
        ],
    ],
    hr(),
    span(class_="anchor", id_="Awards"),
    h1()["Awards &amp; Honours"],
    awards_year(year="2021")[
        award(name="Best Student Paper")[
            p()[
                em()["Diagrams Conference 2021"],
                br(),
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
]
