setCookie = (name, value, days) ->
    if days
        date = new Date()
        change = days * 24 * 60 * 60 * 1000
        date.setTime (date.getTime() + change)
        expires = ";expires=" + date.toUTCString()
    else
        expires = ""
    document.cookie = name + "=" + value + expires + ";path=/"

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

# Detect theme preferences
preferred_theme = () ->
    match = window.matchMedia('(prefers-color-scheme: dark)')
    if (match && match.matches) then "black" else "white"

# Allow the ability to switch themes.
switch_theme = (target="white") ->
    document.querySelector("#theme").setAttribute "href", "/css/#{target}.css"
    deleteCookie "style"
    if cookies_ok()
         setCookie "style", target, 365
    false

# Cookie warning stuff...
clear_cookie_message = () ->
    setCookie "cookiesOK", "yes", 365
    document.querySelector("#cookies").style.display = "none"
    document.querySelector("footer").style.paddingBottom = "0px"

cookies_ok = () ->
    getCookie("cookiesOK") == "yes"

setupCookies = () ->
    if cookies_ok()
        document.querySelector("#cookies").style.display = "none"
        switch_theme(getCookie("style") || preferred_theme())
    else
        document.querySelector("#cookies").style.display = "block"
        document.querySelector("footer").style.paddingBottom = "120px"
