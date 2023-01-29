from repyct import *
import repyct.css as css

import repyct.css_units as U

S = css.Selector
R = css.Rule

body_font = "sans-serif"
header_font = body_font
tertiary_font = body_font
mono_font = "monospace"

hero_size = U.rem(2.666666)
h1_size = U.rem(2)
h2_size = U.rem(1)
h3_size = U.rem(0.666666)
h4_size = U.rem(0.666666)
body_size = U.rem(0.666666)
small_size = U.rem(0.5)
tiny_size = U.rem(0.4)

hero_leading = U.rem(2.6666666)
h1_leading = U.rem(2)
h2_leading = U.rem(1)
h3_leading = U.rem(1)
h4_leading = U.rem(1)
body_leading = U.rem(1)
small_leading = U.rem(0.85)
tight_small_leading = U.rem(0.7)
tiny_leading = U.rem(0.5)

wide_tracking = U.em(0.07)
very_wide_tracking = U.em(0.1)

main_width = U.ch(67)


def themed(**keys):
    return css.StyleSheet()[
        S("::selection")[R("background", keys["selection_background"])],
        (S(html) | S(body) | S(nav))[
            R("background", keys["background"]), R("color", keys["font"])
        ],
        S(a)[
            R("color", keys["font_faded"]),
            (S("&:hover") | S("&.active"))[R("color", keys["font"])],
        ],
        S(nav, a.active)[
            R("color", keys["font_strong"]),
            R("border-color", keys["font_faded"]),
        ],
        S(".menu-hamburger", ".bar")[
            R("fill", keys["font_faded"]),
        ],
        S(".menu-header")[R("color", keys["font"])],
        S(main)[
            (S(".contact-table", a) | S(".dynamic-link", a))[
                R("color", keys["font"]),
            ],
            S(blockquote)[
                R("background", keys["blockquote_background"]),
                R("border-color-left", keys["blockquote_border"]),
            ],
        ],
    ]


white = css.StyleSheet()[
    *themed(
        font="#222",
        font_faded="#555",
        font_strong="#000",
        background="#eee",
        selection_background="#ccc",
        blockquote_background="#ddd",
        blockquote_border="silver",
    ),
    S(footer)[
        S(".selector", a @ "white-button")[
            R("top", 0),
            R("opacity", 0.5),
        ],
        S(".selector:hover", a @ "white-button")[
            R("top", U.rem(-1.2)),
        ],
    ],
]

black = css.StyleSheet()[
    *themed(
        font="#ddd",
        font_faded="#aaa",
        font_strong="#fff",
        background="#2d2d2d",
        selection_background="#444",
        blockquote_background="#silver",
        blockquote_border="#aaa",
    ),
    S(footer)[
        S(".selector", a @ "black-button")[
            R("top", 0),
            R("opacity", 0.5),
        ],
        S(".selector:hover", a @ "black-button")[
            R("top", U.rem(-1.2)),
        ],
    ],
]


