$(function(){
  $.ajax(blog_url, {
    timeout : 1000,
    datatype: 'html'
  }).then(
  function(data){
    var out = $($.parseHTML(data));//ブログのhtml全体
    $(".blog_content").append($("<h1>"+blog_title+"</h1>").css({'text-align':'center'}));
    $(".blog_content").append($("<div>"+blog_date+"</div>").css({'text-align':'right', 'font-size':'0.8em', 'margin-bottom': '30px', 'padding-right': '20px'}));
    $(".blog_content").append(out.find(".main-main")[0].innerHTML);
  },
  function() {
    alert("ブログ記事の読み込みに失敗");
  });
});
