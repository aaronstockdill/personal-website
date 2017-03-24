show_help = () ->
    if $('.help').length > 0
        $('.help').remove()
    else
        $('body').append """
        <div class='help'><div class='help-box'>
            <h1>Keyboard Shortcuts</h1>
            <dl>
                <dt>Go to the Home page</dt>
                    <dd>ctrl-x ctrl-x <br /> ctrl-x ctrl-h</dd>
                <dt>Go to the About page</dt>
                    <dd>ctrl-x ctrl-a</dd>
                <dt>Go to the Work page</dt>
                    <dd>ctrl-x ctrl-w</dd>
                <dt>Go to the Contact page</dt>
                    <dd>ctrl-x ctrl-c</dd>
                <dt>Open Curriculum Vit&aelig;</dt>
                    <dd>ctrl-x ctrl-v</dd>
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
bind_nav "ctrl+x ctrl+a", "/bio/"
bind_nav "ctrl+x ctrl+w", "/work/"
bind_nav "ctrl+x ctrl+c", "/contact/"
bind_nav "ctrl+x ctrl+v", "/AaronStockdill.pdf"
bind_nav "ctrl+x ctrl+e", "mailto:" + getEmail()

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
