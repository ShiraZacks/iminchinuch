var monthName;
var monthWord = new Intl.DateTimeFormat('en-u-ca-hebrew', { month: 'long' }).format(new Date());
var monthNumber = Number(new Intl.DateTimeFormat('en-u-ca-hebrew', { month: 'narrow' }).format(new Date()))


function month() {


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
        monthName = "Adar I"
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


