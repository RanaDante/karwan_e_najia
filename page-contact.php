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
                    <p><?php //the_field('email'); ?></p>
                    <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>

                </div>
                <div class="contact-col">
                    <i class="fas fa-phone-square"></i>
                    <h3 class="head3">Phone Number</h3>
                    <?php if( have_rows('phone_number') ) :?>
                        <?php while( have_rows('phone_number') ) : the_row();?>
                            <p><?php the_sub_field('title_of_number');?> : 
                            <a href="tel:<?php the_sub_field('phone_number');?>">
                            <?php the_sub_field('phone_number');?></a></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                        
                    
                    <!-- <p><?php //the_field('phone_number'); ?></p> -->

                </div>
            </div>
        </div>

    </div>

    <?php get_sidebar(); ?>
    


</section>
<?php get_footer(); ?>