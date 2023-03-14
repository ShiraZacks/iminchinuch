//getElementByClassName can't change css
function todayNow() {
  var todayDay =  new Intl.DateTimeFormat('en-u-ca-hebrew', { day: 'numeric'}).format(new Date());
  var todayMonth =  new Intl.DateTimeFormat('en-u-ca-hebrew', {month: 'long'}).format(new Date());
  var todayYear =  new Intl.DateTimeFormat('en-u-ca-hebrew', {year: 'numeric'}).format(new Date());
  //document.getElementById("date").innerText = "Today is " + todayDay +" " + todayMonth + ", " + todayYear + ".";
  console.log(todayDay + todayMonth + todayYear)
}

function month() {

var weekday = new Intl.DateTimeFormat('en-u-ca-hebrew', { weekday: 'long' }).format(new Date());
var year = new Intl.DateTimeFormat('en-u-ca-hebrew', { year: 'numeric' }).format(new Date());
var month = new Intl.DateTimeFormat('en-u-ca-hebrew', { month: 'long' }).format(new Date());
var day = new Intl.DateTimeFormat('en-u-ca-hebrew', { day: 'numeric' }).format(new Date());

console.log("Today is " + weekday + ", the " + day + " of " + month + ", " + year)

  if (month == "Tishri") {
    ('.Tishrei').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Heshvan") {
    ('.Cheshvan').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Kislev") {
    ('.Kislev').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Tevet") {
    ('.Teves').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Shevat") {
    ('.Shevat').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Adar I") {
    ('.AdarAleph').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Adar") {
    ('.Adar').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Nisan") {
    ('.Nissan').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Iyar") {
    ('.Iyar').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Sivan") {
    ('.Sivan').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Tamuz") {
    ('.Tamuz').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Av") {
    ('.Av').css('display', 'block')
    console.log("Have a great day!")
  } else if (month == "Elul") {
    ('.Elul').css('display', 'block')
    console.log("Have a great day!")
  } else{
    console.log("error - js if-statement broke")
  }
}

month();


//gets name and number of the month



var monthName;
var monthWord = new Intl.DateTimeFormat('en-u-ca-hebrew', { month: 'long' }).format(new Date());
var monthNumber = Number(new Intl.DateTimeFormat('en-u-ca-hebrew', { month: 'narrow' }).format(new Date()))


function monthName() {


    switch (monthNumber) {
      case 1:
        monthName = "Tishrei"
        break;
      case 2:
        monthName = "Cheshvan"
        break;
      case 3:
        monthName = "Kislev"
        break;
      case 4:
        monthName = "Teves"
        break;
      case 5:
        monthName = "Shevat"
        break;
      case 6:
        monthName = "AdarAleph"
        break;
      case 7:
        monthName = "Adar"
        break;
      case 8:
        monthName = "Nisan"
        break;
      case 9:
        monthName = "Iyar"
        break;
      case 10:
        monthName = "Sivan"
        break;
      case 11:
        monthName = "Tamuz"
        break;
      case 12:
        monthName = "Av"
        break;
      case 13:
        monthName = "Elul"
        break;

      default: monthName = "something went wrong"
        break;
    };



  console.log(monthNumber);
  console.log(monthWord);
  console.log(monthName);

}
monthName()



var root = document.querySelector(':root');

function rootChange_set() {
  // Set the value of variable --hide to block
  root.style.setProperty('--hide', 'block');
};

rootChange_set();