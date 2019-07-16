<?php get_header(); ?>

<?php get_template_part( 'partials/content', 'header' ); ?>

<?php get_template_part( 'partials/content', 'breadcrumb' ); ?>

<section class="content">
	
	<div class="container">

		<div class="row">
			<div class="col-12">
				<?php the_content(); ?>
			</div>
		</div>
		
	</div>

</section>

<?php get_template_part( 'partials/content', 'newsletter' ); ?>

<?php get_footer(); ?>