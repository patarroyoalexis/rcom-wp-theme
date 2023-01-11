    
  </main>
    <!--Footer-->
    <div class="bg-dark text-light pt-5">
      <div class="container">
        <footer class="py-1">
          <div class="row">
            <div class="col-3 col-md-2 mb-3">
              <h5>Menú</h5>
              <?php wp_nav_menu( 
                array(
                  'theme_location' => 'menu-principal',
                  'container' => 'div',
                  'container_class' => '',
                  'items_wrap' => '<ul class="nav flex-column">%3$s</ul>',
                  'menu_class' => 'nav-item mb-2'
                )
              );?>
            </div>
            <?php get_sidebar('contacto'); ?>
            <div class="ms-auto col-md-5 offset-md-1 mb-3">
              <?php dynamic_sidebar( 'form-footer' ); ?>
              <?php get_template_part( 'template-parts/content','form' );?>
            </div>
          <?php get_template_part( 'template-parts/content','rights' );?>
        </footer>
      </div>
    </div>
    <!--Fin Footer-->

    <?php wp_footer(); ?>
  </body>
</html>