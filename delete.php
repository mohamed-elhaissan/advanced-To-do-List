<?php
$conn = new PDO("mysql:host=localhost;dbname=todo","root","");
if(isset($_GET['id'])){
    try {
        $query = $conn->prepare("delete from tasks where id=?");
        $query->execute(array($_POST['id']));
        if ($query->rowCount()>0) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Task deleted successfully',
                ]);
                header("location :index.php");
                
            }
            else {
                echo json_encode([
                    'status' => 'error',
                    'message' =>'Task not deleted successfully',
                ]);
                header("location :index.php");
        }
        
    }
    catch(PDOException){
        echo "Error";
    }

}