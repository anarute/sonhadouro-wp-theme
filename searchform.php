<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
	<label>buscar</label>
	<input type="text" class="input" value="<?php the_search_query(); ?>" name="s" id="s" />
</form>