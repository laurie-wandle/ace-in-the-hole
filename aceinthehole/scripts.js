
//navigation button

jQuery(function($) {
    $('.menu-btn').click(function () {
        $('.responsive-menu').toggleClass('expand');

    });

//course details buttons
    $("button#longSwim").on("click", function() {
        $("#longSwimP").toggle();
    });

    $("button#longBike").on("click", function() {
        $("#longBikeP").toggle();
    });

    $("button#longRun").on("click", function() {
        $("#longRunP").toggle();
    });

    $("button#oSwim").on("click", function() {
        $("#oSwimP").toggle();
    });

    $("button#oBike").on("click", function() {
        $("#oBikeP").toggle();
    });

    $("button#oRun").on("click", function() {
        $("#oRunP").toggle();
    });

    $("button#sprint").on("click", function() {
        $("#sprintP").toggle();
    });

    $("button#try").on("click", function() {
        $("#tryP").toggle();
    });

    $("button#half").on("click", function() {
        $("#halfP").toggle();
    });

    $("button#10k").on("click", function() {
        $("#10kP").toggle();
    });

    $("button#splash").on("click", function() {
        $("#splashP").toggle();
    });



//what to bring buttons

    $("button#chipTiming").on("click", function() {
        $("#chipTimingP").toggle();
    });

    $("button#bringSwim").on("click", function() {
        $("#bringSwimP").toggle();
    });

    $("button#bringBike").on("click", function() {
        $("#bringBikeP").toggle();
    });

    $("button#bringRun").on("click", function() {
        $("#bringRunP").toggle();
    });

    //FAQS buttons

    $("button#rules").on("click", function() {
        $("#rulesP").toggle();
    });

    $("button#noMusic").on("click", function() {
        $("#noMusicP").toggle();
    });

    $("button#musicRun").on("click", function() {
        $("#musicRunP").toggle();
    });

    $("button#wetsuit").on("click", function() {
        $("#wetsuitP").toggle();
    });

    $("button#racingBike").on("click", function() {
        $("#racingBikeP").toggle();
    });

//homepage image slider

    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 4000); // Change image every 4 seconds
    }

});





