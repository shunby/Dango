function checkbefore(){
  var name = document.msgform.name.value;
  var mail = document.msgform.mail.value;
  var password = document.msgform.trip.value;
  var message = document.msgform.message.value;
  if(name.length < 1 || name.length > 20 ){
    alert("名前は20文字以内で入力してください");
    return false;
  }

  if(mail.length > 256){
    alert("メールアドレスは256文字以内で入力してください");
    return false;
  }

  if(password.length > 10){
    alert("パスワードは10文字以内で入力してください");
    return false;
  }

  if(message.length < 1 || message.length > 1024){
    alert("本文は1024字以内で入力してください");
    return false;
  }

  return true;

}
