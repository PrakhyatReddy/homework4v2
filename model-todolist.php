<?php
function selectTodolist() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT TaskID, TaskName, Priority, DueDate, Status FROM `ToDoList`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertTodolist($tdln, $tdlp, $tdld, $tdls) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `ToDoList` (TaskName, Priority, DueDate, Status) VALUES (?, ?, ?, ?)");
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
