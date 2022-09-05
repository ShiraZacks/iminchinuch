function monthname(){
  var month1 = new Intl.DateTimeFormat('en-u-ca-hebrew', { day: 'numeric', month: 'long' , year: 'numeric'}).format(new Date());

  console.log(month1)
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

}
monthname()


