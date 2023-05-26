<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ワプレー｜勉強も仕事も遊ぶのもすべてプレイだ！。人と人をつなぐ、われらのプレー</title>

    <!-- gtag 삽입 예정 -->
    <?php include_once('./config/config.php'); ?>
    <?php include_once('./config/meta.php'); ?>
        
    <link rel="stylesheet" href="./css/common.min.css"/>
    <link rel="stylesheet" href="./css/mypage.min.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="manifest" href="./manifest.json">
  </head>

    
  <body>
    <?php include_once('./inc/header.php'); ?>
    <div id="con_page">

      <div class="con_fix_top view_pc-tab">
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
      
      <section class="wrp_my_profile">
        <div class="con_my_profile">
          <div class="box_user_info">
            <div class="box_stat">
              <i><img src="<?=DIR?>/imgs/common/ic/ic_md_bronze.svg" alt=""></i>
              <span class="bronze">Bronze</span>
              <span class="box_lv">Level <em class="lv_now">1</em></span>
            </div>
            <h2 class="tit">WEGO JAPAN</h2>
            <dl class="box_info">
              <dt class="play">プレイ</dt>
              <dd class="play_sc">0</dd>
              <dt class="review">レビュー</dt>
              <dd class="review_sc">0</dd>
              <dt class="honor">業績</dt>
              <dd class="honor_sc">0</dd>
            </dl>
          </div>
          <div class="box_pic">
            <p class="img"><img src="<?=DIR?>/imgs/user/user_01.jpg" alt=""></p>
            <p class="ic"><i class="fa-solid fa-camera"></i></p>
          </div>
          <div class="box_progress box_exp">
            <div class="progress_bar exp_bar">
              <p class="progress_value exp"></p>
            </div>
            <div class="txt">
              <span class="lv_current">Level<strong class="lv_now">1</strong></span>
              <span class="lv_next">
                <strong class="prog">0</strong>
                <em class="goal">100</em>
              </span>
            </div>
          </div>
          <p class="btn_exp btn_point"><a href="#123">出席EXPを受ける</a></p>
        </div>
      </section>

      <section class="con_bn">
        <div class="slider">
          <li>
            <a href="#123">
              <div class="box_bn">
                <div class="box_txt">
                  <strong>簡単プレイヤー登録</strong>
                  <span>簡単な入力でプレイヤー活動を開始できます。</span>
                </div>
                <div class="box_img"><img src="<?=DIR?>/imgs/bn/bn_object_player.png" alt=""></div>
              </div>
            </a>
          </li>
        </div>
      </section>

      <section class="con_menu">
        <dl class="box_menu point">
          <dt class="tit">ポイント</dt>
          <dd class="cp"><a href="#123"><strong>1,550</strong></a></dd>
        </dl>
        <dl class="box_menu play">
          <dt class="tit">プレイ</dt>
          <dd>
            <a href="#123">
              <div class="box_st">
                <i><img src="<?=DIR?>/imgs/common/ic/ic_checklist.svg" alt=""></i>
                <span class="st">プレイ一覧</span>
              </div>
            </a>
          </dd>
          <dd>
            <a href="#123">
              <div class="box_st">
                <i><img src="<?=DIR?>/imgs/common/ic/ic_heart.svg" alt=""></i>
                <span class="st">好きなプレー</span>
              </div>
            </a>
          </dd>
          <dd>
            <a href="#123">
              <div class="box_st">
                <i><img src="<?=DIR?>/imgs/common/ic/ic_talk.svg" alt=""></i>
                <span class="st">作成文 / コメント</span>
              </div>
            </a>
          </dd>
          <dd>
            <a href="#123">
              <div class="box_st">
                <i><img src="<?=DIR?>/imgs/common/ic/ic_ban.svg" alt=""></i>
                <span class="st">遮断されたプレイヤー</span>
              </div>
            </a>
          </dd>
        </dl>
        <dl class="box_menu profile">
          <dt class="tit">プロフィール</dt>
          <dd>
            <a href="#123">
              <div class="box_st">
                <i><img src="<?=DIR?>/imgs/common/ic/ic_user_lt.svg" alt=""></i>
                <span class="st">個人情報</span>
              </div>
            </a>
          </dd>
          <dd>
            <a href="#123">
              <div class="box_st">
                <i><img src="<?=DIR?>/imgs/common/ic/ic_settings.svg" alt=""></i>
                <span class="st">設定</span>
              </div>
            </a>
          </dd>
        </dl>
        <dl class="box_menu info">
          <dt class="tit">ワプレー情報</dt>
          <dd>
            <a href="#123">
              <div class="box_st">
                <span class="st">サービス案内</span>
              </div>
            </a>
          </dd>
          <dd>
            <a href="#123">
              <div class="box_st">
                <span class="st">お知らせ</span>
              </div>
            </a>
          </dd>
          <dd>
            <a href="#123">
            <div class="box_st">
              <span class="st">カスタマーセンター</span>
            </div>
            </a>
          </dd>
        </dl>
      </section>


    </div>

    <?php include_once('./inc/aside.php'); ?>


    <!-- <script src="./serviceWorker.js"></script> -->
    <script src="./js/common.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script src="./js/mypage.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  </body>
</html>














