<?php
function selectAssignmenttracker() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT AssignmentID, AssignmentName,CourseName, DueDate, Status FROM `AssignmentTracker`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertAssignmenttracker($tdln, $tdlp, $tdld, $tdls) {
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

function updateAssignmenttracker($tdln, $tdlp, $tdld, $tdls, $tdli) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `ToDoList` set `TaskName`=?, `Priority`=?, `DueDate`=?, `Status`=? where `TaskID` = ?");
        $stmt->bind_param("ssssi", $tdln, $tdlp, $tdld, $tdls, $tdli);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteAssignmenttracker($tdli) {
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
