<?php
require_once("util-db.php");
require_once("model-todolist.php");

$pageTitle = "todolist";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
    if (insertTodolist($_POST['TaskName'], $_POST['Priority'], $_POST['DueDate'], $_POST['Status'])){
      echo '<div class="alert alert-success" role="alert"> Task Added! </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error! </div>';
    }
    break;

    case "Edit":
    if (updateTodolist($_POST['TaskName'], $_POST['Priority'], $_POST['DueDate'], $_POST['Status'], $_POST['tdli'])){
      echo '<div class="alert alert-success" role="alert"> Task Edited! </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error! </div>';
    }
    break;

    case "Delete":
    if (deleteTodolist($_POST['tdli'])){
      echo '<div class="alert alert-success" role="alert"> Task Deleted! </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error! </div>';
    }
    break;
    
  }
}

$todolist = selectTodolist();
include "view-todolist.php";
include "view-footer.php";
?>
