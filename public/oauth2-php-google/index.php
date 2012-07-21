<?php
require_once "common.php";

//construct Facebook auth URI
$auth_url = AUTHORIZATION_ENDPOINT
          . "?redirect_uri=" . CALLBACK_URL
          . "&client_id=" . KEY
          . "&scope=https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email"
          . "&response_type=code";

$params = array(
        'client_id' => KEY,
        'scope'    => 'https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email',
        'response_type' => 'code',
        'redirect_uri' => CALLBACK_URL,
        'access_type' => 'online',
        'approval_prompt' => 'force',
);

$auth_url = AUTHORIZATION_ENDPOINT . '?' . http_build_query($params);
//forward user to Facebook auth page
header("Location: $auth_url");
?>