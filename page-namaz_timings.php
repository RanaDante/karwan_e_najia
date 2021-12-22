<?php 
/**
* Template Name: Namaz Timing
*/


?>
<?php get_header(); ?>
<!-- /* TWO COLUMN LAYOUT */ -->
<section class="w-75 two-column mt-40">
    <div class="main namaz-timimg ">
        <h1 class="head2">نمازوں کے اوقات</h1>
        
        <form action="#" method="POST" class="mt-20">
            <div class="search-field">
                <div class="field-group">
                    <label for="city-name" >City</label>
                    <input type="text" class="city-name" name="city-name" id="city"
                        placeholder="eg: Sargodha" dir="ltr">
                </div>
                <div class="field-group">
                    <label for="country-name" >Country</label>
                    <input type="text" class="city-name" name="country-name" id="country" placeholder="eg: Pakistan" dir="ltr">
                </div>
                <div class="btn-group">
                    <input type="submit" name="submit" value="Get Prayer Timing" id="NamazSubmit" class="namaz-tim-btn" >
                </div>
            </div>
        </form>
        <!-- <h3 class="head3 error" dir="ltr">Prayer Time In <span class="cityname head3"></span> - <span class="countryname head3"></span></h3> -->
        <h3 class="head3 error" dir="ltr"></h3>
        <div class="timing-table">
            
            <div class="loader_overlay">
                <div class="loader"> 
                    <img src="<?php echo get_template_directory_uri() ;?>/assets/images/loading.gif" alt="">
                </div>
            </div>
            <table dir="ltr">
                <thead>
                    <tr>
                        <th>Fajar</th>
                        <th>Sunrise</th>
                        <th>Dhuhr</th>
                        <th>Asr</th>
                        <th>Maghrib</th>
                        <th>Isha</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fajr"></td>
                        <td class="sunrise"></td>
                        <td class="Dhuhr"></td>
                        <td class="Asr"></td>
                        <td class="Maghrib"></td>
                        <td class="Isha"></td>
                    </tr>
                </tbody>
                <?php #echo $response; ?>

            </table>
        </div>
    </div>

    <?php get_sidebar(); ?>

</section>
<?php get_footer(); ?>