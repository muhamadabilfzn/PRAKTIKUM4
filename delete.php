<?php
include "config.php";

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM user_ WHERE id=?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: index.php");
}
?>