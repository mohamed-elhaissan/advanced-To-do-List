<?php
$conn = new PDO("mysql:host=localhost;dbname=todo","root","");
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $id = $_POST["id"];
    $value = $_POST['value'];
    $quer = $conn->prepare("UPDATE tasks set name = ? WHERE id = ?");
    $quer->execute(array($value,$id));
    if ($quer) {
        header("location :index.php"); 
    }
}