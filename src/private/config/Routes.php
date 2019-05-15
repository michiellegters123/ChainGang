<?php
require_once config["CONTROLLER_FOLDER"] . "HomeController.php";
require_once config["CONTROLLER_FOLDER"] . "NotFoundController.php";
require_once config["CONTROLLER_FOLDER"] . "LoginController.php";
require_once config["CONTROLLER_FOLDER"] . "RegisterController.php";
require_once config["CONTROLLER_FOLDER"] . "ProfileController.php";
require_once config["CONTROLLER_FOLDER"] . "BestellingenController.php";

Route::addRoute("", new HomeController($dataBase));
Route::addRoute("home", new HomeController($dataBase));
Route::addRoute("404", new NotFoundController($dataBase));
Route::addRoute("login", new LoginController($dataBase));
Route::addRoute("register", new RegisterController($dataBase));
Route::addRoute("profiel", new ProfileController($dataBase));
Route::addRoute("profiel/bestellingen", new BestellingenController($dataBase));