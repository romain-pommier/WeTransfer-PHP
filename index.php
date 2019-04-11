<?php
session_start();
require('controler/controller.php');

if(isset ($_SESSION['name'])&& !isset($_POST['deconnection'])){
  accessMember();
}
else if(isset($_POST['login'])){
    login($_POST['login'],$_POST['pass']);
}
else if(isset($_POST['registeraccess'])){
    accesRegister();
}
else if( isset($_POST['deconnection'])){
    loginForm();
    session_destroy();
    
  }

else if (isset($_POST['loginregister'] ) && isset($_POST['passregister'])){
    checkResearch();
}
else if (isset($_FILES) && !empty($_FILES)) {
    addAndTransferFiles();

}
else if (isset($_POST['delete'])){
    deleteFiles();
}







