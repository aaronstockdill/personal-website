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
    document.querySelector("#theme").setAttribute "href", "/css/#{target}.css"
    document.querySelectorAll(".theme-button").forEach (button) => button.classList.remove 'active'
    document.querySelector("##{target}-button").classList.add 'active'
    deleteCookie "style"
    setCookie "style", target, 365
    false

# Cookie warning stuff...
clear_cookie_message = () ->
    setCookie "cookiesOK", "yes", 365
    document.querySelector("#cookies").style.display = "none"
    document.querySelector("footer").style.paddingBottom = "0px"

cookies_ok = () ->
    getCookie("cookiesOK") != "yes"

if cookies_ok
    document.querySelector("#cookies").style.display = "none"
    switch_theme(getCookie("style"))
else
    document.querySelector("#cookies").style.display = "block"
    document.querySelector("footer").style.paddingBottom = "120px"
