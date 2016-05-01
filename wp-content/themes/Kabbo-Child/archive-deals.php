<?php 
/* 	KABBO Theme's Archive Page
	Copyright: 2013, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since KABBO 1.0
*/

get_header(); ?><div id="container">  

<div id="content">
	<?php if (have_posts()) : ?>
		<?php echo "<h1>Check Out Our Featured Resort Deals</h1><br>" ?>
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="arc-post-title"><?php single_cat_title(); ?></h2><h3 class="arc-src">now browsing by category</h3>
		<?php if(trim(category_description()) != "<br />" && trim(category_description()) != '') { ?>
		<div id="description"><?php echo category_description(); ?></div>
		<?php }?>

		<div class="clear">&nbsp;</div>
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h1 class="arc-post-title"><?php single_tag_title(); ?></h1><h3 class="arc-src">now browsing by tag</h3>
		<div class="clear">&nbsp;</div>
		<div class="tagcloud"><?php wp_tag_cloud(''); ?></div>
		<div class="clear">&nbsp;</div>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1 class="arc-post-title"><?php echo get_the_date('l, F jS, Y'); ?></h1><h3 class="arc-src">now browsing by day</h3>
		<div class="clear">&nbsp;</div>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1 class="arc-post-title"><?php echo get_the_date('F, Y'); ?></h1><h3 class="arc-src">now browsing by month</h3>
		<div class="clear">&nbsp;</div>
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1 class="arc-post-title"><?php echo get_the_date('Y'); ?></h1><h3 class="arc-src">now browsing by year</h3>
		<div class="clear">&nbsp;</div>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1 class="arc-post-title">Archives</h1><h3 class="arc-src">now browsing by author</h3>
		<div class="clear">&nbsp;</div>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="arc-post-title">Archives</h1><h3 class="arc-src">now browsing the general archives</h3>
 	 	<?php } ?>

		<?php while (have_posts()) : the_post(); ?>
		
			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
 <div class="content-ver-sep"> </div>
 <section>
 <h2 class="post-title deal-title custom-deal-title"><?php the_title(); ?></h2>
 <!-- <div class="entrytext"> -->
 
 <div class='deal-image-thumb'>
<?php $banner =  types_render_field("deal-banner", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); 
if($banner=="Banner"){
?>
 		<img src="http://finalproject.dev/wp-content/uploads/2016/05/deal-banner.png" alt="" class="overlayed"/> 
 <?php }
 		the_post_thumbnail('thumbnail');  
 		echo types_render_field("deal-image", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"))."</a></div>"; 
 		?>
 </div><!-- end deal-image-thumb -->


 		<div class="deal-label"><h2>Price per night:</h2></div>
         <div class='deal-after'><h3>$ <?php echo types_render_field("deal-after", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?></h3></div>
 		<div class='deal-before'><h3>$ <?php echo types_render_field("deal-before", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?></h3></div>


 		<?php
 		echo "<div class='deal-content'>";
 		kabbo_content(); 
 		echo "</div>";
 ?>

<div class="deal-expire-wrapper">
Expires:&nbsp;&nbsp;  <div class='deal-expire'><?php echo types_render_field("deal-expire", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); ?></div>
 </div><!-- end deal-expire-wrapper -->
 </section>
 <div class="clear"> </div>
 <div class="up-bottom-border">

 </div><!-- </div> -->
 
 <?php endwhile; ?>
<div id="page-nav">
<div class="alignleft"><?php previous_posts_link('Previous Entries' ) ?></div>
<div class="alignright"><?php next_posts_link('Next Entries') ?></div>
</div>
  
 
 <?php else: ?>
 
 <h1 class="page-title">Not Found</h1>
<h3 class="arc-src"><span>Apologies, but the Page/Post/Content you requested could not be found. Perhaps searching will help</span></h3>

<?php get_search_form(); ?>
<span id="page-nav"><a class="alignleft" href="<?php echo esc_url( home_url() ); ?>" >Or Return to the Home Page</a></span></p>
<div class="clear"> </div>
<h2 class="post-title-color">You can also Visit the Following. These are the Featured Contents</h2>
<div class="content-ver-sep"></div><br />
<?php get_template_part( 'featured-box' ); ?>
 
<?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
