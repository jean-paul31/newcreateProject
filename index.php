<?php

require './view/navbar.php';

if ($_SESSION['id']) 
{
    require "./view/import.php";
}
else
{
    require "./view/login.php";
}

require "./view/foot.php";
