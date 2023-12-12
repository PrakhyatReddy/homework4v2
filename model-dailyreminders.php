<?php
function selectDailyreminders() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT ReminderID, ReminderText, ReminderTime, Recurring FROM `DailyReminders`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertDailyreminders($tdln, $tdlp, $tdld) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `DailyReminders` (ReminderText, ReminderTime, Recurring) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $tdln, $tdlp, $tdld);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateDailyreminders($tdln, $tdlp, $tdld, $tdli) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `DailyReminders` SET `ReminderText`=?, `ReminderTime`=?, `Recurring`=? WHERE `ReminderID` = ?");
        $stmt->bind_param("sssi", $tdln, $tdlp, $tdld, $tdli);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteDailyreminders($tdli) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `DailyReminders` WHERE ReminderID = ?");
        $stmt->bind_param("i", $tdli);
        $success = $stmt->execute();
        $conn->close(); 
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

