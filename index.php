<?php

require './view/navbar.php';

if (isset($_GET['id'])) {
    require "./view/import.php";
} else {
    require "./view/login.php";
}