    <!-- FOOTER -->
    <footer>
        <div class="w-75 footer-wrap">
            

            <div class="footer-item newsletter" dir="ltr">
                <h3>Subscribe to Newsletter</h3>
                <input type="email" name="" id="" placeholder="Enter your Mail">
                <input type="submit" value="Subscribe" class="sub-btn"> 
            </div>

            <div class="footer-item second-item">
                <h3>Menu</h3>
                <div class="footer-menu">
                    
                    <?php 
                        wp_nav_menu( array(
                            'menu' => 'Footer 1',
                            'menu_class' => '',
                            'container' => 'div',
                            'container_class' => 'div-submenu'
                        ) );
                    ?>
                    <?php 
                        wp_nav_menu( array(
                            'menu' => 'Footer 2',
                            'menu_class' => '',
                            'container' => 'div',
                            'container_class' => 'div-submenu'
                        ) );
                    ?>
                </div>
            </div>

            <div class="footer-item first-item">
                
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                <?php endif; ?>

                <?php if ( is_active_sidebar( 'social-1' ) ) : ?>
                    <?php dynamic_sidebar( 'social-1' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </footer>

    <!-- COPYRIGHT BAR -->
    <div class="copyright-bar">
        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
            <?php dynamic_sidebar( 'footer-2' ); ?>
        <?php endif; ?>
    </div>


<?php wp_footer(); ?>

</body>

</html>
