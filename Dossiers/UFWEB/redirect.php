<?php $location='http://localhost/ufweb/login.html';
    $redirect=true;
    if($redirect && !empty($location))
    {
        header('Location:'.$location);
        exit;
    }?>