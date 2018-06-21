<?php
session_start();
// added in v4.0.0
include '../config.php';
require_once 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( '899907676819642','8d11902aa895b77005bd862e691ee847' );
// login helper with redirect_uri
    $helper = new FacebookRedirectLoginHelper('http://localhost/ConnectStud/facebook/fbconfig.php' );
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
     	$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
 	    $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
	    $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
	/* ---- Session Variables -----*/
	    $_SESSION['FBID'] = $fbid;           
        $_SESSION['user'] = $fbfullname;
	    $_SESSION['EMAIL'] =  $femail;
        $_SESSION['role'] = 'student';

    $checkIfExist = "select password from users where password = 'FB{$fbid}'";
    $result = mysqli_query($link, $checkIfExist);

if (mysqli_num_rows($result)==0 ) {
    $insertDataInToUsers = "INSERT INTO users (username, password, email, nume) VALUES ('" . $fbfullname . "','FB" . $fbid . "','" . $femail . "','" . $fbfullname . "')";
    mysqli_query($link, $insertDataInToUsers);
}

    /* ---- header location after session ----*/
  header("Location: ../index.php");
} else {
  $loginUrl = $helper->getLoginUrl();
 header("Location: ".$loginUrl);
}
?>