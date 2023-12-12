<?php
function selectShoppinglist() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT ItemID, ItemName, Quantity, Category, Purchased  FROM `ShoppingList`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertShoppinglist($tdln, $tdlp, $tdld, $tdls) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `ShoppingList` (ItemName, Quantity, Category, Purchased) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $tdln, $tdlp, $tdld, $tdls);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateShoppinglist($tdln, $tdlp, $tdld, $tdls, $tdli) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `ShoppingList` set `ItemName`=?, `Quantity`=?, `Category`=?, `Purchased`=? where `ItemID` = ?");
        $stmt->bind_param("sissi", $tdln, $tdlp, $tdld, $tdls, $tdli);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteShoppinglist($tdli) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `ShoppingList` where TaskID = ? ");
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


