$Id: README.txt,v 1.1.2.1 2007/06/19 22:30:15 zoo33 Exp $

----------------
ZEN BASIC README
----------------

Zen Basic is a theme based on the Zengine theme engine 
(http://drupal.org/project/zengine). It is primarily written to be an easy 
starting point for people who are creating their own theme, and to serve as 
an example implementation of Zengine. The code is short and commented, so it's 
easy to make adjustments and additions. That said, it is a decent theme and 
it can be used as is. There just isn't much eye candy.

The theme doesn't contain any (X)HTML markup whatsoever but rather uses 
Zengine's own, flexible templates. Thanks to this, maintenance is reduced to a 
minimum as all adjustments are done with CSS. If larger changes need to be made, 
theming functions can be added to a template.php file. Template files such as 
node.zen.php can also be added (note the "zen" in the filename!).

This theme (like Zen) can have either two or three columns depending on what 
regions have active blocks in them. It has a fixed width, although that can 
easily be changed in layout.css.


Installation
------------

First you need to install Zengine in the directory themes/enginges/zengine 
within your Drupal installation. (If there are other ways to install a theme 
engine, like in a site directory, please let me know!)

Then just install zen_basic in an appropriate themes directory.


Making your own theme based on Zen Basic/Zengine
------------------------------------------------

Rename this directory to whatever you'd like to call your theme ("mytheme"). 
Then rename zen_basic.info to mytheme.info. You also need to rename any 
functions in template.php beginning with zen_basic_ so that they begin with 
mytheme_ instead. (No such functions exist at the moment.)

Building themes with Zengine is similar to using PHPtemplate, which is well 
documented in the Drupal handbook. The main differences are that template 
files have "zen" rather than "tpl" in their file names and that CSS files are 
handled differently:


CSS files
---------

The css directory holds a number of CSS files that will be automatically 
included on all pages. Please note that if you remove any of these files, the 
corresponding css file from Zengine's css directory will be included instead. 

Zengine includes two css files that have not been overridden by placing 
corresponding files in the css directory: print.css and zengine.css.

See the comments in the CSS files for mor information.


Replacing the background images
-------------------------------

The background images in this theme are generated from the Photoshop file 
background_900.psd. You can easily give a completely different look to this 
theme by modifying that file and doing a Save to web using the five prepared 
"slices". (Of course, you don't have to use the .psd file. Just replace the 
background_*.png files in the images directory.


Credits
-------

Zen Basic was created by Hannes Lilljequist (zoo33 @ drupal.org).
Based on the Zen Zen theme - and of course the mighty Zengine - by jjeff.
