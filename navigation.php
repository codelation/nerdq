<?php if ( has_nav_menu( 'primary' ) ) : ?>
  <div class="main-menu-wrapper">
    <nav id="site-navigation" class="main-menu main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'codelationdefault' ); ?>">
      <?php
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'primary-menu',
      ) );
      ?>
    </nav><!-- .main-navigation -->
  </div>
<?php endif; ?>
