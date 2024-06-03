<?php
$conn = new PDO("mysql:host=localhost;dbname=todo", "root", "");
$id = $_POST["id"];
$value = $_POST['value'];
$quer = $conn->prepare("UPDATE tasks set name = ? WHERE id = ?");
$quer->execute(array($value, $id));
header('location :index.php');