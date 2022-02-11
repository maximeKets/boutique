<?php
$action = filter_input(INPUT_GET,'action', FILTER_DEFAULT);

include "ressources/views/layouts/header.html";
$route = [
    NULL => "app/controllers/homeController.php",
    'produit'=> "app/controllers/productController.php",

];

if (isset($route[$action])){
    include $route[$action];
}
else{

  include "./ressources/views/errors/404.html";
}
include "ressources/views/layouts/footer.html";