master = css.StyleSheet()[
    S("*")[R("box-sizing", "border-box")],
    S(":root")[R("font-size", U.px(24))],
    (S(html) | S(body))[
        R("font-family", body_font),
        R("font-weight", 300),
        R("font-size", body_size),
        R("line-height", body_leading),
        R("margin", 0),
        R("padding", 0),
    ],
    (S(h1) | S(h2) | S(h3) | S(h4) | S(h5) | S(h6))[
        R("font-weight", 700),
        R("hyphens", "manual"),
    ],
    S(".borked-email")[
        R("direction", "rtl"),
        R("unicode-bidi", "bidi-override"),
        R("text-align", "left"),
        R("hyphens", "manual"),
    ],
    (S(".menu-hamburger") | S(".menu-header"))[R("display", None)],
    S(nav)[
        R("position", "relative"),
        R("max-width", main_width),
        R("width", U.percent(100)),
        R("margin", (0, U.auto)),
        R("padding", (U.rem(0.5), U.rem(0.375))),
        R("z-index", 1000),
        S(a)[
            R("padding", U.rem(0.125)),
            R("margin-right", U.rem(0.75)),
            R("font-size", tiny_size),
            R("line-height", tiny_leading),
            R("text-transform", "uppercase"),
            R("text-decoration", None),
            R("letter-spacing", very_wide_tracking),
            S("&.active")[
                R("border-bottom-width", U.px(1)),
                R("border-bottom-style", "solid"),
                R("margin-bottom", U.rem(0.25) - U.px(1)),
            ],
        ],
    ],
    S(main)[
        R("max-width", main_width),
        R("width", U.percent(100)),
        R("margin", (0, U.auto)),
        R("padding", (0, U.rem(0.5), U.rem(2), U.rem(0.5))),
        S(".anchor")[
            R("width", 0),
            R("height", 0),
            R("display", "block"),
            R("position", "relative"),
            R("top", U.rem(-2)),
        ],
        S(hr)[
            R("border", None),
            R("height", U.px(1)),
            R("margin", (U.rem(1), U.auto, U.rem(2), U.auto)),
        ],
        S(h1)[
            R("font-size", h1_size),
            R("line-height", h1_leading),
            R("margin-bottom", U.rem(1)),
            R("margin-left", U.rem(-0.05)),
        ],
        S(h2)[
            R("margin-top", U.rem(1.5)),
            R("margin-left", U.rem(-0.05)),
        ],
        S(h3)[
            R("font-size", h3_size),
            R("font-style", "italic"),
            R("font-weight", 400),
            R("margin-top", U.rem(1)),
            R("margin-bottom", U.rem(0.5)),
        ],
        S(h4)[
            R("font-size", h4_size),
            R("line-height", h4_leading),
            R("margin-top", U.rem(1)),
            R("margin-bottom", U.rem(0.5)),
        ],
        S(p)[
            R("hyphens", U.auto),
            R("margin-top", U.rem(0.5)),
            R("margin-bottom", U.rem(0.5)),
        ],
        S(a)[
            R("text-decoration", None),
            S("&:hover")[R("text-decoration", "underline")],
            S("&::after")[R("content", '"°"'), R("margin-left", wide_tracking)],
            S("&.footnote-ref::after")[R("display", None)],
        ],
        S(sup)[
            R("display", "inline-block"),
            R("margin-top", U.em(-1)),
        ],
        S(li)[
            R("padding-top", U.rem(0.2)),
            R("padding-bottom", U.rem(0.2)),
            R("list-style-type", "circle"),
        ],
        S(".all-caps")[
            R("letter-spacing", wide_tracking),
            R("text-transform", "uppercase"),
        ],
        S(".date")[
            R("text-transform", "uppercase"),
            R("font-weight", 300),
            R("font-size", small_size),
            R("letter-spacing", wide_tracking),
        ],
        S(img)[
            R("display", "block"),
            R("margin", "auto"),
            R("max-width", U.percent(100)),
            S("&" + em)[
                R("width", U.percent(100)),
                R("display", "block"),
                R("font-family", tertiary_font),
                R("font-style", "normal"),
                R("font-size", small_size),
                R("line-height", tight_small_leading),
                R("margin", (U.rem(0.5), 0, U.rem(1), 0)),
            ],
        ],
        S(blockquote)[
            R("border-left", (U.px(5), "solid")),
            R("padding", (U.rem(0.5), U.rem(1))),
        ],
        S(".email")[
            R("text-decoration", None),
            R("transition", ("color", U.s(0.2), "ease")),
            R("font-family", mono_font),
            R("font-size", small_size),
            R("letter-spacing", wide_tracking / 2),
            S("&::after")[
                R("content", '""'),
                R("margin-left", 0),
            ],
        ],
        S(".precontent")[
            R("display", "block"),
            R("padding", (0, U.rem(1))),
            R("font-size", small_size),
        ],
        S(".award")[
            S(h3)[
                R("margin-bottom", U.rem(-0.25)),
            ],
        ],
        S(".contact-table")[
            S(".label")[
                R("padding-right", U.rem(1)),
                R("text-transform", "uppercase"),
                R("letter-spacing", wide_tracking),
                R("font-size", small_size),
                R("margin-top", U.rem(0.75)),
            ],
            S(".value")[
                R("overflow-x", "auto"),
                R("display", "block"),
            ],
            S(a)[
                R("text-decoration", None),
                S("&:hover")[R("text-decoration", "underline")],
            ],
        ],
        S(pre)[
            R("width", U.percent(100)),
            R("overflow-x", "auto"),
        ],
        S(code)[
            R("font-size", U.em(0.9)),
        ],
        S(".dynamic-link")[
            R("margin", (U.rem(0.3), U.auto)),
            S("&:first-of-type")[
                R("margin-top", U.rem(1)),
            ],
            S(h2)[
                R("margin-bottom", U.rem(0.5)),
            ],
            S(a)[
                R("text-decoration", None),
                R("display", "inline-block"),
                R("margin-right", U.rem(1)),
                S("&:hover")[
                    R("text-decoration", "underline"),
                ],
                S("&::after")[R("display", None)],
            ],
            S(".pub-info")[
                R("line-height", small_leading),
                R("font-size", small_size),
                S("& > *")[R("display", "block")],
            ],
            (S(".bibtex") | S(".pdflink"))[
                R("font-style", "italic"),
            ],
            S(".orig", a)[
                R("font-family", mono_font),
                R("font-size", small_size),
            ],
            S(".authors")[
                R("display", "block"),
                R("margin-bottom", U.rem(0.5)),
            ],
        ],
        S(".ed-year")[
            R("margin-top", U.rem(-0.5)),
        ],
        S(h2 + ".work-year")[
            R("margin-top", U.rem(-0.5)),
        ],
        S(h3 + ".work-year")[
            R("margin-top", U.rem(-0.2)),
        ],
        S(".blog-year")[
            R("margin-top", U.rem(1)),
            R("margin-bttom", U.rem(0.5)),
        ],
        (S(".talk-date") | S(".pub-date"))[
            R("font-size", small_size),
            R("line-height", small_leading),
        ],
        S(".blog-date")[
            R("font-size", tiny_size),
            R("line-height", tiny_leading),
            R("letter-spacing", very_wide_tracking),
        ],
        S(".post-links")[
            R("margin-top", U.rem(3)),
            R("display", "block"),
            R("width", U.percent(100)),
            R("height", U.rem(2)),
            R("position", "relative"),
            S(a)[
                R("font-size", small_size),
                R("line-height", tight_small_leading),
                R("text-transform", "uppercase"),
                R("letter-spacing", wide_tracking),
                R("text-decoration", None),
                R("display", "inline-block"),
                R("position", "absolute"),
                S("&::after")[R("display", None)],
                S("&:hover")[R("text-decoration", "underline")],
                S("&.prev")[
                    R("width", U.percent(50) - U.rem(3)),
                    R("padding-left", U.rem(1)),
                    S("&::before")[
                        R("content", '"◀︎"'),
                        R("display", "inline-block"),
                        R("position", "absolute"),
                        R("left", 0),
                    ],
                ],
                S("&.next")[
                    R("width", U.percent(50) - U.rem(3)),
                    R("text-align", "right"),
                    R("right", 0),
                    R("padding-right", U.rem(1)),
                    S("&::after")[
                        R("content", '"▶︎"'),
                        R("display", "inline-block"),
                        R("position", "absolute"),
                        R("right", 0),
                    ],
                ],
                S("&.up")[
                    R("width", U.rem(5)),
                    R("text-align", "center"),
                    R("left", U.percent(50)),
                    R("margin-left", U.rem(-2.5)),
                ],
            ],
        ],
        S(".footnote")[
            S(hr)[
                R("border-bottom", (U.px(1), "solid")),
                R("padding", (U.rem(1), 0)),
                R("width", U.percent(50)),
                R("margin", 0),
            ],
            S(ol)[
                R("padding-left", U.rem(2)),
                R("counter-reset", "item"),
                S(li)[
                    R("list-style", None),
                    R("position", "relative"),
                    S("&::before")[
                        R("content", "counter(item)"),
                        R("counter-increment", "item"),
                        R("vertical-align", "super"),
                        R("position", "absolute"),
                        R("font-size", "smaller"),
                        R("display", "inline-block"),
                        R("top", U.ex(1.5)),
                        R("margin-left", U.em(-1.5)),
                    ],
                ],
            ],
            S(".footnote-backref::after")[R("display", None)],
        ],
    ],
    S(footer)[
        R("width", U.percent(100)),
        R("max-width", main_width),
        R("margin", (0, U.auto)),
        R("opacity", 0.8),
        R("padding", (U.px(5), U.rem(0.5))),
        S(".selector")[
            R("display", "inline-block"),
            R("height", U.rem(1)),
            R("overflow-y", "hidden"),
            R("width", U.rem(2.5)),
            R("position", "relative"),
            R("font-size", tiny_size),
            R("line-height", tiny_leading),
            R("letter-spacing", very_wide_tracking),
            R("text-transform", "uppercase"),
            R("transition", ("height", U.s(0.2), "ease")),
            S(a)[
                R("position", "absolute"),
                R("top", U.rem(1.2)),
                R("cursor", "pointer"),
                R("transition", ("top", U.s(0.2), "ease")),
            ],
            S("&:hover", a)[R("top", 0)],
        ],
    ],
]

