<?php
include 'inti.php';
include $tem . 'header.php';
?>
<div class="webcontainer">
    <?php
    if (isset($_SESSION["name"]) && $_SESSION["name"] != "") {
      
        include $tem . 'loginnav.php';
    } else {
         include $tem . 'nav.php';
    }
    ?>

    <div class="row">
        <div class="column">
            <h3>Learning Path</h3>
            <p>When you know your learning path you have a full idea about what you have to learn </p>
            <p>When you know your learning path you have a full idea about what you have to learn </p>
            <p>When you know your learning path you have a full idea about what you have to learn </p>
            <p>When you know your learning path you have a full idea about what you have to learn </p>
        </div>
        <div class="column">
            <h3>Structured Information</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="column">
            <h3>Simple and Easy</h3>        
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>


    </div>


</div>

<?php include $tem . 'footer.php'; ?> 
