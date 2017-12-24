<input type="button" value="good" id="button"><!--ボタン-->
<a><?php
$number = file_get_contents("ajax.txt");
echo $number;
?></a>
<script>
  $(function(){
    $('#button').click(
      function(){
        $.ajax({
          type: 'POST',
          url: 'ajax.php',
        })
        .then(
          function(result){
            $("a").text(result);
          },
          function(){
            ;
          });
         }
        );
      });
</script>
