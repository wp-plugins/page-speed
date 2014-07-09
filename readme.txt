	=== Plugin Name ===
Contributors: buboiasinine
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=NAX45XQV5P7ZW
Tags: Page Speed, Goole Page Speed Insights, PageSpeed Insights, Css, Js, Javascript, Optimize Css, Remove render-blocking JavaScript, Move Script In Footer, Eliminate render-blocking JavaScript and CSS in above-the-fold content, Leverage Browsing cache, Enable Compression, Gzip  
Requires at least: 3.0
Tested up to: 3.9
Stable tag: 1.1.2
License: GPLv2 or later
License URI: GPLv2 or later

Page Speed Plugin Allows You To Eliminate render-blocking JavaScript and CSS in above-the-fold content, Enable compression and Leverage browser caching.

== Description ==

Fast and optimized pages lead to higher visitor engagement, retention, and conversions.The Page Speed Plugin help you to get a passing grade in Google Page Speed Insight.  

For More Info Visit <a href="https://developers.google.com/speed/docs/insights/about" target="_blank"> Google PageSpeed Insights </a>


Features include: 

Leverage browser caching
	
Enable compression


Eliminate render-blocking JavaScript and CSS in above-the-fold content

*   Remove render-blocking JavaScript
*  Optimize CSS Delivery 



Future Development: 


*  Minify JavaScript
* Minify CSS
* Optimize images


I Will Update This Plugin for more simplier option and more functionality as soon as possible..
cheers...


== Installation ==



1. Upload `Page Speed` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Configure the plugin 'Admin' 'Page Speed' 

== Frequently Asked Questions ==

= After activating the leverage caching and enable compression its still mark as should fix in the google insight =

if nothing happen after activating or if the changes is not reflected in the google insight.

Go to your settings >> permalinks >> select default and save >> and then switch it back to your original settings "Post name" nad save it again. check agian the google insight

note: if its showing an external link leave it behind. we cant set cache or compress if its not on your site.


= Where can i find the Script Name  i want to remove =


This Will Help <a target="_blank" href="http://codex.wordpress.org/Function_Reference/wp_enqueue_script#Notes"> Click Me! </a>

Finding the js name is not too easy you need to dig deep to the plugin folder and look for somthing like this 

<?php wp_register_script( 'sample', 'http://sample.com/wp-content/plugin/js/sample.js' ); ?>

the sample is js name that we need next to it is the url of the plugin/themes insert the js name in the page speed plugin and copy paste the js code and put it in the js field.



= Where can i find the Css Name of the plugin i want to remove =

Visit your site, right click and view page source
Find the Id of the Css you want to Optimize, remove the "-css" ex. flexslider-css to flexslider
and put it in the Page Speed Plugin, Css Name


Dont Forget to Copy and Paste The Css that you've been remove in the Css Field inside the plugin

== Screenshots ==

<img src="/assets/screenshot-1.png">


Settings page

== Changelog ==

version 1.1.2

fix bugs - white space

