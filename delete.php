<?php
$conn = new PDO("mysql:host=localhost;dbname=todo","root","");
if(isset($_GET['id'])){
    try {
        $query = $conn->prepare("delete from tasks where id=?");
        $query->execute(array($_GET['id']));
        header("location :index.php");
        
    }
    catch(PDOException){
        echo "Error";
        header("location :index.php");
    }

}