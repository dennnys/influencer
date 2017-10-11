<?php 

if (isset($_POST['infl-btn-login'])) {
	if(isset($_POST['infl-login']) && isset($_POST['infl-pass'])) {
		$infl_login = $_POST['infl-login'];
		$infl_pass = $_POST['infl-pass'];

		infl_function_existe_user($infl_login, $infl_pass);
	}
}

if (isset($_POST['btn-ig-search'])) {

	require_once 'unirest/src/Unirest.php';

	$param = ["limit" => 4];

	if (isset($_POST['infl-category-ig'])&&$_POST['infl-category-ig'] != '') $param['filter[brand_category][0]'] = $_POST['infl-category-ig']; 
	if (isset($_POST['infl-country-ig'])&&$_POST['infl-country-ig'] != '') $param['filter[geo][0][id]'] = $_POST['infl-country-ig']; 
	if (isset($_POST['infl-subscr-min-ig'])&&$_POST['infl-subscr-min-ig'] != '') $param['filter[followers][left_number]'] = $_POST['infl-subscr-min-ig']; 
	if (isset($_POST['infl-subscr-max-ig'])&&$_POST['infl-subscr-max-ig'] != '') $param['filter[followers][right_number]'] = $_POST['infl-subscr-max-ig']; 
	if (isset($_POST['infl-age-min-ig'])&&$_POST['infl-age-min-ig'] != '') $param['filter[age][left_number]'] = $_POST['infl-age-min-ig']; 
	if (isset($_POST['infl-age-max-ig'])&&$_POST['infl-age-max-ig'] != '') $param['filter[age][right_number]'] = $_POST['infl-age-max-ig']; 
	if (isset($_POST['infl-engagement-min-ig'])&&$_POST['infl-engagement-min-ig'] != '') $param['filter[engagements][left_number]'] = $_POST['infl-engagement-min-ig']; 
	if (isset($_POST['infl-engagement-max-ig'])&&$_POST['infl-engagement-max-ig'] != '') $param['filter[engagements][right_number]'] = $_POST['infl-engagement-max-ig']; 
	$token = '';
	if (isset($_POST['infl-token-ig'])&&$_POST['infl-token-ig'] != '') $token = $_POST['infl-token-ig']; 
/*	echo "<pre>";
	var_dump($param); die();
	echo "</pre>";
	*/

	$query_reponse_ig = Unirest\Request::post("https://deepsocialapi.com/v1/accounts/search?api_token=".$token,
	  array(
	    "Accept" => "application/json"
	  ),
	  Unirest\Request\Body::form($param)
	);

	$reponse_ig = $query_reponse_ig->raw_body;

/*
	require_once 'example1.php';
	$reponse_ig = $reponse1;
*/
	//echo "<pre>";
	//$r =json_decode($response);
	//var_dump($reponse_ig);
	//echo "</pre>";
	//die();

}

function infl_function_existe_user($login, $pass) {

	$ress = wp_authenticate($login, $pass);

	if($ress->data->display_name != NULL) {
		$_SESSION['infl_user'] = $ress->data->display_name;
	} else {
		$_SESSION['infl_error'] = 'Login or password not gude!';
	}


}