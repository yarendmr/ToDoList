<?php
require "db.php";
$query = "SELECT id, task_text, completed FROM tasks";
$stmt = sqlsrv_query($conn, $query);
if( $stmt === false){
    die(print_r(sqlsrv_errors(), true));
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset=""UTF-8>
    <title>To Do List</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method= "POST" action="add_task.php">
        <input type="text" name="task_text" placeholder="Görev gir..." required>
        <button type="submit">Ekle</button>
    </form>
    <div class="app">
        <h1>Yapılacaklar</h1>
        <div class="input-area">
            <input id="taskInput" type="text" placeholder="Görev ekle...">
            <button id="addBtn">Ekle</button>
        </div>
        
        <ul id="taskList">
            <?php
            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {

                $icon = ($row["completed"] == 1) ? "✓" : "✗";

                echo '
                <li>
                    <form method="POST" action="toggle_task.php" style="display:inline;">
                        <input type="hidden" name="id" value="'.$row["id"].'">
                        <button type="submit" style="border:none;background:none;cursor:pointer;">
                            '.$icon.'
                        </button>
                    </form>
                    <form method="POST" action="delete_task.php" style="display:inline;">
                         <input type="hidden" name="id" value="'.$row["id"].'">
                         <button type="submit" style="border:none;background:none;cursor:pointer;">
                            🗑️
                         </button>
                    </form>

                    '.htmlspecialchars($row["task_text"]).'
                </li>
                ';
}
            ?>
        </ul>
    </div>
    <script src="app.js"></script>
</body>
</html>   
