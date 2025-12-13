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


<!--     <h1>Yapılacaklar</h1>
    <input id="taskInput" type="text" placeholder="Görev Ekle...">
    <button id="addBtn">Ekle</button>
    <ul id="taskList"></ul> -->

    <div class="app">
        <h1>Yapılacaklar</h1>
        <div class="input-area">
            <input id="taskInput" type="text" placeholder="Görev ekle...">
            <button id="addBtn">Ekle</button>
        </div>
        <ul id="taskList"></ul>
    </div>





    <script src="app.js"></script>
</body>
</html>   

