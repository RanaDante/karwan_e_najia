<?php get_header(); ?>

<section class="w-75 two-column mt-40 about">
    <div class="main">
        <div class="main-item">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="sub-title">
                    <h3><span style="font-size: 26px; margin-left:10px;"><?php the_title(); ?></span></h3>
                </div>
                <div class="about-content kaalam">
                    <h4 class="kaalam-title"></h4>
                    <div class="feature_image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <?php the_content(); ?>
                    <p class="para"><?php #the_field('event_content'); ?>
                </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>

        
    </div>
    
    <div class="side-bar">
        <div class="side-bar-item">
            <div class="sub-title-urdu">
                <p>مقبول خبریں</p>
            </div>

            <?php 
                $single_args = array (
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'order' => 'DESC'
                );
                $single_query = new wp_query($single_args);
            ?>
            
            <?php if($single_query->have_posts()): while($single_query->have_posts()): $single_query->the_post(); ?>
            <div class="side-bar-content-item">
                <h4><?php the_title(); ?></h4>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="side-bar-btn">مزیدپڑھیں</a>
            </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>

            <div class="show-more">
                <a href="#" class="side-bar-btn">تمام خبریں</a>
            </div>
        </div>

        <div class="side-bar-item mt-20">
            <?php 
                $qustion_args = array (
                    'post_type' => 'cpt_questions',
                    'posts_per_page' => 1,
                    'order' => 'DESC'
                );
                $qustion_query = new wp_query($qustion_args);
            ?>
            <div class="sub-title-urdu">
                <p>آج کا سوال</p>
            </div>
            <div class="content">
                <form action="#">  
                    <?php if($qustion_query->have_posts()): while($qustion_query->have_posts()): $qustion_query->the_post(); ?>
                        <div class="content">
                            <!-- <div class="right-answer" >
                                <p>Answer is Correct</p>
                            </div> -->
                            <p>
                                <?php the_title(); ?>
                            </p>
                            
                            <div class="answer">
                                <?php if(have_rows('answer_options')): while(have_rows('answer_options')): the_row(); ?>
                                    <?php if(get_sub_field('correct_answer')): ?>
                                        <input type="hidden" class="correct_answer"  value="<?php the_sub_field('question_choice'); ?>">
                                    <?php endif; ?>

                                    <div class="option">
                                        <label for="<?php echo str_replace(' ', '_', get_sub_field('question_choice')); ?>">
                                            <input type="radio" name="question_answer" class="question_answer_radio" value="<?php the_sub_field('question_choice'); ?>" id="<?php echo str_replace(' ', '_', get_sub_field('question_choice')); ?>">
                                            <?php the_sub_field('question_choice'); ?>
                                        </label>
                                    </div>
                                
                                <?php endwhile; endif; ?>
                            </div>
                            <button type="submit" class="answer-btn">جواب کے لئے کلک کریں</button>
                        </div>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </form>
            </div>
        </div>

        <div class="side-bar-item mt-20">
            <div class="sub-title-urdu">
                <p>تشہیر</p>
            </div>
            <?php 
                $ad_args = array (
                    'post_type' => 'cpt_advertisements',
                    'posts_per_page' => 1,
                    'order' => 'DESC'
                );
                $ad_query = new wp_query($ad_args);
            ?>
            <?php if($ad_query->have_posts()): while($ad_query->have_posts()): $ad_query->the_post(); ?> 
                <div class="content">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>

</section>

<!-- POPULAR NEWS -->
<section class="popular-news w-75">
    <h1 class="h1">مقبول خبریں</h1>
    <div class="news">
        <?php 
            $single_args = array (
                'post_type' => 'post',
                'posts_per_page' => 6,
                'order' => 'DESC'
            );
            $single_query = new wp_query($single_args);
        ?> 

        <?php if($single_query->have_posts()): while($single_query->have_posts()): $single_query->the_post(); ?>
            <div class="news-item">  
                <a href="<?php the_permalink(); ?>">
                    <div class="thumbnail-bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                    <h3 class="h3"><?php the_title(); ?></h3>
                    
                    <?php the_excerpt(); ?>
                    <a href="#" class="event-link"> مزید <span class="border-btm"> دیکھیں </span></a>
                </a>
            </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>

        

    </div>
    <div class="read">
        <a href="#" class="read-more">مزید دیکھیں</a>
    </div>
</section>

<?php get_footer(); ?>