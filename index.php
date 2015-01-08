<?php
$options = get_option( 'cleanmag_theme_settings' );
?>
<?php get_header(' '); ?>
<div class="grid_17 alpha">
<script type="text/javascript">
$("#blog-loading div").animate({width:"45%"})
</script>
<?php
//start main loop here
if (have_posts()) : ?>
<?php get_template_part( 'post' , 'entry') ?>
<?php endif; ?>

<?php
// include pagination
if (function_exists("pagination")) { pagination($additional_loop->max_num_pages); } ?>
</div>

<script type="text/javascript">
$("#blog-loading div").animate({width:"60%"})
</script>
<!-- END grid_17 -->
<?php get_sidebar(' '); ?>           
<?php get_footer(' '); ?>