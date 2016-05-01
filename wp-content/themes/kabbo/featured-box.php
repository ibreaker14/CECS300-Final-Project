<?php
/* 	KABBO Theme's Featured Box to show the Featured Items of Front Page
	Copyright: 2013, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since KABBO 1.0
*/
?>

<div id="featured-boxs">

<span class="featured-box-first">
<h2><a href="<?php echo of_get_option('featured-link1', '#'); ?>">
<?php if (of_get_option('featured-image1', get_template_directory_uri() . '/images/featured-image1.jpg') != '' ): echo '<img class="fimage"  src="'. of_get_option('featured-image1', get_template_directory_uri() . '/images/featured-image1.jpg') .'"/>'; endif;
echo of_get_option('featured-title1', 'KABBO is a Sweet Boy'); ?>
</a></h2>
<p><?php echo of_get_option('featured-description1', 'Kabob is a Sweet Boy of 6 Months. He can press the Keys of a Laptop. He will be growing with various Digital Equipments. There are Millions of Children around us who do not know what a laptop is. How will they dream to change the world? Let us do something for those Children, let us remove the Digital Divide.') . '<a href="'. of_get_option('featured-link1', '#') . '" class="read-more" >' . of_get_option('readmore', 'Read More') . '</a>'; ?></p>
</span>

<span class="featured-box">
<h2><a href="<?php echo of_get_option('featured-link2', '#'); ?>">
<?php if (of_get_option('featured-image2', get_template_directory_uri() . '/images/featured-image2.jpg') != '' ): echo '<img class="fimage"  src="'. of_get_option('featured-image2', get_template_directory_uri() . '/images/featured-image2.jpg') .'"/>'; endif;
echo of_get_option('featured-title2', 'KABBO is a Sweet Boy'); ?>
</a></h2>
<p><?php echo of_get_option('featured-description2', 'Kabob is a Sweet Boy of 6 Months. He can press the Keys of a Laptop. He will be growing with various Digital Equipments. There are Millions of Children around us who do not know what a laptop is. How will they dream to change the world? Let us do something for those Children, let us remove the Digital Divide.') . '<a href="'. of_get_option('featured-link2', '#') . '" class="read-more" >' . of_get_option('readmore', 'Read More') . '</a>'; ?></p>
</span>

<span class="featured-box">
<h2><a href="<?php echo of_get_option('featured-link3', '#'); ?>">
<?php if (of_get_option('featured-image3', get_template_directory_uri() . '/images/featured-image3.jpg') != '' ): echo '<img class="fimage"  src="'. of_get_option('featured-image3', get_template_directory_uri() . '/images/featured-image3.jpg') .'"/>'; endif;
echo of_get_option('featured-title3', 'KABBO is a Sweet Boy'); ?>
</a></h2>
<p><?php echo of_get_option('featured-description3', 'Kabob is a Sweet Boy of 6 Months. He can press the Keys of a Laptop. He will be growing with various Digital Equipments. There are Millions of Children around us who do not know what a laptop is. How will they dream to change the world? Let us do something for those Children, let us remove the Digital Divide.') . '<a href="'. of_get_option('featured-link3', '#') . '" class="read-more" >' . of_get_option('readmore', 'Read More') . '</a>'; ?></p>
</span>

</div> <!-- featured-boxs -->
<div class="content-ver-sep" style="margin: 0 -30px;"> </div>