<?php

include 'inti.php';

if (isset($_GET['id'])) {
    $sql = "DELETE FROM `subcourse` WHERE id='" . $_GET['id'] . "'";
    $connection = new Database();
    $connection->conn->query($sql);
    $connection->conn->close();
    header("Location: subcourse.php");
}
?>