<?php require('connexion.php');
echo "<html>";
echo "<head>";
echo "<meta charset=utf-8>";
echo "<link rel='stylesheet' href='css/php_reponse.css'>";
echo "<title>Workstation</title>";
echo "</head>";
echo "<body>";
$email=$_POST['search'];
$sql="select email from membre where email='$email'";
if($connect->query("select email from membre where email='$email'")){
    $rmdp=$connect->lastinsertid()+rand(10,50)**rand(5,10);
    $vnmdp=password_hash($rmdp, PASSWORD_DEFAULT,['cost'=> 10]);
    $update=$connect->query("update membre set password='$vnmdp'");
    echo "votre_nouveau_mot_de_passe:".$rmdp;
}
    else{
    echo "Cet email n'existe pas!";
    
}

?>