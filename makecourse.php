<?php
include 'inti.php';
include $tem . 'header.php';
?>

<?php
if (isset($_SESSION["name"]) && $_SESSION["name"] != "") {

    include $tem . 'loginnav.php';
} else {
    header("location: login.php");
}
?>

<div id="makecourse-container">

    <div id="makecourse-course">

        <div id="makecourse-course-inputs">
            <div class="course-inputs">
                <input id="cousrename" type="text" name="name" placeholder="Course Name">
                <input id="coursedesc" type="text" name="desc" placeholder="Course Description">
            </div>
            <div class="course-buttons">
                <button  class="glyphicon glyphicon-repeat" id="cousreclear"></button>
                <button id="cousreadd" class=" glyphicon glyphicon-plus"></button>
                <button id="cousreedit" class="glyphicon glyphicon-pencil"></button>
                <button class="glyphicon glyphicon-trash" id="cousredelete"></button>
            </div>
        </div>

        <div id="makecourse-course-table"></div>
    </div>


    <div id="makecourse-subcourse">

        <div id="makecourse-subcourse-inputs">


        </div>

        <div id="makecourse-subcourse-table">


        </div>
    </div>

    <div id="makecourse-lesson">

        <div id="makecourse-lesson-inputs">


        </div>

        <div id="makecourse-lesson-table">


        </div>
    </div>

    <div id="makecourse-section">

        <div id="makecourse-section-inputs">


        </div>

        <div id="makecourse-section-inputs">


        </div>
    </div>




</div>



<?php include $tem . 'footer.php'; ?> 