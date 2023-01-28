from collections.abc import Callable
from repyct import *
import template

page: Callable[[dict[str, str]], BaseElement] = lambda menu_links: template.Page(
    description=template.description, active="home", menu_links=menu_links
)[
    div(class_="welcome-content")[
        h1()["Aaron", br(), "Stockdill"],
        p()[
            "Quantitative Technologist",
            br(),
            "Qube Research &amp; Technologies",
        ],
        template.email(""),
    ],
    script(type_="application/ld+json")[
        f"""{{
  "@context": "http://schema.org/",
  "@type": "http://schema.org/Person",
  "givenName": "Aaron",
  "familyName": "Stockdill",
  "description": "{template.description}",
  "gender": "http://schema.org/Male"
}}"""
    ],
]
