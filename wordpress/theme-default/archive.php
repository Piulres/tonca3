<?php /* Template Name: Archive */ ?>

<?php get_header(); ?>

<?php get_template_part( 'partials/content', 'header' ); ?>

<?php get_template_part( 'partials/content', 'breadcrumb' ); ?>

<section class="page">

	<div class="container">
		
		<div class="row">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article class="item col-sm-3">

					<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
					<h3>
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php the_title();?>
						</a>
					</h3>

					<p class="excerpt"><?php echo get_excerpt(); ?></p>		
				
				</article>

			<?php endwhile; else : ?>

				<!-- The very first "if" tested to see if there were any Posts to -->
				<!-- display.  This "else" part tells what do if there weren't any. -->
				<div class="col-12">
					<p class="posterror"><?php _e( 'Ops, aconteceu algo de errado.' ); ?></p>
				</div>

				<!-- REALLY stop The Loop. -->

			<?php endif; wp_reset_postdata(); ?>

		</div>
	</div>

</section>

<?php get_template_part( 'partials/content', 'newsletter' ); ?>

<?php get_footer(); ?>