<?php 

// Your Category Wordpress
$category = "25"; 

// Is Home?
if(is_home()){
	
	query_posts("cat=$category&showposts=1");
	if ( have_posts() ) while ( have_posts() ) : the_post(); 

	// Variable
	$youtube = get_post_meta($post->ID, 'youtube',single);
	$url	 = get_stylesheet_uri();

	// return
	$saida = "<div class=\"hotsite\">
				<div class=\"video\">
					<div class=\"fecharHot\"></div>
					<div id=\"player\" data-video=\"{$youtube}\"></div>
				</div>
			</div>
			<link rel=\"stylesheet\" href=\"{$url}/css/wp-youtube-lightbox.css\">
			<script type=\"text/javascript\" src=\"{$url}/js/youtube-lightbox.js\"></script>";
		
	// print
	print $saida;

	endwhile; 
	wp_reset_query(); 

}  

?> 
