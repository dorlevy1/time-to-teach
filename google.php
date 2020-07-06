<?php require ("Model/vendor/autoload.php");
//Step 1: Enter you google account credentials

$g_client = new Google_Client();

$g_client->setClientId("1095111253042-lnl3vfet0ampqtf4hq9p2mf7b0te0h3e.apps.googleusercontent.com");
$g_client->setClientSecret("-VXACFqiyaThW_sbFvqFUumv");
$g_client->setRedirectUri("http://localhost:8080/timetoteach/google.php");
$g_client->setScopes("email");

//Step 2 : Create the url
$auth_url = $g_client->createAuthUrl();
echo "<a href='$auth_url'>Login Through Google </a>";

echo "<a href='?logout'>LOGOUT</a>";
//Step 3 : Get the authorization  code
$code = isset($_GET['code']) ? $_GET['code'] : NULL;
//Step 4: Get access token
if(isset($code)) {
    
    try {
        
        $token = $g_client->fetchAccessTokenWithAuthCode($code);
        $g_client->setAccessToken($token);
        
    }catch (Exception $e){
        echo $e->getMessage();
    }
    
    
    
    
    try {
        $pay_load = $g_client->verifyIdToken();
        
        
    }catch (Exception $e) {
        echo $e->getMessage();
    }
    
} else{
    $pay_load = null;
}

if(isset($pay_load)){
    var_dump($pay_load);
    

    

}


if(isset($_REQUEST['logout'])){
    session_unset();
$code= null;
$g_client=null;
$token=null;
    $pay_load = null;

}

?>