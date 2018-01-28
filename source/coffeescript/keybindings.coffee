show_help = () ->
    if document.querySelector('.help')
        help = document.querySelector('.help')
        help.parentNode.removeChild(help)
    else
        document.body.innerHTML += """
        <div class='help'><div class='help-box'>
            <h1>Keyboard Shortcuts</h1>
            <dl>
                <dt>Go to the Home page</dt>
                    <dd>ctrl-x ctrl-x <br /> ctrl-x ctrl-h</dd>
                <dt>Go to the CV page</dt>
                    <dd>ctrl-x ctrl-a</dd>
                    <dd>ctrl-x ctrl-v</dd>
                <dt>Go to the Research page</dt>
                    <dd>ctrl-x ctrl-r</dd>
                <dt>Go to the Contact page</dt>
                    <dd>ctrl-x ctrl-c</dd>
                <dt>Go to my Blog</dt>
                    <dd>ctrl-x ctrl-b</dd>
                <dt>Send me an email</dt>
                    <dd>ctrl-x ctrl-e</dd>
            </dl><dl>
                <dt>Toggle the theme</dt>
                    <dd>ctrl-t ctrl-t</dd>
                <dt>Switch to dark/black theme</dt>
                    <dd>ctrl-t ctrl-d <br /> ctrl-t ctrl-b</dd>
                <dt>Switch to light/white theme</dt>
                    <dd>ctrl-t ctrl-l <br /> ctrl-t ctrl-w</dd>
                <br />
                <dt>Show/hide this help</dt>
                    <dd>?</dd>
            </dl><dl>
                <dt>Toggle the language</dt>
                    <dd>ctrl-l ctrl-l</dd>
                <dt>Switch to English</dt>
                    <dd>ctrl-l ctrl-e</dd>
                <dt>Switch to French</dt>
                    <dd>ctrl-l ctrl-f</dd>
                <br />
            </dl>
            <a class='close-help' onClick='show_help();'>
                Close
            </a>
        </div></div>
        """

bind_nav = (chord, url) ->
    Mousetrap.bind chord, () ->
        window.location.href = url

bind_nav ["ctrl+x ctrl+h", "ctrl+x ctrl+x"], "/"
bind_nav ["ctrl+x ctrl+a", "ctrl+x ctrl+v"], "/cv/"
bind_nav "ctrl+x ctrl+w", "/work/"
bind_nav "ctrl+x ctrl+c", "/contact/"
bind_nav  "ctrl+x ctrl+b", "/blog/"
bind_nav "ctrl+x ctrl+e", "mailto:" + getEmail("nneba.fgbpxqvyy", ["cl", "cam", "ac", "uk"])

Mousetrap.bind ["ctrl+t ctrl+d", "ctrl+t ctrl+b"], () ->
    switch_theme "black"
Mousetrap.bind ["ctrl+t ctrl+l", "ctrl+t ctrl+w"], () ->
    switch_theme "white"
Mousetrap.bind "ctrl+t ctrl+t", () ->
    if "black" == getCookie "style"
        switch_theme "white"
    else
        switch_theme "black"

Mousetrap.bind "ctrl+l ctrl+f", () ->
    switch_language "FR"
Mousetrap.bind "ctrl+l ctrl+e", () ->
    switch_language "EN"
Mousetrap.bind "ctrl+l ctrl+l", () ->
    if "EN" == getCookie "language"
        switch_language "FR"
    else
        switch_language "EN"

Mousetrap.bind "?", show_help
