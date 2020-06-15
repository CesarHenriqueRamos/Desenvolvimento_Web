<?php
//id:765535993255-kasena55lhrk506noa5irbhemrv0mbin.apps.googleusercontent.com
//chave secreta:XqsQBo2OPW8E0-YNR_Gf3pOg
	session_start();
	require('vendor/autoload.php');


	$gClient = new Google_Client();

	//$gClient->setClientId("765535993255-kasena55lhrk506noa5irbhemrv0mbin.apps.googleusercontent.com");
	//$gClient->setClientSecret("XqsQBo2OPW8E0-YNR_Gf3pOg");

	$gClient->setRedirectUri('http://localhost/Meus_Projetos/Desenvolvimento_Web/Desenvolvimento_Web/Web_Server/login_google_auth/index.php');

	$gClient->addScope('email');

	if(!isset($_GET['code'])){
		//Precisamos logar.
		echo '<a href="'.$gClient->createAuthUrl().'">Logar com sua conta google!</a>';
	}else{
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);

		if(!isset($token['error'])){
			$gClient->setAccessToken($token['access_token']);

			$_SESSION['access_token'] = $token['access_token'];

			$google_service = new Google_Service_Oauth2($gClient);

			$data = $google_service->userinfo->get();
			echo '<pre>';
			print_r($data);
			echo '</pre>';
		}
	}


?>