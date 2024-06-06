<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="user.css">
</head>
<body>
     <!-- ------navbar------ -->
     <nav class="navbar">
        <div class="nav-left navbar">
            <img src="logo.png" alt="">
           
        </div>
        <div class="nav-middle navbar">
        <i id="bar" class="fa-solid fa-bars"></i>
            <div class="search-box navbar">
                <input type="text" placeholder="Search">
                <img src="search.png">
            </div>
        </div>
        <div class="nav-right navbar">
            <div class="add_project">
                <p>+  Add New Project</p>
            </div>
            <img src="more.png">
            <img  src="messages.png"> 
            <img src="notification.png">
            <img class="mypic" src="mypic.jpeg">
            <p>Main Admin</p>

        </div>
    </nav>
    

<!-- --------sidebar------ -->
<div class="sidebar">
        <div class="short">
                <p class="para">Navigation</p>
            </a>
            <a href="">
            <i class="fa-solid fa-gauge-simple-high"></i>
                <p>Dashboard</p>
            </a>
            <a href="">
            <i class="fa-solid fa-briefcase"></i>
            
                <p>Job</p>
            </a>
            <a href="">
            <i class="fa-solid fa-user"></i>
                <p>Candidate</p>
            </a>
            <a href="">
            <i class="fa-solid fa-laptop"></i>
                <p>Task</p>
            </a>
            <a href="">
            <i class="fa-solid fa-laptop"></i>
                <p>User</p>
            </a>
            
        </div>

        <div class="containt">
            <div class="task_section">
            <div class="add_task">
                <p>Add Task</p>
                <input type="text">
            </div>
            <div class="task_title">
            <p>Task Title</p>
            <input type="text">
            </div>
            <div class="task_description">
            <p>Task Description</p>
            <input type="text">
            </div>
            <div class="start_date">
            <p>Start Date</p>
            <input type="text" placeholder="dd-mm-yyyy">
            </div>
            <div class="end_date">
            <p>End Date</p>
            <input type="text" placeholder="dd-mm-yyyy">
            </div>
            <div class="follow_up">
            <p>Next Follow Up Date</p>
            <input type="text" placeholder="dd-mm-yyyy">

            </div>
            <div class="assign_to">
            <p>Assign To</p>
            <input type="text">
            </div>
            </div>

        </div>


</body>
</html>