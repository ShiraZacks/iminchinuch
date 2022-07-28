function monthname(){
  const date = new Date(Date.UTC(6/6/2001))
  var month1 = new Intl.DateTimeFormat('en-u-ca-hebrew', { month: 'long' }).format(date);

  console.log(month1)
}
monthname()


