<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ワプレー｜勉強も仕事も遊ぶのもすべてプレイだ！。人と人をつなぐ、われらのプレー</title>

    <!-- gtag 삽입 예정 -->
    <?php include_once('../../../config/config.php'); ?>
    <?php include_once('../../../config/meta.php'); ?>
    <link rel="stylesheet" href="../../../css/common.min.css"/>
    <link rel="stylesheet" href="../../../css/service.min.css"/>
    <link rel="manifest" href="../../../manifest.json">
  </head>
    
  <body>
    <?php include_once('../../../inc/header.php'); ?>
    <div id="con_page">
      <div class="con_fix_top view_pc-tab">
        <p class="btn_back"><a href="../"><img src="<?=DIR?>/imgs/common/ic/ic_back.svg" alt=""></a></p>
        <div class="box_search">
          <input type="search" list="suggestions" placeholder="search">
          <datalist id="suggestions">
            <option value="エアコンクリーニング">
            <option value="飲み会">
            <option value="個人広告">
          </datalist>
        </div>
        <div class="box_util">
          <ul class="icons">
            <li><p class="btn_bell"><a href="#123"><img src="<?=DIR?>/imgs/common/ic/ic_bell.svg" alt=""></a></p></li>
            <li><p class="btn_user"><a href="#123"><img src="<?=DIR?>/imgs/user/user_01.jpg" alt=""></a></p></li>
          </ul>
        </div>
      </div>
      
    <section class="service_form_main yakiniku">
      <form class="con_request_form">
        <div class="box_progress_bar">
          <progress class="progress" value="20" max="100"></progress>
          <p class="box_step"><span>0</span><em>13</em></p>
        </div>
        <p class="tit_request">勤務期間はどのくらいですか？</p>
        <ul class="answer_list checkbox">
        <li class="box_answer">
            <input type="checkbox" id="checkbox1" />
            <label for="checkbox1">Checkbox</label>
          </li>
          <li class="box_answer">
            <input type="checkbox" id="checkbox2" />
            <label for="checkbox2">Checkbox</label>
          </li>
          <li class="box_answer">
            <input type="radio" id="radio1" name="radio-group" />
            <label for="radio1">Radio Button</label>
          </li>
          <li class="box_answer">
            <input type="radio" id="radio2" name="radio-group" />
            <label for="radio2">Radio Button</label>
          </li>
        </ul> 
      </form>
    </section>



    </div>

    <?php include_once('../../../inc/aside.php'); ?>
    


    <!-- <script src="./serviceWorker.js"></script> -->
    <script src="../../../js/common.js"></script>
    <script src="../../../js/service.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  </body>
</html>














