<?php require("connexion.php");
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$pays = $_POST["Pays"];
$date =  $_POST["date"];
$pseudo =  $_POST["pseudo"];
$email = $_POST["email"];
$Password=password_hash($_POST["psw"], PASSWORD_DEFAULT,['cost'=> 10]);
if($connect->exec("insert into membre(id_membre,nom,prenom,pays,date,pseudo,email,password) values('$nom','$prenom','$pays','$date','$pseudo','$email','$Password')")){
    include_once('redirect.php') ;
    }
else{
    echo "votre compte n'a pu créer";
    if(strlen($pseudo)>8){
        echo "<script>alert(\"Pseudo peut contenir maximum 8 charactères!\")</script>";
    
    }
    else if(strlen($nom)>10){
        echo "<script>alert(\"Nom peut contenir maximum 10 charactères!\")</script>";
    }
    else if(strlen($prenom)>20){
        echo "<script>alert(\"Prénom peut contenir maximum 20 charactères!\")</script>";
    }
    elseif(strlen($email)>25){
        echo "<script>alert(\"Email peut contenir maximum 25 charactères!\")</script>";
    }

}
?>
<?php


?>
</body>
<html>