<?php

//register settings

function cleanmag_theme_settings_init(){

	register_setting( 'cleanmag_theme_settings', 'cleanmag_theme_settings' );

}



//menu

function cleanmag_add_settings_page() {

add_menu_page( __( '主题设置' ), __( '主题设置' ), 'manage_options', 'SimplePro-settings', 'cleanmag_theme_settings_page');

}



add_action( 'admin_init', 'cleanmag_theme_settings_init' );

add_action( 'admin_menu', 'cleanmag_add_settings_page' );



//options

$slider_effects = array("random", "fade", "fold", "slideInRight", "slideInLeft", "sliceDown", "sliceDownLeft", "sliceUp", "sliceUpLeft", "sliceUpDown", "sliceUpDownLeft", "boxRandom", "boxRain", "boxRainReverse", "boxRainGrow", "boxRainGrowReverse");



//start settings page

function cleanmag_theme_settings_page() {

global $slider_effects;

if ( ! isset( $_REQUEST['updated'] ) )

$_REQUEST['updated'] = false;

?>



<div class="wrap">

<div id="icon-options-general" class="icon32"></div>

<h2><?php _e( '主题设置' ) ?></h2>





<?php if ( false !== $_REQUEST['updated'] ) : ?>

<div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>

<?php endif; ?>

<form method="post" action="options.php">



<?php settings_fields( 'cleanmag_theme_settings' ); ?>

<?php $options = get_option( 'cleanmag_theme_settings' ); ?>



<table class="form-table">  


<tr valign="top">

<th scope="row">关注我</th>

<td><div id="fb-root"></div><a href="http://weibo.com/lisizhang" title="����΢��">weibo.com/lisizhang</a></td>

</tr>



<tr valign="top">

<th scope="row"><?php _e( 'Favicon' ); ?></th>

<td>

<input id="cleanmag_theme_settings[favicon]" class="regular-text" type="text" size="36" name="cleanmag_theme_settings[favicon]" value="<?php esc_attr_e( $options['favicon'] ); ?>" />

<br />

<label class="description abouttxtdescription" for="cleanmag_theme_settings[favicon]"><?php _e( '你可以上传或输入一个完整的图片地址' ); ?></label>

</td>

</tr>



<tr valign="top">

<th scope="row"><?php _e( 'Logo' ); ?></th>

<td>

<input id="cleanmag_theme_settings[logo]" class="regular-text" type="text" size="36" name="cleanmag_theme_settings[logo]" value="<?php esc_attr_e( $options['logo'] ); ?>" />

<br />

<label class="description abouttxtdescription" for="cleanmag_theme_settings[logo]"><?php _e( '你可以上传或输入一个完整的图片地址' ); ?></label>

</td>

</tr>



<tr valign="top">

<th scope="row"><?php _e( '分析代码' ); ?></th>

<td>

<label class="description" for="cleanmag_theme_settings[analytics]"><?php _e( '输入您的分析代码' ); ?></label>

<br />

<textarea id="cleanmag_theme_settings[analytics]" class="regular-text" name="cleanmag_theme_settings[analytics]" rows="5" cols="45"><?php esc_attr_e( $options['analytics'] ); ?></textarea>

</td>

</tr>



<tr valign="top">

<th scope="row">更多主题</th>

<td>

<p><a href="http://lisizhang.com" target="_blank">My Blog</a></p>

</td>

</tr>



</table>

<p class="submit-changes">

<input type="submit" class="button-primary" value="<?php _e( '保存设置' ); ?>" />

</p>

</form>

</div><!-- END wrap -->



<?php

}

//sanitize and validate

function cleanmag_options_validate( $input ) {

	global $select_options, $radio_options;

	if ( ! isset( $input['option1'] ) )

		$input['option1'] = null;

	$input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );

	$input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );

	if ( ! isset( $input['radioinput'] ) )

		$input['radioinput'] = null;

	if ( ! array_key_exists( $input['radioinput'], $radio_options ) )

		$input['radioinput'] = null;

	$input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );



	return $input;

}



?>