from repyct import *
import base

page = lambda menu_links: base.page(
    description=base.description, active="home", menu_links=menu_links
)[
    div(class_="welcome-content")[
        h1()["Aaron", br(), "Stockdill"],
        p()[
            "Quantitative Technologist",
            br(),
            "Qube Research &amp; Technologies",
        ],
        base.email(""),
    ],
    script(type_="application/ld+json")[
        f"""{{
  "@context": "http://schema.org/",
  "@type": "http://schema.org/Person",
  "givenName": "Aaron",
  "familyName": "Stockdill",
  "description": "{base.description}",
  "gender": "http://schema.org/Male"
}}"""
    ],
]
