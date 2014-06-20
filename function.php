<?php
function pg_pagespeed_dequeue_my_css() {
$css1 = get_option('insert_css_name1');
$css2 = get_option('insert_css_name2');
$css3 = get_option('insert_css_name3');
$css4 = get_option('insert_css_name4');
$css5 = get_option('insert_css_name5');
$css5 = get_option('insert_css_name6');
$css5 = get_option('insert_css_name7');
$css5 = get_option('insert_css_name8');
$css5 = get_option('insert_css_name9');
$css5 = get_option('insert_css_name10');
$css5 = get_option('insert_css_name11');
$css5 = get_option('insert_css_name12');
$css5 = get_option('insert_css_name13');
$css5 = get_option('insert_css_name14');
$css5 = get_option('insert_css_name15');
wp_deregister_style($css1);
wp_deregister_style($css2);
wp_deregister_style($css3);
wp_deregister_style($css4);
wp_deregister_style($css5);
wp_deregister_style($css6);
wp_deregister_style($css7);
wp_deregister_style($css8);
wp_deregister_style($css9);
wp_deregister_style($css10);
wp_deregister_style($css11);
wp_deregister_style($css12);
wp_deregister_style($css13);
wp_deregister_style($css14);
wp_deregister_style($css15);
}

// add a priority if you need it
// add_action('wp_enqueue_scripts','dequeue_my_css',100);

function pg_pagespeed_dequeue_my_js() {
$js1 = get_option('insert_js_name1');
$js2 = get_option('insert_js_name2');
$js3 = get_option('insert_js_name3');
$js4 = get_option('insert_js_name4');
$js5 = get_option('insert_js_name5');
$js5 = get_option('insert_js_name6');
$js5 = get_option('insert_js_name7');
$js5 = get_option('insert_js_name8');
$js5 = get_option('insert_js_name9');
$js5 = get_option('insert_js_name10');
$js5 = get_option('insert_js_name11');
$js5 = get_option('insert_js_name12');
$js5 = get_option('insert_js_name13');
$js5 = get_option('insert_js_name14');
$js5 = get_option('insert_js_name15');
wp_deregister_script( $js1 );
	wp_deregister_script( $js2 );
	wp_deregister_script( $js3 );
	wp_deregister_script( $js4 );
	wp_deregister_script( $js5 );
	wp_deregister_script( $js6 );
	wp_deregister_script( $js7 );
	wp_deregister_script( $js8 );
	wp_deregister_script( $js9 );
	wp_deregister_script( $js10 );
	wp_deregister_script( $js11 );
	wp_deregister_script( $js12 );
	wp_deregister_script( $js13 );
	wp_deregister_script( $js14 );
	wp_deregister_script( $js15 );
}
function pg_pagespeed_insert_inline_css()
{
?>
<style type="text/css"> 
<?php
echo get_option('insert_inline_css');
?>
</style>
<?php
}
function pg_pagespeed_inline_js()
{
?>
<script type="text/javascript">
<?php
echo get_option('insert_inline_js');
?>
</script>
<?php
}	  
?>