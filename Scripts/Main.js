function hanteradata() {

  // hämta värdet som användaren skriver in via input med ID="username"
  var username = $('#username').val();
  // hämta värdet som användaren skriver in via input med ID="password"
  var password = $('#password').val();

  // skapa en string med värden som ska skickas till PHP filen (data.PHP)
  let data = "username=" + username + "&password=" +  password;

}
