<?php
/**
 * The template for displaying the programs archive.
 * @package UNYA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<div class="program-header programs-title header-wrapper sidebar-start">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</div><!-- .page-header -->

			<section id="calendar">
				<h2>Calendar</h2>
				<div class="hidden-desktop mobile-calendar">
					<?php echo do_shortcode("[calendar id=274]"); ?>
				</div>
				<div class="hidden-mobile content-wrapper desktop-calendar">
					<?php echo do_shortcode("[calendar id=268]"); ?>
				</div>
			</section>

			<?php get_template_part( 'template-parts/program', 'content' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>