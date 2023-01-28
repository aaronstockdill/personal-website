from repyct import *
import template

page = lambda menu_links: template.Page(
    subtitle="Contact",
    description="The best ways to connect with me. " + template.description,
    active="contact",
    menu_links=menu_links,
)[
    h1()["Contact"],
    div(class_="contact-table")[
        div(class_="label")["Email"],
        template.email("value "),
        div(class_="label")["Twitter"],
        a(class_="value", href="https://twitter.com/aaronstockdill", target="_blank")[
            "@aaronstockdill"
        ],
        div(class_="label")["LinkedIn"],
        a(
            class_="value",
            href="https://nz.linkedin.com/in/aaronstockdill",
            target="_blank",
        )["Aaron Stockdill"],
        div(class_="label")["GitHub"],
        a(class_="value", href="https://github.com/aaronstockdill", target="_blank")[
            "aaronstockdill"
        ],
    ],
]
