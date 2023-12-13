<?php
require_once("util-db.php");
require_once("model-shoppinglist.php");

$pageTitle = "shoppinglist";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
    if (insertTodolist($_POST['ItemName'], $_POST['Quantity'], $_POST['Category'], $_POST['Purchased'])){
      echo '<div class="alert alert-success" role="alert"> Task Added! </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error! </div>';
    }
    break;

$shoppinglist = selectShoppinglist();
include "view-shoppinglist.php";
include "view-footer.php";
?>
