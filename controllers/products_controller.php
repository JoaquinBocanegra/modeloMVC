<?php
//Llamada al modelo
include_once "models/products_model.php";
$pro = new Productos_model();
$datos = $pro->get_products();
//Llamada a la vista
include_once "views/products_view.php";