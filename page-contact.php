<?php 
/**
 * Template Name: Contact
 */
?>
<?php get_header(); ?>
<!-- /* TWO COLUMN LAYOUT */ -->
<section class="w-75 two-column mt-40 about">
    <div class="main">
        <div class="main-item">
            <div class="sub-title">
                <h3><span style="font-size: 26px; margin-left:10px;">رابطہ</span></h3>
            </div>
            <!-- <form action="#" dir="ltr"> -->
                <?php the_content(); ?>
                <!-- <div class="contact">
                    
                    <div class="field-group-con">
                        <label class="label" for="name">Name</label>
                        <input type="text" class="input-field" id="name" placeholder="eg : Abdul Basit">
                        
                    </div>

                    <div class="field-group-con">
                        <label class="label" for="subject">Subject</label>
                        <input type="text" class="input-field" id="subject" placeholder="Reason to contact here.">
                    </div>

                    <div class="field-group-con">
                        <label class="label" for="email">Email Address</label>
                        <input type="email" class="input-field" id="email" placeholder="Please enter your Email Address here.">    
                    </div>

                    <div class="field-group-con">
                        <label class="label" for="phone">Phone Number</label>
                        <input type="text" class="input-field" id="phone" placeholder="Please enter your Phone Number here.">
                    </div>

                    <div class="field-group-con address">
                        <label class="label" for="address">Address</label>
                        <input type="text" class="input-field" id="address" placeholder="Please enter your Address here.">
                    </div>

                    <div class="field-group-con message">
                        <label class="label" for="message">Message</label>
                        <textarea class="input-field" id="message" cols="30" rows="5" placeholder="Please enter your Message here."></textarea>
                    </div>

                    <div class="button">
                        <input type="submit" value="Send" class="contact-btn">
                    </div>
                </div> -->
            <!-- </form> -->

            <div class="contact-bar">
                <div class="contact-col">
                    <i class="fas fa-globe-asia"></i>
                    <h3 class="head3">Address</h3>
                    <p><?php the_field('address'); ?></p>
                </div>
                <div class="contact-col">
                    <i class="far fa-envelope"></i>
                    <h3 class="head3">Email Address</h3>
                    <p><?php the_field('email'); ?></p>

                </div>
                <div class="contact-col">
                    <i class="fas fa-phone-square"></i>
                    <h3 class="head3">Phone Number</h3>
                    <p><?php the_field('phone_number'); ?></p>

                </div>
            </div>
        </div>

    </div>

    <?php get_sidebar(); ?>
    


</section>
<?php get_footer(); ?>