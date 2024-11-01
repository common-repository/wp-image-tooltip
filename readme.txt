=== WP Image Tooltip ===
Contributors: Alvaro Beckerig
Tags: AJAX, image, photo, picture, tooltip
Requires at least: 2.9
Tested up to: 2.9.2
Stable tag: 2.9.2

== Description ==

 An easy to use plugin that enables image tooltips on your posts. Just upload an image using post or page editor and insert a link to that image, put the class attribute 'tooltip' and voilá, now you have image tooltips when hovering your link. Thanks to clueTip jQuery plugin makers @ http://plugins.learningjquery.com/cluetip/ =D

== Installation ==

To do a new installation of the plugin, please follow these steps

1. Download the zipped plugin file to your local machine.
2. Unzip the file.
3. Upload the `wp-image-tooltip` folder to the `/wp-content/plugins/` directory.
4. Activate the plugin through the 'Plugins' menu in WordPress.

To use, see the video @ http://screencast.com/t/VU5rPe6N67N


If you have already installed the plugin

1. De-activate the plugin.
2. Download the latest files.
3. Follow the new installation steps.

Alvaro Beckerig
me@alvin.com.br
www.alvin.com.br

== Frequently Asked Questions ==

Q: Why doesn't it work for me?

A: Either:
    
1. You have changed the plugin folder's name to something other than "wp-image-tooltip".

2. The problem is with your Wordpress theme, mangling image display properties. Use another theme, that doesn't interfere with posted images.

3. You have other plugins that conflict with WP Image Tooltip. Disable your other plugins and see if that helps. If it does, re-enable each plugin, one at a time to see which one is causing the conflict.

4. See your code maybe it´s another inclusion to jquery javascript file, I´ve seen a lot of themes including a jquery.js file, this plugin automatically includes jquery, delete the line on your theme that includes this again.