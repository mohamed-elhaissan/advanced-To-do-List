<?php
    $conn = new PDO("mysql:host=localhost;dbname=todo","root","");
    if(isset($_POST['taskvalue'])){
        // $query = $conn->prepare("insert into tasks(name,date) values(?,now())");
        // $query->execute(array($_POST['taskvalue']));
        echo $_POST['taskvalue'];
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TODO</title>
</head>

<body>


    

    <h1>To Do List</h1>
    <form action="add.php" method="POST">
        <input type="text" name="taskvalue" placeholder="Enter Your Today Task">
        <button>ADD <ion-icon name="add-outline" id="add"></ion-icon></button>
    </form>



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="app.js"></script>
</body>

</html>