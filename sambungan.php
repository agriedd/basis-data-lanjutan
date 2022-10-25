<?php

$username = "root";
$password = "";
$database_name = "penjualan";

$sambungan = new PDO("mysql:host=localhost", $username, $password);

$query_menggunakan_database = "USE {$database_name}";

$sambungan->query($query_menggunakan_database);