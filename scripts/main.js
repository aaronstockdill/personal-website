$(function() {

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
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 300);
                $('#menu-check').attr('checked', false);
                return false;
            }
        }
    });

    $(window).on('hashchange', function() {
        // Set the menu to be highlighted correctly
        $(".menu").children().each(function(index, element) {
            $(element).removeClass('active');
        });
        var target = window.location.hash.slice(1);
        $("#link-for-" + target).addClass('active');
        return false;
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
        if (the_hash !== '') {
            var el = $("#" + the_hash);
            el.attr('id', '');
            window.location.hash = (the_hash === '') ? null : the_hash;
            el.attr('id', the_hash);
        }
        return false;
    });
    
    setTimeout(function(){
        // When the page loads, set the menu correctly
        if ($('body').attr('id') === 'index' && 
            window.location.hash && 
            $(window.location.hash).visible() > 0) {
            var target = window.location.hash.slice(1);
            $("#link-for-" + target).addClass('active');
        } else if ($('body').attr('id') === 'index') {
            window.location.hash = 'Home';
            return false;
        }
    }, 50);
});
