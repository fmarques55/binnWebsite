jQuery.noConflict();
jQuery(document).ready(function() {

    /* ---------------------------------------------- /*
     * SMOOTH SCROLL
    /* ---------------------------------------------- */
    jQuery('.sscroll').bind('click.smoothscroll', function(e) {
        e.preventDefault();
        jQuery('.sscroll').parent().removeClass('active');
        jQuery(this).parent().addClass('active');
        jQuery('html,body').animate({
            scrollTop: jQuery(this.hash).offset().top
        }, 1200);
    });

    /* ---------------------------------------------- /*
     * RESPONSIVE VIDEO
    /* ---------------------------------------------- */
    if(jQuery.fn.fitVids){
        jQuery('.fitvids').fitVids();
    }

    /* ---------------------------------------------- /*
     * BIG SLIDE
    /* ---------------------------------------------- */
    jQuery('#home-slide').superslides({
        animation: 'fade', // You can choose either fade or slide
        play: 6000,
        pagination: false
    });


    /* ---------------------------------------------- /*
     * PORTFOLIO
    /* ---------------------------------------------- */
    jQuery('.portfolioContainer').mixitup({
        filterSelector: '.portfolioFilter li',
        targetSelector: '.portfolio-item',
        effects: ['fade', 'scale']
    });


    /* ---------------------------------------------- /*
     * QUOTE SLIDE
    /* ---------------------------------------------- */
    jQuery('.bxslider').bxSlider({
        pagerCustom: '#bx-pager',
        controls: false
    });

    /* ---------------------------------------------- /*
     * CLIENT SLIDE
    /* ---------------------------------------------- */
    if (jQuery('.client-slider').length > 0) {
        jQuery('.client-slider').carouFredSel({
            responsive: true,
            width: '100%',
            scroll: 1,
            items: {
                width: 116,
                //  height: '30%',  //  optionally resize item-height
                visible: {
                    min: 1,
                    max: 4
                }
            }
        });
    }

    /* ---------------------------------------------- /*
     * Back To Top
    /* ---------------------------------------------- */
    jQuery("#backtotop").backToTop();

    /* ---------------------------------------------- /*
     * Bootstrap Tooltip
    /* ---------------------------------------------- */
    jQuery('a[data-toggle="tooltip"]').tooltip();


    /* ---------------------------------------------- /*
     * NIVOLightbox
    /* ---------------------------------------------- */
    if(jQuery.fn.nivoLightbox){
        jQuery('.popup').nivoLightbox({
            effect: 'fall'
        });
    }


    /* ---------------------------------------------- /*
     * E-mail validation
    /* ---------------------------------------------- */
    function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
        return pattern.test(emailAddress);
    }
    ;

    /* ---------------------------------------------- /*
     * Contact form ajax
    /* ---------------------------------------------- */

        jQuery('#contact-form').submit(function (e) {

             e.preventDefault();

             var c_name = jQuery('#c_name').val();
             var c_email = jQuery('#c_email').val();
             var c_message = jQuery('#c_message ').val();
             var response = jQuery('#contact-form .ajax-response');

             var formData = {
                 'name': c_name,
                 'email': c_email,
                 'message': c_message
             };

             if ((c_name == '' || c_email == '' || c_message == '') || (!isValidEmailAddress(c_email))) {
                 response.fadeIn(500);
                 response.html('<i class="fa fa-warning" style="color: red; margin-top: 5px;"></i> Preencha todos os campos.');
             }

             else {
                 jQuery.ajax({
                     type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                     url: 'php/contact.php', // the url where we want to POST
                     data: formData, // our data object
                    //  dataType: 'json', // what type of data do we expect back from the server
                    //  encode: true,
                     success: function(text){
                        if (text == "success"){
                            formSuccess();
                        }
                     }
                 });
             }
             return false;
         });
         function formSuccess(){
             jQuery( "#msgSubmit" ).removeClass( "hidden" );
         }

});
