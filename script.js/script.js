function myFunction() {
  var x = document.getElementById("myHeader");
  if (x.className === "header") {
    x.className += " responsive";
  } else {
    x.className = "header";
  }
}



$(function () {
  // Set up formatting for Credit Card fields
  $('.cc-number').formatCardNumber();
  $('#credit .cc-expires').formatCardExpiry();
  $('#credit .cc-cvc').formatCardCVC();
});







