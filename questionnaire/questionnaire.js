function checkBeforeSubmit(){
  var kansou = document.answer.kansou.value;
  var name = document.answer.name.value;
  var grade = document.answer.grade.value * 1;
  var gender = document.answer.gender.value;
  var quality = document.answer.quality.value;
  var appearance = document.answer.appearance.value;

  if(kansou == "" || name == "" || grade == 0 || gender == "" || quality == "" || appearance == ""){
    alert("すべての項目を入力してください");
    return false;
  }
  if(kansou.length < 5 || 1200 < kansou.length){
    alert("感想は5文字以上1200文字以内で入力してください");
    return false;
  }
  if(name.length > 20){
    alert("名前は20文字以内で入力してください");
    return false;
  }
  if(window.confirm('この内容で送信しますか?')){
    return true;
  }
  return true;
}
