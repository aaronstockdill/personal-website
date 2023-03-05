from repyct import *
import template


class method(CustomElement):
    def render(self, label):
        return div()[
            div(class_="label", style="margin-right: -1.5rem;")[label],
            template.hsep(),
            *self.children,
        ]


page = lambda menu_links: template.Page(
    subtitle="Contact",
    description="The best ways to connect with me. " + template.description,
    active="contact",
    menu_links=menu_links,
)[
    h1()["Contact"],
    template.indent()[
        div(class_="contact-table")[
            method(label="Email")[
                template.email("value "),
            ],
            method(label="Twitter")[
                a(
                    class_="value",
                    href="https://twitter.com/aaronstockdill",
                    target="_blank",
                )["@aaronstockdill"],
            ],
            method(label="LinkedIn")[
                a(
                    class_="value",
                    href="https://nz.linkedin.com/in/aaronstockdill",
                    target="_blank",
                )["Aaron Stockdill"],
            ],
            method(label="GitHub")[
                a(
                    class_="value",
                    href="https://github.com/aaronstockdill",
                    target="_blank",
                )["aaronstockdill"],
            ],
        ],
    ],
]
