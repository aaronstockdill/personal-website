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
            if (event.target.borked != "false" && event.target.held != "true")
                event.target.href = switchEmail event.target.href
                event.target.borked = "false"
            )
        borked.addEventListener('mouseout', (event) ->
            if (event.target.borked == "false" && event.target.held != "true")
                setTimeout(() => event.target.href = switchEmail event.target.href, 500)
                event.target.borked = "true"
            )
        for action in ["mousedown", "touchstart"]
            borked.addEventListener(action, (event) ->
                if (event.target.borked != "false")
                    event.target.href = switchEmail event.target.href
                    event.target.borked = "false"
                event.target.held = "true")
        for action in ["mouseup", "click", "dragend", "touchend"]
            borked.addEventListener(action, (event) ->
                if (event.target.borked == "false")
                    setTimeout(() => event.target.href = switchEmail event.target.href, 500)
                    event.target.borked = "true"
                event.target.held = "false")

setupEmail()
