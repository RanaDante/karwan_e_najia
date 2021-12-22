
jQuery(document).ready(function ($){
    $('.loader_overlay').hide();
    $("#NamazSubmit").click(function(e) {
        e.preventDefault();
        $('input[type="submit"]').attr('disabled', 'disabled');
        $('input[type="submit"]').css('cursor', 'default');
        $('.loader_overlay').show();  
        let city = $("#city").val();
        let country = $("#country").val();
        let year = new Date().getFullYear();
        let month = new Date().getMonth()+1;
        let day = new Date().getDate();
        
        $.ajax({
            url: "http://api.aladhan.com/v1/calendarByCity?city="+city+"&country="+country+"&method=2&month="+month+"&year="+year,
            type: "Get",
            dataType: 'json',

            success: function(data) {
                $(".error").html();
                $('input[type="submit"]').removeAttr('disabled');
                $('input[type="submit"]').css('cursor', 'pointer');
                $('.loader_overlay').hide();
                if (data.status == "OK") {
                    $error="Prayer Time in "+city+" - "+country;
                    $(".error").html($error);
                    $(".fajr").html(data.data[day].timings.Fajr);
                    $(".sunrise").html(data.data[day].timings.Sunrise);
                    $(".Dhuhr").html(data.data[day].timings.Dhuhr);
                    $(".Asr").html(data.data[day].timings.Asr);
                    $(".Maghrib").html(data.data[day].timings.Maghrib);
                    $(".Isha").html(data.data[day].timings.Isha);
                }
            },
            error: function (error) {
                $(".error").html("City name or Country name is incorrect");
                $('.loader_overlay').hide();
                $('input[type="submit"]').removeAttr('disabled');
                $('input[type="submit"]').css('cursor', 'pointer');

                $(".fajr").html('');
                $(".sunrise").html('');
                $(".Dhuhr").html('');
                $(".Asr").html('');
                $(".Maghrib").html('');
                $(".Isha").html('');
            }
        });
    });


    function generate_video_element(post_title, post_data) {
        var recommended_video_element = ``;
        recommended_video_element = `<div class="rec-videos-item">
        <div class="event-thumbnail">
                <a class="rec-vid-thumb" href="#" data-link="${post_data['video_vimeo_link']}">
                    <img src="${post_data['thumbnail']}" alt="">
                </a>
            </div>
            <div class="video-title">
                <a class="rec-vid-thumb" href="#" data-link="${post_data['video_vimeo_link']}">
                ${post_title}
                </a>
            </div>
        </div>`;

        return recommended_video_element;
    }

    $(".cat-videos").click(function(e) {
        e.preventDefault();
        var cat_id = $(this).data("cat");
        // .overlay-loader
        $(".overlay-loader").css('display','block');
        $.ajax({
            url: frontendajax.ajaxurl,
            type: "post",
            // dataType: 'json',
            data: {
                'action': 'get_videos_by_category',
                'cat_id' : cat_id,
                'post_type' : 'cpt_videos'
            },

            success: function(data) {
                
                var recommended_videos_section = $('.rec-videos');
                if(data) {
                    recommended_videos_section.empty();
                    for(var post_title in data) {
                        var recommended_video_element = generate_video_element(post_title, data[post_title]);
                        recommended_videos_section.append($(recommended_video_element));
                    }
                    $(".overlay-loader").css('display','none');
                }
            },
            error: function (error) {
                console.log("there is Error");
            }
        }); 
    });

    

});