// $Id: README.txt,v 1.5 2007/10/30 16:53:49 weitzman Exp $

DESCRIPTION
-----------

drush_pm.module (The Drupal Shell Packet Manager) allows you to install and update contributed modules from the command line.

It provides two commands, "pm install" and "pm update"

Run "drush help pm install" and "drush help pm update" to see supported command line options and arguments.

REQUIREMENTS
------------
drush_pm requires update_status.module, version 5.x-2 or above.
No other special requirements on unix-like systems.
drush_pm uses  wget (or curl), tar and gzip, so if you're trying to use drush_pm on Windows, you have to install
these binaries before, for example from GnuWin32 (http://gnuwin32.sourceforge.net/).

------------
Written by Franz Heinzmann (frando) <http://unbiskant.org>.
No warranties of any kind. Use with care.