setupNav = () ->
    hamburger = document.getElementById "menu-hamburger"
    navbox = document.getElementsByTagName("nav")[0]
    hamburger.addEventListener "click", (e) ->
        if "showing" in hamburger.classList
            hamburger.classList.remove "showing"
            navbox.classList.remove "showing"
        else
            hamburger.classList.add "showing"
            navbox.classList.add "showing"
