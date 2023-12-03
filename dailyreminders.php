<?php
require_once("util-db.php");
require_once("model-dailyreminders.php");

$pageTitle = "todolist";
include "view-header.php";
$dailyreminders = selectDailyReminders();
include "view-todolist.php";
include "view-footer.php";
?>
