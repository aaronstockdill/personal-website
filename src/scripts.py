email = """
// Obfuscate email

String.prototype.rotate = function(number) {
  var result = "";
  this.toLowerCase();
  for (let i = 0; i < this.length; i++) {
    let char = this[i];
    if (char.match(/[a-z]/)) {
      let value = (char.charCodeAt(0) - 97 + number) % 26 + 97;
      result += String.fromCharCode(value);
    } else {
      result += char;
    }
  }
  return result;
};

String.prototype.reverse = function() {
  return this.split("").reverse().join("");
};

function switchEmail(link) {
  return "mailto:" + link.replace('mailto:', '').reverse();
}

function getEmail(hidden_name, after_at) {
  return hidden_name.rotate(13) + "@" + after_at;
}

function formatEmailLink(email) {
  return "<a href=\\\"mailto:" + email + " \\\" class=\\\"borked-email email\\\">" + email + "</a>";
}

function setupEmail() {
  let email_holder_list = document.querySelectorAll(".email-holder");
  for (var i = 0; i < email_holder_list.length; i++) {
    let email_holder = email_holder_list[i];
    let hidden_name = email_holder.dataset.beforeAt;
    let after_at = email_holder.dataset.afterAt;
    email_holder.innerHTML = formatEmailLink(getEmail(hidden_name, after_at).reverse());
  }
  let borked_list = document.querySelectorAll(".borked-email");
  var results = [];
  for (var j = 0; j < borked_list.length; j++) {
    let borked = borked_list[j];
    borked.addEventListener('mouseover', function(event) {
      if (event.target.borked !== "false" && event.target.held !== "true") {
        event.target.href = switchEmail(event.target.href);
        event.target.borked = "false";
      }
    });
    borked.addEventListener('mouseout', function(event) {
      if (event.target.borked === "false" && event.target.held !== "true") {
        setTimeout(() => {
          event.target.href = switchEmail(event.target.href, 500);
        });
        event.target.borked = "true";
      }
    });
    let evts = ["mousedown", "touchstart"];
    for (var k = 0; k < evts.length; k++) {
      let action = evts[k];
      borked.addEventListener(action, function(event) {
        if (event.target.borked !== "false") {
          event.target.href = switchEmail(event.target.href);
          event.target.borked = "false";
        }
        event.target.held = "true";
      });
    }
    results.push((function() {
      let evts2 = ["mouseup", "click", "dragend", "touchend"];
      var res = [];
      for (var l = 0; l < evts2.length; l++) {
        let action = evts2[l];
        res.push(borked.addEventListener(action, function(event) {
          if (event.target.borked === "false") {
            setTimeout(() => {
              return event.target.href = switchEmail(event.target.href, 500);
            });
            event.target.borked = "true";
          }
          event.target.held = "false";
        }));
      }
      return res;
    })());
  }
  return results;
}
"""

mobilemenu = """
// Use mobile menu

function setupNav() {
  let hamburger = document.getElementById("menu-hamburger");
  let navbox = document.getElementsByTagName("nav")[0];
  hamburger.addEventListener("click", function(e) {
    console.log(hamburger.classList, navbox);
    if (hamburger.classList.contains("showing")) {
      hamburger.classList.remove("showing");
      navbox.classList.remove("showing");
    } else {
      hamburger.classList.add("showing");
      navbox.classList.add("showing");
    }
  });
}
"""

setup = """
document.body.onload = function(){
  setupEmail();
  setupNav();
};
"""

script = "\n\n".join(['"use strict;"', email, mobilemenu, setup])
