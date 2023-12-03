<?php
require_once("util-db.php");
require_once("model-todolist.php");

$pageTitle = "todolist";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType'])){
    case "Add":
    insertTodolist($_POST['TaskName'], $_POST['Priority'], $_POST['DueDate'], $_POST['Status']);
    break;
  }
}

$todolist = selectTodolist();
include "view-todolist.php";
include "view-footer.php";
?>
