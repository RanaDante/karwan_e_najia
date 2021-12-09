jQuery(document).ready(function($) {

    // froogaloop = $f('test_id');
    
    
    
    $('.rbd_video').on('click', function(evt) {
        evt.preventDefault();
        
        // $('.rbd_video').each(function(evt) {
            //     // $(this).find('.rbd_video_playback').css('z-index', -1);
            // });
            
            $(this).find('.rbd_video_playback .spinner_wrapper').show();
            $(this).find('.rbd_video_playback').css('z-index', 1);
            
            // var autoplay_iframe = $(this).find('.rbd_video_playback .hidden_iframe').val();
            // var default_iframe = $(this).find('.rbd_video_playback iframe');
            // var iframe = $(this).find('.rbd_video_playback').find('iframe');
            // var player = new Vimeo.Player(iframe);
            
            // $(this).find('.rbd_video_playback').find('iframe').remove();
            // $(this).find('.rbd_video_playback .fluid-width-video-wrapper').append(autoplay_iframe);
            
            $(this).find('.rbd_video_playback iframe').fadeIn(100, function() {
                $('.rbd_video_playback .spinner_wrapper').hide();
            });
        });

    

    

});
