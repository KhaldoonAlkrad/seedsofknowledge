$(document).ready(function(){
    $("td").parent().hover(function(){
        $(this).find("button").toggle();
       });
});

