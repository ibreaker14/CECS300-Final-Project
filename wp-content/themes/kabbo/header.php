<?php

/* 	KABBO Theme's Header
	Copyright: 2012-2014, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since KABBO 1.0
*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?php wp_title() ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php  wp_head(); ?>

</head>

<body <?php body_class(); ?> >
  	  <div id="top-menu-container" ><div id="top-container">
      
      <!-- Site Main Menu Goes Here -->

	<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'm-menu', 'fallback_cb' => 'kabbo_page_menu'  ));  
	get_search_form(); echo '</div></div><div class="clear"></div> <div id ="header">'; ?>  
       
    <!-- Site Titele and Description Goes Here -->
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="site-logo" src="<?php header_image(); ?>"/></a> 
    <h2 class="site-des"><p><?php bloginfo( 'description' ); ?></p></h2>
                
        
 <?php echo '<div id="social">'; if (of_get_option('gplus-link', '#') !='') : echo '<a href="' . of_get_option('gplus-link', '#') . '" class="gplus-link" target="_blank"></a>'; endif; if (of_get_option('li-link', '#') !='') : echo '<a href="' . of_get_option('li-link', '#') . '" class="li-link" target="_blank"></a>';  endif; if (of_get_option('feed-link', '#') !='') : echo '<a href="' . of_get_option('feed-link', '#') . '" class="feed-link" target="_blank"></a>';
endif; echo '</div>'; ?>
     
      </div><!-- header -->
    
      
          
      
	  
	 
	  