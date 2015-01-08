<?php
/**
 * @package WordPress
 * @subpackage CleanMag Theme
 */
$options = get_option( 'cleanmag_theme_settings' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>

<!-- Stylesheet & Favicon -->
<?php if($options['favicon'] !='') { ?>
<link rel="icon" type="image/png" href="<?php echo $options['favicon']; ?>" />
<?php } ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

<!-- WP Head -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<?php wp_head(); ?>
<?php if ( is_singular() || is_page() ){ ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/comments-ajax.js"></script>
<?php } ?>

<script type="text/javascript" charset="utf-8">
jQuery(function($){
	$(document).ready(function(){
	// superFish
	$('ul.sf-menu').supersubs({
		minWidth:    16, // minimum width of sub-menus in em units
		maxWidth:    40, // maximum width of sub-menus in em units
		extraWidth:  1 // extra width can ensure lines don't sometimes turn over
     })
    	.superfish(); // call supersubs first, then superfish
	});
});
</script>

<?php if(is_front_page()) { ?>

<script type="text/javascript">

jQuery(function($){

	$(document).ready(function(){  

	$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);  

});

});

</script>

<?php } ?>

<?php 

// Get And Show Analytics Code 

echo stripslashes($options['analytics']); 

?>



</head>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/plusone.js">

  {lang: 'zh-CN'}

</script>

<body <?php body_class($class); ?>>

<div id="blog-loading"><div></div></div>

<div id="wrap" class="container_24 clearfix">

    <div id="header" class="clearfix">

        <div id="logo">

            <?php if($options['logo'] !='') { ?>

            <a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><img src="<?php echo $options['logo']; ?>" alt="<?php bloginfo( 'name' ) ?>" /></a>

            <?php } else { ?>

            <?php if (is_front_page()) { ?>

            <h1><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></h1>

            <?php } else { ?>

            <h2><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></h2>

            <?php } ?>

            <p><?php bloginfo( 'description' ) ?></p>

            <?php } ?>

        </div>

        <!-- END logo --> 

        

        <?php if($options['top_ad'] !=''); { ?>

            <div id="top-ad">

                <?php echo $options['top_ad']; ?>

            </div><!-- END top-ad -->

        <?php } ?> 

        

    </div><!-- END header -->

    <div id="navigation" class="clearfix">

                <?php

                //define main navigation

                wp_nav_menu( array(

                    'theme_location' => 'main nav',

                    'sort_column' => 'menu_order',

                    'menu_class' => 'sf-menu',

                    'fallback_cb' => 'default_menu'

                )); ?>

    </div><!-- END navigation -->   

    

    <?php if(is_front_page()) { ?>

   	<div id="featured">

		<?php

            $feature_query = new WP_Query('showposts=4&post_type=slides');	 

            if ($feature_query->have_posts()) :

        ?>

        

        <ul class="ui-tabs-nav">

        <?php

		$count=0;

        while ($feature_query->have_posts()) : $feature_query->the_post();$do_not_duplicate = $post->ID;

        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');

		$count++;

         ?>	

        

        <li class="ui-tabs-nav-item ui-tabs-selected clearfix" id="nav-fragment-<?php the_ID(); ?>">

        <a href="#fragment-<?php the_ID(); ?>" <?php if($count=='4') { echo 'class="remove-border"'; } ?>>

		<?php the_post_thumbnail('image-thumb'); ?>      

        <p><?php the_title(); ?></p>

        </a></li>

        <?php endwhile; ?>

        

        </ul>

        <?php endif; ?>

        

        

        <?php if ($feature_query->have_posts()) :?>

        <?php

        while ($feature_query->have_posts()) : $feature_query->the_post();$do_not_duplicate = $post->ID;

        // get metabox data

        $slidelink = get_post_meta($post->ID, 'slides_url', TRUE);

		?>	

        

        <div id="fragment-<?php the_ID(); ?>" class="ui-tabs-panel" style="">

        

        <?php if($slidelink !='') { ?>

		<a href="<?php echo $slidelink; ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('post-image'); ?></a>

		<?php } else { ?>

        <?php the_post_thumbnail('post-image'); ?>

		<?php } ?>

        

        <div class="info">

        	<?php if($slidelink !='') { ?>

       		<a href="<?php echo $slidelink; ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>

            <?php } else { ?>

            <?php the_title(); ?>

            <?php } ?>

        </div>

        <!-- END info -->

        </div>

        <!-- END fragment -->

        

        <?php endwhile ?>

        <?php endif; ?>

        </div>

        <!-- END featured -->

		<?php } ?>
        
<script type="text/javascript">
$("#blog-loading div").animate({width:"15%"})
</script>

<div id="main" class="container_24">