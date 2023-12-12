<?php
require_once("util-db.php");
require_once("model-dailyreminders.php");

$pageTitle = "dailyreminders";
include "view-header.php";
$dailyreminders = selectDailyreminders();
include "view-dailyreminders.php";
include "view-footer.php";
?>
