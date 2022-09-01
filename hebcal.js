//getElementByClassName can't change css


/*
[
  "Tishri",
  "Heshvan",
  "Kislev",
  "Tevet",
  "Shevat",
  "Adar I",
  "Adar",
  "Nisan",
  "Iyar",
  "Sivan",
  "Tamuz",
  "Av",
  "Elul",
  "Adar II"]
*/

function month() {

var weekday = new Intl.DateTimeFormat('en-u-ca-hebrew', { weekday: 'long' }).format(new Date());
var year = new Intl.DateTimeFormat('en-u-ca-hebrew', { year: 'numeric' }).format(new Date());
var month = new Intl.DateTimeFormat('en-u-ca-hebrew', { month: 'long' }).format(new Date());
var day = new Intl.DateTimeFormat('en-u-ca-hebrew', { day: 'numeric' }).format(new Date());


  console.log("Today is " + weekday + ", the " + day + " of " + month + ", " + year)

  if (month == "Tishri") {
    $('.Tishrei').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Heshvan") {
    $('.Cheshvan').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Kislev") {
    $('.Kislev').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Tevet") {
    $('.Teves').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Shevat") {
    $('.Shevat').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Adar I") {
    $('.AdarAleph').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Adar") {
    $('.Adar').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Nisan") {
    $('.Nissan').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Iyar") {
    $('.Iyar').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Sivan") {
    $('.Sivan').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Tamuz") {
    $('.Tamuz').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Av") {
    $('.Av').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Elul") {
    $('.Elul').css('display', 'block')
    console.log("Have a great day!")
  } else {
    console.log("error - js if-statement broke")
  }
}