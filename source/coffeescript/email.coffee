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
    return hidden_name.rotate(13) + "@" + after_at

formatEmailLink = (email) ->
    return "<a href=\"mailto:" + email + " \" class=\"borked-email email\">" + email + "</a>"

setupEmail = () ->
    email_holder_list = document.querySelectorAll(".email-holder")
    for email_holder in email_holder_list
        hidden_name = email_holder.dataset.beforeAt
        after_at = email_holder.dataset.afterAt
        email_holder.innerHTML = formatEmailLink getEmail(hidden_name, after_at).reverse()
    borked_list = document.querySelectorAll(".borked-email")
    for borked in borked_list
        borked.addEventListener('mouseover', (event) ->
            event.target.href = switchEmail event.target.href)
        borked.addEventListener('mouseout', (event) ->
            event.target.href = switchEmail event.target.href)

setupEmail()
