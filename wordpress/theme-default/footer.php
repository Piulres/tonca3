	
	<footer>

		<div class="container">
			<?php wp_footer(); ?>

			<?php
			wp_nav_menu( array(
			    'menu' => 'Menu Inferior',
			    'menu_class' => 'list-item'
			) );
			?>
		</div>

	</footer>
	
</body>

</html>