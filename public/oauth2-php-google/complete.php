<?php
require_once "common.php";

//capture code from auth
$code = $_REQUEST['code'];

//construct POST object for access token fetch request
$postvals = array('grant_type' => 'authorization_code',
                  'client_id' => KEY,
                  'client_secret' => SECRET,
                  'code' => $code,
                  'redirect_uri' => CALLBACK_URL);

if (!empty($_POST)) {
    var_dump($_POST);
}

if (isset($_REQUEST['code'])) {
    //$ret = run_curl(ACCESS_TOKEN_ENDPOINT, 'POST', $postvals);
    //echo $ret;
    //die;
    $ch = curl_init(ACCESS_TOKEN_ENDPOINT);
    $options = array(
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($postvals),
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);
    curl_close($ch);
} else {
    var_dump($_REQUEST);
}
die('0');
//get JSON access token object (with refresh_token parameter)
$token = json_decode(run_curl(ACCESS_TOKEN_ENDPOINT, 'POST', $postvals));

var_dump($token);


die;


//set request headers for signed OAuth request
$headers = array("Accept: application/json");

//construct URI to fetch contact information for current user
$contact_url = "https://www.google.com/m8/feeds/contacts/default/full?oauth_token=" . $token->access_token;

//fetch profile of current user
$contacts = run_curl($contact_url, 'GET', $headers);
?>
