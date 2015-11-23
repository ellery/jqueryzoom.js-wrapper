===Plugin Name
Contributors: (this should be a list of wordpress.org userid's)
Donate link: http://durgin.com
Tags: images, Jquery, Zoom, responsive
Requires at least: 3.0.1
Tested up to: 4.3.1
Stable tag: 4.3.1
License: GPL v2 
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html

 This plugin acts as a Wrapper to include jqueryZoom.js within a wordpress install. I've modified the original plugin to support Jquery's Noconflict mode. 
 
==Description

This plugin acts as a Wrapper to include jqueryZoom.js (https://github.com/leye0/AngularZoomDirective "Github") within a wordpress install. I've modified the original plugin to support Jquery's Noconflict mode. 

The plugin provides a mouseover zoom effect on any image with a "zoom" attribute added. You can see screenshot one for an example. I wanted this plugin to be as lightweight and simple as possible without limiting to a "theme" type add in. The plugin does support responsive design and has been tested with Zurb Foundation column based layouts. 

==Installation


1. Upload `jqueryzoom.js-wrapper` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add a 'zoom' attrubute to any image you would like the plugin to act on.  

==Screenshots 

1. Example of Zoom effect on a datasheet. 

==Changelog 

=0.1.1
* added readme.txt
* added example

==Usage Example

,,,,
<img zoom class="datasheet" src="full-size.jpg" />
,,,,