<?php

if(isset($_COOKIE['user'])){
    setcookie("user", $data['username'], time() - 86400 * 60);
    header("location:login.html");

    
}
else{
    header("location:login.html");
}