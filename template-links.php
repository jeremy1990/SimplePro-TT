<?php

/*

Template Name: Links

*/

$options = get_option( 'cleanmag_theme_settings' );

?>

<?php get_header(); ?> 

<div class="entry clearfix">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<h1 class="page-title"><?php the_title(); ?></h1>			

	<div class="entry-content">
	<?php the_content(); ?>
    </div>

	<?php endwhile; ?>

	<?php endif; ?>	

    <div class="linkpage">

    <ul><?php wp_list_bookmarks('categorize=1&category_orderby=id&before=<li>&after=</li>

&show_images=0&show_description=0&orderby=id&title_before=<h3>&title_after=</h3>'); ?></ul>

    </div>


	<?php comments_template(); ?>  

</div><!-- END entry -->

<?php get_footer(); ?>