<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 * 
 * 
 * Template Name: Projects Page
 */

get_header();


	echo the_content();



/* Start the Loop */

	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	query_posts(array(
		'post_type'      => 'projects', // You can add a custom post type if you like
		'paged'          => $paged
	));

	if ( have_posts() ) : ?>
	

<div class="projects-wrapper">
	<?php while ( have_posts() ) : the_post(); ?>

		<a href="<?php the_permalink(); ?>">
		<div class="project-box">
			<div class="featured-img-wrap">
			<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail('full');
					}
				?>	
			</div>

			<h2 class="prj-title"><?php echo the_title(); ?></h2>
		
		</div>
		</a>

	<?php endwhile; ?>		
	</div>

	<?php else : ?>
		<?php // no posts found message goes here ?>		
	<?php endif; wp_reset_query();?>	






<?php

get_footer();
