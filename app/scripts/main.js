console.log('Website design by Joe Rutland - http://joerutland.com');

// resposive navigation
$(document).ready(function(){
    $(".navTrigger").click(function(){
        $("nav").toggleClass("open");
    });
});
