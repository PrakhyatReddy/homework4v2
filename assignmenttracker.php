<?php
require_once("util-db.php");
require_once("model-assignmenttracker.php");

$pageTitle = "todolist";
include "view-header.php";
$assignmenttracker = selectAssignmenttracker();
include "view-assignmenttracker.php";
include "view-footer.php";
?>
