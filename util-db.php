<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44' , 'prakhyat_hw4userv2' , 'LeBumJames', 'prakhyat_homework4v2');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
