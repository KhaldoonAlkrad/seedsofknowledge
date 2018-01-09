<?php
include 'inti.php';
include $tem . 'header.php';
?>

<nav class="container-fluid text-center">
    <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login&nbsp;</a>
    <a href="register.php"><span class="glyphicon glyphicon-user" ></span> Sign Up &nbsp;</a>
</nav>
<header class="jumbotron text-center">
    <h2>Seeds of Knowledge</h2>
</header>



<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3>Complete</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4">
            <h3>Simple</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4">
            <h3>Short</h3>        
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
    </div>
</div>


<div class="flex-container">
    <button type="button" class="makecourse">Make Course</button>
    <button type="button" class="viewcourse">View Course</button>
</div>







<?php include $tem . 'footer.php'; ?>