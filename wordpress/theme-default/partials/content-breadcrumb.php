<section class="breadcrumbs">
	
	<div class="container">
		<div class="row">
			<div class="col-12">
				
				<?php if ( function_exists('yoast_breadcrumb') ) {
				$breadcrumbs = yoast_breadcrumb( '<ul><li>', '</li></ul>', false );
				// echo str_replace( '|', ' <span class="bc_arrow" aria-hidden="true" data-icon="&#59234;"></li><li>', $breadcrumbs );
				} ?>
				
				<h2><?php single_cat_title(); ?></h2>
			</div>
		</div>
	</div>
	
</section>