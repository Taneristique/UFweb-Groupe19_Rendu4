<?php require("connexion.php");
$Email=$_POST['name'];
$Password=$_POST['Password'];
$al=$connect->query("SELECT password FROM membre WHERE pseudo='$Email' or email='$Email'",PDO::FETCH_ASSOC);
foreach($al as $write){
   if(password_verify($Password,$write['password'])){
       setcookie('nom',md5($write['password']),time()+60*60*12);
       session_start([$_COOKIE['nom']]);
       if(session_start([$_COOKIE['nom']])
       ){
         header("location:user_page.php");
       }
       echo "désolée";}
   else{
       echo "mot de passe est incorrect";
   }
}
echo "<a href='login.html'>cliquez ici pour rétourner</a>";
?>

