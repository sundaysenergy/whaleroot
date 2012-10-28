Zengine Theme Engine
====================

Zengine is a template engine for Drupal 5.x that is built on PHPTemplate and is designed to make theming Drupal easier than ever. Zengine makes it possible to completely alter the look of your site by modifying the CSS only. It works like an extra layer on PHPTemplate that allows theming to be a more granular process and provides a solid framework for theme creation.

Features
========
    * Utilises .info files for identification
    * Change the look completely by changing the CSS only 
      (utilizing subthemes).
    * Functionality added for using targeted overrides (as opposed to having
      to create a whole new page.tpl.php file, for example)
    * Breaks the CSS up into individually overridable files, like:
          o colors.css
          o layout.css
          o style.css
          o icons.css
          o print.css
          o etc.
          This allows a themer who simply wants to change the theme colors, 
          or the layout, to simply copy this file into their theme directory
          and modify it. 
    * provides for additional regions
    * example breadcrumb override
    * commenting goes back into template files where people will see them
    * adds many variables and classes to the page such as a body class for logged in/logged out, allowing CSS to change based on status
    * file naming convention _.zen.php so as to not be confused with PHPTemplate
    * possibility of adding a profile.zen.php file so that profiles can be modified a la My Space

Zengine and Drupal 6
====================
Zengine is a Drupal 5.x project. This is because some of what Zengine does, like using .info files to identify themes, is being committed to Core in Drupal 6. At this point, the plan is that Zengine code will be moved into the Zen theme and any Zengine based themes will become Zen sub-themes (defined as such in their .info files). There will likely be no need for Zengine in Drupal 6. For those who have to continue to theme Drupal 5 sites, Zengine will be their best friend doing it in a semantic, standards friendly, CSS-mojo-wielding way.