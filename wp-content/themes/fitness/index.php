<?php get_header(); ?>

<?php 
if (is_home()): 
	load_template(locate_template('home/section_slider.php'));		
	load_template(locate_template('home/section_services.php'));
	load_template(locate_template('home/section_about.php'));
	load_template(locate_template('home/section_gallery.php'));
	load_template(locate_template('/home/section_instructors.php'));
	load_template(locate_template('/home/section_price.php'));
	load_template(locate_template('/home/section_reviews.php'));	
	load_template(locate_template('/home/section_calcindex.php'));
	load_template(locate_template('/home/section_articles.php'));
 else:
	$postid = get_the_ID();
	switch ($postid) {
		case '23':
			load_template(locate_template('about.php'));
			break;
		case '26':
			load_template(locate_template('statiy.php'));
			break;		
		case '28':
			load_template(locate_template('contact.php'));
			break;			
		default:
			load_template(locate_template('404.php'));
			break;
	}
	
	//load_template($current_template);		
 endif;
 ?>

<?php get_footer(); ?>