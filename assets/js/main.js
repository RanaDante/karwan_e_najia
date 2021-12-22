// Menu Javascript
jQuery(document).ready(function ($) {
    $('audio').initAudioPlayer();
    
    $(".container-video").fitVids();
    $(".bg-video").fitVids();
    $('.rbd_video_playback').fitVids();
    $("#play-icon").click(function (e) {
        e.preventDefault();
        $("#bgVid").removeClass("bg-vid-hide");
        // $(".bg-vid-hide").toggleClass("bg-video-show")

    });

    $(".cross").hide();
    $(".menu").hide();

    $(".hamburger").click(function () {
        $(".menu").slideToggle("slow", function () {
            $(".hamburger").hide();
            $(".cross").show();
        });
    });

    $(".cross").click(function () {
        $(".menu").slideToggle("slow", function () {
            $(".cross").hide();
            $(".hamburger").show();
        });
    });

    // create pager list items
    var sliderImage = $('.slider__images-image');

    sliderImage.each(function (index) {
        $('.js__slider__pagers').append('<li>' + (index + 1) + '</li>');
    });

    // set up vars
    var sliderPagers = 'ol.js__slider__pagers li',
    sliderPagersActive = '.js__slider__pagers li.active',
    sliderImages = '.js__slider__images',
    sliderImagesItem = '.slider__images-item',
    sliderControlNext = '.slider__control--next',
    sliderControlPrev = '.slider__control--prev',
    sliderSpeed = 5000,
    lastElem = $(sliderPagers).length - 1,
    sliderTarget;

    // add css heigt to slider images list
    function checkImageHeight() {
        var sliderHeight = $('.slider__images-image:visible').height();
        $(sliderImages).css('height', sliderHeight + 'px');
    };

    sliderImage.on('load', function () {
        checkImageHeight();
        $(sliderImages).addClass('loaded')
    });
    $(window).resize(function () {
        checkImageHeight();
    });

    // set up first slide
    $(sliderPagers).first().addClass('active');
    $(sliderImagesItem).hide().first().show();

    // transition function
    function sliderResponse(sliderTarget) {
        $(sliderImagesItem).fadeOut(300).eq(sliderTarget).fadeIn(300);
        $(sliderPagers).removeClass('active').eq(sliderTarget).addClass('active');
    }

    // pager controls
    $(sliderPagers).on('click', function () {
        if (!$(this).hasClass('active')) {
            sliderTarget = $(this).index();
            sliderResponse(sliderTarget);
            resetTiming();
        }
    });

    // next/prev controls
    $(sliderControlNext).on('click', function () {
        sliderTarget = $(sliderPagersActive).index();
        sliderTarget === lastElem ? sliderTarget = 0 : sliderTarget = sliderTarget + 1;
        sliderResponse(sliderTarget);
        resetTiming();
    });
    $(sliderControlPrev).on('click', function () {
        sliderTarget = $(sliderPagersActive).index();
        lastElem = $(sliderPagers).length - 1;
        sliderTarget === 0 ? sliderTarget = lastElem : sliderTarget = sliderTarget - 1;
        sliderResponse(sliderTarget);
        resetTiming();
    });

    // slider timing
    function sliderTiming() {
        sliderTarget = $(sliderPagersActive).index();
        sliderTarget === lastElem ? sliderTarget = 0 : sliderTarget = sliderTarget + 1;
        sliderResponse(sliderTarget);
    }

    // slider autoplay
    // var timingRun = setInterval(function () {
    //     sliderTiming();
    // }, sliderSpeed);

    // function resetTiming() {
    //     clearInterval(timingRun);
    //     timingRun = setInterval(function () {
    //         sliderTiming();
    //     }, sliderSpeed);
    // }


    // Gallery image hover

    $("body").on('mouseenter', '.img-wrapper', function(evt) {
        evt.preventDefault();
        // console.log('working here');
        $(this).find(".img-overlay").animate({
            opacity: 1
        });    
    });
    $("body").on('mouseleave', '.img-wrapper', function(evt) {
        evt.preventDefault();
        // console.log('working here');
        $(this).find(".img-overlay").animate({
            opacity: 0
        });    
    });

    $(".answer-btn").on('click', function(evt) {
        evt.preventDefault();
        $(".wrong-answer").hide();
        $(".right-answer").hide();
        // console.log('Answer Btn Clicked');
        var correct_answer = $(".correct_answer").val();
        // console.log(correct_answer);
        
        var user_value = $('.question_answer_radio[name="question_answer"]:checked').val();
        if(user_value === correct_answer) {
            // console.log('answer is correct');
            var notification_elem = `<div class="right-answer"><p>Answer is Correct</p></div>`;
            $("form .content").prepend(notification_elem);
            $(".wrong-answer").hide();
        }else{
            // console.log('answer is wrong');
            var notification_elem = `<div class="wrong-answer"><p>Answer is Wrong</p></div>`;
            $("form .content").prepend(notification_elem);
            $(".right-answer").hide();
        }

          
    });


    // },
    // function () {
    //     $(this).find(".img-overlay").animate({
    //         opacity: 0
    //     }, 600);
    // }

    // Lightbox
    var $overlay = $('<div id="overlay"></div>');
    var $image = $("<img>");
    var $title = $("<h1></h1>");
    var $nextButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
    var $prevButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
    var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

    $overlay.append($title).append($image).prepend($prevButton).append($nextButton).append($exitButton);

    $("#gallery").append($overlay);

    $overlay.hide();

    $(".img-overlay").click(function (event) {
        event.preventDefault();
        var imageLocation = $(this).prev().attr("href");
        // console.log(imageLocation);
        var imageTitle = $(this).prev().attr("title");
        // console.log(imageTitle);
        $image.attr("src", imageLocation);
        $overlay.fadeIn("slow");

        $title.html(imageTitle)
    });

    $nextButton.click(function (event) {
        $("#overlay img").hide();
        var $currentImgSrc = $("#overlay img").attr("src");

        var $currentImg = $('#gallery img[src="' + $currentImgSrc + '"]'); 

        var $nextImg = $($currentImg.closest(".image").next().find("img"));
        var $nextImgTitle = $nextImg.data('title');

        var $images = $("#gallery img");

        if ($nextImg.length > 0) {
            $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
            $('#overlay h1').text($nextImgTitle);
        } else {
            $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
            $('#overlay h1').text($nextImgTitle);
        }
        event.stopPropagation();
    });

    $prevButton.click(function (event) {
        $("#overlay img").hide();
        var $currentImgSrc = $("#overlay img").attr("src");
        var $currentImg = $('#gallery img[src="' + $currentImgSrc + '"]');
        var $nextImg = $($currentImg.closest(".image").prev().find("img"));
        $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
        
        var $nextImgTitle = $nextImg.data('title');

        $('#overlay h1').text($nextImgTitle);
        event.stopPropagation();
    });

    $exitButton.click(function () {
        $("#overlay").fadeOut("slow");
    });

});

