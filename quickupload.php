<?php
/*
Plugin Name: QuickUpload
Description: This plugin will embed the drag&drop media uploader right into a dashboard widget.     
Version: 1.0
Author: Ayman Al Zarrad 
License: GPL2 or later
*/

/*  Copyright 2012  Ayman Al Zarrad

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//  Creating the function
function quickupload() {
	include('uploader.php');
}


// Adding the function and the widget
function add_quickupload(){
    wp_add_dashboard_widget('quickupload', 'QuickUpload', 'quickupload'); 
}

// Registring the plugin in the Action Hook
add_action('wp_dashboard_setup', 'add_quickupload');

?>