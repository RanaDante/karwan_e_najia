<?php 
/**
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

<?php 
    $args = array (
        'post_type' => 'cpt_announcements',
        'posts_per_page' => 3,
        'order' => 'DESC'
    );
    $announcement_query = new wp_query($args);
?>


<!-- ANNOUNCEMENT SECTIONS -->
<section class="announcement-section w-75">

<h1 class="h1">اعلانات</h1>


<div class="slider">
    <ul class="js__slider__images slider__images">
        <?php if($announcement_query->have_posts()): while($announcement_query->have_posts()): $announcement_query->the_post(); ?>
            <li class="slider__images-item" style="background-image:url(<?php the_field('announcement_image'); ?>) ">
                <div class="slide-content">
                    <p><?php the_field('excerpt'); ?></p>
                </div>
            </li>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </ul>
    <div class="slider__controls">
        <span class="slider__control js__slider__control--prev slider__control--prev">
            <img src="images/Icon awesome-arrow-left-1.png" alt="">
        </span>
        <ol class="js__slider__pagers slider__pagers" style="display: none;"></ol>
        <span class="slider__control js__slider__control--next slider__control--next">
            <img src="images/Icon awesome-arrow-left.png" alt="">
        </span>
    </div>
</div>

<div class="events">
    <a href="#" class="event-item">                
        <div class="event-thumbnail">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/event (1).png" alt="">
        </div>

        <div class="event-excerpt">
            <p>۹ اپریل ۲۰۱۷ بروز اتوار صبح ۱۰ بجے روحانی درسگاہ کاروان ناجیہ چکوال میں روحانی محفل کا انعقاد کیا
                جارہا ہے۔
            </p>
            <p class="event-link"> مزید <span class="border-btm"> دیکھیں </span></p>
        </div>
    </a>

    <a href="#" class="event-item">                
        <div class="event-thumbnail">
            <img src="images/event (2).png" alt="">
        </div>

        <div class="event-excerpt">
            <p>ساری زندگی امن و محبت کا درس دینے والے لعل شہباز قلندر کی درگاہ لہو سے لال ہوگئی
            </p>
            <p class="event-link"> مزید <span class="border-btm"> دیکھیں </span></p>
        </div>
    </a>
        
    <a href="#" class="event-item">                
        <div class="event-thumbnail">
            <img src="images/event (3).png" alt="">
        </div>

        <div class="event-excerpt">
            <p>شورکوٹ میں ہونے والے سالانہ روحانی اجتماع میں اُمتِ مسلمہ کی حالتِ زار پر آپ مدظلہ العالی کا
                خطاب</p>
            <p class="event-link"> مزید <span class="border-btm"> دیکھیں </span></p>
        </div>
    </a>
    
    <!-- <div class="event-item">
        <div class="event-thumbnail">
            <img src="images/event (3).png" alt="">
        </div>
        <div class="event-excerpt">
            <p>شورکوٹ میں ہونے والے سالانہ روحانی اجتماع میں اُمتِ مسلمہ کی حالتِ زار پر آپ مدظلہ العالی کا
                خطاب</p>
            <a href="#" class="event-link"> مزید <span class="border-btm"> دیکھیں </span></a>
        </div>
    </div> -->

</div>
</section>

<!-- POPULAR NEWS -->
<section class="popular-news w-75">
<h1 class="h1">مقبول خبریں</h1>
<div class="news">
    <div class="news-item">
        <a href="#">
            <div class="thumbnail-bg" style="background-image: url(images/news1.jpg);"></div>
            <h3 class="h3">شہدائے کربلا نے دینِ اسلام کے اُجڑتے ہوئے گلشن کی اپنے پاک خون سے سرشار کر دیا۔</h3>
            <p> ایک مرتبہ حضورِ نبی اکرم ﷺ نے اللہ رب العزت کی بارگاہ میں التجا کی کہ اےپروردگار اپنے دین کی مضبوطی
                اور تقویت کیلئے ہشام کےبیٹے یا خطاب کےبیٹے کو مشرف با اسلام فرما۔</p>
            <a href="#" class="event-link"> مزید <span class="border-btm"> دیکھیں </span></a>
        </a>
    
    </div>

    <div class="news-item">
        <a href="#">
            <div class="thumbnail-bg" style="background-image: url(images/news2.jpg);"></div>
            <h3 class="h3">شہدائے کربلا نے دینِ اسلام کے اُجڑتے ہوئے گلشن کی اپنے پاک خون سے سرشار کر دیا۔</h3>
            <p> ایک مرتبہ حضورِ نبی اکرم ﷺ نے اللہ رب العزت کی بارگاہ میں التجا کی کہ اےپروردگار اپنے دین کی مضبوطی
                اور تقویت کیلئے ہشام کےبیٹے یا خطاب کےبیٹے کو مشرف با اسلام فرما۔</p>
            <a href="#" class="event-link"> مزید <span class="border-btm"> دیکھیں </span></a>
        </a>
    </div>

    <div class="news-item">
        <a href="#">
            <div class="thumbnail-bg" style="background-image: url(images/news3.jpg);"></div>
            <h3 class="h3">شہدائے کربلا نے دینِ اسلام کے اُجڑتے ہوئے گلشن کی اپنے پاک خون سے سرشار کر دیا۔</h3>
            <p> ایک مرتبہ حضورِ نبی اکرم ﷺ نے اللہ رب العزت کی بارگاہ میں التجا کی کہ اےپروردگار اپنے دین کی مضبوطی
                اور تقویت کیلئے ہشام کےبیٹے یا خطاب کےبیٹے کو مشرف با اسلام فرما۔</p>
            <a href="#" class="event-link"> مزید <span class="border-btm"> دیکھیں </span></a>
        </a>
    </div>


    <div class="news-item">
        <a href="#">
            <div class="thumbnail-bg" style="background-image: url(images/news3.jpg);"></div>
            <h3 class="h3">شہدائے کربلا نے دینِ اسلام کے اُجڑتے ہوئے گلشن کی اپنے پاک خون سے سرشار کر دیا۔</h3>
            <p> ایک مرتبہ حضورِ نبی اکرم ﷺ نے اللہ رب العزت کی بارگاہ میں التجا کی کہ اےپروردگار اپنے دین کی مضبوطی
                اور تقویت کیلئے ہشام کےبیٹے یا خطاب کےبیٹے کو مشرف با اسلام فرما۔</p>
            <a href="#" class="event-link"> مزید <span class="border-btm"> دیکھیں </span></a>
        </a>
    </div>


    <div class="news-item">
        <a href="#">
            <div class="thumbnail-bg" style="background-image: url(images/news3.jpg);"></div>
            <h3 class="h3">شہدائے کربلا نے دینِ اسلام کے اُجڑتے ہوئے گلشن کی اپنے پاک خون سے سرشار کر دیا۔</h3>
            <p> ایک مرتبہ حضورِ نبی اکرم ﷺ نے اللہ رب العزت کی بارگاہ میں التجا کی کہ اےپروردگار اپنے دین کی مضبوطی
                اور تقویت کیلئے ہشام کےبیٹے یا خطاب کےبیٹے کو مشرف با اسلام فرما۔</p>
            <a href="#" class="event-link"> مزید <span class="border-btm"> دیکھیں </span></a>
        </a>
    </div>

    <div class="news-item">
        <a href="#">
            <div class="thumbnail-bg" style="background-image: url(images/news3.jpg);"></div>
            <h3 class="h3">شہدائے کربلا نے دینِ اسلام کے اُجڑتے ہوئے گلشن کی اپنے پاک خون سے سرشار کر دیا۔</h3>
            <p> ایک مرتبہ حضورِ نبی اکرم ﷺ نے اللہ رب العزت کی بارگاہ میں التجا کی کہ اےپروردگار اپنے دین کی مضبوطی
                اور تقویت کیلئے ہشام کےبیٹے یا خطاب کےبیٹے کو مشرف با اسلام فرما۔</p>
            <a href="#" class="event-link"> مزید <span class="border-btm"> دیکھیں </span></a>
        </a>
    </div>

</div>
<div class="read">
    <a href="#" class="read-more">مزید دیکھیں</a>
</div>
</section>

<!-- LATEST IMAGES -->
<section class="latest-images w-75" id="gallery">
<h1 class="h1">تازہ تصاویر</h1>
<div class="images" id="image-gallery">

    <div class="image">
        <i class="far fa-image"></i>
        <div class="img-wrapper">
            <a href="images/image3.jpg" title="IMAGE 1 TITLE">
                <img src="images/image3.jpg" alt="Aternative text to images" class="img-responsive" >
            </a>
            <div class="img-overlay"></div>
        </div>
        <div class="image-title">
            <p>Image Title Here</p>
        </div>
    </div>

    <div class="image">
        <i class="far fa-image"></i>
        <div class="img-wrapper">
            <a href="images/image2.jpg" title="IMAGE 2 TITLE">
                <img src="images/image2.jpg" alt="Aternative text to images" class="img-responsive">
            </a>
            <div class="img-overlay"></div>
        </div>
        <div class="image-title">
            <p>Image Title Here</p>
        </div>
    </div>

    <div class="image">
        <i class="far fa-image"></i>
        <div class="img-wrapper">
            <a href="images/image1.jpg" title="IMAGE 3 TITLE">
                <img src="images/image1.jpg" alt="Aternative text to images" class="img-responsive">
            </a>
            <div class="img-overlay"></div>
        </div>
        <div class="image-title">
            <p>Image Title Here</p>
        </div>
    </div>

    <div class="image">
        <i class="far fa-image"></i>
        <div class="img-wrapper">
            <a href="images/image4.jpg" title="IMAGE 4 TITLE">
                <img src="images/image4.jpg" alt="Aternative text to images" class="img-responsive">
            </a>
            <div class="img-overlay"></div>
        </div>
        <div class="image-title">
            <p>Image Title Here</p>
        </div>
    </div>

    <div class="image">
        <i class="far fa-image"></i>
        <div class="img-wrapper">
            <a href="images/image4.jpg" title="IMAGE 5 TITLE">
                <img src="images/image4.jpg" alt="Aternative text to images" class="img-responsive">
            </a>
            <div class="img-overlay"></div>
        </div>
        <div class="image-title">
            <p>Image Title Here</p>
        </div>
    </div>

    <div class="image">
        <i class="far fa-image"></i>
        <div class="img-wrapper">
            <a href="images/image2.jpg" title="IMAGE 6 TITLE">
                <img src="images/image2.jpg" alt="Aternative text to images" class="img-responsive">
            </a>
            <div class="img-overlay"></div>
        </div>
        <div class="image-title">
            <p>Image Title Here</p>
        </div>
    </div>

    <div class="image">
        <i class="far fa-image"></i>
        <div class="img-wrapper">
            <a href="images/image1.jpg" title="IMAGE 7 TITLE">
                <img src="images/image1.jpg" alt="Aternative text to images" class="img-responsive">
            </a>
            <div class="img-overlay"></div>
        </div>
        <div class="image-title">
            <p>Image Title Here</p>
        </div>
    </div>

    <div class="image">
        <i class="far fa-image"></i>
        <div class="img-wrapper">
            <a href="images/image4.jpg" title="IMAGE 8 TITLE">
                <img src="images/image4.jpg" alt="Aternative text to images" class="img-responsive">
            </a>
            <div class="img-overlay"></div>
        </div>
        <div class="image-title">
            <p>Image Title Here</p>
        </div>
    </div>
</div>
<div class="read">
    <a href="#" class="read-more">مزید دیکھیں</a>
</div>
</section>

<!-- AYAAT OF THE DAY -->
<section class="content-of-day">
<div class="content-wrap w-75">
    <div class="item">
        <h2>آیات</h2>
        <div class="content-img" style="background-image: url(images/ayat.jpg);"></div>
    </div>
    <div class="item">
        <h2>حدیث مبارک</h2>
        <div class="content-img" style="background-image: url(images/hadith.jpg);"></div>
        <!-- <img src="images/hadith.jpg" alt=""> -->
        
    </div>
    <div class="item">
        <h2>اقوال مبارک</h2>
        <div class="content-img" style="background-image: url(images/qaul.jpg);"></div>
        <!-- <img src="images/qaul.jpg" alt=""> -->

    </div>
</div>
</section>

<!-- VIDEOS SECTION -->
<section class="videos-section w-75" id="gallery">
<h1 class="h1">وڈیوز</h1>
<div class="videos">
    <a href="#" class="video-item" style="background-image: url(images/video-thumbnail1.png);">
        <h3 class="video-title">ڈاکومینٹری ٹریلر(روحانی درسگاہ کاروانِ ناجیہ) ۲۰۱۷ </h3>
        <i class="fas fa-play"></i>
        <div class="video-overlay"></div>
        <div class="bg-video"></div>
    </a>

    <a href="#" class="video-item" style="background-image: url(images/video-thumbnail2.jpg);">
        <h3 class="video-title">روک لیتی ہے آپ کی نسبت۔ صاحبزادہ حق نواز منصور </h3>
        <i class="fas fa-play"></i>
        <div class="video-overlay"></div>
    </a>

    <a href="#" class="video-item" style="background-image: url(images/video-thumbnail3.jpg);">
        <h3 class="video-title">روحانی محفل چکوال۰۴ </h3>
        <i class="fas fa-play"></i>
        <div class="video-overlay"></div>
    </a>

    <a href="#" class="video-item" style="background-image: url(images/video-thumbnail3.jpg);">
        <h3 class="video-title">روحانی محفل چکوال۰۴ </h3>
        <i class="fas fa-play"></i>
        <div class="video-overlay"></div>
    </a>

    <a href="#" class="video-item" style="background-image: url(images/video-thumbnail3.jpg);">
        <h3 class="video-title">روحانی محفل چکوال۰۴ </h3>
        <i class="fas fa-play"></i>
        <div class="video-overlay"></div>
    </a>

    <a href="#" class="video-item" style="background-image: url(images/video-thumbnail3.jpg);">
        <h3 class="video-title">بھول ہوئی ہے </h3>
        <i class="fas fa-play"></i>
        <div class="video-overlay"></div>
    </a>


</div>
<div class="read">
    <a href="#" class="read-more">مزید دیکھیں</a>
</div>
</section>

<!-- /* TWO COLUMN LAYOUT */ -->
<section class="w-75 two-column">

