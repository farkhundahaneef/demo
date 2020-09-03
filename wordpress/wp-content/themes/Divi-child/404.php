<?php get_header(); ?>

<div id="main-content">
	<div class="container">
		<div id="content-area" class="clearfix">
			<div id="left-area">
			</div> <!-- #left-area -->

		</div> <!-- #content-area -->
			<div class="text-404">
			<h2>PAGE NOT FOUND</h2>
			<p>404</p>
			</div>
			<div class="search-area">
				<div class="search-form">
					<?php get_search_form();?>
				</div>
				<div class="page_list">
					<?php wp_list_pages();?>
				</div>
			</div>

	</div> <!-- .container -->
</div> <!-- #main-content -->


<?php

get_footer();?>
