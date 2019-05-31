# @codekit-prepend "preferences.coffee", "email.coffee", "mobilemenu.coffee"

document.body.onload = () ->
    setupCookies()
    setupEmail()
    setupNav()
