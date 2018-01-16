$(document).ready(function () {
    $("td").parent().hover(function () {
        $(this).find("button").toggle();
    });
});

function delcourse(id) {
    window.location.href = "deletecourse.php?id=" + id;
}
function subcoursesToggle(courseID) {
    $('#course'+courseID).next().children().slideToggle('fast');

}
function lessonToggle(subcourseID) {
    $('#subcourse'+subcourseID).next().children().slideToggle('fast');

}
