<?php
ini_set('display_errors', 1);
use Edu\App\Core\Route;
require 'app/config/server.php'; 
require 'vendor/autoload.php';


Route::start(); // запускаем маршрутизатор