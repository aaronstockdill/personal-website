String.prototype.rotate = (number) ->
    result = ""
    this.toLowerCase()
    for char in this
        if char.match(/[a-z]/)
            value = (char.charCodeAt(0) - 97 + number) % 26 + 97
            result += String.fromCharCode(value)
        else
            result += char
    return result

String.prototype.reverse = () ->
    this.split("").reverse().join("")

switchEmail = (link) ->
    return "mailto:" + link.replace('mailto:', '').reverse()

getEmail = (hidden_name, after_at) ->
    the_at_sign = "@"
    the_dot_sign = "."
    email = hidden_name.rotate(13) + the_at_sign + after_at.join(the_dot_sign)
    return email

setupEmail = (hidden_name, after_at) ->
    email = getEmail(hidden_name, after_at).reverse()
    new_email_code = "<a href=\"mailto:" + email + " \" class=\"borked-email email\">" + email + "</a>"
    $(".email-holder").html new_email_code
    $(".borked-email").on('mouseover', (event) ->
        event.target.href = switchEmail event.target.href)
    $(".borked-email").on('mouseout', (event) ->
        event.target.href = switchEmail event.target.href)

setupEmail("nnebafgbpxqvyy", ["me", "com"])
