<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Homepage</title>

<style>
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #06eef1; /* Light blue background */
    color: #16a085; /* Greenish-blue text color */
}

.container-fluid {
    padding: 0;
}

.row {
    margin: 0;
}

.sidebar {
    background-color: #000000; /* Black sidebar */
    color: #fff;
    padding: 20px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    width: 200px; /* Adjust sidebar width */
    z-index: 10;
}

.menu-item {
    color: #fff;
    padding: 10px 15px;
    text-decoration: none;
    display: block;
    transition: background-color 0.3s ease;
    border-bottom: 1px solid #fff;
}

.menu-item:hover {
    background-color: #16a085; 
}

.main-content {
    margin-left: 200px;
    padding: 30px;
    transition: margin-left 0.3s ease;
}

.card {
    background-color: #fff; 
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.card-header {
    background-color: #12876f; 
    padding: 10px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

.card-body {
    padding: 20px;
    background-color: #fff; /
}

.card-body img {
    display: block;
    margin: 0 auto;
    max-width: 100%;
    height: auto;
}

footer {
    text-align: center;
    padding: 10px;
    background-color: #333;
    color: #fff;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    z-index: 10;
}
</style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar">
            <a href="Createpost.html" class="menu-item">Create Post</a>
            <a href="Taskmanager.html" class="menu-item">Task manager</a>
            <a href="Recipe.html" class="menu-item">Recipe</a>
            <a href="event.html" class="menu-item">Event</a>
            <a href="aboutme.html" class="menu-item">About me</a>
            <a href="logout.php" class="menu-item">Logout</a>
        </div>
        <div class="col-md-9 main-content">
            <div class="card">
                <div class="card-body">
                    <br>
                    <center><img src="Welcome.png" width="1000px" height="1000px"></center>
                    <br>
               
        </div>
    </div>
</div>
</body>
</html>
</body>
</html>