<?php if(have_rows('mobile_application')): while(have_rows('mobile_application')): the_row(); ?>
<div class="main mbl-sec">
    <div class="sub-title">
        <h3><?php the_sub_field('section_heading'); ?></h3>
    </div>
    <div class="content home-content">

        <div class="content-col">
            <h3><?php the_sub_field('main_heading'); ?></h3>
            <br>
            <p><?php the_sub_field('content'); ?></p>

            <div class="app-links">
                <a href="#">
                    <img src="<?php the_sub_field('playstore_icon'); ?>" alt="Google Play link">
                </a>
                <a href="#">
                    <img src="<?php the_sub_field('appstore_icon'); ?>" alt="Google Play link">
                </a>
            </div>
        </div>



        <div class="mobile-app-ss">
            <img src="<?php the_sub_field('app_screenshot'); ?>" alt="">
        </div>
    </div>

</div>
<?php endwhile; endif; ?>

<div class="side-bar">
    <div class="side-bar-item">
        <div class="sub-title-urdu">
            <p>آج کا سوال</p>
        </div>
        <div class="content">
            <p>سوال : ایک روایت کے مطابق حضرت زبیرؓ وہ کتنوے شخص تھے جنہوں نے بچپن میں ہی اسلام قبول کر لیا؟</p>
            <div class="answer">
                <div class="option">
                    <input type="radio" name="answer" id="">
                    <label for="">دوسرے</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer" id="">
                    <label for="">چوتھے</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer" id="">
                    <label for="">تیسرے</label>
                </div>
                <div class="option">
                    <input type="radio" name="answer" id="">
                    <label for="">پانچویں</label>
                </div>
            </div>
            <a href="#" class="answer-btn">جواب کے لئے کلک کریں</a>
        </div>
    </div>

    <div class="side-bar-item mt-20">
        <div class="sub-title-urdu">
            <p>تشہیر</p>
        </div>
        <div class="content">
            <img src="images/ad.png" alt="">
        </div>
    </div>
</div>

</section>

<?php get_footer(); ?>