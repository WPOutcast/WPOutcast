jQuery(document).ready(function() {
//------------------------------------------
    //scroll-top
//------------------------------------------
  jQuery(".ti_scroll").hide();   
    jQuery(function () {
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 500) {
                jQuery('.ti_scroll').fadeIn();
            } else {
                jQuery('.ti_scroll').fadeOut();
            }
        });     
        jQuery('a.ti_scroll').click(function () {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });  
  }); 