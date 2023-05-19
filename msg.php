<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ワプレー｜勉強も仕事も遊ぶのもすべてプレイだ！。人と人をつなぐ、われらのプレー</title>

    <!-- gtag 삽입 예정 -->
    <?php include_once('./config/config.php'); ?>
    <?php include_once('./config/meta.php'); ?>
        
    <link rel="stylesheet" href="./css/common.min.css"/>
    <link rel="stylesheet" href="./css/msg.min.css"/>
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
            <li><p class="btn_bell"><a href="#123"><img src="./imgs/common/ic/ic_bell.svg" alt=""></a></p></li>
            <li><p class="btn_user"><a href="#123"><img src="./imgs/user/user_01.jpg" alt=""></a></p></li>
          </ul>
        </div>
      </div>

      <section class="wrp_slide_list cate_nav">
        <h2 class="box_tit view_pc-tab">
          <span class="tit">メッセージ</span>
        </h2>
        <div class="con_slide_list">
          <ul class="box_slide_list">
            <li class="active"><a href="#123">すべて</a></li>
            <li><a href="#123">未読</a></li>
            <li><a href="#123">お気に入り</a></li>
          </ul>
        </div>
      </section>
      
      <section class="con_bn">
        <div class="slider">
          <li><a href="#123">
            <div class="box_bn">
              <div class="box_txt">
                <span>もう一人で悩まないでください。</span>
                <strong>心理カウンセラー待機中</strong>
              </div>
              <div class="box_img"><img src="./imgs/bn/bn_object_04.png" alt=""></div>
              </div>
            </p>
          </a></li>
        </div>
      </section>


      <section class="con_post">
        <article class="box_post">
          <a href="#123">
            <div class="box_profile">
              <div class="user_info">
                <div class="box_pic">
                  <p class="pic"><img src="./imgs/user/user_03.jpg" alt=""></p>
                </div>
                <dl class="txt_info">
                  <dt class="info">
                    <span class="name">アサダマオ</span>
                  </dt>
                  <dd class="world">ホーム/インテリア</dd>
                </dl>
              </div>
              <p class="cate"><small>3分前</small><i class="red_dot"></i></p>
            </div>
            <div class="box_txt">
              <p class="txt">
              はい。ありがとうございます。
              </p>
            </div>
          </a>
        </article>
        <article class="box_post">
          <a href="#123">
            <div class="box_profile">
              <div class="user_info">
                <div class="box_pic"> 
                  <p class="pic"><img src="./imgs/user/user_04.jpg" alt=""></p>
                </div>
                <dl class="txt_info">
                  <dt class="info">
                    <span class="name">オオサカナオミ</span>
                  </dt>
                  <dd class="world">個人広告</dd>
                </dl>
              </div>
              <p class="cate"><small>1時間前</small></p>
            </div>
            <div class="box_txt">
              <p class="txt">
              気になることがありますけど、教えてください。
              </p>
            </div>
          </a>
        </article>
        <article class="box_post">
          <a href="#123"> 
            <div class="box_profile">
              <div class="user_info">
                <div class="box_pic">
                  <p class="pic"><img src="./imgs/user/user_02.jpg" alt=""></p>
                </div>
                <dl class="txt_info">
                  <dt class="info">
                    <span class="name">相馬明人</span>
                  </dt>
                  <dd class="world">くるま</dd>
                </dl>
              </div>
              <p class="cate"><small>2日前</small></p>
            </div>
            <div class="box_txt">
              <p class="txt">
              レビューありがとうございました。
              </p>
            </div>
          </a>
        </article>
        <article class="box_post">
          <a href="#123"> 
            <div class="box_profile">
              <div class="user_info">
                <div class="box_pic">
                  <p class="pic"><img src="./imgs/user/user_10.jpg" alt=""></p>
                </div>
                <dl class="txt_info">
                  <dt class="info">
                    <span class="name">相馬明人</span>
                  </dt>
                  <dd class="world">くるま</dd>
                </dl>
              </div>
              <p class="cate"><small>2日前</small></p>
            </div>
            <div class="box_txt">
              <p class="txt">
              確認しました。
              </p>
            </div>
          </a>
        </article>
        <article class="box_post">
          <a href="#123"> 
            <div class="box_profile">
              <div class="user_info">
                <div class="box_pic">
                  <p class="pic"><img src="./imgs/user/user_08.jpg" alt=""></p>
                </div>
                <dl class="txt_info">
                  <dt class="info">
                    <span class="name">相馬明人</span>
                  </dt>
                  <dd class="world">レッスン</dd>
                </dl>
              </div>
              <p class="cate"><small>1ヶ月前</small></p>
            </div>
            <div class="box_txt">
              <p class="txt">
              よろしくお願いします。
              </p>
            </div>
          </a>
        </article>
      </section>
    </div>

    <!-- <script src="./serviceWorker.js"></script> -->
    <script src="./js/common.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script src="./js/main.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  </body>
</html>














