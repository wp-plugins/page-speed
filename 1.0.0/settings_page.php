<?php
// create custom plugin settings menu
add_action('admin_menu', 'pg_pagespeed_menu');
function pg_pagespeed_menu() {
//create new top-level menu
add_menu_page('Page Speed Plugin Settings', 'Page Speed', 'administrator', __FILE__, 'ps_pagespeed_settings_page',plugins_url('/images/page_speed_icon.png', __FILE__));
}
//call register settings function
add_action( 'admin_init', 'pg_pagespeed_register_mysettings' );

add_action( 'wp_print_styles', 'pg_pagespeed_dequeue_my_css', 100 );

add_action( 'wp_print_scripts', 'pg_pagespeed_dequeue_my_js', 100 );

// inline css 
add_action('wp_head','pg_pagespeed_insert_inline_css');

// inline js 
add_action('wp_footer','pg_pagespeed_inline_js');

function pg_pagespeed_register_mysettings() {
	//register our settings
	register_setting( 'ps_pagespeed-settings-group', 'insert_css_name1' );
	register_setting( 'ps_pagespeed-settings-group', 'insert_css_name2' );
	register_setting( 'ps_pagespeed-settings-group', 'insert_css_name3' );
	register_setting( 'ps_pagespeed-settings-group', 'insert_css_name4' );
	register_setting( 'ps_pagespeed-settings-group', 'insert_css_name5' );
	// register js
	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name1' );
	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name2' );
	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name3' );
	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name4' );
	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name5' );
	// register in option
	register_setting( 'ps_pagespeed-settings-group', 'insert_inline_css' );
	register_setting( 'ps_pagespeed-settings-group', 'insert_inline_js' );
	
	register_setting( 'ps_pagespeed-settings-group', 'move_all_script_infooter' );
	register_setting( 'ps_pagespeed-settings-group', 'inline_the_css' );	
	register_setting( 'ps_pagespeed-settings-group', 'activate_gzip' );		
}
function ps_pagespeed_settings_page() {
?>
<style> 

.inline-wrap {
    display: inline-block;
    margin-right: 50px;
    vertical-align: top;
}

.gzip-inactive {
    font-weight: bold;
}

.gzip-active {
    color: #008000;
    font-weight: bold;
}
</style>
<div class="wrap">
<h1> Page Speed Settings</h1>
<h2> Eliminate render-blocking JavaScript and CSS in above-the-fold content </h2>
<form method="post" action="options.php">
    <?php settings_fields( 'ps_pagespeed-settings-group' ); ?>
    <?php do_settings_sections( 'ps_pagespeed-settings-group' ); ?>
  <div>

		<h3> Remove render-blocking JavaScript:  </h3> 
		
		
	<div class="inline-wrap">
<p> Insert The Js Name Here </p>
	<p><input type="text" name="insert_js_name1" value="<?php echo get_option('insert_js_name1'); ?>" /></p>
	<p><input type="text" name="insert_js_name2" value="<?php echo get_option('insert_js_name2'); ?>" /></p>
	<p><input type="text" name="insert_js_name3" value="<?php echo get_option('insert_js_name3'); ?>" /></p>
	<p><input type="text" name="insert_js_name4" value="<?php echo get_option('insert_js_name4'); ?>" /></p>
	<p><input type="text" name="insert_js_name5" value="<?php echo get_option('insert_js_name5'); ?>" /></p>
	</div>
	<div class="inline-wrap">
	<p> Copy and Paste The Js File Here:  </p>
	<p><textarea rows="4" cols="50" name="insert_inline_js">  <?php  echo get_option('insert_inline_js'); ?> </textarea> </p>
	</div>
	<hr>
	<h3> Optimize CSS Delivery  </h3> 
	<div class="inline-wrap">
	<p> Insert The Css File Name Here: </p>
	<p><input type="text" name="insert_css_name1" value="<?php echo get_option('insert_css_name1');  ?>" /></p>
	<p><input type="text" name="insert_css_name2" value="<?php echo get_option('insert_css_name2');  ?>" /></p>
	<p><input type="text" name="insert_css_name3" value="<?php echo get_option('insert_css_name3');  ?>" /></p>
	<p><input type="text" name="insert_css_name4" value="<?php echo get_option('insert_css_name4');  ?>" /></p>
	<p><input type="text" name="insert_css_name5" value="<?php echo get_option('insert_css_name5');  ?>" /></p>
</div>
<div class="inline-wrap">
<p> Copy and Paste the Css Here: </p>
	<p><textarea rows="4" cols="50" name="insert_inline_css">  <?php  echo get_option('insert_inline_css'); ?> </textarea> </p>
</div>

<hr>

	

	</div>
    <?php submit_button(); ?>
</form>
</div>
<?php 
} 
?>