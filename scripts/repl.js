var FILESYSTEM = {
    type: "root",
    contents: {
        "aaron.stockdill.nz": {
            type: "directory",
            contents: {
                "Awards.txt": {
                    type: "rich-text",
                    contents: "awards.html"
                },
                "Education.txt": {
                    type: "rich-text",
                    contents: "education.html"
                },
                "About.txt": {
                    type: "rich-text",
                    contents: "about.html"
                },
                "CV.pdf": {
                    type: "pdf",
                    contents: "AaronStockdill.pdf"
                }
            }
        }
    }
};
var HELP = {
    'cat': 'Usage: cat &lt;file&gt;. <br/>Reveal the contents of a text file. <br />See also: less, more',
    'less':  'Usage: less &lt;file&gt;. <br/>Reveal the contents of a text file. <br />See also: cat, more',
    'more':  'Usage: more &lt;file&gt;. <br/>Reveal the contents of a text file. <br />See also: cat, less',
}
var PWD = "aaron.stockdill.nz";
var COMMANDS = [];

var STDOUT = function (string) {
    $('#shell').append("<span class='mono'>" + string + "</span><br />");
}
var FNCYOUT = function (html) {
    $('#shell').append(html + "<br />");
}
var STDERR = function (string) {
    $('#shell').append("<span class='mono error'>" + string + "</span><br />");
}
var FREAD = function(token, callback) {
    $.ajax({
        'url': '/docs/' + token,
        'complete': callback,
    });
}
var FOCUS = function() {
    var element = document.getElementById("shell");
    element.scrollTop = element.scrollHeight;
}

var parse = function(tokens) {
    name = tokens[0];
    args = tokens.slice(1, tokens.length);
    if ('sh_' + name in window) {
        window["sh_" + name](args, name);
    } else {
        STDERR(name + ": command not found");
    }
}

var tokenize = function(string) {
    var tokens = [];
    var token = ""
    var string_delim = false;
    var escaping = false;
    for (var i=0; i<string.length; i++) {
        if (string_delim === false) {
            switch (string[i]) {
                case "'":
                case '"':
                    string_delim = string[i];
                    break;
                case " ":
                    tokens.push(token);
                    token = "";
                    break;
                default:
                    token += string[i];
            }
        } else {
            if (string[i] === string_delim && escaping === false) {
                string_delim = false;
                tokens.push(token);
                token = "";
            } else if (string[i] === '\\') {
                escaping = "wait";
            } else {
                token += string[i];
            }
        }
        if (escaping === true) {
            escaping = false;
        } else if (escaping === "wait") {
            escaping = true;
        }
    }
    if (token.trim() != "") {
        tokens.push(token);
    }
    return tokens;
}

var listener = function(event) {
    var input = $('#current-input');
    var text = input.text();
    switch (event.which) {
        case 13:
            input.attr('contenteditable', false);
            input.attr('id', '');
            input.off('keyup');
            input.text(text.trim());
            $('#shell').append("<br />");
            parse(tokenize(text));
            $('#shell').append("<span class='input mono' id='current-input' contenteditable></span>");
            input = $('#current-input');
            input.on('keyup', listener);
            input.focus();
            break;
        default:
            break;
    }
    FOCUS();
}

$('body').on('keydown', function(){
    var input = $('#current-input');
    input.focus();
})

$(document).ready(function() {
    // Set up the list of commands
    for(key in window) {
        if (key[0] === "s" && key[1] === "h" && key[2] === "_") {
            COMMANDS.push(key.slice(3, key.length));
        }
    }
    COMMANDS.sort();

    var input = $('#current-input');
    input.on('keyup', listener);
    input.focus();
});
