/* ===================================
--------------------------------------
  TheQuest - Gaming Magazine Template
  Version: 1.0
--------------------------------------
======================================*/




$(window).on('load', function() {
    /*------------------
    	Preloder
    --------------------*/
    $(".loader").fadeOut();
    $("#preloder").delay(400).fadeOut("slow");

});

(function($) {
    /*------------------
    	Navigation
    --------------------*/
    $(".main-menu").slicknav({
        appendTo: '.header-section',
        allowParentLinks: true
    });

    /*------------------
    	Background Set
    --------------------*/
    $('.set-bg').each(function() {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    /*------------------
    	Hero Slider
    --------------------*/
    var $slider = $('.hero-slider');
    var SLIDER_TIMEOUT = 10000;

    $slider.owlCarousel({
        items: 1,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: SLIDER_TIMEOUT,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        loop: true,
        onInitialized: ({ target }) => {
            var animationStyle = '-webkit-animation-duration' + SLIDER_TIMEOUT + 'ms;animation-duration:' + SLIDER_TIMEOUT + 'ms';
            var progressBar = $('<div class="slider-progress-bar"><span class="progress" style=' + animationStyle + '></span></div>');
            $(target).append(progressBar);
        },
        onChanged: ({ type, target }) => {
            if (type === 'changed') {
                var $progressBar = $(target).find('.slider-progress-bar');
                var clonedProgressBar = $progressBar.clone(true);

                $progressBar.remove();
                $(target).append(clonedProgressBar);
            }
        }
    });

    /*------------------
    	Video Popup
    --------------------*/
    $('.video-play').magnificPopup({
        type: 'iframe'
    });

    /*------------------
    	Testimonials
    --------------------*/
    $('.testimonial-slider').owlCarousel({
        items: 1,
        nav: false,
        dots: true,
        autoplay: true,
        loop: true,
        autoplayHoverPause: true,
        animateOut: 'slideOutDown',
        animateIn: 'slideInDown',
    });

    /*------------------
    	Circle progress
    --------------------*/
    $('.circle-progress').each(function() {
        var cpvalue = $(this).data("cpvalue");
        var cpcolor = $(this).data("cpcolor");
        var cpid = $(this).data("cpid");

        $(this).append('<div class="' + cpid + '"></div><div class="progress-value"><h3>' + cpvalue + '%</h3></div>');

        if (cpvalue < 100) {

            $('.' + cpid).circleProgress({
                value: '0.' + cpvalue,
                size: 80,
                thickness: 4,
                fill: cpcolor,
                emptyFill: "rgba(0, 0, 0, 0)"
            });
        } else {
            $('.' + cpid).circleProgress({
                value: 1,
                size: 80,
                thickness: 4,
                fill: cpcolor,
                emptyFill: "rgba(0, 0, 0, 0)"
            });
        }
    });

    /*------------------
        main-menu
    --------------------*/



})(jQuery);
// Récupération du bouton d'édition de la description du personnage
$('#btn-character-info-edit').on('click', function() {
    var editable = document.getElementById("edit-character-info");
    var btnSave = document.getElementById("btn-character-info-edit");
    var btnEdit = document.getElementById("btn-character-info-save");
    showHideEditableBouton(editable, btnSave, btnEdit);
});
// Bouton de sauvegarde de la dexcription du personnage
$('#btn-character-info-save').on('click', function() {
    var editable = document.getElementById("edit-character-info");
    var btnSave = document.getElementById("btn-character-info-edit");
    var btnEdit = document.getElementById("btn-character-info-save");
    showHideEditableBouton(editable, btnSave, btnEdit);

});

/**
 * Fonction de switch du bouton editer/sauvegarder
 * @param {getElementById} editable 
 * @param {getElementById} btnSave 
 * @param {getElementById} btnEdit 
 */
function showHideEditableBouton(editable, btnSave, btnEdit) {
    if (editable.contentEditable == "true") {
        editable.contentEditable = "false";
        btnEdit.style.display = "none";
        btnSave.style.display = "block";
        console.log("false");
    } else {
        editable.contentEditable = "true";
        btnSave.style.display = "none";
        btnEdit.style.display = "block";
        console.log("true");
    }
}