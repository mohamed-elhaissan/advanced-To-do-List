<?php
session_start();
$conn = new PDO("mysql:host=localhost;dbname=todo", "root", "");

$qeury = $conn->query("SELECT * FROM tasks ORDER BY date desc");
$tasks = $qeury->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>TODO</title>
</head>

<body>
   



    <h1>To Do List</h1>
    <form action="add.php" method="POST">
        <input type="text" name="taskvalue" placeholder="Enter Your Today Task" id="input">
        <button ><ion-icon name="add-outline" id="add"></ion-icon></button>
    </form>
    <div class="container">
        <?php
        foreach ($tasks as $task) {
            echo "<div class='task'>";
            echo "<span class='main-task'>" . $task["name"] . "</span>";
            echo "<div class='links'>";
            echo "<button class='modify'><ion-icon name='create-outline' ></ion-icon></button>";
            echo "<a href='delete.php?id=" . $task["id"] . "' class='rm'><button><ion-icon name='close-outline'></ion-icon></button></a>";
            echo "<a href='update.php?id=".$task["id"]."'><button class='save' >Save<ion-icon name='checkmark-done-outline'></ion-icon></button></a>";
            echo "</div>";
            
            echo "</div>";
        }
        ?>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</body>

</html>