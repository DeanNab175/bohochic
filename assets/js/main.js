(function($){

    /*------------------------------------
      Variables declaration           
    ------------------------------------*/
    var $window = $(window);
    const $mainMenu = document.querySelector('.main-header');
    
    //console.log(menuHeight);

    //$('.carousel').carousel();
    $(".owl-carousel").owlCarousel({
        items: 1,
        autoplay: true,
        loop: true,
        smartSpeed: 1500,
        nav: true,
        navText: ['<span class="bc-prev"></span>', '<span class="bc-next"></span>'],
        autoplayHoverPause: true
        //autoWidth: true
        //nav: true
    });

    const $searchBtn = $( '#search-btn' );
    const $searchBox = $searchBtn.siblings( '.widget_product_search' );

    $searchBtn.on( "click", function() {
        toggleClass( 'show', $searchBox );
    });



    /**
     * listen to scroll event
     * and fires the stickyMenu function
     */
    window.addEventListener('scroll', function() {
        stickyMenu($mainMenu);
    });


    const $cartBtn = document.querySelector( '.mini-cart .user-cta__cart' );
    const $headerMiniCart = document.querySelector( '.mini-cart .header-mini-cart' );

    $cartBtn.addEventListener('click', function(e) {
        e.preventDefault();
        $headerMiniCart.classList.toggle('active');
    });

})(jQuery);

/*------------------------------------
      Toggle class           
------------------------------------*/
function toggleClass( elClass, el ) {
    if( el.hasClass( elClass ) ) {
        el.removeClass( elClass );
    } else {
        el.addClass( elClass )
    }
}


/*------------------------------------
      Sticky menu on scroll           
------------------------------------*/
/**
 * if the page vertical offset is
 * greater than the menu bar height
 * add the sticky class else remove it
 */
function stickyMenu(el) {
    const menuHeight = el.offsetHeight;
    //console.log(window.scrollY, menuHeight, el);

    if( (window.scrollY) > menuHeight ) {
        el.classList.add('sticky');
    }
    else {
        el.classList.remove('sticky');
    }
}