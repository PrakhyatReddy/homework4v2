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
        $stmt->bind_param("ssss", $tdln, $tdlp, $tdld, $tdls);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateTodolist($tdln, $tdlp, $tdld, $tdls, $tdli) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `ToDoList` SET `TaskName` = ? ,`Priority` = ?, `DueDate` = ?, `Status` = ? WHERE `TaskID` = ?;");
        $stmt->bind_param("ssssi", $tdln, $tdlp, $tdld, $tdls, $tdli);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteTodolist($tdli) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `ToDoList` where TaskID = ? ");
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
