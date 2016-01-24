var switch_email = function(link) {
	return 'mailto:' + link.replace('mailto:', '').reverse();
};

$(function() {

    var indices = [
        'Home',
        'About',
        'Education',
        'Experience',
        'Awards',
        'Contact',
    ];

	var HOME_SIZE = 100;

    var set_active = function (target) {
        // Set the active class on the current menu item
		if (target[0] === "#") {
			target = target.slice(1);
		}
        for (var i in indices) {
            $("#link-for-" + indices[i]).removeClass('active');
        }
        $("#link-for-" + target).addClass('active');
    };

    $.fn.visible = function () {
        // Extend objects with a 'visible' method to determine how on-screen they are
        var $window = $(window);

        var docViewTop = $window.scrollTop();
        var docViewBottom = docViewTop + $window.height();

        var elemTop = this.offset().top;
        var elemBottom = elemTop + this.height();

        if ((elemBottom >= docViewTop) && (elemBottom <= docViewBottom)) {
            return (elemBottom - docViewTop) / ($window.height());
        } else if ((elemTop >= docViewTop) && (elemTop <= docViewBottom)) {
            return (docViewBottom - elemTop) / ($window.height());
        }

        return 0;
    };

    $('a[href*=#]:not([href=#])').click(function() {
        // Smooth scrolling to anchors
        if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                history.pushState(undefined, "Aaron Stockdill", this.hash);
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 300);
                $('nav').removeClass('showing');
                return false;
            }
        }
    });

	$(".menubutton").on('click', function() {
		$("nav").toggleClass('showing');
	});

    $(window).bind('popstate', function () {
        set_active(window.location.hash);
    });

    $(window).on('scroll', function() {
        // Work out where the user is when scrolling
        var the_hash = '';
        var the_best = 0;
        $("section").each(function(index, element) {
            if ($(element).visible() > the_best) {
                the_hash = $(element).attr('id');
                the_best = $(element).visible();
            }
        });
		if ($(window).scrollTop() < HOME_SIZE && $('body').attr('id') === 'index') {
			// Pretty near the top, call it home.
			the_hash = "Home";
		}
        if (the_hash !== '') {
            var el = $("#" + the_hash);
            el.attr('id', '');
            var old_hash = window.location.hash;
            location.replace("#" + the_hash);
            el.attr('id', the_hash);
            if (old_hash !== "#" + the_hash) {
                set_active(the_hash);
            }
        }

        return false;
    });

	String.prototype.rotate = function(number) {
		// Return a 'rotated' version of the string
		// E.g. using number=2, a->c, b->d, etc...
		var output = "";
		this.toLowerCase();
		for (var i=0; i < this.length; i++) {
			var code = this.charCodeAt(i);
			code -= 97;
			code += number;
			code %= 26;
			code += 97;
			output += String.fromCharCode(code);
		}
		return output;
	};

	String.prototype.reverse = function() {
		// Return the reverse of the string this is called on.
	    return this.split("").reverse().join("");
	};

	var setup_email = function() {
		// Try and hide the email as well as I possibly can.
		var the_at_sign = "@";
		var the_dot_sign = ".";
		var hidden_name = "nnebafgbpxqvyy";
		var email = hidden_name.rotate(13) + the_at_sign + "me" + the_dot_sign + "com";
		email = email.reverse();

		var new_email_code = "<a href=\"mailto:" + email + " \" class=\"borked-email\">" + email + "</a>";

		$("#email-holder").html(new_email_code);

		$(".borked-email").on('mouseover', function(event) {
			event.target.href = switch_email(event.target.href);
		});
		$(".borked-email").on('mouseout', function(event) {
			event.target.href = switch_email(event.target.href);
		});
	};

    $(document).ready(function() {
        setTimeout(function(){
            // When the page loads, set the menu correctly
            if ($('body').attr('id') === 'index' &&
            window.location.hash) {
                set_active(window.location.hash);
            } else if ($('body').attr('id') === 'index') {
                location.replace("#Home");
                return false;
            }
        }, 50);

        if (document.body.style.webkitBackdropFilter === undefined &&
            document.body.style.mozBackdropFilter === undefined &&
            document.body.style.backdropFilter === undefined) {
                $("nav").addClass("nofilter");
        }

        setup_email();
    });
});
