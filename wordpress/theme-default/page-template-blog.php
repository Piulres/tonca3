<?php /* Template Name: Blog Template */ ?>

<?php get_header(); ?>

<?php get_template_part( 'partials/content', 'header' ); ?>

<?php get_template_part( 'partials/content', 'breadcrumb' ); ?>

<section class="blog page">

	<div class="container">
		
		<?php
		$args = array(
			'post_type'=> 'post',
			'orderby'    => 'ID',
			'post_status' => 'publish',
			'order'    => 'DESC',
			'posts_per_page' => -1 // this will retrive all the post that is published 
			);

		$result = new WP_Query( $args ); ?>

		<div class="row">

			<?php if ( $result-> have_posts() ) : while ( $result->have_posts() ) : $result->the_post(); ?>
			
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