<?php
require_once("util-db.php");
require_once("model-assignmenttracker.php");

$pageTitle = "assignmenttracker";
include "view-header.php";
$assignmenttracker = selectAssignmenttracker();
include "view-assignmenttracker.php";
include "view-footer.php";
?>
