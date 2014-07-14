<?php get_header(); ?>

<div class="hug units-row">

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>

    <?php the_content(); ?>
            
    <?php
        endwhile;

    else :
        echo "Something is going wrong.";

    endif;
    ?>

</div>

<?php get_footer(); ?>