/* header starts */
$(document).ready(function() {

  //MOBILE ONE AND MOBILE THREE
  var menu = "close";
  $(".mobile-one .menu-toggle, .mobile-three .menu-toggle").click(function() {
      
      if (menu === "close") {
          $(this).parent().next(".mobile-nav").css("transform", "translate(0, 0)");
          menu = "open";
      } else {
          $(this).parent().next(".mobile-nav").css("transform", "translate(-100%, 0)");
          menu = "close";
      }
  });
  
  //MOBILE TWO
  $(".mobile-two .menu-toggle").click(function() {
    $(this).parent().next(".mobile-nav").toggle(0 , "display");
  });
  
  //MOBILE FOUR
  var menu = "close";
  $(".mobile-four .menu-toggle").click(function() {
      
      if (menu === "close") {
          $(this).parent().next(".mobile-nav").css("transform", "translate(0, 0)");
          menu = "open";
      } else {
          $(this).parent().next(".mobile-nav").css("transform", "translate(0, -999%)");
          menu = "close";
      }
  });
  
  
  
  
  });
/* header ends*/
$("#protein").click(function(){
  $("#proteindiv").removeClass("d-none");
  $("#stackdiv").addClass("d-none");
  $("#accessdiv").addClass("d-none");
});
$("#stack").click(function(){
    $("#stackdiv").removeClass("d-none");
    $("#proteindiv").addClass("d-none");
    $("#accessdiv").addClass("d-none");
  });
  $("#accessories").click(function(){
    $("#accessdiv").removeClass("d-none");
    $("#proteindiv").addClass("d-none");
    $("#stackdiv").addClass("d-none");
  });
  $("#proteinsmall").click(function(){
    $("#proteindiv").removeClass("d-none");
    $("#stackdiv").addClass("d-none");
    $("#accessdiv").addClass("d-none");
  });
  $("#stacksmall").click(function(){
      $("#stackdiv").removeClass("d-none");
      $("#proteindiv").addClass("d-none");
      $("#accessdiv").addClass("d-none");
    });
    $("#accessoriessmall").click(function(){
      $("#accessdiv").removeClass("d-none");
      $("#proteindiv").addClass("d-none");
      $("#stackdiv").addClass("d-none");
    });

  $("#viewitem").click(function(){
    $("#itemview").removeClass("d-none");
    $("#itemadd").addClass("d-none");
    $("#itemupdate").addClass("d-none");
  });
  $("#additem").click(function(){
      $("#itemadd").removeClass("d-none");
      $("#itemview").addClass("d-none");
      $("#itemupdate").addClass("d-none");
    });
    $("#updateitem").click(function(){
      $("#itemupdate").removeClass("d-none");
      $("#itemadd").addClass("d-none");
      $("#itemview").addClass("d-none");
    });
  