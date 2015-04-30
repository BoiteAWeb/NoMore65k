<?php
/*
Plugin Name: No More 65k
Description: Avoid any future comment that contains more than 65k characters
Author Name: SecuPress
Author URI: http://secupress.fr
Licence: GPL 2.0
*/

if ( isset( $_POST['comment'] ) && mb_strlen( $_POST['comment'] ) >= 65536 ) {
	die( 'Cheatin\' uh?' );
}
