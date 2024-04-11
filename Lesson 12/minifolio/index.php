<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Minifolio - Bootstrap Responsive Resume, Personal Portfolio Template</title>

<?php wp_head(); ?>
</head>

<body>
<!-- header section -->
<section class="banner" role="banner">
  <header id="header">
    <!-- navigation section  -->
    <div class="header-content clearfix"><?php the_custom_logo(); ?>
      <nav class="navigation" role="navigation">
      <?php wp_nav_menu(
        array(
          'theme_location' => 'main_menu',
          'menu_class'    => 'primary-nav',
          'container'   => ''
          )
        ); ?>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    <!-- navigation section  -->
  </header>

  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="banner-text text-center">
      <?php if( is_active_sidebar('banner')){
        dynamic_sidebar('banner');
      } ?>
      </div>
    </div>
  </div>
</section>
<!-- header section -->
<!-- description text section -->
<section id="aboutme" class="section descripton">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 text-center">
    <?php if( is_active_sidebar('about-me')){
        dynamic_sidebar('about-me');
      } ?>
    </div>
  </div>
</section>
<!-- description text section -->
<!-- portfolio section -->
<section id="works" class="works section no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">

      <?php
      $args = array(
        'posts_per_page'  => 8,
        'category__in'  => array(3, 4, 5, 6)
      );
      $work = new WP_Query( $args );
      if( $work->have_posts()):
        while($work->have_posts() ):
          $work->the_post();
          ?>
          <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="<?php the_post_thumbnail_url(); ?>" class="work-box"> <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <div class="overlay">
              <div class="overlay-caption">
                <h5><?php the_title(); ?></h5>
                <p><?php foreach( ( get_the_category() ) as $category ){ echo $category->cat_name; } ?></p>
              </div>
            </div>
            <!-- overlay -->
            </a>
          </div>
          <?php
        endwhile;
        wp_reset_postdata();
      else:
        echo 'No posts to display';
      endif;
      ?>


    </div>
  </div>
</section>
<!-- portfolio section -->
<!-- hire me section -->
<section id="hireme" class="section hireme">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
    <?php if( is_active_sidebar('hire-me')){
        dynamic_sidebar('hire-me');
      } ?>
    </div>
  </div>
</section>
<!-- hire me section -->



<section id="contact" class="section contact">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 text-center">
    <?php if( is_active_sidebar('contact')){
        dynamic_sidebar('contact');
      } ?>
    </div>
  </div>
</section>


<!-- footer -->
<footer class="section footer">
  <div class="footer-bottom">
    <div class="container">
      <div class="col-md-12">
        <p>
        <?php wp_nav_menu(
        array(
          'theme_location' => 'social_media',
          'menu_class'    => 'footer-share',
          'container'   => ''
          )
        ); ?>
        </p>
        <p>© 2015 All rights reserved. All Rights Reserved<br>
          Made with <i class="fa fa-heart pulse"></i> by <a href="http://www.designstub.com/">Designstub</a><br>
          Resesigned by <a href="#">Marcelo Vieira</a>
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- footer -->


<?php wp_footer(); ?>
</body>
</html>