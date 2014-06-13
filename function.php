<?php
function pg_pagespeed_dequeue_my_css() {
$css1 = get_option('insert_css_name1');
$css2 = get_option('insert_css_name2');
$css3 = get_option('insert_css_name3');
$css4 = get_option('insert_css_name4');
$css5 = get_option('insert_css_name5');
wp_deregister_style($css1);
wp_deregister_style($css2);
wp_deregister_style($css3);
wp_deregister_style($css4);
wp_deregister_style($css5);
}

// add a priority if you need it
// add_action('wp_enqueue_scripts','dequeue_my_css',100);

function pg_pagespeed_dequeue_my_js() {
$js1 = get_option('insert_js_name1');
$js2 = get_option('insert_js_name2');
$js3 = get_option('insert_js_name3');
$js4 = get_option('insert_js_name4');
$js5 = get_option('insert_js_name5');
wp_deregister_script( $js1 );
	wp_deregister_script( $js2 );
	wp_deregister_script( $js3 );
	wp_deregister_script( $js4 );
	wp_deregister_script( $js5 );
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