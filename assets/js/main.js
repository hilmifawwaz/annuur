$(document).ready(function(){
    
    $("#slider-hero").owlCarousel({
        nav: true,
        items: 1,
        navText: [
            "<i class='fas fa-angle-left'><i>",
            "<i class='fas fa-angle-right'><i>"
        ],
        navContainer: "#slider-hero-nav",
    });

})
