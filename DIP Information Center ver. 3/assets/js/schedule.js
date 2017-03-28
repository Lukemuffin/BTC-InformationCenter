//get the current time
var date = new Date();
if(date.getHours() >= 10) {
  $(".1").show();
  $(".2").hide();
  $(".3").hide();
}
