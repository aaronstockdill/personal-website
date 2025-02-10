BUILD_DATE = $(shell date +'%Y-%m-%d')
PANDOC_MAKE = pandoc --template src/template.html --metadata "build_date:$(BUILD_DATE)"

.PHONY: help
help:
	@echo "make - assemble my personal website"
	@echo
	@echo "Usage: make [help | all | html | static | clean | deploy]"
	@echo
	@echo "Subcommands:"
	@echo "    help    Show this help information."
	@echo "    all     Make everything necessary for the site."
	@echo "    html    Build HTML files into the dist folder."
	@echo "    static  Copy static files into the dist folder."
	@echo "    clean   Remove the dist and tmp folders for a clean build."
	@echo "    deploy  Send the dist folder to GitHub Pages."
	@echo
	@echo "Note that this is not a proper tool, just a Makefile!"

.PHONY: all
all: html static

.PHONY: html
html: dist/index.html dist/cv/index.html dist/contact/index.html dist/research/index.html dist/research/vlhcc20/index.html dist/research/vlhcc22/index.html dist/sitemap.txt

.PHONY: static
static:
	cp -r static/* dist/

.PHONY: clean
clean:
	rm -rf tmp
	rm -rf dist

.PHONY: deploy
deploy:
	sed -i "" "/dist/d" ./.gitignore
	git add .
	git commit -m 'Edit .gitignore to publish'
	git subtree split --prefix dist -b gh-pages
	git push github gh-pages --force
	git reset HEAD~
	git checkout .gitignore

dist/sitemap.txt:
	find dist -name index.html | sed 's/^dist/https:\/\/aaron.stockdill.nz/' | sed 's/index.html$///' | sort > $@

dist/index.html: src/index.md src/template.html
	mkdir -p dist
	$(PANDOC_MAKE) --output $@ $<

dist/cv/index.html: src/cv.md src/template.html
	mkdir -p dist/cv
	$(PANDOC_MAKE) --output $@ $<

dist/contact/index.html: src/contact.md src/template.html
	mkdir -p dist/contact
	$(PANDOC_MAKE) --output $@ $<

dist/research/index.html: src/research.md tmp/publications.md src/template.html
	mkdir -p dist/research
	$(PANDOC_MAKE) --output $@ src/research.md tmp/publications.md

dist/research/vlhcc20/index.html: src/vlhcc20.md src/template.html
	mkdir -p dist/research/vlhcc20
	$(PANDOC_MAKE) --output $@ $<

dist/research/vlhcc22/index.html: src/vlhcc22.md src/template.html
	mkdir -p dist/research/vlhcc22
	$(PANDOC_MAKE) --output $@ $<

tmp/publications.md: tmp src/publications_template.md src/publications.json
	pandoc \
		--template src/publications_template.md \
		--metadata-file src/publications.json \
		--wrap none \
		--from markdown \
		--output $@ \
		/dev/null
tmp:
	mkdir tmp
