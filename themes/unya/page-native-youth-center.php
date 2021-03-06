<?php
/**
 * The template for displaying the native youth center page.
 *
 * @package UNYA_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area nyc-content">
		<main id="main" class="site-main" role="main">
			<header class="header-wrapper header-wrapper-nyc nyc-title">
				<h1>Native Youth Centre <span class="hidden-mobile">| Capital Campaign</span></h1>
				<p class="hidden-mobile">Building a hub for confidence, leadership and reconciliation.</p>
			</header>

			<section>
				<p>Resources go here!</p>
			</section>

			<div class="hidden-mobile donation-banner donation-button sidebar-start">
				<p><?php echo esc_html( CFS()->get( 'banner_text' ) ); ?></p>
				<h2><a href="<?php echo esc_url( CFS()->get( 'banner_button_link' ) ); ?>"><?php echo esc_html( CFS()->get( 'banner_button' ) ); ?></a></h2>
			</div>

			<section class="container">
			<div class="accordion" id="accordion">
				<h2 class="accordion-label"  id="vision">Vision</h2>
				<section class="vision">
					<header class="section-heading hidden-mobile">
						<h2>Vision</h2>
					</header>
					<div class="content-wrapper">
						<p><?php echo esc_html( CFS()->get( 'vision' ) ); ?></p>
						<a class="nyc-download" href="<?php echo esc_url( CFS()->get( 'vision_file' ) ); ?>">Download Our Campaign Materials Here (PDF)</a>
						<div class="nyc-line"></div>
					</div>
				</section>
				<h2 class="accordion-label" id="planning">Planning</h2>
				<section class="planning">
					<header class="section-heading">
						<h2 class="content-wrapper hidden-mobile">Planning and Development</h2>
						<h4 class="planning-timeline hidden-mobile">Timeline of the development of the Native Youth Center.</h4>
					</header>
					<div class="content-wrapper">
						<ul>
							<?php $timeline = CFS()->get( 'timeline' ); ?>
							<?php foreach ( $timeline as $timeline_item ) : ?>
								<li class="timeline-item">
									<p class="timeline-year"><?php echo esc_html( $timeline_item['year']); ?></p>
									<p class="timeline-description"><?php echo wp_kses( $timeline_item['description'],array('br') ); ?></p>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div><?php echo $GLOBALS['wp_embed']->autoembed(esc_html(CFS()->get('featured_video'))) ?></div>
				</section>
				<h2 class="accordion-label" id="ways-to-help">How to Help</h2>
				<section class="ways-to-help">
					<div class="section-heading">
						<h2>Ways to Help</h2>
					</div>
					<div class="content-wrapper">
						<h4>The Need</h4>
						<p><?php echo wp_kses( CFS()->get( 'the_need' ),array('br') ); ?></p>
					</div>
					<div class="content-wrapper">
						<h4>We Need Your Help</h4>
						<p><?php echo wp_kses( CFS()->get( 'we_need_your_help' ),array('br') ); ?></p>
						<ul>
							<li>
								<h5><i class="fa fa-angle-right" aria-hidden="true"></i><span class="nyc-help-text">Donate Funds</span></h5>
								<p><span class="nyc-help-spacing">&nbsp;</span><span class="nyc-help-text"><?php echo wp_kses( CFS()->get( 'donate_funds' ),array('br') ); ?></span></p>
							</li>
							<li>
								<h5><i class="fa fa-angle-right" aria-hidden="true"></i><span class="nyc-help-text">Donate Materials and Supplies</span></h5>
								<p><span class="nyc-help-spacing">&nbsp;</span><span class="nyc-help-text"><?php echo wp_kses( CFS()->get( 'donate_materials_and_supplies' ),array('br') ); ?></span></p>
							</li>
							<li>
								<h5><i class="fa fa-angle-right" aria-hidden="true"></i><span class="nyc-help-text">Other Ways to Help</span></h5>
								<p><span class="nyc-help-spacing">&nbsp;</span><span class="nyc-help-text"><?php echo wp_kses( CFS()->get( 'other_ways_to_help' ),array('br') ); ?></span></p>
							</li>
							<li>
								<h5><i class="fa fa-angle-right" aria-hidden="true"></i><span class="nyc-help-text">How Will Your Donations be Recognized?</span></h5>
								<p><span class="nyc-help-spacing">&nbsp;</span><span class="nyc-help-text"><?php echo wp_kses( CFS()->get( 'how_will_your_donations_be_recognized' ),array('br') ); ?></span></p>
							</li>
						</ul>
					</div>
				</section>
				<h2 class="accordion-label" id="partners">Partners</h2>
				<section class="partners">
					<header class="section-heading">
						<h2 class="content-wrapper">Partners</h2>
					</header>
					<div class="content-wrapper">
						<ul class="content-wrapper nyc-partners">
							<?php $partners = CFS()->get( 'partners' ); ?>
							<?php foreach ( $partners as $partner ) : ?>
								<li class="partner">
									<img src="<?php echo ( $partner['partner_logo'] ); ?>">
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</section>
			</div>
				<?php get_template_part( 'template-parts/prefooter', 'donation' ); ?>
			</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>