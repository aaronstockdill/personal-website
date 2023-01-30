from repyct import *
import repyct.css as css

import repyct.css_units as U

S = css.Selector
A = css.Attr

body_font = "sans-serif"
header_font = body_font
tertiary_font = body_font
mono_font = "monospace"
font_size = U.px(18)

hero_size = U.rem(4)
h1_size = U.rem(2)
h2_size = U.rem(1.3)
h3_size = U.rem(1)
h4_size = U.rem(1)
body_size = U.rem(1)
small_size = U.rem(0.75)
tiny_size = U.rem(0.6)

hero_leading = U.rem(4)
h1_leading = U.rem(2)
h2_leading = U.rem(1.5)
h3_leading = U.rem(1.5)
h4_leading = U.rem(1.5)
body_leading = U.rem(1.5)
small_leading = U.rem(1.275)
tight_small_leading = U.rem(1.05)
tiny_leading = U.rem(0.75)

standard_tracking = U.em(0.01)
wide_tracking = U.em(0.07)
very_wide_tracking = U.em(0.1)

main_width = U.ch(67)


def themed(
    *,
    font,
    font_faded,
    font_strong,
    background,
    selection_background,
    blockquote_background,
    blockquote_border,
):
    return css.StyleSheet()[
        S("::selection")[
            A.background(selection_background),
        ],
        (S(html) | S(body) | S(nav))[
            A.background(background),
            A.color(font),
        ],
        S(a)[
            A.color(font_faded),
            (S("&:hover") | S("&.active"))[
                A.color(font),
            ],
        ],
        S(nav, a.active)[
            A.color(font_strong),
            A.border.color(font_faded),
        ],
        S(".menu-hamburger", ".bar")[
            A.fill(font_faded),
        ],
        S(".menu-header")[
            A.color(font),
        ],
        S(main)[
            (S(".contact-table", a) | S(".dynamic-link", a))[
                A.color(font),
            ],
            S(blockquote)[
                A.background(blockquote_background),
                A.border.color.left(blockquote_border),
            ],
        ],
    ]


white = css.StyleSheet()[
    *iter(
        themed(
            font="#222",
            font_faded="#555",
            font_strong="#000",
            background="#eee",
            selection_background="#ccc",
            blockquote_background="#ddd",
            blockquote_border="silver",
        )
    ),
    S(footer)[
        S(".selector", a @ "white-button")[
            A.top(0),
            A.opacity(0.5),
        ],
        S(".selector:hover", a @ "white-button")[
            A.top(U.rem(-1.2)),
        ],
    ],
]

black = css.StyleSheet()[
    *iter(
        themed(
            font="#ddd",
            font_faded="#aaa",
            font_strong="#fff",
            background="#2d2d2d",
            selection_background="#444",
            blockquote_background="#silver",
            blockquote_border="#aaa",
        )
    ),
    S(footer)[
        S(".selector", a @ "black-button")[
            A.top(0),
            A.opacity(0.5),
        ],
        S(".selector:hover", a @ "black-button")[
            A.top(U.rem(-1.2)),
        ],
    ],
]


