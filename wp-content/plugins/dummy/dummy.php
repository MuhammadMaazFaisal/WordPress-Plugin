<?php
/**
 * @package Dummy
 */
/*
Plugin Name: Dummy Plugin
Plugin URI: https://webnaura.com
Short Description: This is just a dummy plugin, which I'm creating for practice 
Version: 1.0
php version:7.4
Author: Muhammad Maaz
Author URI: https://webnaura.com/Muhammad-Maaz
License: GPLv2 or later
Text Domain: dummy
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2022 Automattic, Inc.
*/

//-----------------------------------New Section--------------------------------------------------------
// To Check if Wordpress is accessing it or not, abspath is created by wordpress in the background
// if (! defined('ABSPATH')){
//     die;
// }

// defined('ABSPATH') or die("You can't access this");

if (! function_exists("add_action")){
    die;
}

//-----------------------------------New Section-------------------------------------------------------- 

class Dummy{
    function __construct()
    {
        add_action( 'init',array( $this, 'custom_post_type'));
    }

    function activation(){
        $this->custom_post_type();
       flush_rewrite_rules();
    }

    function deactivation(){
        flush_rewrite_rules(); 
    }

    // static function uninstall(){
        
    // }

    function custom_post_type(){
        register_post_type( "Dummy", ['public' => true, 'label'=> "Dummy"] );
    }
}

if (class_exists("Dummy")){
    $dummyobj=new Dummy();
}

//Activation
register_activation_hook( __FILE__, array($dummyobj,'activation') );

//Deactivation
register_deactivation_hook( __FILE__, array($dummyobj,'deactivation') );

//Uninstall

register_uninstall_hook( __FILE__, array($dummyobj,'uninstall') );