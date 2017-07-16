setCookie = (name, value, days) ->
    if days
        date = new Date()
        date.setTime date.getTime() + (days * 24 * 60 * 60 * 1000)
        expires = "; expires=" + date.toGMTString()
    else
        expires = ""
    document.cookie = name + "=" + value + expires + "; path=/"

getCookie = (name) ->
    nameEQ = name + "="
    ca = document.cookie.split(";")
    i = 0

    while i < ca.length
        c = ca[i]
        c = c.substring(1, c.length)  while c.charAt(0) is " "
        return c.substring(nameEQ.length, c.length)  if c.indexOf(nameEQ) is 0
        i++
    null

deleteCookie = (name) ->
    setCookie name, "", -1

# Allow the ability to switch themes.
switch_theme = (target="white") ->
    $('#theme').attr {href: "/css/#{target}.css"}
    $(".theme-button").removeClass 'active'
    $("##{target}-button").toggleClass 'active'
    deleteCookie "style"
    setCookie "style", target, 365
    false

# Allow the ability to switch languages.
switch_language = (target="EN") ->
    languages = ["EN", "FR"]
    for lang in languages
        nodes = $(":lang('#{lang}')")
        if lang != target
            nodes.addClass 'hide'
            nodes.removeClass 'show'
        else
            nodes.removeClass 'hide'
            nodes.addClass 'show'
    $(".lang-button").removeClass 'active'
    $("##{target}-button").toggleClass 'active'
    deleteCookie "language"
    setCookie "language", target, 365
    false
