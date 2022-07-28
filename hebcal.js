//getElementByClassName can't change css
//use jQuery

function month() {

  var weekday = new Intl.DateTimeFormat('en-u-ca-hebrew', { weekday: 'long' }).format(new Date());
  var year = new Intl.DateTimeFormat('en-u-ca-hebrew', { year: 'numeric' }).format(new Date());
  var month = new Intl.DateTimeFormat('en-u-ca-hebrew', { month: 'long' }).format(new Date());
  var day = new Intl.DateTimeFormat('en-u-ca-hebrew', { day: 'numeric' }).format(new Date());

  console.log("Today is " + weekday + ", the "+ day + " of " + month +", " + year)

  if (month == "Tamuz") {
    $('.Tamuz').css('display', 'block')
        console.log("works");
  }if (month == "Iyar"){
    $('.Iyar').css('display', 'block')
    console.log("works");
  }
}