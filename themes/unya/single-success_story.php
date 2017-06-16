<?php
/**
 * The template for displaying all single success stories.
 *
 * @package UNYA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php while ( have_posts() ) : the_post(); ?>
		  <div class="content-wrapper">
        <h3 class="single-success-title">Youth Feature - <?php the_title(); ?></h3>
			 	<p class="first-half"><?php echo CFS()->get( 'first_half_of_story' ); ?></p>
				<img class="single-success-image" src="<?php echo CFS()->get( 'photo' ); ?>">			
				<h5 class="exerpt"><?php echo CFS()->get( 'exerpt' ); ?></h5>
        <p class="second-half"><?php echo CFS()->get( 'second_half_of_story' ); ?></p>
      </div>
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>