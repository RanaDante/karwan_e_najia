jQuery(document).ready(function($) {

    $('.rbd_video').on('click', function(evt) {
        evt.preventDefault();

        $(this).find('.rbd_video_playback .spinner_wrapper').show();
        $(this).find('.rbd_video_playback').css('z-index', 1);
        
        $(this).find('.rbd_video_playback iframe').fadeIn(100, function() {
            $('.rbd_video_playback .spinner_wrapper').hide();
        });
    });


    $("body").on( "click", ".rec-vid-thumb", function(evt) {
        evt.preventDefault();
        var link = $(this).data("link");
        console.log(link);
        var iframe = $(".vendor iframe").attr('src', link);
    });


    // $('.rec-vid-thumb').on('click', function(evt) {
    //     evt.preventDefault();
    //     var link = $(this).data("link");
    //     var iframe = $(".vendor iframe").attr('src', link);
    // });
    $('.cat-videos').on('click', function(evt) {
        // evt.preventDefault(evt);
        var link = $(this).data("link");
        var category = $(this).data("cat");
        var iframe = $(".vendor iframe").attr('src', link);
        $('html, body').animate({
            scrollTop: $("#videoplay").offset().top
        }, 500);
    });

    if($('body').hasClass('category')) {
        
        $(".video-item").click(function(e) {
            console.log('Video Item Working Here');
            var link = $(this).data("link");
            var category = $(this).data("cat");
            var iframe = $(".vendor iframe").attr('src', link);
            $('html, body').animate({
                scrollTop: $("#videoplay").offset().top
            }, 500);
        });
    
    }



});
