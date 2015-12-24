<!-- ********************************************************************* -->
<!--****************** Site footer      ***********************************-->
<!-- ********************************************************************* -->


<footer class="site-footer">

    <?php get_sidebar('footer-first'); ?>

    <div class="credit-holder">
        <section class="layout">
            <div class="footer-logo">
                <?php
                    if(is_rtl()){
                        echo '<img src="' . get_template_directory_uri() . '/images/crane_hse-logo-fa-200.png" class="footer-fa-logo" />';

                    }else {
                        echo '<img src="' . get_template_directory_uri() . '/images/crane_hse-logo-en-200.png" class="footer-en-logo" />';

                    }
                ?>
            </div>

            <div class="credit">
                <?php echo __('Alborz Industrial Group © 2015. All Right Reserved', 'crane_hse'); ?>
                <span class="site-holder">
                    <?php echo __('Designed by ','crane_hse').'<a href="http://karait.com">'.__('Farakaranet','crane_hse').'</a>';?>
                </span>
            </div>

        </section>
    </div>
</footer>


</div>

<?php wp_footer(); ?>
</body><!-- body -->
</html><!-- html -->