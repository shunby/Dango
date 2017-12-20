<!DOCTYPE html>
<html>
<head>
  <title>だんご三兄弟</title>

  <meta name="description" content="">
  <meta name="author" content="だんご三兄弟">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">

  <?php include "../template/analytics.html" ?>
  <link href="index.css" rel="stylesheet" type="text/css">
  <link href="../template/header.css" rel="stylesheet" type="text/css">
  <link href="../template/footer.css" rel="stylesheet" type="text/css">
  <link href="../template/main.css" rel="stylesheet" type="text/css">
  <link href="../template/content.css" rel="stylesheet" type="text/css">
  <link href="../template/navi.css" rel="stylesheet" type="text/css">
  <link href="" rel="shortcut icon">
  <!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <div id="content">
    <?php include "../template/header.html" ?>
    <?php include "../template/navi.html" ?>
    <article id="main">
      <section>
        <h1>ブログ一覧</h1>
        <ul id="blogs">
          <?php
            $search_tag = key_exists('tag', $_GET) ? $_GET['tag'] : NULL;
            $blogs = simplexml_load_file("blogs.xml");
            foreach ($blogs->blog as $blog_elem) {
              $contains_tag = is_null($search_tag);
              $tags_str = "";
              foreach ($blog_elem->tags->tag as $tag) {
                if($tag == $search_tag)$contains_tag = true;
                $tags_str = $tags_str." ".$tag;
              }
              if(!$contains_tag)continue;
              echo <<<EOM
              <li onclick="window.location.href = '{$blog_elem->link}'">
                <a href={$blog_elem->link}>{$blog_elem->title}</a>({$blog_elem->date})
                <hr>
                <span class="tags">tags: {$tags_str}</span>
              </li>
EOM;
            }
           ?><!-- ブログ一覧-->
        </ul>
      </section>
    </article>

    <?php include "../template/footer.html" ?>

  </div>
</body>

</html>
