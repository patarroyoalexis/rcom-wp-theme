<?php get_header();?>

  
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
            <!--Entrada-->
                <div class="container" style="padding-top:2em;"><?php the_content();?></div>
            <!--Fin Entrada-->
            <?php
            endwhile;
        endif;
        ?>
        
 
<?php get_footer(); ?>