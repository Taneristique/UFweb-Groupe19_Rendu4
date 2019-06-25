
<?php
try{
    $connect=new PDO("mysql:host=localhost;dbname=workstation","root","");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* echo "vous avez connecté";
   je l'ai utilisé pour controler si on a cpnnecté à base de donné
   */
}
catch(PDOexpception $e){
    echo $e->getMessage();
}
 ?>