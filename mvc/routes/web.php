<?php

use app\controllers\ContactarController;
use app\controllers\HomeController;
use app\controllers\InicioController;
use app\controllers\LenguajeController;
use lib\Route;

/* Route::get("/inicio/:flag", function($flag){
    return ["title"=>"ejemplo"];
}); */

Route::get("/", [HomeController::class, "index"]);

Route::get("/inicio", [InicioController::class, "index"]);

Route::get("/lenguaje", [LenguajeController::class, "index"]);

Route::get("/contactar", [ContactarController::class, "index"]);

Route::dispatch();

?>