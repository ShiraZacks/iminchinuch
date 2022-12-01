var monthName;
var monthWord = new Intl.DateTimeFormat('en-u-ca-hebrew', { month: 'long' }).format(new Date());
var monthNumber = new Intl.DateTimeFormat('en-u-ca-hebrew', { month: 'narrow' }).format(new Date());


function month() {


  if (monthWord == "Adar II") {
    monthName = "Adar Sheini"
  } else {
    switch (monthNumber) {
      case 1:
        monthName = "Tishrei"
        break;
      case 2:
        monthName = "Tishrei"
        break;
      case 3:
        monthName = "Tishrei"
        break;
      case 4:
        monthName = "Tishrei"
        break;
      case 5:
        monthName = "Tishrei"
        break;
      case 6:
        monthName = "Tishrei"
        break;
      case 7:
        monthName = "Tishrei"
        break;
      case 8:
        monthName = "Tishrei"
        break;
      case 9:
        monthName = "Tishrei"
        break;
      case 10:
        monthName = "Tishrei"
        break;
      case 11:
        monthName = "Tishrei"
        break;
      case 12:
        monthName = "Tishrei"
        break;
      case 13:
        monthName = "Tishrei"
        break;

      default:
        break;
    }
  };


  console.log(monthNumber);
  console.log(monthWord);

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
  
  
      "1",
      "2",
      "3",
      "4",
      "5",
      "6",
      "7",
      "8",
      "9",
      "10",
      "11",
      "12",
      "13",
      "7",
  */

}
month()


