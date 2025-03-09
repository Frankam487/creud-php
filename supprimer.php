<?php
include_once "./connect.php";

$id = $_GET['id'];
$req = mysqli_query($con, "DELETE FROM employe WHERE id = $id");

header("L ocation: index.php");
?>