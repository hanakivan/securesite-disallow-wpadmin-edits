<?php
/**
 *
"SecureSite: Disallow WPAdmin edits" is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

"SecureSite: WP-Admin protection" is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with "SecureSite: WP-Admin protection". If not, see https://www.gnu.org/licenses/gpl-3.0.html.
 *
 * Plugin Name: SecureSite: Disallow WPAdmin edits
 * Description: A simple lightweight plugin that disabled the source code plugin/theme editor via wp-admin.
 * Version: 1.0.0
 * Author: Ivan Hanák <kontakt@hanakivan.sk>
 * Author URI: https://hanakivan.sk
 * Requires at least: 5.0
 * Requires PHP: 7.O
 */

/**
 * Disallowing editing of theme and plugins
 * @source https://wordpress.org/support/article/hardening-wordpress/#disable-file-editing
 */
if(!defined("DISALLOW_FILE_EDIT")) {
	define( 'DISALLOW_FILE_EDIT', true );
}