<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */
 $args= array(
     'post_type'=> 'news',
     'posts_per_page'=> 8
 );

 $news = get_posts($args);
?>
			<li class="news-single">
        <div class="news-title-block">
          <p class="hidden-mobile news-date"><?php echo CFS()->get( 'article_date' ); ?></p>		
			    <h3 class="news-headline"><a href="<?php echo CFS()->get( 'article_url' ); ?>">
					 <?php the_title();?></a></h3>
					<img class="news-image" src="<?php echo CFS()->get( 'article_photo' ); ?>">
					 
        </div>
        <div class="news-details">								
			 		<div class="hidden-mobile hidden-desktop"><?php echo custom_field_excerpt(); ?></div>
          <p class="hidden-mobile news-body"><?php echo CFS()->get( 'article_text' ); ?></p>							
			  	<span class="news-url hidden-mobile"><a href="<?php echo CFS()->get( 'article_url' ); ?>">Read More</a></span>
				</news-details>
			</li>