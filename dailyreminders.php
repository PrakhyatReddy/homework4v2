<?php
require_once("util-db.php");
require_once("model-dailyreminders.php");

$pageTitle = "dailyreminders";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
    if (insertDailyreminders($_POST['ReminderText'], $_POST['ReminderTime'], $_POST['Recurring'])){
      echo '<div class="alert alert-success" role="alert"> Reminder Added! </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error! </div>';
    }
    break;

    case "Delete":
    if (deleteDailyreminders($_POST['tdli'])){
      echo '<div class="alert alert-success" role="alert"> Reminder Deleted! </div>';
    } else {
      echo '<div class="alert alert-danger" role="alert"> Error! </div>';
    }
    break;
  }
}

$dailyreminders = selectDailyreminders();
include "view-dailyreminders.php";
include "view-footer.php";
?>
