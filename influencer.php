<?php 
/*
Plugin Name: Influencers Instagram and YouTube
Plugin URI: http://www.imagemotion.com
Description: Rechercher et afficher une liste d'influencer sur Instagram et Youtube
Version: 1.0
Author: Denis and Maxime
Author URI: http://imagemotion.com
License: Truc
*/
// Et Maxime

$reponse_ig = '[]';

session_start();

// importe le css et js pour user
add_action("wp_enqueue_scripts", "load_infl_scripts_user");
add_action("wp_enqueue_scripts", "load_infl_style_last", 11);

function load_infl_scripts_user() {

	wp_enqueue_style('infl-font-awesome-user', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css');


	wp_enqueue_script('infl-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', ['jquery'], "1.12.4");
	wp_enqueue_script('infl-bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js');
	wp_enqueue_script('infl-config', plugin_dir_url( __FILE__ ).'infl_config.js');
	wp_enqueue_script('infl-main', plugin_dir_url( __FILE__ ).'infl_main.js');
}

function load_infl_style_last() {
	wp_enqueue_style('infl-bootstrap-user', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css');
	wp_enqueue_style('infl-style-user', plugin_dir_url( __FILE__ ).'infl_style.css');
}

// include les functions
add_action('init','infl_load_functions');
function infl_load_functions(){
	global $reponse_ig;
	include_once dirname(__FILE__) . "/infl_templaite/infl_functions.php";

	// shortcode
add_shortcode('infl', "fonction_infl_shortcode" );
}

//include_once dirname(__FILE__) . "/infl_templaite/plugin_options.php";
//include_once dirname(__FILE__) . "/infl_templaite/produits_shortcode.php";


function fonction_infl_shortcode() {
	global $reponse_ig;
	if(isset($_SESSION['infl_user'])) {
		include_once dirname(__FILE__) . "/infl_templaite/infl_index.php";
	} else {
		include_once dirname(__FILE__) . "/infl_templaite/infl_login.php";
	}
}