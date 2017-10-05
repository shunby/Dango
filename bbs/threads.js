function checkbefore(){
  var theradName = document.makeThreadForm.name.value;
  if(theradName.length < 1 ||theradName.length > 30){
    alert("スレッド名は30字以内で入力してください");
    return false;
  }
  return true;
}
