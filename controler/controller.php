<?php
require('model/Connexion.php');

function loginForm(){
    require 'view/loginform.php';
}

function login($login,$pwd){
    $user = getUser($login);
  
    if (password_verify($pwd,$user['password'])){
        $_SESSION['name'] = $login;
        require 'view/membre.php';
       } 
    else {
        echo 'mauvais utilisateur/mdp';
    }
}
function accesRegister(){
     require 'view/register.php';
}

function checkResearch()
{
    $loginName = $_POST['loginregister'] ?? '';
    $loginPass = $_POST['passregister'] ?? '';
    $loginPass_confirm = $_POST['pass_confirmregister'] ?? '';
    if ($loginName != "" && $loginPass != "") {
       checkRegister($loginName);

        if ($loginPass == $loginPass_confirm) {
            register($loginName,$loginPass);
            echo "compte créer";
            require 'view/loginform.php';
		}
		else {
            echo "mot de passe diffèrent";
		
		} 
	} 
	else {
        echo "remplir les champs ci dessus";
    }

}
function accessMember(){
    require 'view/membre.php';
}



?>