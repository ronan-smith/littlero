<?php
/**
 * Plugin Name: LittleRo
 * Plugin URI: https://github.com/ronan-smith/littlero
 * Description: Modular, hassle-free and unobtrusive administration and white-labelling plugin for WordPress.
 * Version: 0.0.0
 * Author: Ronan Smith
 * Author URI: https://github.com/ronan-smith
*/

/*
LittleRo is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

LittleRo is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with LittleRo. If not, see https://github.com/ronan-smith/littlero/blob/main/LICENSE.txt.
*/

// Kill script if accessed directly via URL
if (!defined('WPINC')) die;

// Load main plugin file from mu-plugins directory
require_once WPMU_PLUGIN_DIR . '/littlero/littlero.php';
