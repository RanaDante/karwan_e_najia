<?php 
/**
 * Template Name: About
 */
?>
<?php get_header(); ?>
<!-- /* TWO COLUMN LAYOUT */ -->
<section class="w-75 two-column mt-40 about">
    <div class="main">
        <div class="main-item">
            <div class="sub-title">
                <h3><span style="font-size: 26px; margin-left:10px;">کاروان ناجیہ</span>INTRODUCTION</h3>
            </div>
            <?php if( have_rows('about_content_') ): ?>
            <?php while( have_rows('about_content_') ): the_row();?>

            <div class="about-content">
                <img src=" <?php the_sub_field('about_section_image'); ?>" alt="">
               
                <p><?php the_sub_field('about_section_text_content'); ?></p>
                
            </div>
                
            <?php endwhile; endif; ?>

        </div>

        
        <div class="main-item">
            <div class="sub-title">
                <h3><span style="font-size: 26px; margin-left:10px;">بانی کاروان ناجیہ </span></h3>
            </div>
            <div class="founder">
                
                <?php if( have_rows('founders_section') ): ?>
                <?php while( have_rows('founders_section') ): the_row();?>
                
                <div class="founder-img">
                    <img src="<?php the_sub_field('founder_image'); ?>" alt="">
                </div>
                <div class="founder-msg">
                    <?php the_sub_field('founders_message'); ?>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>

        <div class="main-item">
            <div class="sub-title">
                <h3><span style="font-size: 26px; margin-left:10px;">روحانی درس گاہ </span></h3>
            </div>
            <div class="founder org">
                <?php if( have_rows('organization_section') ): ?>
                <?php while( have_rows('organization_section') ): the_row();?>
                
                <div class="founder-msg">
                    <?php the_sub_field('org_details'); ?>
                </div>

                <div class="founder-img" style="border:0px; padding:0px ;">
                    <img src="<?php the_sub_field('org_image'); ?>" alt="">
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>

    <?php get_sidebar(); ?>

</section>
<?php get_footer(); ?>