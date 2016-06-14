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
    $('#theme').attr href: "/css/#{target}.css"
    $(".theme-button").removeClass 'active'
    $("##{target}-button").toggleClass 'active'
    deleteCookie "style"
    setCookie "style", target, 365
    false

# Allow the ability to switch languages.
switch_language = (target="EN") ->
    languages = ["EN", "FR"]
    for lang in languages
        if lang != target
            $(":lang('#{lang}')").addClass 'hide'
        else
            $(":lang('#{lang}')").removeClass 'hide'
    $(".lang-button").removeClass 'active'
    $("##{target}-button").toggleClass 'active'
    deleteCookie "language"
    setCookie "language", target, 365
    false

no_animations = () ->
    window.animations = $('html, body, footer').css('transition')
    $('html, body, footer').css('transition', 'none 0s')

allow_animations = () ->
    $('html, body, footer').css('transition', window.animations)

no_animations()
switch_theme getCookie "style"
switch_language getCookie "language"
setTimeout allow_animations, 200
