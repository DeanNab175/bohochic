(function($){
    //$('.carousel').carousel();
    $(".owl-carousel").owlCarousel({
        items: 1,
        autoplay: false,
        loop: false,
        smartSpeed: 1500,
        nav: true,
        navText: ['<span class="bc-prev"></span>', '<span class="bc-next"></span>']
        //autoWidth: true
        //nav: true
    });

    const $searchBtn = $( '#search-btn' );
    const $searchBox = $searchBtn.siblings( '.widget_product_search' );

    $searchBtn.on( "click", function() {
        toggleClass( 'show', $searchBox );
    });

})(jQuery);

function toggleClass( elClass, el ) {
    if( el.hasClass( elClass ) ) {
        el.removeClass( elClass );
    } else {
        el.addClass( elClass )
    }
}