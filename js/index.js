$(document).ready(function() {
    $( ".card" ).hover(
        function() {
            $(this).addClass('shadow-lg').css('cursor', 'pointer'); 
        }, function() {
            $(this).removeClass('shadow-lg');
        }
    );
});

$(document).ready(function() {
    var w = window.innerWidth;
    if (w <= 576) {
        $("#carousel1").attr("src", "assets/carousel-1-mobile.png");
        $("#carousel2").attr("src", "assets/carousel-2-mobile.png");
        $("#carousel3").attr("src", "assets/carousel-3-mobile.png");
    } else {
        $("#carousel1").attr("src", "assets/carousel-1.png");
        $("#carousel2").attr("src", "assets/carousel-2.png");
        $("#carousel3").attr("src", "assets/carousel-3.png");
    }

    if (w > 576 && w <= 768) {
        $(".book-title").css('font-size', '24px');
        $(".book-past-price").css('font-size', '20px');
        $(".book-price").css('font-size', '28px');
        $(".btn-product").css('font-size', '18px');
    }

    if (w >= 1024 && w <= 1200) {
        $(".book-title").css('font-size', '30px');
        $(".book-past-price").css('font-size', '24px');
        $(".book-price").css('font-size', '36px');
        $(".btn-product").css('font-size', '22px');
    }
}); 