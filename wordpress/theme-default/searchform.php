<form action="<?php echo home_url( '/' ); ?>" method="get">
	<i class="fa fa-search" aria-hidden="true"></i>
    <input class="search" type="text" name="s" placeholder="Search for " value="<?php the_search_query(); ?>" />
	<input class="search" type="hidden" value="post" name="post_type" />
</form>