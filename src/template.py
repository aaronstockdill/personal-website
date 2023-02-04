from repyct import *
import repyct.svg as svg

import styles
import scripts

description: str = (
    "Quantitative Technologist at Qube Research &amp; Technologies, London."
)

stylesheets = {
    "master": styles.master,
    "600": styles.small,
    "print": styles.printer,
    "hero": styles.hero,
}


def email(cls: str) -> BaseElement:
    return span(
        class_=cls + "email-holder",
        dataBeforeAt="nnebafgbpxqvyy",
        dataAfterAt="me.com",
    )[noscript()["Email obfuscated. Please enable JavaScript."]]


class Headers(CustomElement):
    def render(self, children, description, subtitle=None):
        _ = children
        if subtitle is None:
            t = "Aaron Stockdill"
        else:
            t = subtitle + " for Aaron Stockdill"
        return [
            meta(charset="utf-8"),
            title()[t],
            style()[stylesheets["master"]],
            *([style()[stylesheets["hero"]]] if subtitle is None else []),
            style(media="only screen and (max-width: 599px)")[stylesheets["600"]],
            style(media="print")[stylesheets["print"]],
            meta(name="viewport", content="width=device-width, initial-scale=1"),
            meta(name="description", content=description),
        ]


class PageHeader(CustomElement):
    def render(self, children, menu_links, active):
        _ = children
        r = lambda pos: svg.rect(
            x="0",
            y="160",
            rx="0",
            ry="20",
            width="400",
            height="80",
            transformOrigin="200 200",
            class_="bar-" + pos + " bar",
        )
        act = lambda name: "active" if active == name else ""
        navlink = lambda name, url: a(
            href="/" + url + "/" if url != "" else "/",
            class_=act(name.lower()),
        )[name]
        return [
            svg.svg(
                xmlns="http://www.w3.org/2000/svg",
                viewbox="-50 -50 500 500",
                width="43px",
                height="43px",
                class_="menu-hamburger",
                id_="menu-hamburger",
            )[r("top"), r("bottom")],
            nav()[*(navlink(name, url) for (name, url) in menu_links.items())],
        ]


class PageFooter(CustomElement):
    def render(self, children):
        _ = children
        return [
            script()[scripts.script],
        ]


class Page(CustomElement):
    def render(self, children, active, description, menu_links, subtitle=None):
        return document(html_version=5)[
            html(lang="en")[
                head()[
                    Headers(
                        description=description,
                        subtitle=subtitle,
                    )
                ],
                body()[
                    PageHeader(active=active, menu_links=menu_links),
                    main(class_="welcome" if active == "home" else "")[children],
                    PageFooter(),
                ],
            ]
        ]
