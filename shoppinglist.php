<?php
require_once("util-db.php");
require_once("model-shoppinglist.php");

$pageTitle = "shoppinglist";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
    if (insertShoppinglist($_POST['ItemName'], $_POST['Quantity'], $_POST['Category'], $_POST['Purchased'])){
      echo '<div class="alert alert-success" role="alert"> Item Added! </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error! </div>';
    }
    break;

    case "Edit":
    if (updateShoppinglist($_POST['ItemName'], $_POST['Quantity'], $_POST['Category'], $_POST['Purchased'], $_POST['tdli'])){
      echo '<div class="alert alert-success" role="alert"> Item Edited! </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error! </div>';
    }
    break;

    case "Delete":
    if (deleteShoppinglist($_POST['tdli'])){
      echo '<div class="alert alert-success" role="alert"> Item Deleted! </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error! </div>';
    }
    break;
  }
}

$shoppinglist = selectShoppinglist();
include "view-shoppinglist.php";
include "view-footer.php";
?>
