<?php
	if(isset($_POST['id_membro'])){
	 $pdo = new PDO('mysql:host=localhost;dbname=saite_bootstrap','root','');
	 $sql = $pdo->prepare("DELETE FROM `equipe` WHERE id = ?");
	 $sql->execute(array($_POST['id_membro']));
	}
?>