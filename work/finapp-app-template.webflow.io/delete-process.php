<?php
// $link = mysqli_connect("sql203.ezyro.com", "ezyro_28647405", "ymdxwhp7c", "ezyro_28647405_crypto_db");
include 'controller.php';
 $result = mysqli_query($link,"SELECT * FROM users");

// include_once 'database.php';
$sql = "DELETE FROM users WHERE id='" . $_GET["userid"] . "'";
if (mysqli_query($link, $sql)) {
    header("Location: board.php");
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
mysqli_close($connection);
?>