small = css.StyleSheet()[
    S(main.welcome, ".conditional-break")[
        R("display", "inline-block"),
    ],
    S("@media screen and (max-width: 420px)")[
        S(main.welcome, ".conditional-break")[
            R("display", "block !important"),
        ],
    ],
    S(nav)[
        R("position", "fixed"),
        R("overflow", "hidden"),
        R("padding", (U.rem(3), 0, 0, 0)),
        R("margin", 0),
        R("width", 0),
        R("height", U.percent(100)),
        R("top", 0),
        R("right", 0),
        R(
            "transition",
            [
                ("height", U.s(0.5), "ease"),
                ("width", U.s(0.5), "ease"),
                ("background", U.s(0.2), "linear", U.s(0.3)),
            ],
        ),
        S(a)[
            R("display", "block"),
            R("position", "relative"),
            R("padding-top", U.rem(0.4)),
            R("padding-bottom", U.rem(0.4)),
            R("text-align", "right"),
            R("padding-right", U.rem(1)),
            R("font-size", U.rem(0.7)),
            S("&.active")[
                R("border-bottom", (0, None)),
                R("border-right", (U.px(6), "solid")),
                R("margin", (0, U.rem(1) - U.px(6), U.rem(0.25), 0)),
            ],
        ],
        S("&.showing")[
            R("width", U.percent(100)),
            R(
                "transition",
                [
                    ("height", U.s(0.5), "ease"),
                    ("width", U.s(0.5), "ease"),
                    ("background", U.s(0.2), "linear", U.s(0)),
                ],
            ),
        ],
    ],
    S(".menu-hamburger")[
        R("display", "block"),
        R("position", "fixed"),
        R("right", U.rem(0.2)),
        R("top", U.rem(0.4)),
        R("width", U.rem(1.8)),
        R("height", U.rem(1.8)),
        R("z-index", 1001),
        R("transform", "scale(0.75)"),
        S(".bar")[
            R("stroke-width", 0),
            R("opacity", 1),
        ],
        (S(".bar-top") | S(".bar-bottom"))[
            R("transition", ("all", U.s(0.5), "ease-in-out")),
        ],
        S(".bar-top")[
            R("transform", ("translate(0%, -15%)", "rotate(0)")),
        ],
        S(".bar-bottom")[
            R("transform", ("translate(0%, 15%)", "rotate(0)")),
        ],
        S("&.showing", ".bar-top")[
            R("transform", ("translate(0%, 0%)", "rotate(225deg)")),
        ],
        S("&.showing", ".bar-bottom")[
            R("transform", ("translate(0%, 0%)", "rotate(135deg)")),
        ],
    ],
    S(footer)[
        R("position", "relative"),
        R("width", U.percent(100)),
        R("padding", (U.px(5), U.rem(1))),
        S(".selector.help-button")[
            R("display", None),
        ],
        S(".separator")[
            R("width", 0),
        ],
    ],
]

printer = css.StyleSheet()[
    (S(nav) | S(ul.submenu))[
        R("display", None),
    ],
    S(footer)[
        R("display", None),
    ],
    S(a)[
        R("text-decoration", None),
        R("color", "black"),
        (S('&[href^="http://"]:after') | S('&[href^="https://"]:after'))[
            R("content", '" [" attr(href) "]"'), R("color", "#333")
        ],
    ],
    S(".container", hr)[
        R("margin", (U.rem(1), U.auto)),
    ],
]

hero = css.StyleSheet()[
    S(".welcome")[
        R("height", U.vh(100) - U.rem(6)),
        R("min-height", U.vh(15) + U.rem(18)),
        R("position", "relative"),
        S(".welcome-content")[
            R("position", "relative"),
            R("top", U.percent(40)),
            R("transform", "translateY(-50%)"),
            S(h1)[
                R("font-size", hero_size),
                R("text-transform", "capitalize"),
                R("margin", (U.rem(2), 0, 0, 0)),
                R("line-height", hero_leading),
            ],
            S(p)[R("margin", (U.rem(2), 0, U.rem(1), 0))],
        ],
    ]
]
