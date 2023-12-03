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
?>
