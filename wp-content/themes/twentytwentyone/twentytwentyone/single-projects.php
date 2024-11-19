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
 * Template Name: Projects Detail
 * Template Post Type: projects
 * 
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	//get_template_part( 'template-parts/content/content-single' );
	?>	


	<div class="fimg-section">
		<?php
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail('full');
			}
		?>	
	</div>


	<div class="project-box dt">

			<div class="fld-wrapper">
				<h2 class="field-lbl">Project Name</h2>
				<p class="field-txt"><?php the_field('project_name'); ?></p>
			</div>

			<div class="fld-wrapper">
				<h2 class="field-lbl">Project Description</h2>
				<p class="field-txt"><?php the_field('project_description'); ?></p>
			</div>

			<div class="fld-wrapper">
				<h2 class="field-lbl">Start Date</h2>
				<p class="field-txt"><?php the_field('project_start_date'); ?></p>
			</div>

			<div class="fld-wrapper">
				<h2 class="field-lbl">End Date</h2>
				<p class="field-txt"><?php the_field('project_end_date'); ?></p>
			</div>

			<div class="fld-wrapper">
				<h2 class="field-lbl">Project URL</h2>
				<p class="field-txt"><?php the_field('project_url'); ?></p>
			</div>
		</div>

<?php 
	if ( is_attachment() ) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: Parent post link. */
				'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone' ), '%title' ),
			)
		);
	}

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		//comments_template();
	}

	// Previous/next post navigation.
	$twentytwentyone_next = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' );
	$twentytwentyone_prev = is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' );

	$twentytwentyone_next_label     = esc_html__( 'Next post', 'twentytwentyone' );
	$twentytwentyone_previous_label = esc_html__( 'Previous post', 'twentytwentyone' );

	the_post_navigation(
		array(
			'next_text' => '<p class="meta-nav">' . $twentytwentyone_next_label . $twentytwentyone_next . '</p><p class="post-title">%title</p>',
			'prev_text' => '<p class="meta-nav">' . $twentytwentyone_prev . $twentytwentyone_previous_label . '</p><p class="post-title">%title</p>',
		)
	);
endwhile; // End of the loop.

get_footer();
