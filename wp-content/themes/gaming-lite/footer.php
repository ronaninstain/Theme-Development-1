<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('gaming-lite-footer-sidebar')) {
        echo '<div class="row sidebar-area footer-area">';
          dynamic_sidebar('gaming-lite-footer-sidebar');
        echo '</div>';
      }
    ?>
    <div class="row">
      <div class="col-md-12">
        <p class="mb-0 py-3 text-center text-md-left">

          <?php
            if (!get_theme_mod('gaming_lite_footer_text') ) { ?>
              <?php esc_html_e('Gaming WordPress ','gaming-lite'); ?>
            <?php } else {
              echo esc_html(get_theme_mod('gaming_lite_footer_text'));
            }
          ?>
          <?php if ( get_theme_mod('gaming_lite_copyright_enable', true) == true ) : ?>
            <?php 
            /* translators: %s: Misbah WP */ 
            printf( esc_html__( ' Theme By %s', 'gaming-lite' ), 'Misbah WP' ); ?>
            <a href="<?php echo esc_url(__('https://wordpress.org', 'gaming-lite' )); ?>" rel="generator"><?php  /* translators: %s: WordPress */  printf( esc_html__( ' | Proudly powered by %s', 'gaming-lite' ), 'WordPress' ); ?></a>
          <?php endif; ?>
        </p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
