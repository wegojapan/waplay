<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Error 404 Page Not Found - お探しのページが見つかりません</title>

<?php include_once('./config/config.php'); ?>
<?php include_once('./config/meta.php'); ?>
<?php include_once('./inc/gtag.php'); ?>
     
<link rel="stylesheet" href="./css/common.min.css"/>
<link rel="stylesheet" href="./css/main.min.css"/>


</head>

    
<body>
    <?php include_once('./inc/header.php'); ?>
    <div id="con_page">
      <section class="con_main page_error">
        <div class="box_slogan">
          <h2>404 ERROR</h2>
          <small>お探しのページが見つかりません。</small>
          <p class="txt">
          お探しのページは一時的にアクセスができない状況にあるか、移動もしくは削除された可能性があります。お手数ではございますが、<a href="<?=DIR?>">トップページ</a>にて目的のページをお探しください。
          </p>
        </div>
      </section>
    </div>
    <script src="./js/common.js"></script>
  </body>
</html>














