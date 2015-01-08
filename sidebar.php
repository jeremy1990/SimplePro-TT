<div id="sidebar" class="grid_8 alpha omega"> 

<script type="text/javascript">
$("#blog-loading div").animate({width:"65%"})
</script>
<!--    
	<?php if (is_home()) : ?>
	<div class="sidebar-box clearfix topcomment">
		<h4>本周口水榜</h4>
		<?php include('includes/topcommentors.php'); ?>
	</div>
	<?php endif; ?>
    
	<?php if (is_home()) : ?>
	<div class="sidebar-box clearfix">
		<h4>最新评论</h4>
		<?php include('includes/recentcomment.php'); ?>
	</div>
	<?php endif; ?>        
-->
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar1') ) : ?>
            <?php endif; ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar2') ) : ?>        
            <?php endif; ?>
    
    <!-- 下面这段AD代码希望亲爱的朋友们给予保留，这是本免费主题唯一的要求了，谢谢！ -->
<!--
    <?php if (is_home()) : ?>
    <div class="sidebar-box clearfix">
		<h4>赞助推荐</h4>
		<a href="http://www.mt.mu" title="木头的木(MT.MU) 美国MT主机代理 全球最专业的博客主机" target="_blank"><img src="http://ad.mt.mu/images/ad-250x60.png"></a>
        <a href="http://www.chinablogs.org" title="中国博客联盟 独立博客交流平台" target="_blank"><img src="http://www.chinablogs.org/images/cbs-250x60.png"></a>
	</div>
    <?php endif; ?>
-->    
</div>
<!-- END sidebar -->

<script type="text/javascript">
$("#blog-loading div").animate({width:"80%"})
</script>