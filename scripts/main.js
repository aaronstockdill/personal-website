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
                $('#menu-check').attr('checked', false);
                return false;
            }
        }
    });
    
    $(window).bind('popstate', function () {
        set_active(window.location.hash);
    });

    $(window).on('scroll', function() {
        // Work out where the user is when scrolling
        var the_hash = '';
        var the_best = 0;
        $(".section").each(function(index, element) {
            if ($(element).visible() > the_best) {
                the_hash = $(element).attr('id');
                the_best = $(element).visible();
            }
        });
		if ($(window).scrollTop() < HOME_SIZE) {
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
    
    setTimeout(function(){
        // When the page loads, set the menu correctly
        if ($('body').attr('id') === 'index' && 
        window.location.hash && 
        $(window.location.hash).visible() > 0) {
            set_active(window.location.hash);
        } else if ($('body').attr('id') === 'index') {
            location.replace("#Home");
            return false;
        }
    }, 50);
});
