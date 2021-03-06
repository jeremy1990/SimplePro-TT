<?php get_header(); ?>

<div id="post" class="grid_17 alpha">

<script type="text/javascript">
$("#blog-loading div").animate({width:"30%"})
</script>

	<?php if (have_posts()) : ?>

    <div class="entry clearfix">

	<?php $post = $posts[0]; ?>

	<?php if (is_category()) { ?>

	<h1 id="archive-title"><?php single_cat_title(); ?></h1>

	<?php } elseif( is_tag() ) { ?>

	<h1 id="archive-title">Posts Tagged &quot;<?php single_tag_title(); ?>&quot;</h1>

	<?php  } elseif (is_day()) { ?>

	<h1 id="archive-title">Archive for <?php the_time('Y.m.j'); ?></h1>

	<?php  } elseif (is_month()) { ?>

	<h1 id="archive-title">Archive for <?php the_time('Y.m'); ?></h1>

	<?php  } elseif (is_year()) { ?>

	<h1 id="archive-title">Archive for <?php the_time('Y'); ?></h1>

	<?php  } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

	<h1 id="archive-title">Blog Archives</h1>

	<?php } ?>

	<div id="sub-description">

		<?php echo category_description(); ?>

    </div><!-- END sub-description --> 

	</div>

    <!-- END entry -->

     

	<?php get_template_part( 'post' , 'entry') ?>                	     

	<?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages); } ?>

    <?php endif; ?>  

</div>

<script type="text/javascript">
$("#blog-loading div").animate({width:"45%"})
</script>

<!-- END post -->

<?php get_sidebar(' '); ?>

<?php get_footer(' '); ?>
