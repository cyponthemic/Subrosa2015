<?php
/*
vintage: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walkers
require_once('library/menu-walker.php');
require_once('library/offcanvas-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

/* Showing attributes */

function get_vintage(){
$terms = get_the_terms( $product->ID, 'pa_vintage');
foreach ( $terms as $term ) { echo $term->name; }
}

function get_vineyard(){
$terms = get_the_terms( $product->ID, 'pa_vineyard');
foreach ( $terms as $term ) { if($term){echo $term->name;} }
}

function get_variety(){
$terms = get_the_terms( $product->ID, 'pa_variety');
foreach ( $terms as $term ) { echo $term->name; }
}

function get_origin(){
$terms = get_the_terms( $product->ID, 'pa_origin');
foreach ( $terms as $term ) { echo $term->name; }
}

function get_wine_title(){
			echo '<h3 class="vintage">';
			get_vintage();
			echo '</h3>';
			echo '<h3 class="vineyard">';
			get_vineyard();
			echo '</h3>';
			echo '<h3 class="variety">';
			get_variety();
			echo '</h3>';
			echo '<h3 class="origin">';
			get_origin();
			echo '</h3>';
}
show_admin_bar(false);

?>