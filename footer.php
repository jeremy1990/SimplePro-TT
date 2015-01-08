<?php
$options = get_option( 'cleanmag_theme_settings' );
?>

</div>

<!-- END container_24 -->

</div>

<!-- END wrap --> 

<script type="text/javascript">
$("#blog-loading div").animate({width:"100%"})
</script>

<div id="copyright-wrap">

    <div id="copyright" class="container_24" align="center">

&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a>. <a href="http://lisizhang.com/2536.htm" target="_blank">SimplePro-TT Theme</a>. <a href="http://www.wordpress.org" target="_blank" rel="nofollow">WordPress</a>.
    </div>

    <!-- END copyright - theme by WPExplorer.com -->

</div><!-- END copyright-wrap -->

<!-- WP Footer -->

<?php wp_footer(); ?>

</body>

</html>