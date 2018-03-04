<script>
$(function(){
  $.ajax(blog_url, {
    timeout : 10000,
    datatype: 'html'
  }).then(
  function(data){
    var out = $($.parseHTML(data, true));//ブログのhtml全体
    $(".blog_content").append($("<h1>"+blog_title+"</h1>").css({'text-align':'center'}));
    $(".blog_content").append($("<div>"+blog_date+"</div>").css({'text-align':'right', 'font-size':'0.8em', 'margin-bottom': '30px', 'padding-right': '20px'}));
    $(".blog_content").append(out.find(".main-main")[0].outerHTML);
    $(".blog_content").append(out.find("#iine")[0].outerHTML);
    $(".blog_content").append($("<-<a href ='"+next_url+"'>"+next_title+"</a>").css({'font-size':'1.2em'}));

    $.ajax({
      type: 'POST',
      url: '/good/ajax.php',
      data: {article_type: "blog", article_id: <?php echo $id; ?>, act: 0}//いいねするフラグはオフ
    })
    .then(
      function(result){
        $("#goodcount").text(result);
      },
      function(){
        ;
      }
    );

    $('#button').click(
      function(){
        $.ajax({
          type: 'POST',
          url: '/good/ajax.php',
          data: {article_type: "blog", article_id: <?php echo $id; ?>, act: 1}//いいねするフラグはオン
        })
        .then(
          function(result){
            $("#goodcount").text(result);
          },
          function(){
            ;
          }
        );
      }
    );
  },
  function() {
    alert("ブログ記事の読み込みに失敗");
  });
});
</script>
