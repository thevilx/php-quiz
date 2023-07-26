<?php
require 'vendor/autoload.php';

use React\Promise\Promise;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Access the variables from the .env file
$dbHost = $_ENV['DB_HOST'];
$dbUsername = $_ENV['DB_USERNAME'];
$dbPassword = $_ENV['DB_PASSWORD'];


// I dont know exactly what to do with async Promises in php
// there is no official support for it
// there are some packages like react/promise
// and Im kinda not sure what the question is (what do you mean by orders & logs) there is no detail
// btw this is my code wars account : https://www.codewars.com/users/thevil
// you can see the codes I have done before
// good luck
