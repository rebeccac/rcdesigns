$( document ).ready(function() {
    $(".image").on("mouseenter", function(){
      $(this).children('.rollover').fadeIn(500);
    });

    $(".image").on("mouseleave", function(){
      $(this).children('.rollover').fadeOut(500);
    });
});
