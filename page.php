<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Flamenco' rel='stylesheet' type='text/css'>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
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

      <aside id="lateral_search">
        <div id="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
        </div>
      </aside>
      <aside id="menu_lateral">
        <?php get_search_form( $echo ); ?>
      </aside>

      <div id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
            <?php if ( !is_singular() && get_the_title() == '' ) : ?>
              <a href="<?php the_permalink(); ?>">(more...)</a>
            <?php endif; ?>
            <?php if ( is_singular() ) : ?>
              <div class="pagination"><?php wp_link_pages(); ?></div>
            <?php endif; ?>
            <div class="clear"> </div>
          </div><!-- post_class() -->
          <?php if ( is_singular() ) : ?>
            <?php comments_template(); ?>
          <?php endif; ?>
        <?php endwhile; else: ?>
          <div class="hentry"><h2>Ops, página não encontrada.</h2></div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'widgets' ) ) : ?>
          <div class="widgets"><?php dynamic_sidebar( 'widgets' ); ?></div>
        <?php endif; ?>
        <div class="clear"> </div>
      </div><!-- content -->
    </div><!-- container -->
    <?php wp_footer(); ?>
  </body>
</html>