<?php
/**

 * Single Page Template

 **/
?>

<?php get_header(); ?>

<section class="post page">

	<div class="container">

		<div class="row">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article class="item col-12">

					<h2><?php the_title();?></h2>

					<?php the_content(); ?>
				
				</article>

			<?php endwhile; else : ?>

				<!-- The very first "if" tested to see if there were any Posts to -->
				<!-- display.  This "else" part tells what do if there weren't any. -->
				<p class="posterror"><?php _e( 'Strange things happen.' ); ?></p>

				<!-- REALLY stop The Loop. -->

			<?php endif; wp_reset_postdata(); ?>

		</div>

	</div>

</section>

<?php get_footer(); ?>