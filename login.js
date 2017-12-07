function password(){
  var passw = prompt("パスワード", "");
  if(passw == null || passw == "")return;
  location.href = passw + ".php";
}
