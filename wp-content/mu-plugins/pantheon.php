<?php
/*
  Plugin Name: Pantheon
  Plugin URI: http://www.getpantheon.com/
  Description: Building on Pantheon's and Wordpress's strengths, together.
  Version: 0.1
  Author: Pantheon
  Author URI: http://getpantheon.com
*/

if ( isset( $_ENV['PANTHEON_ENVIRONMENT'] ) ) :

require_once( 'pantheon/pantheon-cache.php' );
require_once( 'pantheon/pantheon-updates.php' );

endif; # Ensuring that this is on Pantheon
