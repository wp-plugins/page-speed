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

	register_setting( 'ps_pagespeed-settings-group', 'insert_css_name6' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_css_name7' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_css_name8' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_css_name9' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_css_name10' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_css_name11' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_css_name12' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_css_name13' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_css_name14' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_css_name15' );

	// register js

	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name1' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name2' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name3' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name4' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name5' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name6' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name7' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name8' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name9' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name10' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name11' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name12' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name13' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name14' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_js_name15' );

	// register in option

	register_setting( 'ps_pagespeed-settings-group', 'insert_inline_css' );

	register_setting( 'ps_pagespeed-settings-group', 'insert_inline_js' );

	

	register_setting( 'ps_pagespeed-settings-group', 'move_all_script_infooter' );

	register_setting( 'ps_pagespeed-settings-group', 'inline_the_css' );
	
	// activate gzip	

	register_setting( 'ps_pagespeed-settings-group', 'activate_gzip_compression' );	

register_setting( 'ps_pagespeed-settings-group', 'activate_caching' );		
	
	
  for ($xx=0; $xx<=20; $xx++) {

$scriptscount = $xx.'-js';

register_setting( 'ps_pagespeed-settings-group', $scriptscount );


   
}


	

	}

function ps_pagespeed_settings_page() {

?>

<style> 



.inline-wrap {

    display: inline-block;

    margin-right: 10px;

    vertical-align: top;

}



.gzip-inactive {

    font-weight: bold;

}



.gzip-active {

    color: #008000;

    font-weight: bold;

}

.col2 {

display: inline-block;

vertical-align: top;

}

.ps-textarea {

min-height: 290px;

}

.js-css-name-wrap {

color:green;

}

.ps-content-wrapper {
width: 88%;
float:left;
}


.donation-wrap {
float: right;
width: 10%;
}


input[type="image"] {
width: 100%;
width: 1inherit;
}

</style>

<div class="wrap">

<div class="ps-content-wrapper">

<h1> Page Speed Settings</h1>



<form method="post" action="options.php">

    <?php settings_fields( 'ps_pagespeed-settings-group' ); ?>

    <?php do_settings_sections( 'ps_pagespeed-settings-group' ); ?>


<h2> Enable compression </h2>


<input type="checkbox" name="activate_gzip_compression" value="on" <?php echo get_option('activate_gzip_compression')=='on' ? 'checked="checked"' : '' ?> />
	Activate Gzip and  Deflate. See <a href="https://wordpress.org/plugins/page-speed/faq/" target="_blank"> FAQ </a> for more details.
<hr>
	
<h2> Leverage browser caching </h2>	
	
	<input type="checkbox" name="activate_caching" value="on" <?php echo get_option('activate_caching')=='on' ? 'checked="checked"' : '' ?> />
	
	Set Expiry date or a maximum age in the HTTP headers. See <a href="https://wordpress.org/plugins/page-speed/faq/" target="_blank"> FAQ </a> for more details.
<hr>
	
	
	
	
<h2> Eliminate render-blocking JavaScript and CSS in above-the-fold content </h2>





  <div>



		<h3> Remove render-blocking JavaScript:  </h3> 
    
	
<p>   Deactive the Javascript by puting the Js Name Below.  Copy the js code and paste it  in the field  to inline the Javascript. See <a href="https://wordpress.org/plugins/page-speed/faq/" target="_blank"> FAQ </a> for more details. </p>
   
   
	<div class="inline-wrap">

<p> Javascript Name </p>

<div class="col2">

	<p><input type="text" name="insert_js_name1" value="<?php echo get_option('insert_js_name1'); ?>" /></p>

	<p><input type="text" name="insert_js_name2" value="<?php echo get_option('insert_js_name2'); ?>" /></p>

	<p><input type="text" name="insert_js_name3" value="<?php echo get_option('insert_js_name3'); ?>" /></p>

	<p><input type="text" name="insert_js_name4" value="<?php echo get_option('insert_js_name4'); ?>" /></p>

	<p><input type="text" name="insert_js_name5" value="<?php echo get_option('insert_js_name5'); ?>" /></p>

    <p><input type="text" name="insert_js_name6" value="<?php echo get_option('insert_js_name6'); ?>" /></p>

    <p><input type="text" name="insert_js_name7" value="<?php echo get_option('insert_js_name7'); ?>" /></p>

    <p><input type="text" name="insert_js_name8" value="<?php echo get_option('insert_js_name8'); ?>" /></p>

   
    </div>

    <div class="col2">
	
	 <p><input type="text" name="insert_js_name9" value="<?php echo get_option('insert_js_name9'); ?>" /></p>

    <p><input type="text" name="insert_js_name10" value="<?php echo get_option('insert_js_name10'); ?>" /></p>


    <p><input type="text" name="insert_js_name11" value="<?php echo get_option('insert_js_name11'); ?>" /></p>

    <p><input type="text" name="insert_js_name12" value="<?php echo get_option('insert_js_name12'); ?>" /></p>

    <p><input type="text" name="insert_js_name13" value="<?php echo get_option('insert_js_name13'); ?>" /></p>

    <p><input type="text" name="insert_js_name14" value="<?php echo get_option('insert_js_name14'); ?>" /></p>

    <p><input type="text" name="insert_js_name15" value="<?php echo get_option('insert_js_name15'); ?>" /></p>

    </div>

	</div>

	<div class="inline-wrap">

	<p> Javascript Code </p>

	<p><textarea class="ps-textarea" rows="4" cols="50" name="insert_inline_js">  <?php  echo get_option('insert_inline_js'); ?> </textarea> </p>

	</div>

	<hr>

	<h3> Optimize CSS Delivery  </h3> 
    
    
  <p>   Deactive the Css by puting the Css Name Below. Copy the Css code and paste it  in the field  to inline the Css. See <a href="https://wordpress.org/plugins/page-speed/faq/" target="_blank"> FAQ </a> for more details. </p>

	<div class="inline-wrap">

	<p> Css Name </p>



    <div class="col2">

	<p><input type="text" name="insert_css_name1" value="<?php echo get_option('insert_css_name1');  ?>" /></p>

	<p><input type="text" name="insert_css_name2" value="<?php echo get_option('insert_css_name2');  ?>" /></p>

	<p><input type="text" name="insert_css_name3" value="<?php echo get_option('insert_css_name3');  ?>" /></p>

	<p><input type="text" name="insert_css_name4" value="<?php echo get_option('insert_css_name4');  ?>" /></p>

	<p><input type="text" name="insert_css_name5" value="<?php echo get_option('insert_css_name5');  ?>" /></p>

    <p><input type="text" name="insert_css_name6" value="<?php echo get_option('insert_css_name6');  ?>" /></p>

    <p><input type="text" name="insert_css_name7" value="<?php echo get_option('insert_css_name7');  ?>" /></p>

    <p><input type="text" name="insert_css_name8" value="<?php echo get_option('insert_css_name8');  ?>" /></p>

   
    </div>

    <div class="col2">
	
	 <p><input type="text" name="insert_css_name9" value="<?php echo get_option('insert_css_name9');  ?>" /></p>

    <p><input type="text" name="insert_css_name10" value="<?php echo get_option('insert_css_name10');  ?>" /></p>


    <p><input type="text" name="insert_css_name11" value="<?php echo get_option('insert_css_name11');  ?>" /></p>

    <p><input type="text" name="insert_css_name12" value="<?php echo get_option('insert_css_name12');  ?>" /></p>

    <p><input type="text" name="insert_css_name13" value="<?php echo get_option('insert_css_name13');  ?>" /></p>

    <p><input type="text" name="insert_css_name14" value="<?php echo get_option('insert_css_name14');  ?>" /></p>

    <p><input type="text" name="insert_css_name15" value="<?php echo get_option('insert_css_name15');  ?>" /></p>

    </div>

</div>

<div class="inline-wrap">

<p> Css code </p>

	<p><textarea class="ps-textarea" rows="4" cols="50" name="insert_inline_css">  <?php  echo get_option('insert_inline_css'); ?> </textarea> </p>

</div>



<hr>





	



	</div>

    <?php submit_button(); ?>

</form>


</div>



<div class="donation-wrap">

<h2 style="color:red; text-align:center;"> 
<a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=NAX45XQV5P7ZW">
DONATION 
</a>
</h2>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="NAX45XQV5P7ZW">
<input type="image" src="https://lh3.googleusercontent.com/-Y9jfoDnO0fw/U7CvsTaPEWI/AAAAAAAAAKs/aIukBvl7TLQ/w426-h554/donation.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


<a style="text-align:center;" target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=NAX45XQV5P7ZW">
 Support Wordpress Developers 
</a>

</div>




</div>

<?php 

} 

?>