<div class="side-bar">
    <?php if (!is_front_page()): ?>
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
                <a href="<?php the_permalink(); ?>" class="blue"><h4><?php the_title(); ?></a></h4>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="side-bar-btn">مزیدپڑھیں</a>
            </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>

            <div class="show-more">
                <a href="http://localhost/karwanenajia/news/" class="side-bar-btn">تمام خبریں</a>
            </div>
        </div>
    <?php endif; ?>
    
    <div class="side-bar-item ">
        <?php 
            $qustion_args = array (
                'post_type' => 'cpt_questions',
                'posts_per_page' => 1,
                'order' => 'DESC',
                'order_by' => 'rand'
            );
            $qustion_query = new wp_query($qustion_args);
        ?>
        <div class="sub-title-urdu mt-20" >
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
                        <input type="hidden" class="correct_answer" value="<?php the_sub_field('question_choice'); ?>">
                        <?php endif; ?>

                        <div class="option">
                            <label for="<?php echo str_replace(' ', '_', get_sub_field('question_choice')); ?>">
                                <input type="radio" name="question_answer" class="question_answer_radio"
                                    value="<?php the_sub_field('question_choice'); ?>"
                                    id="<?php echo str_replace(' ', '_', get_sub_field('question_choice')); ?>">
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
            <?php the_content(); ?>
        </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
</div>