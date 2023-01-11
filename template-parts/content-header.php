<header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
        <div class="container">
          <div>
            <?php the_custom_logo();?>
          </div>
          <a class="navbar-brand" href="<?php echo home_url()?>">
            <?php echo get_bloginfo( 'name' );?>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <?php wp_nav_menu( 
                array(
                  'theme_location' => 'menu-principal',
                  'container' => 'div',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id' => 'navbarSupportedContent',
                  'items_wrap' => '<ul class="navbar-nav mb-2 mb-lg-0 ms-auto">%3$s</ul>',
                  'menu_class' => 'nav-item ms-4'
                )
              );
            ?>
          
        </div>
      </nav>
</header>