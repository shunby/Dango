<?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  require_once $webroot."/core/user_util.php";

  session_start();
  
  if(isset($_SESSION['user'])){
    User::destroyTokenById($_SESSION['user']->id);
  }

  $_SESSION = array();

  @session_destroy();

 ?>


 <!DOCTYPE html>
 <!--テンプレート-->
 <html>
   <head>
     <title>だんご三兄弟</title>

     <meta name="description" content="">
     <meta name="author" content="だんご三兄弟">

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width">

     <?php

       include $webroot."/template/analytics.html"
      ?>
     <link href="index.css" rel="stylesheet" type="text/css">
     <link href="/template/header.css" rel="stylesheet" type="text/css">
     <link href="/template/footer.css" rel="stylesheet" type="text/css">
     <link href="/template/main.css" rel="stylesheet" type="text/css">
     <link href="/template/content.css" rel="stylesheet" type="text/css">
     <link href="/template/navi.css" rel="stylesheet" type="text/css">
     <link href="" rel="shortcut icon">
     <!--[if lt IE 9]>
     <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->
   </head>

   <body>


     <div id="content">
       <div id="content">
         <?php include $webroot."/template/header.html" ?>
         <?php include $webroot."/template/navi.html" ?>
         <article id="main">
           <section>
             ログアウトしました。
           </section>
         </article>



       </div>

     </div>
   </body>

 </html>
