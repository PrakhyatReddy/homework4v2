<?php
function selectShoppinglist() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM `ShoppingList`");
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


