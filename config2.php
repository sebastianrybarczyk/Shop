<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';

$result = $connection->query("CREATE DATABASE shop_db");
if ($result == false) {
    die('BLAD SQL: '. $connection->error);
}
echo "baza utworzona";

$connection->close();
$connection = null;