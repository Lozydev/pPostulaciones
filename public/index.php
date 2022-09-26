<?php 
session_start();
require_once '../controllers/SitioController.php';
require_once '../models/ProductoModel.php';
require_once '../config/database.php';
SitioController::index();


?>