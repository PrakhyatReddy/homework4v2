<?php
function selectAssignmenttracker() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT AssignmentID, AssignmentName, CourseName, DueDate, Status FROM `AssignmentTracker`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertAssignmenttracker($tdln, $tdlc, $tdld, $tdls) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `AssignmentTracker` (AssignmentName, CourseName, DueDate, Status) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $tdln, $tdlc, $tdld, $tdls);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateAssignmenttracker($tdln, $tdlc, $tdld, $tdls, $tdli) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `AssignmentTracker` SET `AssignmentName`=?, `CourseName`=?, `DueDate`=?, `Status`=? WHERE `AssignmentID` = ?");
        $stmt->bind_param("ssssi", $tdln, $tdlc, $tdld, $tdls, $tdli);
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
        $stmt = $conn->prepare("DELETE FROM `AssignmentTracker` WHERE AssignmentID = ?");
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
