<?php
	
	session_start();

	include('facebook-php-sdk/autoload.php');
	use Facebook\Facebook;
	use Facebook\Exceptions\FacebookResponseException;
	use Facebook\Exceptions\FacebookSDKException;

	$appId = '291554968650720';
	$appSecret = '9769d6dbd6af6a9d654a529ba5679b81';
	$redirectUrl = 'http://localhost/Meus_Projetos/Desenvolvimento_Web/Desenvolvimento_Web/Web_Server/Login_FaceBook/';
	$fbPermission = array('email');

	$fb = new Facebook(array(
		'app_id'=> $appId,
		'app_secret'=> $appSecret,
		'default_graph_version' => 'v2.2'
	));

	$helper = $fb->getRedirectLoginHelper();

	try{
		if(isset($_SESSION['facebook_access_token'])){
			$accessToken = $_SESSION['facebook_access_token'];
		}else{
			$accessToken = $helper->getAccessToken();
		}
	}catch(FacebookResponseException $e){}

?>