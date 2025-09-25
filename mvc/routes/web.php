<?php

use app\controllers\HomeController;
use lib\Route;

Route::get("/inicio/:flag", function($flag){
    return ["title"=>"ejemplo"];
});

Route::get("/", [HomeController::class, "index"]);
Route::dispatch();

?>