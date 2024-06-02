<?php
$conn = new PDO("mysql:host=localhost;dbname=todo","root","");
if(isset($_POST['taskvalue'])){
    $query = $conn->prepare("insert into tasks(name,date) values(?,now())");
    $query->execute(array($_POST['taskvalue']));
    header("location: index.php");
}