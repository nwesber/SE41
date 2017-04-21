$(window).load(function() {
  $(".loader").fadeOut("slow");
})

$(document).keypress(
  function(event){
   if (event.which == '13') {
      event.preventDefault();
    }
});