master = css.StyleSheet()[
    S("*")[
        A.box.sizing("border-box"),
    ],
    S(":root")[
        A.font.size(font_size),
    ],
    (S(html) | S(body))[
        A.font.family(body_font),
        A.font.weight(300),
        A.letter.spacing(standard_tracking),
        A.font.size(body_size),
        A.line.height(body_leading),
        A.margin(0),
        A.padding(0),
    ],
    (S(h1) | S(h2) | S(h3) | S(h4) | S(h5) | S(h6))[
        A.font.family(header_font),
        A.font.weight(700),
        A.hyphens("manual"),
    ],
    S(".borked-email")[
        A.direction("rtl"),
        A.unicode.bidi("bidi-override"),
        A.text.align("left"),
        A.hyphens("manual"),
    ],
    (S(".menu-hamburger") | S(".menu-header"))[
        A.display(None),
    ],
    S(nav)[
        A.position("relative"),
        A.max.width(main_width),
        A.width(U.percent(100)),
        A.margin(0, U.auto),
        A.padding(U.rem(0.5), U.rem(0.375)),
        A.z.index(1000),
        S(a)[
            A.padding(U.rem(0.125)),
            A.margin.right(U.rem(0.75)),
            A.font.size(tiny_size),
            A.line.height(tiny_leading),
            A.text.transform("uppercase"),
            A.text.decoration(None),
            A.letter.spacing(very_wide_tracking),
            S("&.active")[
                A.border.bottom.width(U.px(1)),
                A.border.bottom.style("solid"),
                A.margin.bottom(U.rem(0.25) - U.px(1)),
            ],
        ],
    ],
    S(main)[
        A.max.width(main_width),
        A.width(U.percent(100)),
        A.margin(0, U.auto),
        A.padding(0, U.rem(0.5), U.rem(2), U.rem(0.5)),
        S(".anchor")[
            A.width(0),
            A.height(0),
            A.display("block"),
            A.position("relative"),
            A.top(U.rem(-2)),
        ],
        S(hr)[
            A.border(None),
            A.height(U.px(1)),
            A.margin((U.rem(1), U.auto, U.rem(2), U.auto)),
        ],
        S(h1)[
            A.font.size(h1_size),
            A.line.height(h1_leading),
            A.margin.bottom(U.rem(1)),
            A.margin.left(U.rem(-0.05)),
        ],
        S(h2)[
            A.font.size(h2_size),
            A.line.height(h2_leading),
            A.margin.top(U.rem(1.5)),
            A.margin.left(U.rem(-0.05)),
        ],
        S(h3)[
            A.font.size(h3_size),
            A.line.height(h3_leading),
            A.font.style("italic"),
            A.font.weight(400),
            A.margin.top(U.rem(1)),
            A.margin.bottom(U.rem(0.5)),
        ],
        S(h4)[
            A.font.size(h4_size),
            A.line.height(h4_leading),
            A.margin.top(U.rem(1)),
            A.margin.bottom(U.rem(0.5)),
        ],
        S(p)[
            A.hyphens("auto"),
            A.margin.top(U.rem(0.5)),
            A.margin.bottom(U.rem(0.5)),
        ],
        S(a)[
            A.text.decoration(None),
            S("&:hover")[
                A.text.decoration("underline"),
            ],
            S("&::after")[
                A.content('"°"'),
                A.margin.left(wide_tracking),
            ],
            S("&.footnote-ref::after")[
                A.display(None),
            ],
        ],
        S(sup)[
            A.display("inline-block"),
            A.margin.top(U.em(-1)),
        ],
        S(li)[
            A.padding.top(U.rem(0.2)),
            A.padding.bottom(U.rem(0.2)),
            A.list.style.type("circle"),
        ],
        S(".all-caps")[
            A.letter.spacing(wide_tracking),
            A.text.transform("uppercase"),
        ],
        S(".date")[
            A.text.transform("uppercase"),
            A.font.weight(300),
            A.font.size(small_size),
            A.letter.spacing(wide_tracking),
        ],
        S(img)[
            A.display("block"),
            A.margin("auto"),
            A.max.width(U.percent(100)),
            S("&" + em)[
                A.width(U.percent(100)),
                A.display("block"),
                A.font.family(tertiary_font),
                A.font.style("normal"),
                A.font.size(small_size),
                A.line.height(tight_small_leading),
                A.margin(U.rem(0.5), 0, U.rem(1), 0),
            ],
        ],
        S(blockquote)[
            A.border.left(U.px(5), "solid"),
            A.padding(U.rem(0.5), U.rem(1)),
        ],
        S(".email")[
            A.text.decoration(None),
            A.transition(A.color, U.s(0.2), "ease"),
            A.font.family(mono_font),
            A.font.size(small_size),
            A.letter.spacing(wide_tracking / 2),
            S("&::after")[
                A.content('""'),
                A.margin.left(0),
            ],
        ],
        S(".precontent")[
            A.display("block"),
            A.padding(0, U.rem(1)),
            A.font.size(small_size),
        ],
        S(".award")[
            S(h3)[
                A.margin.bottom(U.rem(-0.25)),
            ],
        ],
        S(".contact-table")[
            S(".label")[
                A.padding.right(U.rem(1)),
                A.text.transform("uppercase"),
                A.letter.spacing(wide_tracking),
                A.font.size(small_size),
                A.margin.top(U.rem(0.75)),
            ],
            S(".value")[
                A.overflow.x("auto"),
                A.display("block"),
            ],
            S(a)[
                A.text.decoration(None),
                S("&:hover")[
                    A.text.decoration("underline"),
                ],
            ],
        ],
        S(pre)[
            A.width(U.percent(100)),
            A.overflow.x("auto"),
        ],
        S(code)[
            A.font.size(U.em(0.9)),
        ],
        S(".dynamic-link")[
            A.margin(U.rem(0.3), U.auto),
            S("&:first-of-type")[
                A.margin.top(U.rem(1)),
            ],
            S(h2)[
                A.margin.bottom(U.rem(0.5)),
            ],
            S(a)[
                A.text.decoration(None),
                A.display("inline-block"),
                A.margin.right(U.rem(1)),
                S("&:hover")[
                    A.text.decoration("underline"),
                ],
                S("&::after")[
                    A.display(None),
                ],
            ],
            S(".pub-info")[
                A.line.height(small_leading),
                A.font.size(small_size),
                S("& > *")[
                    A.display("block"),
                ],
            ],
            (S(".bibtex") | S(".pdflink"))[
                A.font.style("italic"),
            ],
            S(".orig", a)[
                A.font.family(mono_font),
                A.font.size(small_size),
            ],
            S(".authors")[
                A.display("block"),
                A.margin.bottom(U.rem(0.5)),
            ],
        ],
        S(".ed-year")[
            A.margin.top(U.rem(-0.5)),
        ],
        S(h2 + ".work-year")[
            A.margin.top(U.rem(-0.5)),
        ],
        S(h3 + ".work-year")[
            A.margin.top(U.rem(-0.2)),
        ],
        S(".blog-year")[
            A.margin.top(U.rem(1.2)),
            A.margin.bottom(U.rem(0.5)),
        ],
        (S(".talk-date") | S(".pub-date"))[
            A.font.size(small_size),
            A.line.height(small_leading),
        ],
        S(".blog-date")[
            A.font.size(tiny_size),
            A.line.height(tiny_leading),
            A.letter.spacing(very_wide_tracking),
        ],
        S(".post-links")[
            A.margin.top(U.rem(3)),
            A.display("block"),
            A.width(U.percent(100)),
            A.height(U.rem(2)),
            A.position("relative"),
            S(a)[
                A.font.size(small_size),
                A.line.height(tight_small_leading),
                A.text.transform("uppercase"),
                A.letter.spacing(wide_tracking),
                A.text.decoration(None),
                A.display("inline-block"),
                A.position("absolute"),
                S("&::after")[
                    A.display(None),
                ],
                S("&:hover")[
                    A.text.decoration("underline"),
                ],
                S("&.prev")[
                    A.width(U.percent(50) - U.rem(3)),
                    A.padding.left(U.rem(1)),
                    S("&::before")[
                        A.content('"◀︎"'),
                        A.display("inline-block"),
                        A.position("absolute"),
                        A.left(0),
                    ],
                ],
                S("&.next")[
                    A.width(U.percent(50) - U.rem(3)),
                    A.text.align("right"),
                    A.right(0),
                    A.padding.right(U.rem(1)),
                    S("&::after")[
                        A.content('"▶︎"'),
                        A.display("inline-block"),
                        A.position("absolute"),
                        A.right(0),
                    ],
                ],
                S("&.up")[
                    A.width(U.rem(5)),
                    A.text.align("center"),
                    A.left(U.percent(50)),
                    A.margin.left(U.rem(-2.5)),
                ],
            ],
        ],
        S(".footnote")[
            S(hr)[
                A.border.bottom(U.px(1), "solid"),
                A.padding((U.rem(1), 0)),
                A.width(U.percent(50)),
                A.margin(0),
            ],
            S(ol)[
                A.padding.left(U.rem(2)),
                A.counter.reset("item"),
                S(li)[
                    A.list.style(None),
                    A.position("relative"),
                    S("&::before")[
                        A.content("counter(item)"),
                        A.counter.increment("item"),
                        A.vertical.align("super"),
                        A.position("absolute"),
                        A.font.size("smaller"),
                        A.display("inline-block"),
                        A.top(U.ex(1.5)),
                        A.margin.left(U.em(-1.5)),
                    ],
                ],
            ],
            S(".footnote-backref::after")[
                A.display(None),
            ],
        ],
    ],
    S(footer)[
        A.width(U.percent(100)),
        A.max.width(main_width),
        A.margin((0, U.auto)),
        A.opacity(0.8),
        A.padding((U.px(5), U.rem(0.5))),
        S(".selector")[
            A.display("inline-block"),
            A.height(U.rem(1)),
            A.overflow.y("hidden"),
            A.width(U.rem(2.5)),
            A.position("relative"),
            A.font.size(tiny_size),
            A.line.height(tiny_leading),
            A.letter.spacing(very_wide_tracking),
            A.text.transform("uppercase"),
            A.transition(A.height, U.s(0.2), "ease"),
            S(a)[
                A.position("absolute"),
                A.top(U.rem(1.2)),
                A.cursor("pointer"),
                A.transition(A.top, U.s(0.2), "ease"),
            ],
            S("&:hover", a)[
                A.top(0),
            ],
        ],
    ],
]

