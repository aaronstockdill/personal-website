from collections.abc import Callable
import sys
import pathlib
import shutil
import itertools

import repyct

import index, cv, research, contact, blog

menu_links: dict[str, str] = {
    "Home": "",
    "CV": "cv",
    "Research": "research",
    "Contact": "contact",
    "Blog": "blog",
}
PAGES: dict[tuple[str, ...], Callable[[dict[str, str]], repyct.BaseElement]] = {
    tuple(): index.page,
    ("cv",): cv.page,
    ("research",): research.page,
    ("contact",): contact.page,
    ("blog",): blog.page,
    **{("research", n): p for (n, p) in research.subpages},
    **{("talk", n.lower().replace(" ", "-")): p for (n, _, p) in research.talks},
    **{("blog", n.lower().replace(" ", "-")): p for (n, _, p) in blog.posts},
}


def make_pages(output_folder: pathlib.Path) -> None:
    for (dest, page) in PAGES.items():
        path = output_folder / pathlib.Path(*dest)
        path.mkdir(parents=True, exist_ok=True)
        with (path / "index.html").open("w") as f:
            f.write(str(page(menu_links)))


def make_styles(output_folder: pathlib.Path) -> None:
    pass


def make_static_resources(output_folder: pathlib.Path) -> None:
    statics = itertools.chain(
        ((".", f) for f in pathlib.Path("static").iterdir()),
        (("static", f) for f in research.static_files),
        (("static", f) for f in blog.static_files),
    )
    (output_folder / "static").mkdir(exist_ok=True)
    for (prefix, static_resource) in statics:
        if static_resource.is_dir():
            shutil.copytree(
                static_resource,
                output_folder / prefix / static_resource.name,
                dirs_exist_ok=True,
            )
        else:
            shutil.copy2(static_resource, output_folder / prefix / static_resource.name)


def main(args: list[str]) -> int:
    output_folder = pathlib.Path(args[1])
    shutil.rmtree(output_folder, ignore_errors=True)
    output_folder.mkdir()
    make_pages(output_folder)
    make_styles(output_folder)
    make_static_resources(output_folder)
    return 0


if __name__ == "__main__":
    sys.exit(main(sys.argv))
