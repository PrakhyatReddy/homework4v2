<?php
function selectDailyreminders() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT ReminderID, ReminderText, ReminderTime, Recurring FROM `DailyReminders` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
