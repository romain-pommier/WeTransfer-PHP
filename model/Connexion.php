<?php



function connect(){
    $port="3308";
    $dbName="wetransfer";
    $user="root";
    $pass="1234";
    try {
        $dbh = new PDO("mysql:host=localhost;port=" . $port . ";dbname=" . $dbName, $user, $pass);
        $dbh->exec("SET NAMES 'UTF8'");
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
    }

    return $dbh;
   
}


function getUser($login) {
    $dbh = connect();
    $sql3 = "SELECT * FROM user where name=:loginName";
    $request = $dbh->prepare($sql3);
    $request->execute([':loginName' => $login]);

    return $request->fetch();

}

function checkRegister($login){
    $dbh = connect();
    $sql2 = "SELECT name FROM user where name=:loginName";
    $statement = $dbh->prepare($sql2);
    $statement->execute([':loginName'=>$login]);
}
function register ( $loginName,$loginPass){
    
   
    $dbh = connect();
    $sql ='insert into user values (null,:name,:password,0,0);';
    $req = $dbh->prepare($sql);
    $req->execute([':name' => $loginName,':password'=>password_hash($loginPass,PASSWORD_DEFAULT)]);


}
function addAndTransferFiles(){
  
    $fileName = $_FILES['fichier']['name'];
    $filesArbo = $_FILES['fichier']['tmp_name'];
    move_uploaded_file($filesArbo,'files/'.$fileName);
    
    echo('transferé <br/>');
    $dbh=connect();
    $sql = 'insert into file value (null,":filesArbo ");';
    $req = $dbh -> prepare($sql);
    $req->execute([':filesArbo']);
    echo('transfer effectuer');

}
function deleteFiles(){
   
   
    unlink($fileName);

}

