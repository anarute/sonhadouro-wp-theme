<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" /> 
    <link href='http://fonts.googleapis.com/css?family=Flamenco' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.leanModal.min.js" type="text/javascript"></script>

    <title><?php bloginfo( 'name' ); ?><?php wp_title( '&mdash;' ); ?></title>
    <?php if ( is_singular() && get_option( 'thread_comments') ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div id="container">

      <header id="header">
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <?php if ( has_nav_menu( 'menu' ) ) : wp_nav_menu(); ?>
        <?php endif; ?>
        <div class="clear"></div>
      </header><!-- header -->

      <aside id="menu_lateral">

        <?php if ( have_posts() ) : ?>
          <ul class="lateral_menu">
          <?php while ( have_posts() ) : the_post(); ?>
            <li id="post_<?php the_ID();?>" class="post_link"><a rel="leanModal" href="#content_<?php the_ID();?>"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>

      </aside>

      <aside id="lateral_search">
        <?php get_search_form( $echo ); ?>
        <div id="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
        </div>
      </aside>

      <div id="content">   
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post_<?php the_ID();?> left post">
              <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
                <a rel="leanModal" href="#content_<?php the_ID();?>"><?php the_post_thumbnail(); ?></a>
              <?php } ?>
              
              <div id="content_<?php the_ID();?>" class="post-content">
                <?php the_content(); ?>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

      </div><!-- content -->
    </div><!-- container -->
    <?php wp_footer(); ?>
  </body>
</html>