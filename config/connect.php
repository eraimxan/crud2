<?php

$connect =  mysqli_connect("localhost", "root", "root", "crud");

if (!$connect) {
    die ("Connection failed: " . mysqli_connect_error());
}