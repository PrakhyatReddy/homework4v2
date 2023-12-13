<?php
require_once("util-db.php");
require_once("model-assignmenttracker.php");

$pageTitle = "assignmenttracker";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
    if (insertAssignmenttracker($_POST['AssignmentName'], $_POST['CourseName'], $_POST['DueDate'], $_POST['Status'])){
      echo '<div class="alert alert-success" role="alert"> Assignment Added! </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error! </div>';
    }
    break;

    case "Delete":
    if (deleteDailyreminders($_POST['AssignmentID'])){
      echo '<div class="alert alert-success" role="alert"> Assignment Deleted! </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error! </div>';
    }
    break;
  }
}

$assignmenttracker = selectAssignmenttracker();
include "view-assignmenttracker.php";
include "view-footer.php";
?>
