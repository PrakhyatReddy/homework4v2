<?php
require_once("util-db.php");
require_once("model-shoppinglist.php");

$pageTitle = "todolist";
include "view-header.php";
$shoppinglist = selectShoppingList();
include "view-todolist.php";
include "view-footer.php";
?>
