
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
$(document).ready(function(){
  $(".p1DropdownContent").hide();
  $(".p2DropdownContent").hide();
  $(".p3DropdownContent").hide();
  $(".p4DropdownContent").hide();
  $(".p5DropdownContent").hide();
  $(".p6DropdownContent").hide();
  $(".p7DropdownContent").hide();
  $(".p8DropdownContent").hide();
  $(".p9DropdownContent").hide();
  $(".p10DropdownContent").hide();
  $(".p11DropdownContent").hide();
  $(".p12DropdownContent").hide();
  $(".p13DropdownContent").hide();
  $(".jarDropdown").hide();
  $(".sourceDropdown").hide();

  $("#p1Dropdown").click(function(){
    $(".p1DropdownContent").toggle(2000);
  });
  $("#p2Dropdown").click(function(){
    $(".p2DropdownContent").toggle(2000);
  });
  $("#p3Dropdown").click(function(){
    $(".p3DropdownContent").toggle(2000);
  });
  $("#p4Dropdown").click(function(){
    $(".p4DropdownContent").toggle(2000);
  });
  $("#p5Dropdown").click(function(){
    $(".p5DropdownContent").toggle(2000);
  });
  $("#p6Dropdown").click(function(){
    $(".p6DropdownContent").toggle(2000);
  });
  $("#p7Dropdown").click(function(){
    $(".p7DropdownContent").toggle(2000);
  });
  $("#p8Dropdown").click(function(){
    $(".p8DropdownContent").toggle(2000);
  });
  $("#p9Dropdown").click(function(){
    $(".p9DropdownContent").toggle(2000);
  });
  $("#p10Dropdown").click(function(){
    $(".p10DropdownContent").toggle(2000);
  });
  $("#p11Dropdown").click(function(){
    $(".p11DropdownContent").toggle(2000);
  });
  $("#p12Dropdown").click(function(){
    $(".p12DropdownContent").toggle(2000);
  });
  $("#p13Dropdown").click(function(){
    $(".p13DropdownContent").toggle(2000);
  });

  $("#jars").click(function(){
    $(".jarDropdown").toggle(2000);
  });
  $("#source").click(function(){
    $(".sourceDropdown").toggle(2000);
  });
});
