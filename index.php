<?php get_header(); ?>

<?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();

            // LOOP HERE

        endwhile;

    else :
        echo "Something is going wrong.";

    endif;
?>

<?php get_footer(); ?>