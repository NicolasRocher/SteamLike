<?php session_start();


require('view/config.php');
require('functions.fn.php');



if(isset($_POST['pseudo']) && isset($_POST['pass'])){
	if(!empty($_POST['pseudo']) && !empty($_POST['pass'])){

		// TODO

		if(isset($_POST["pseudo"])
		  && isset($_POST["pass"]))
		    {

		    $pseudo = htmlspecialchars($_POST["pseudo"]);
		    $pass = htmlspecialchars($_POST["pass"]);

		    $request = $db->prepare("SELECT id FROM Users WHERE pseudo LIKE :pseudo AND pass LIKE :pass");
		    $request->execute(
		      array(
		        "pseudo" => $pseudo,
		        "pass" => $pass
		        )
		    );

		    $Users = $request->fetchAll();

		    if(sizeof($Users) > 0)
		    {
		      header("Location: view/dashboard.php");

		    }else {
		    	$error = 'Mauvais pseudo et/ou mot de passe';
		    	header("Location: index.php");
		    }
		  }

		  userConnection($db, $pseudo, $pass);



	}else{
		$error = 'Champs requis !';
		header("Location: index.php");
	}
}

?>
