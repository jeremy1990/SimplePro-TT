<?php get_header(); ?>

<div class="grid_17 alpha">

<script type="text/javascript">
$("#blog-loading div").animate({width:"30%"})
</script>

    <div class="entry clearfix">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>    

        <h1><?php the_title(); ?></h1>	

            <div class="post-meta">

                <span class="meta-author"><?php the_author_posts_link(); ?></span>

                <span class="meta-category"><?php the_category(' '); ?></span>

                <span class="meta-permalink"><a href="<?php the_permalink(' ') ?>" title="文章的永久链接地址"><?php _e('永久链接'); ?></a></span>

                <span class="meta-date"><?php the_time('20y年m月j日'); ?></span>

                <?php if (function_exists('the_views')) : ?><span class="meta-view"><?php the_views(); ?></span><?php endif; ?>

                <span class="meta-comment"><?php comments_popup_link( __( '抢个沙发' ), __( '沙发被抢' ), __( '%条评论' ) ); ?></span>

            </div>

            <!-- END post-meta --> 

        <?php if ( has_post_thumbnail() ) { ?>

        		<div class="post-thumbnail">

        			<?php the_post_thumbnail('post-image'); ?>

                </div>

                <!-- END post-thumbnail -->

        <?php } ?>

        <div class="clear"></div>

		<div class="entry-content">
		<?php the_content(); ?>
        </div>
        <?php if (function_exists('wizylike')) : ?>
            <div style="float:right;"><?php wizylike('button'); ?></div>
        <?php endif; ?>
        
        <?php if (function_exists('lsz_ad2')) : ?>
        	<div class="clear"></div>
            <p align="center"><?php lsz_ad2(''); ?></p>
        	<div class="clear"></div>
        <?php endif; ?>        

		<?php endwhile; ?>

		<?php endif; ?>	


        <?php wp_link_pages('before=<div id="post-page-navigation">&after=</div>'); ?>


        <div class="post-bottom">

        	<?php the_tags('<div class="post-tags">',' ','</div>'); ?>

        </div>

        <!-- END post-bottom -->


        </div>

        <!-- END entry -->


         <div id="post-author" class="clearfix entry">

				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'platformbase_author_bio_avatar_size', 50 ) ); ?>

                <h4><?php _e('关于作者') ?></h4>

        		<?php the_author_meta('description') ?>

       	</div><!-- END post-author -->

<script type="text/javascript">
$("#blog-loading div").animate({width:"45%"})
</script>

	<?php comments_template(); ?>

</div>

<!-- END grid_17 -->        

<?php get_sidebar(); ?>

<?php get_footer(); ?>