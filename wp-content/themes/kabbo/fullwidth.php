<?php
/*
	Template Name: Full Width
 	kabbo Theme's Full Width Page to show the Pages Selected Full Width
	Copyright: 2013, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since KABBO 1.0
*/
?>

<?php get_header(); ?><div id="container">  
<div id="content-full">
 <?php if (have_posts()) : while (have_posts()) : the_post();?> <h3 class="subtitle"><?php echo get_post_meta($post->ID, 'sb_subtitle', 'true'); ?></h3>
 <h1 id="post-<?php the_ID(); ?>" class="page-title"><?php the_title();?></h1>
 <div class="content-ver-sep"> </div>
 <div class="entrytext">
 <?php the_post_thumbnail('category-thumb'); ?>
 <?php kabbo_content(); ?>
 </div><div class="clear"> </div>
 <?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>
 <?php comments_template(); ?>
 <?php endwhile; endif; ?>
 



</div>
<?php get_footer(); ?>