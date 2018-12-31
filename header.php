<!DOCTYPE html>
<!-- BEGIN html -->
<html <?php language_attributes(); ?>>
 
<!-- BEGIN head -->
<head>
 
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
 
<!-- END head -->
</head>
 
<!-- BEGIN body -->
<body <?php body_class(); ?>>
 
  	<div class="container">
    	<div class="header">
      		<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    		<div id="site-description"><?php bloginfo( 'description' ); ?></div>  
    	</div>
 
    	<div class="header-menu">
          <?php if ( has_nav_menu( 'primary-menu' ) ) { ?>
            <?php wp_nav_menu( array( 'theme_location' => 'primary-menu') ); ?>
          <?php } else { ?>
                  <ul class="sf-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="/?page_id=2">Sample Page</a></li>
                    <li><a href="/?p=1">Sample post</a></li>
                  </ul>
          <?php } ?>
    	</div>
 
    	<div class="row">
