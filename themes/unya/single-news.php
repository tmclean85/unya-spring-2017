<?php
/**
 * The template for displaying all single success stories.
 *
 * @package UNYA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="header-wrapper impact-title sidebar-start single-success-banner" style="background-image: linear-gradient(to bottom,rgba(66,99,171,0.7) 0%, rgba(66,99,171,0.7) 100%),
    url(<?php echo CFS()->get( 'photo' ); ?>)";>
			<h1>News</h1>
		</header>

		<?php while ( have_posts() ) : the_post(); ?>
		  <div class="content-wrapper">
        <h2 class="single-success-title">Featured Article - <?php the_title(); ?></h3>
			
				<span class="success-image-exerpt">
				  <img class="single-success-image hidden-mobile" src="<?php echo CFS()->get( 'article_photo' ); ?>">
				 
			  </span>
		  	</div>
				<div class="success-image-mobile hidden-desktop" style="background-image:  linear-gradient(to bottom,rgba(74,74,74,0.7) 0%, rgba(74,74,74,0.7) 100%),
          url(<?php echo CFS()->get( 'article_photo' ); ?>)";>
				</div>
       
			  <div class="content-wrapper">
         <p class="first-half"><?php echo CFS()->get( 'article_text' ); ?></p>
        </div>
		  <?php endwhile; // End of the loop. ?>
			<?php get_template_part( 'template-parts/prefooter', 'fit' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar('success'); ?>
<?php get_footer(); ?>
