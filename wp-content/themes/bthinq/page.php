<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main ">
        <?php

        while (have_posts()) :
            the_post();  
            the_content();
            get_template_part('template-parts/content', 'page');
           
        endwhile; // End of the loop.
        ?>
    </main>
</div>

<?php 
get_footer();
