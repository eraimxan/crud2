<?php

global $connect;
require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `products` WHERE `products`.`id` = '$id'");

header("Location: ../index.php");
