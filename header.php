<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta name="description" content="<?php if ( is_single() ) {
      single_post_title('', true);
    } else {
      bloginfo('name'); echo " - "; bloginfo('description');
    }
  ?>" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <section class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-3 col-lg-3 col-xl-3">
          <span class="header-info email"><i class="far fa-envelope-open"></i> contact@comunabarsau.ro</span>
        </div>
        <div class="col-12 col-md-3 col-lg-3 col-xl-3">
          <span class="header-info phone"><i class="fas fa-phone"></i> +40 765 726 927 | 0260 421 612</span>
        </div>
        <div class="col-12 col-md-3 col-lg-3 col-xl-6 d-flex justify-content-end">
          <a href="#" class="btn btn-primary btn-green br-0 ml-auto">Programare Audiență</a>
        </div>
      </div>
    </div>
  </section>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse ml-auto" id="navbarDropdown">
        <?php
          wp_nav_menu( array(
            'theme_location'  => 'navbar',
            'container'       => false,
            'menu_class'      => '',
            'fallback_cb'     => '__return_false',
            'items_wrap'      => '<ul id="%1$s" class="navbar-nav ml-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
            'depth'           => 2,
            'walker'          => new b4st_walker_nav_menu()
          ) );
        ?>
      </div>
    </div>
  </nav>
