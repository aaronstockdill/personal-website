# Detect theme preferences
preferred_theme = () ->
    match = window.matchMedia('(prefers-color-scheme: dark)')
    if (match && match.matches) then "black" else "white"

# Allow the ability to switch themes.
switch_theme = (target="white") ->
    document.querySelector("#theme").setAttribute "href", "/css/#{target}.css"
    localStorage.setItem("s", target)
    false