small = css.StyleSheet()[
    S(main.welcome, ".conditional-break")[
        A.display("inline-block"),
    ],
    css.Media("screen and (max-width: 420px)")[
        S(main.welcome, ".conditional-break")[
            A.display("block !important"),
        ],
    ],
    S(nav)[
        A.position("fixed"),
        A.overflow("hidden"),
        A.padding((U.rem(3), 0, 0, 0)),
        A.margin(0),
        A.width(0),
        A.height(U.percent(100)),
        A.top(0),
        A.right(0),
        A.transition(
            [
                (A.height, U.s(0.5), "ease"),
                (A.width, U.s(0.5), "ease"),
                (A.background, U.s(0.2), "linear", U.s(0.3)),
            ],
        ),
        S(a)[
            A.display("block"),
            A.position("relative"),
            A.padding.top(U.rem(0.4)),
            A.padding.bottom(U.rem(0.4)),
            A.text.align("right"),
            A.padding.right(U.rem(1)),
            A.font.size(U.rem(0.7)),
            S("&.active")[
                A.border.bottom(0, None),
                A.border.right(U.px(6), "solid"),
                A.margin(0, U.rem(1) - U.px(6), U.rem(0.25), 0),
            ],
        ],
        S("&.showing")[
            A.width(U.percent(100)),
            A.transition(
                [
                    (A.height, U.s(0.5), "ease"),
                    (A.width, U.s(0.5), "ease"),
                    (A.background, U.s(0.2), "linear", U.s(0)),
                ],
            ),
        ],
    ],
    S(".menu-hamburger")[
        A.display("block"),
        A.position("fixed"),
        A.right(U.rem(0.2)),
        A.top(U.rem(0.4)),
        A.width(U.rem(1.8)),
        A.height(U.rem(1.8)),
        A.z.index(1001),
        A.transform("scale(0.75)"),
        S(".bar")[
            A.stroke.width(0),
            A.opacity(1),
        ],
        (S(".bar-top") | S(".bar-bottom"))[
            A.transition("all", U.s(0.5), "ease-in-out"),
        ],
        S(".bar-top")[
            A.transform("translate(0%, -15%)", "rotate(0)"),
        ],
        S(".bar-bottom")[
            A.transform("translate(0%, 15%)", "rotate(0)"),
        ],
        S("&.showing", ".bar-top")[
            A.transform("translate(0%, 0%)", "rotate(225deg)"),
        ],
        S("&.showing", ".bar-bottom")[
            A.transform("translate(0%, 0%)", "rotate(135deg)"),
        ],
    ],
    S(footer)[
        A.position("relative"),
        A.width(U.percent(100)),
        A.padding(U.px(5), U.rem(1)),
        S(".selector.help-button")[
            A.display(None),
        ],
        S(".separator")[
            A.width(0),
        ],
    ],
]

printer = css.StyleSheet()[
    (S(nav) | S(ul.submenu))[
        A.display(None),
    ],
    S(footer)[
        A.display(None),
    ],
    S(a)[
        A.text.decoration(None),
        A.color("black"),
        (S('&[href^="http://"]:after') | S('&[href^="https://"]:after'))[
            A.content('" [" attr(href) "]"'),
            A.color("#333"),
        ],
    ],
    S(".container", hr)[
        A.margin(U.rem(1), U.auto),
    ],
]

hero = css.StyleSheet()[
    S(".welcome")[
        A.height(U.vh(100) - U.rem(7)),
        A.min.height(U.vh(15) + U.rem(15)),
        A.position("relative"),
        S(".welcome-content")[
            A.position("relative"),
            A.top(U.percent(40)),
            A.transform("translateY(-50%)"),
            S(h1)[
                A.font.size(hero_size),
                A.text.transform("capitalize"),
                A.margin(U.rem(2), 0, 0, 0),
                A.line.height(hero_leading),
            ],
            S(p)[
                A.margin(U.rem(2), 0, U.rem(1), 0),
            ],
        ],
    ]
]
