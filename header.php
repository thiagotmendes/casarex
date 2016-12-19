<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php title_page() ?></title>

    <?php wp_head() ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <main>
      <div class="container-fluid body-site">
        <div class="row">
          <div class="col-md-2">
            <div class="menu-lateral">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.jpg" alt="">
              <div class="">
                <?php
                $args = array(
                  'theme_location' => 'menu_topo',
                  'menu_class' => 'menu-principal',
                  'fallback_cb' => 'fallback',
                );
                wp_nav_menu( $args );
                ?>
              </div>
            </div>
          </div>
