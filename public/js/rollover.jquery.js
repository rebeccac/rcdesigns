$( document ).ready(function() {
    $(".image").on("mouseenter", function(){
      $(this).children('.rollover').fadeIn(500);
    });

    $(".image").on("mouseleave", function(){
      $(this).children('.rollover').fadeOut(500);
    });
});

$("a.image img").click(function() {
    $(this).addClass("close");
});


$("html").click(function(event) {
    if ($(event.target).hasClass("img")) {
        $("body").addClass("dark");
    } else {
        $("body").removeClass("dark");
    }
});
