<?php /* Template Name: Home Template */ ?>
 
<?php get_header(); ?>

	<section>

		<div class="container">
			
			<div class="row">
				<div class="col-12">
					<h1 class="text-center">Home</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<?php the_content(); ?>
				</div>
			</div>
			
		</div>

	</section>

	<?php get_template_part( 'partials/content', 'search' ); ?>

	<section class="banner">
		<div class="container">
		
			<div class="owl-carousel owl-carousel1 owl-theme">	

				<?php if( have_rows('banner') ): ?>

				    <?php while( have_rows('banner') ): the_row(); ?>

				    	<div class="item" style="background-image:url('<?php the_sub_field('banner-imagem'); ?>');">
							<div class="row">
								<div class="col-xs-12 col-sm-12">
									<div class="box-banner">
										<h2><?php the_sub_field('banner-titulo'); ?></h2>
										<a href="<?php the_sub_field('banner-link'); ?>" class="button button__primary button__primary--blue"><?php the_sub_field('banner-botao'); ?></a>
									</div>
								</div>
							</div>
						</div>

					<?php endwhile; ?>
			 
				<?php endif; ?>

			</div>
		
		</div>
	</section>

<?php get_template_part( 'partials/content', 'newsletter' ); ?>

<?php get_footer(); ?>