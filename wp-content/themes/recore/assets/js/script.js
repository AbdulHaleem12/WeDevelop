jQuery(function (jQuery) {
    "use strict";

        jQuery(document).ready(function() {
            jQuery(".navbar-nav").accessibleDropDown();
        });

        jQuery.fn.accessibleDropDown = function () {
          var el = jQuery(this);

          /* Make dropdown menus keyboard accessible */

            jQuery("a", el).focus(function() {
                jQuery(this).parents("li").addClass("force-show");
            }).blur(function() {
                jQuery(this).parents("li").removeClass("force-show");
            });
        }

        /*====================================
            Dropdown Click
        ======================================*/
        jQuery('.menu-item-has-children').on('click', function () {
            jQuery('.menu-item-has-children .sub-menu').toggleClass('current');
        });

        /*====================================
      slick nav
    ======================================*/
    var logo_path = jQuery('.mobile-menu').data('logo');
    var logo_link = jQuery('.mobile-menu').data('link');
    var logo_type = jQuery('.mobile-menu').data('type');
    let logo;

    if (logo_type === 'text') {
      logo = '<a href="' + logo_link + '"></a>';
    }else {
      logo = '<a href="' + logo_link + '"><img src="' + logo_path + '" class="img-fluid" alt="logo"></a>';;
    }

    jQuery('.navbar-nav').slicknav({
        appendTo: '.mobile-menu',
        removeClasses: true,
        label: '',
        closedSymbol: '<i class="fa fa-angle-right"><i/>',
        openedSymbol: '<i class="fa fa-angle-down"><i/>',
        brand: logo
    });


    function recore_toggle_icon_burger() {
        

        const list = document.querySelectorAll(".slicknav_nav li a");

        // get first element to be focused inside modal
        const firstFocusableElement = document.getElementById('slicknav_btnn');

        const logo = document.querySelector('.navbar-brand');

        const firstFocusableElementclass = document.querySelector('.slicknav_collapsed');

        // get last element to be focused inside modal
        const last = list[list.length - 1];
        const lastFocusableElement = last;

        document.addEventListener('keydown', function (e) {
            
            let isTabPressed = e.key === 'Tab' || e.keyCode === 9;
                console.log('begin',e.key, e.keyCode);
            if (!isTabPressed) {
                return;
            }

            if(e.shiftKey && e.keyCode == 9 && document.activeElement === firstFocusableElement) { 
          
                lastFocusableElement.focus();
                e.preventDefault();
            }
            if(e.shiftKey && e.keyCode == 9 && document.activeElement === firstFocusableElementclass) { 
          
              logo.focus();
                e.preventDefault();
            }
                console.log('error');

            // if shift key pressed for shift + tab combination
            if (e.shiftKey) {
                if (document.activeElement === firstFocusableElement) {
                    lastFocusableElement.focus();
                    e.preventDefault();
                }
            } else {
                if (document.activeElement === lastFocusableElement) {
                    firstFocusableElement.focus();
                    e.preventDefault();
                }
            }
        });
    }
    recore_toggle_icon_burger();




        /* Offset start */
        var $window = jQuery(window),
        $body = jQuery('body');
        
        // Navbar collapse on click
        jQuery('.nav-link').on('click', function () {
            jQuery('.navbar-collapse').collapse('hide');
        });

        // bottom to top js start
        var html_body = jQuery('html, body');
        var amountScrolled = 300;
        var bootomclass = jQuery('.bottomtotop');
        bootomclass.hide();
        $window.on('scroll', function () {
            if ($window.scrollTop() > amountScrolled) {
                bootomclass.fadeIn('slow');
            } else {
                bootomclass.fadeOut('slow');
            }
            if (jQuery(".navigation").offset().top > 0) {
                jQuery(".navigation").addClass("stiky-nav");
            } else {
                jQuery(".navigation").removeClass("stiky-nav");
            }
        });

        bootomclass.on('click', function () {
            html_body.animate({
                scrollTop: 0
            }, 600);
            return false;
        });

        //scrollspy menu
        $body.scrollspy({
            target: '#mainmenu',
            offset: 100
        });
          

    // blog-slider
    var $blog_slider = jQuery('.blog-slider');
        $blog_slider.owlCarousel({
        loop: true,
        nav: false,
        dots:false,
        margin:30,
        autoplay: true,
        autoplayTimeout: 6000,
        smartSpeed: 1200,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 3
            },
            1920: {
                items: 3
            }
        }
    });
});