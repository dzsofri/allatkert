/*Mobile Menu Handle*/
jQuery(document).ready(function () {
    jQuery('.sanitize-count').each(function () {
    jQuery(this).prop('sanitize-count',0).animate({
        Counter: jQuery(this).text()
    }, {
        duration: 1500,
        easing: 'swing',
        step: function (now) {
            jQuery(this).text(Math.ceil(now));
        }
    });
});

var action="click";
var speed="500";

jQuery(document).ready(function() {
    jQuery('li.question').on(action, function() {
        jQuery('li.question').removeClass('active');
        jQuery(this).addClass('active');
        jQuery(this).next().slideToggle(speed).siblings('li.answer').slideUp();

    });
    if(!jQuery('li.question').hasClass('active')){
        jQuery('li.question:first-child').addClass('active');
    }
});

  jQuery('.search-toggle').on('click', function(e) {
    e.preventDefault();
    jQuery('body').addClass('modal-active');
    jQuery('.search-modal').fadeIn('fast');
  });
  jQuery('.modal-close').on('click', function(e){
     e.preventDefault();
     jQuery('body').removeClass('modal-active');
    jQuery('.search-modal').fadeOut('fast');
  });
  jQuery('#searchModel button.btn-default').on('keydown', function(e){
    jQuery('#searchModel button.modal-close').focus();
    e.preventDefault();
  });

  jQuery(window).scroll(function(){ 
        if (jQuery(this).scrollTop() > 100) { 
            jQuery('a.sanitize-top').fadeIn(); 
        } else { 
            jQuery('a.sanitize-top').fadeOut(); 
        } 
    }); 
    jQuery('a.sanitize-top').click(function(){ 
        jQuery("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 


    jQuery(".notice-toggle").click(function(e){
      jQuery(this).toggleClass('hide');
      jQuery('.top-notification-bar').slideToggle();
      e.preventDefault();
    });


    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() >= 50) {
            jQuery('.header-layout-1').addClass('active-sticky');
            jQuery('.header-layout-2').addClass('active-sticky');
            jQuery('.header-layout-3-navigation').addClass('active-sticky');
            jQuery('.header-layout-4-navigation').addClass('active-sticky');
            jQuery('.header-layout-5-navigation').addClass('active-sticky');
            
        }
        else {
            jQuery('.header-layout-1').removeClass('active-sticky');
            jQuery('.header-layout-2').removeClass('active-sticky');
            jQuery('.header-layout-3-navigation').removeClass('active-sticky');
            jQuery('.header-layout-4-navigation').removeClass('active-sticky');
            jQuery('.header-layout-5-navigation').removeClass('active-sticky');
        }
    });
 
/* MOBILE TOGLLE MENU HANDLE*/
var menuFocus, navToggleItem, focusBackward;
var menuToggle = document.querySelector('.menu-toggle');
var navMenu = document.querySelector('.nav-menu');
var navMenuLinks = navMenu.getElementsByTagName('a');
var navMenuListItems = navMenu.querySelectorAll('li');
var nav_lastIndex = navMenuListItems.length - 1;
var navLastParent = document.querySelectorAll('.main-navigation > ul > li').length - 1;

document.addEventListener('menu_focusin', function () {
    menuFocus = document.activeElement;
    if (navToggleItem && menuFocus !== navMenuLinks[0]) {
        document.querySelectorAll('.main-navigation > ul > li')[navLastParent].querySelector('a').focus();
    }
    if (menuFocus === menuToggle) {
        navToggleItem = true;
    } else {
        navToggleItem = false;
    }
}, true);


document.addEventListener('keydown', function (e) {
    if (e.shiftKey && e.keyCode == 9) {
        focusBackward = true;
    } else {
        focusBackward = false;
    }
});


for (el of navMenuLinks) {
    el.addEventListener('blur', function (e) {
        if (!focusBackward) {
            if (e.target === navMenuLinks[nav_lastIndex]) {
                menuToggle.focus();
            }
        }
    });
}
menuToggle.addEventListener('blur', function (e) {
    if (focusBackward) {
        navMenuLinks[nav_lastIndex].focus();
    }
});


});
 