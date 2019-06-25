<?php $location='http://localhost/ufweb/user_page.php';
    $redirect=true;
    if($redirect && !empty($location))
    {
        header('Location:'.$location);
        exit;
    }?>