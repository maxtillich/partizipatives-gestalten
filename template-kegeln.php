<?php
/*
 * Template Name: Kegeln
 */
?>

<?php get_header(); ?>

<div class="livestream">
   <iframe width="720" height="437" src="http://www.ustream.tv/embed/3132688?v=3&amp;wmode=direct" scrolling="no" frameborder="0" style="border: 0px none transparent;"></iframe>
</div>

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