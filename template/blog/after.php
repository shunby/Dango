<div class="main-before">
  <img src="/image/blog/trn.png" alt="" id="trn">
  <div class="before-blog">
    <a id="prev_link" href="#" style="text-decoration: none">
      <!--prev_link-->
    </a>
  </div>
</div>
<div class="main-after">
  <img src="/image/blog/trn2.png" alt="" id="trn2">
  <div class="next-blog">
    <a id="next_link" href="#" style="text-decoration: none">
      <!--next_link-->
    </a>
  </div>
</div>
<div class="main-tocontents">
  <a href="#" style="text-decoration: none">目次へ</a>
</div>
</div>
</main>

<div class="wtf">

</div>

<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include $webroot."/template/footer.html";

  echo <<<EOM
<script type="text/javascript">
  document.getElementsByClassName("main-title")[0].textContent = "{$title}";
  document.getElementsByClassName("main-date")[0].textContent = "{$year}/{$month}/{$date}";
  document.getElementById("prev_link").href = "{$prev_link}";
  document.getElementById("next_link").href = "{$next_link}";
  document.getElementById("prev_link").textContent = "{$prev_title}";
  document.getElementById("next_link").textContent = "{$next_title}";
</script>
EOM;

?>
