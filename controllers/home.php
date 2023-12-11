<?php

$config = require basePath('config/db.php');
$db = new Databse($config);

$listings = $db->query('SELECT * FROM listings LIMIT 6')->fetchAll();


loadView('home', [
    'listings' => $listings
]);