function checkbefore(message){

  if(message.length < 1 || message.length > 1024){
    alert("本文は1024字以内で入力してください");
    return false;
  }

  return true;

}
