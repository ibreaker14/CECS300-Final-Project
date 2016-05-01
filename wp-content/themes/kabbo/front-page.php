<?php
/*
	KABBO Theme's Front Page to Display the Home Page if Selected
	Copyright: 2013, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since KABBO 1.0
*/
?>

<?php get_header(); ?>
        	
			<div id="slider">
            <div id="da-slider" class="da-slider">
            
            <?php
		
			$kabbo_args = kabbo_ppp(); query_posts( $kabbo_args ); 
			if (have_posts()) : while (have_posts()) : the_post();?>
                        
            <div class="da-slide"><h2><?php the_title(); ?></h2><?php  $kabbo_excerpt_lengt=30; the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="da-link">Read More</a><?php the_post_thumbnail('slide-thumb', array('class' => 'da-img')); ?></div>
			
			<?php endwhile; endif; wp_reset_query(); ?>    
                
            <nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
                     
			</div></div>
  
<div id="container">   
<h1 id="heading"><?php echo of_get_option('heading_text', 'WordPress is web software you can use to create a <a href="#">beautiful website or blog</a>. We like to say that <a href="http://wordpress.org/">WordPress</a> is both free and priceless at the same time.'); ?></h1>

<?php get_template_part( 'featured-box' ); ?><br /><br />
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
 <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
 <div class="content-ver-sep"> </div>
 <div class="entrytext">
 <?php the_post_thumbnail('thumbnail');  kabbo_content(); ?>
 <div class="clear"> </div>
 <div class="up-bottom-border">
  
 <p class="postmetadata"><span class="postmetadataw">Posted by: <?php the_author_posts_link() ?> | on <?php the_time('F j, Y'); ?></span><br />Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php the_tags('<br />Tags: ', ', ', '<br />'); ?></p>
 
 </div>
 </div></div>
 
 <?php endwhile; ?>

<div id="page-nav">
<div class="alignleft"><?php previous_posts_link('Previous Entries' ) ?></div>
<div class="alignright"><?php next_posts_link('Next Entries') ?></div>
</div>
   
<?php endif; ?>
</div>

<?php get_sidebar( 'frontpage' );  ?>
<div class="clear"> </div>

<?php get_footer(); ?>