<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ワプレー｜勉強も仕事も遊ぶのもすべてプレイだ！。人と人をつなぐ、われらのプレー</title>

    <!-- gtag 삽입 예정 -->
    <?php include_once('../../config/config.php'); ?>
    <?php include_once('../../config/meta.php'); ?>
    <link rel="stylesheet" href="../../css/common.min.css"/>
    <link rel="stylesheet" href="../../css/service.min.css"/>
    <link rel="manifest" href="../../manifest.json">
  </head>
    
  <body>
    <?php include_once('../../inc/header.php'); ?>
    <div id="con_page">
      <div class="con_fix_top view_pc-tab">
        <p class="btn_back"><a href="/waplay.jp/"><img src="/waplay.jp/imgs/common/ic/ic_back.svg" alt=""></a></p>
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
            <li><p class="btn_bell"><a href="#123"><img src="/waplay.jp/imgs/common/ic/ic_bell.svg" alt=""></a></p></li>
            <li><p class="btn_user"><a href="#123"><img src="/waplay.jp/imgs/user/user_01.jpg" alt=""></a></p></li>
          </ul>
        </div>
      </div>


      <section class="wrp_slide_list cate_nav tab">
        <h1 class="box_tit view_pc-tab">
          <span class="tit">アルバイト</span>
        </h1>
        <div class="con_slide_list">
          <ul class="box_slide_list">
            <li class="active"><a href="#123">すべて</a></li>
            <li><a href="#123">ホール·キッチンバイト</a></li>
            <li><a href="#123">店舗管理·販売バイト</a></li>
            <li><a href="#123">サービス·イベンバイト</a></li>
            <li><a href="#123">文化·生活バイト</a></li>
            <li><a href="#123">バー·接客バイト</a></li>
          </ul>
        </div>
      </section>
      
      <section class="wrp_play_list">
        <h2 class="box_tit">
          <span class="st">人気のプレー</span>
        </h2>
        <div class="con_play_list">
          <ul class="box_play_list">
            <li class="play_card svc_pt_01_01"><a href="/waplay.jp/service/part-time/yakiniku">
              <p class="box_img"><img src="/waplay.jp/imgs/common/svc/svc_pt_01.jpg" alt="焼肉店バイト"></p>
              <p class="box_txt">
                <span class="p_name">焼肉店バイト</span>
              </p>
            </a></li>
            <li class="play_card svc_pt_01_02"><a href="#123">
              <p class="box_img"><img src="/waplay.jp/imgs/common/svc/svc_pt_02.jpg" alt="居酒屋バイト"></p>
              <p class="box_txt">
                <span class="p_name">居酒屋バイト</span>
              </p>
            </a></li>
            <li class="play_card svc_pt_01_03"><a href="#123">
              <p class="box_img"><img src="/waplay.jp/imgs/common/svc/svc_pt_03.jpg" alt="자동차검사"></p>
              <p class="box_txt">
                <span class="p_name">デパートバイト</span>
              </p>
            </a></li>
            <li class="play_card svc_pt_01_04"><a href="#123">
              <p class="box_img"><img src="/waplay.jp/imgs/common/svc/svc_pt_04.jpg" alt="골프레슨"></p>
              <p class="box_txt">
                <span class="p_name">モデルバイト</span>
              </p>
            </a></li>
            <li class="play_card svc_pt_01_05"><a href="#123">
              <p class="box_img"><img src="/waplay.jp/imgs/common/svc/svc_pt_05.jpg" alt="피트니스"></p>
              <p class="box_txt">
                <span class="p_name">テーマパークバイト</span>
              </p>
            </a></li>
            <li class="play_card svc_pt_01_06"><a href="#123">
              <p class="box_img"><img src="/waplay.jp/imgs/common/svc/svc_pt_06.jpg" alt="피트니스"></p>
              <p class="box_txt">
                <span class="p_name">ラウンジバイト</span>
              </p>
            </a></li>
          </ul>
        </div>
      </section>

      <section class="con_menu_list">
        <h2 class="box_tit">
          <span class="st">すべてのプレー</span>
        </h2>
        <div class="box_menu_list">
         <div class="box_menu">
            <h3 class="cate">ホール・キッチンバイト</h3>
            <ul>
              <li class="svc_pt_01_01"><a href="#123">焼肉店バイト</a></li>
              <li class="svc_pt_01_02"><a href="#123">居酒屋バイト</a></li>
              <li class="svc_pt_01_03"><a href="#123">ラーメン屋バイト</a></li>
            </ul>
          </div>
          <div class="box_menu">
            <h3 class="cate">店舗管理・販売バイト</h3>
            <ul>
              <li class="svc_pt_02_01"><a href="#123">コンビニバイト</a></li>
              <li class="svc_pt_02_02"><a href="#123">デパートバイト</a></li>
              <li class="svc_pt_02_03"><a href="#123">カラオケバイト</a></li>
            </ul>
          </div>
        </div>
      </section>
    </div>

    <?php include_once('../../inc/aside.php'); ?>
    


    <!-- <script src="./serviceWorker.js"></script> -->
    <script src="../../js/common.js"></script>
    <script src="../../js/wrd_pt.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  </body>
</html>














