<?php
require_once("util-db.php");
require_once("model-shoppinglist.php");

$pageTitle = "shoppinglist";
include "view-header.php";
$shoppinglist = selectShoppinglist();
include "view-shoppinglist.php";
include "view-footer.php";
?>
