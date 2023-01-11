<?php get_header();?>
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();?>
      <div>
        <div style="padding-top: 4em;">
          <div class="py-5" style="background-color: #081158;">
          <h2 class=" container display-5 fw-bold text-center text-light"><?php the_title();?></h2>
          </div>
        </div>
        <div class="container my-5">
          <div class="card-body">
              <div class="col fs-4 lead">
                <?php the_content(); ?>
              </div>
          </div>
        </div>
      </div>  
    <?php
    endwhile;
endif;
?>
    
    
    
<?php get_footer(); ?>