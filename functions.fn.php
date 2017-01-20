<?php

function userConnection(PDO $db, $pseudo, $pass){
  if(!empty($pseudo) && !empty($pass)){

    $sql = "SELECT * FROM Users WHERE pseudo = :pseudo AND pass = :pass LIMIT 1";

    $req = $db->prepare($sql);
    $req->execute(array(
      ':pseudo' => $pseudo,
      ':pass' => $pass
    ));

    $result = $req->fetch(PDO::FETCH_ASSOC);
    if($result == true){

      $_SESSION['id'] = $result['id'];
      $_SESSION['pseudo'] = $result['pseudo'];
      $_SESSION['nom'] = $result['nom'];
      $_SESSION['email'] = $result['email'];
      $_SESSION['pass'] = $result['pass'];
      return true;
    }else{
      return false;
    }
  }else{
    return false;
  }
}
?>
