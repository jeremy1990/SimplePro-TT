<?php while (have_posts()) : the_post(); ?>      
<div class="entry">
    <h2 class="entry-title"><a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-meta">
            <span class="meta-author"><?php the_author_posts_link(); ?></span>
            <span class="meta-category"><?php the_category(' '); ?></span>
            <span class="meta-permalink"><a href="<?php the_permalink(' ') ?>" title="Permalink"><?php _e('Permalink'); ?></a></span>
            <span class="meta-date"><?php the_time('y.m.j'); ?></span>
            <?php if (function_exists('the_views')) : ?><span class="meta-view"><?php the_views(); ?></span><?php endif; ?>
            <span class="meta-comment"><?php comments_popup_link( __( '抢个沙发' ), __( '沙发被抢' ), __( '%条评论' ) ); ?></span>
        </div>
        <!-- END post-meta -->
        <?php if ( has_post_thumbnail() ) {  ?>   
			<div class="post-thumbnail">
        			<a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('post-image'); ?></a>
			</div>
			<!-- END post-thumbnail -->
        <?php } ?>
        <?php echo cut_str(strip_tags(apply_filters('the_content', $post->post_content)),256,"..."); ?>
</div><!-- END entry -->
<?php endwhile; ?>