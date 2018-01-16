<?php

include 'inti.php';
$sectionArray = array();
$lessonID = $_REQUEST["lesID"];
$sectionArray = section::getsections($lessonID);

for ($x = 0; $x < count($sectionArray); $x++) {
    echo $sectionArray[$x]->id . "<br>";
    echo $sectionArray[$x]->name . "<br>";
    echo $sectionArray[$x]->content . "<br>";
    echo $sectionArray[$x]->letter . "<br>";
    echo $sectionArray[$x]->lessonID . "<br>";
}