<?php require("connexion.php");
echo "<!DOCTYPE html>";
echo "<html lang='fr'>";
echo "<head><meta charset='utf-8'><title>A Propos</title><link rel='stylesheet' href='css/nullfill.css'>";
echo "<link rel='stylesheet' href='css/navbar.css'>";
echo "<link rel='stylesheet' href='css/Indexmain.css'>";
echo "</head>";
echo "<body>";
echo "<header><nav class = 'navbar'><ul class ='nav'>";
echo "<li class='header_li' id='navset'> <a href='user_page.php'><img src='assets/icons/iconset.png' class='imgnavbar'></img></a></li>";
echo "<li class='navli' id='navcard'><a href='admin.php'><div>Profil Card</div></a></li>";
echo "<li class='header_li' id='navprofil'><a href='login.html'> <img src='Assets/icons/IconProfil.png' class='imgnavbar'></img></a></li>";
echo "<li class='header_li' id='navtask'><a href='cv.php'><img src='Assets/icons/IconTask.png' class='imgnavbar'></img></a></li>";
echo "<li class='header_li' id='navnotif'><a href='notifications.php'><img src='Assets/icons/IconNotif.png' class='imgnavbar'></img></a></li>";
echo "<li class='header_li' id='navmail'><a href='message.php'><img src='Assets/icons/IconMail.png' class='imgnavbar'></img></a></li>";
echo "<li id='navlogo'><a href='index.php'><img src='Assets/icons/LogoProjet.png' id='navlogoimg'></img></a></li>";
echo "<li  id='navburger'><a href='settings.php'><img src='Assets/icons/IconBurger.png' class='imgnavbar'></img></a></li>";
echo "</ul></nav></header><main>";
if(!($_COOKIE)){
    echo "<div class='TempoIndic'><p id='importante'>Vous devez s'inscrire pour accéder!</p></div></main></body></html>";
}
else{
    echo "<div class='TempoIndic'><p id='importante'><img src='Assets/Images/cv.png'/></p></div></main></body></html>";
}
