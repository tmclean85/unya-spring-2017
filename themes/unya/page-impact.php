<?php
/**
 * The template for displaying the impact page.
 *
 * @package UNYA_Theme
 */
 $success_story = get_posts($args);
 $args= array(
     'post_type'=> 'success_story',
     'posts_per_page'=> 6
 );

 $volunteer = get_posts($args);

 $args= array(
     'post_type'=> 'volunteer',
     'posts_per_page'=> 6
 );

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="header-wrapper impact-title sidebar-start">
			<h1>Impact</h1>
		</header>

		<section class="how-we-work">
			<div class="content-wrapper">
				<h2>How We Work</h2>
				<p><?php echo wp_kses( CFS()->get( 'how_we_work' ),array('br') ); ?></p>
			</div>
		</section>

		<div class="accordion" id="accordion">
		<?php /* Start the Loop */ ?>
		<h2 class="accordion-label" id="success-stories">Success Stories</h2>
	  <section class="success-stories">
			<header class="section-heading hidden-mobile">
				<h2 class="hidden-mobile">Success Stories</h2>
				<h4 class="hidden-mobile">Learn more about the talented youth at UNYA, and the successes we celebrate.</h4>
			</header>
			
			<div class="content-wrapper">
				<h4 class="hidden-desktop">Learn more about the talented youth at UNYA, and the successes we celebrate.</h4>
				<?php foreach ( $success_story as $post ) : setup_postdata( $post ); ?>
				<section class="single-story hidden-mobile">
					<a href="<?php the_permalink() ?>">
						<div class="single-story-mobile hidden-desktop success-image" style="background-image: linear-gradient(180deg, rgba(87,87,87,0) 0%, rgba(67,67,67,0.4) 52.31%, rgba(44,44,44,0.7) 100%),
							url(<?php echo CFS()->get( 'photo' ); ?>)";>
							<h3><?php the_title() ?></h3>
						</div>
					</a>
					<a href="<?php the_permalink() ?>"><img class="success-image hidden-mobile" src="<?php echo CFS()->get( 'photo' ); ?>" cover></a>
					<div class="success-content">
						<h3 class="hidden-mobile">Youth Feature - <?php the_title(); ?></h3>
						<p class="hidden-mobile"><?php echo wp_kses(custom_field_excerpt('first_half_of_story'), array('br') ); ?></p>
						<div>
							<p class="hidden-mobile">
								<a class="hidden-mobile impact-read-more" href="<?php the_permalink() ?>">Read more about <?php the_title(); ?>
									<i class="fa fa-arrow-right" aria-hidden="true"></i>
								</a>
							</p>
						</div>
					</div>
				</section>
		  <?php endforeach; wp_reset_postdata(); ?>
    </div>
	</section>


	<h2 class="accordion-label" id="volunteers">Volunteers</h2>
	<section class="volunteers">
		<header class="section-heading hidden-mobile">
			<h2 class="hidden-mobile">Volunteers</h2>
			<h4 class="hidden-mobile">Learn more about some of our hardworking volunteers.</h4>
		</header>
		<h4 class="hidden-desktop">Learn more about some of our hardworking volunteers.</h4>
	
<!-- volunteer posts go here! -->
<div class="content-wrapper">
	<?php /* Start the Loop */ ?>

	  <section class="success-stories">
	  	<div class="content-wrapper">
		 	 	<?php foreach ( $volunteer as $post ) : setup_postdata( $post ); ?>
          <section class="single-story hidden-mobile">
		        <a href="<?php the_permalink() ?>">
			        <div class="single-story-mobile hidden-desktop success-image" style="background-image: linear-gradient(180deg, rgba(87,87,87,0) 0%, rgba(67,67,67,0.4) 52.31%, rgba(44,44,44,0.7) 100%),
		            url(<?php echo CFS()->get( 'photo' ); ?>)";>
				        <h3><?php the_title() ?></h3>
	  	        </div>	
		        </a>			
			    	<a href="<?php the_permalink() ?>"><img class="success-image hidden-mobile" src="<?php echo CFS()->get( 'photo' ); ?>" cover></a>
				      <div class="success-content">
				        <h3 class="hidden-mobile">Volunteer Feature - <?php the_title(); ?></h3>
					      <p class="hidden-mobile"><?php echo wp_kses(CFS()->get( 'first_half_volunteer_story' ),array('br') ); ?></p>
					    <div> 
							<p class="hidden-mobile">
						    <a class="hidden-mobile impact-read-more" href="<?php the_permalink() ?>">Read more about <?php the_title(); ?>
								  <i class="fa fa-arrow-right" aria-hidden="true">
					        </i>
								</a>
							</p>
					  </div>
	        </div>
		  	</section>
		  <?php endforeach; wp_reset_postdata(); ?>
  	</section>
	</div> <!-- # accordion -->

		<section class="statistics" id="statistics">
			<span class="content-wrapper">
			  <h2 class="impact-head content-wrapper">Impacts</h2>
		    <span class="infographics">
			    <img class="infographic-1" src="<?php echo esc_url( CFS()->get( 'infographic_2' ) ); ?>">
			    <img class="infographic-2 hidden-mobile" src="<?php echo esc_url( CFS()->get( 'infographic_1' ) ); ?>">
		    </span>
			</span>
		</section>

		<section class="testimonials" id="testimonials">
			<h2 class="content-wrapper">Testimonials</h2>
			<p class="content-wrapper testimonial-body">What do youth say about us?</p>

			<div class="impact-polygon">
			  <p class="content-wrapper"><?php echo wp_kses(CFS()->get( 'testimonial_1' ),array('br')); ?></p>
			</div>
  		<div class="rectangle-container">	<p class="content-wrapper"><?php echo CFS()->get( 'testimonial_2' ); ?></p></div>
		</section>

		<?php get_template_part( 'template-parts/prefooter', 'fit' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>