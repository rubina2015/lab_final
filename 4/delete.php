<?php
include "database.php";
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $sql = "DELETE FROM `student` WHERE `no`=$user_id";
    $result = mysqli_query($conn, $sql);

    if($result == TRUE){
        echo "Task delete successsfully";
    } else {
        echo "Error" . $sql . "<br>" .$conn->error;
    }
}

?>
