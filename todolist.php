<?php
require_once("util-db.php");
require_once("model-todolist.php");

$pageTitle = "todolist";
include "view-header.php";
$todolist = selectTodolist();
include "view-todolist.php";
include "view-footer.php";
?>
