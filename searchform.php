<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
	<label>buscar</label>
	<input type="text" class="input" value="<?php the_search_query(); ?>" name="s" id="s" />
	<input type="image"  id="searchsubmit" src="<?php bloginfo('template_directory'); ?>/images/form_bu.gif" />
</form>