function month() {


}

month();

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