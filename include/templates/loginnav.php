<div class="header">
    <nav id="mainnav" class="container-fluid text-center">
        <a href="index.php"><span class="glyphicon glyphicon-home" ></span> Home &nbsp;</a>
        <a href="makecourse.php"><span class="glyphicon glyphicon-list-alt " ></span> Course &nbsp;</a>
        <a href="subcourse.php"><span class="glyphicon glyphicon-list-alt " ></span> Subcourse &nbsp;</a>
        <a href="lesson.php"><span class="glyphicon glyphicon-list-alt " ></span> Lesson &nbsp;</a>
         <a href="section.php"><span class="glyphicon glyphicon-list-alt " ></span> Section &nbsp;</a>
        <a href="viewcourse.php"><span class="glyphicon glyphicon-eye-open" ></span> View Course &nbsp;</a>
        <a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out&nbsp;</a>
        
        <a href="#"><span class="glyphicon glyphicon-user" ></span> 
            <?php 
          
            if(isset($_SESSION["name"]) && $_SESSION["name"]!="" )
                echo $_SESSION["name"];?>
            &nbsp;</a>

    </nav>
    <header class="jumbotron text-center">
        <h1 id="mainheader">Seeds of Knowledge</h1>
    </header>

</div> 