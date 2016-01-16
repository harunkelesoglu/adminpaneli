<?php
include "SiteController.php";
include "ProfileController.php";
include "CategoryController.php";
include "RecipeController.php";
include "CommentController.php";
include "UserController.php";
include "header.php";
include "sidebar.php";
include "route.php";



$route=new Route();

$route->add('/profile','ProfileController','index');
$route->add('/category','CategoryController','index');
$route->add('/category-add','CategoryController','CreateAction');
$route->add('/category-update','CategoryController','UpdateAction');
$route->add('/category-del','CategoryController','DeleteAction');
$route->add('/recipes','RecipeController','index');
$route->add('/recipe-add','RecipeController','CreateAction');
$route->add('/recipe-update','RecipeController','UpdateAction');
$route->add('/recipe-del','RecipeController','DeleteAction');
$route->add('/comments','CommentController','index');
$route->add('/comment-add','CommentController','CreateAction');
$route->add('/comment-update','CommentController','UpdateAction');
$route->add('/comment-del','CommentController','DeleteAction');
$route->add('/users','UserController','index');
$route->add('/user-add','UserController','CreateAction');
$route->add('/user-update','UserController','UpdateAction');
$route->add('/user-del','UserController','DeleteAction');


$route->run();



include "footer.php"

?>


