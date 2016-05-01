var _get_dir = function(start, path) {
    var dir = start;
    var dirs = path.split("/");
    for (var i=0; i<dirs.length; i++) {
        if(dirs[i] in dir.contents && dir.contents[dirs[i]].type === "directory") {
            dir = dir.contents[dirs[i]];
        } else {
            STDERR(args[0] + ": no such file or directory");
            return 0;
        }
    }
    return dir;
}

var sh_help = function(args) {
    if (args.length === 0) {
        STDOUT("Welcome to my website!");
        STDOUT("Navigate using commands to change directories and getting more information.");
        STDOUT("To view all commands, type 'help --all'")
        STDOUT("Type 'help &lt;command&gt;' to get more help with each command.");
    } else if (args[0] == '--all'){
        for(var i=0; i< COMMANDS.length; i++) {
            STDOUT(COMMANDS[i]);
        }
    } else if (COMMANDS.indexOf(args[0]) >= 0) {
        if (args[0] in HELP) {
            STDOUT(HELP[args[0]]);
        } else {
            STDERR("help: No help available for " + args[0])
        }
    } else {
        STDERR("help: " + args[0] + ": invalid option");
    }
}

var sh_cat = function(filename, cmd) {
    filename = filename[0];
    if (filename === undefined) {
        STDERR(cmd + ": missing argument filename");
        return;
    }
    var dir = _get_dir(FILESYSTEM, PWD);
    var time = Date.now();
    var cb = function(code, result) {
        $("#cat_" + time).html(code.responseText);
        FOCUS();
    }
    if (filename in dir.contents && dir.contents[filename].type === "rich-text") {
        FNCYOUT("<div id='cat_" + time + "'></div>");
        FREAD(dir.contents[filename].contents, cb);
    } else if (filename in dir.contents && dir.contents[filename].type === "plain-text") {
        FNCYOUT("<span class='mono', id='cat_" + time + "'></div>");
        FREAD(dir.contents[filename].contents, cb);
    } else if (filename in dir.contents) {
        STDERR(filename + ": cannot read type " + dir.contents[filename].type);
    } else {
        STDERR(args[0] + ": no such file or directory");
    }
}

var sh_more = sh_cat;
var sh_less = sh_cat;

var sh_pwd = function() {
    STDOUT("http://" + PWD);
}

var sh_ls = function(args) {
    if (args.length === 0) {
        tgt = PWD;
    } else {
        tgt = args[0];
    }
    if (tgt.slice(0, "aaron.stockdill.nz".length) !== "aaron.stockdill.nz") {
        tgt = PWD + '/' + tgt;
    }
    var dir = _get_dir(FILESYSTEM, tgt)
    listing = "";
    var arr = [];
    for (key in dir.contents) {
        console.log(key);
        arr.push(key);
    }
    arr.sort();
    for (var i=0; i<arr.length; i++) {
        key = arr[i];
        if (listing !== "") {
            listing += "<br />";
        }
        listing += key;
    }
    if (listing !== "") {
        STDOUT(listing);
    }
}

var sh_dir = sh_ls;

var sh_cd = function(location) {
    if (location.length === 0) {
        PWD = "aaron.stockdill.nz";
        history.pushState(null, "Aaron Stockdill", "/");
        return;
    }
    location = location[0];
    if (location[location.length - 1] === "/") {
        location = location.slice(0, location.length - 1);
    }
    if (location === "aaron.stockdill.nz"
     || location === ""
     || location === "C:") {
        PWD = "aaron.stockdill.nz";
    } else if (location === ".") {
        return;
    } else if (location === "..") {
        path = PWD.split("/");
        path.pop();
        PWD = path.join("/");
    } else {
        var dir = _get_dir(FILESYSTEM, PWD);
        var dirs = location.split("/");
        for (var i=0; i < dirs.length; i++) {
            if (dirs[i] in dir.contents && dir.contents[dirs[i]].type === "directory") {
                dir = dir.contents[dirs[i]];
                PWD += "/" + dirs[i];
            } else  if (dirs[i] in dir.contents && dir.contents[dirs[i]].type !== "directory") {
                STDERR("cd: " + location + ": Not a directory");
            } else {
                STDERR(location + ": no such file or directory");
            }
        }
    }
    var final = PWD.replace("aaron.stockdill.nz", "Aaron Stockdill").replace("/", " | ");
    var url = PWD.replace("aaron.stockdill.nz", "") + "/";
    history.pushState(null, final, url);
}

var sh_curl = function(filename, cmd) {
    filename = filename[0];
    if (filename === undefined) {
        STDERR(cmd + ": missing argument filename");
        return;
    }
    var dir = _get_dir(FILESYSTEM, PWD);
    var time = Date.now();
    if (filename in dir.contents && dir.contents[filename].type !== "directory") {
        var token = dir.contents[filename].contents
        FNCYOUT("<br /><div class='download no-print'><a href='/scripts/download.php?file=" + token + "'>" + filename + "</a></div>");
    } else if (filename in dir.contents) {
        STDERR(filename + ": cannot download type " + dir.contents[filename].type);
    } else {
        STDERR(location + ": no such file or directory");
    }
}

var sh_wget = sh_curl;
var sh_get = sh_curl;

var sh_emacs = function() {
    FNCYOUT("<img src='/imgs/emacs.jpg' alt='Yeah, right' class='no-print'/><br /><small>Not from New Zealand? <a target='_blank' href='https://en.wikipedia.org/wiki/DB_Breweries#Yeah_right'>Wikipedia</a></small>");
    setTimeout(function(){FOCUS();},100);
}

var sh_vim = function() {
    FNCYOUT("<img src='/imgs/vim.jpg' alt='Yeah, right' class='no-print'/><br /><small>Not from New Zealand? <a target='_blank' href='https://en.wikipedia.org/wiki/DB_Breweries#Yeah_right'>Wikipedia</a></small>");
    setTimeout(function(){FOCUS();},100);
}

var sh_echo = function(args) {
    FNCYOUT("<br /><div>" + args.join(" ") + "</div>");
}

var sh_reboot = function() {
    window.location.href = "/";
}

var sh_print = function() {
    STDOUT("Printing webpage.")
    window.print();
}
var sh_save = sh_print
