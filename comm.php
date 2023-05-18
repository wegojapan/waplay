<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ワプレー｜勉強も仕事も遊ぶのもすべてプレイだ！。人と人をつなぐ、われらのプレー</title>

    <!-- gtag 삽입 예정 -->
    <?php include_once('./config/config.php'); ?>
    <?php include_once('./config/meta.php'); ?>
        
    <link rel="stylesheet" href="./css/common.min.css"/>
    <link rel="stylesheet" href="./css/comm.min.css"/>
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
          <span class="tit">コミュニティー</span>
        </h2>
        <div class="con_slide_list">
          <ul class="box_slide_list">
            <li class="active"><a href="#123">すべて</a></li>
            <li><a href="#123">アニメ/マンガ</a></li>
            <li><a href="#123">ゲーム</a></li>
            <li><a href="#123">料理/飲食</a></li>
            <li><a href="#123">旅行/観光</a></li>
            <li><a href="#123">ビューティー</a></li>
            <li><a href="#123">健康/スポーツ</a></li>
            <li><a href="#123">恋愛/結婚</a></li>
            <li><a href="#123">会社生活</a></li>
            <li><a href="#123">教えて</a></li>
            <li><a href="#123">悩み</a></li>
          </ul>
        </div>
      </section>
      
      <section class="wrp_slide_list comm">
        <h2 class="box_tit">
          <span class="tit">今人気の掲示物</span>
        </h2>
        <div class="con_slide_list">
          <ul class="box_slide_list">
          <li><a href="#123">
              <h3 class="cate">お知らせ</h3>
              <p class="txt">ワプレーコミュニティ利用ガイド</p>
              <div class="box_util">
                <p class="logo"><img src="./imgs/common/waplay_wh.svg" alt="waplay"></p>
              </div>
            </a></li>
            <li><a href="#123">
              <h3 class="cate">アニメ</h3>
              <p class="txt">新しいアニメが欲しいです。誰かおしえてくれ</p>
              <div class="box_util">
                <p class="like">
                  <i class="fa-solid fa-heart"></i>  
                  <span>29</span>
                </p>
                <p class="comment">
                <i class="fa-solid fa-comment-dots"></i>
                  <span>6</span>
                </p>
              </div>
            </a></li>
            <li><a href="#123">
              <h3 class="cate">ゲーム</h3>
              <p class="txt">おすすめのゲームないのかな</p>
              <div class="box_util">
                <p class="like">
                  <i class="fa-solid fa-heart"></i>  
                  <span>29</span>
                </p>
                <p class="comment">
                <i class="fa-solid fa-comment-dots"></i>
                  <span>6</span>
                </p>
              </div>
            </a></li>
            <li><a href="#123">
              <h3 class="cate">料理/飲食</h3>
              <p class="txt">レシピ共有 #01. 鶏ささみサラダ</p>
              <div class="box_util">
                <p class="like">
                  <i class="fa-solid fa-heart"></i>  
                  <span>29</span>
                </p>
                <p class="comment">
                <i class="fa-solid fa-comment-dots"></i>
                  <span>6</span>
                </p>
              </div>
            </a></li>
            <li><a href="#123">
              <h3 class="cate">料理/飲食</h3>
              <p class="txt">レシピ共有 #01. 鶏ささみサラダ</p>
              <div class="box_util">
                <p class="like">
                  <i class="fa-solid fa-heart"></i>  
                  <span>29</span>
                </p>
                <p class="comment">
                <i class="fa-solid fa-comment-dots"></i>
                  <span>6</span>
                </p>
              </div>
            </a></li>
          </ul>
        </div>
      </section>

      <div class="con_bn">
        <div class="slider">
        <li>
            <div class="box_bn">
              <div class="box_txt">
                <strong>WAPLAYで遊ぼう!</strong>
                <span>すべてがプレイだ！われらのプレー</span>
              </div>
              <div class="box_img"><img src="./imgs/bn/bn_object_01.png" alt=""></div>
              </div>
            </p>
          </li>
          <li>
            <div class="box_bn">
              <div class="box_txt">
                <span>インフルエンサーに広告したいけど高い...</span>
                <strong>でも、直接プレイすれば安い!</strong>
              </div>
              <div class="box_img"><img src="./imgs/bn/bn_object_02.png" alt=""></div>
              </div>
            </p>
          </li>
        </div>
        <div class="slider-count"></div>
      </div>


      <section class="con_post">
        <article class="box_post">
          <div class="box_profile">
            <div class="user_info">
              <div class="box_pic"><a href="#123">
                <p class="pic"><img src="./imgs/user/user_02.jpg" alt=""></p>
                <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_bronze.svg" alt="bronze"></p>
              </a></div>
              <dl class="txt_info">
                <dt class="info">
                  <span class="name">緋村剣心</span>
                  <span class="star"><img src="./imgs/common/ic/ic_star.svg" alt=""></span>
                  <span class="score">5.0</span>
                </dt>
                <dd class="world">個人広告</dd>
              </dl>
            </div>
            <p class="cate"><small>アニメ/マンガ</small></p>
          </div>
          <dl class="box_txt"><a href="#123">
            <dt class="tit">今年の新作アニメのおすすめリスト共有します。とても面白くて絶対に見なければならない名作です。今年の新作アニメのおすすめリスト共有します。とても面白くて絶対に見なければならない名作です。</dt>
            <dd class="txt">
            見放題のラインアップ数は断トツのNo.1。だから観たい作品を、たっぷり、お得に楽しめます。また、最新作のレンタルもぞくぞく配信。もう、観たい気分を我慢する必要はありません。見放題のラインアップ数は断トツのNo.1。だから観たい作品を、たっぷり、お得に楽しめます。また、最新作のレンタルもぞくぞく配信。もう、観たい気分を我慢する必要はありません。
            </dd>
          </a></dl>
        </article>
        <article class="box_post">
          <div class="box_profile">
            <div class="user_info">
              <div class="box_pic"><a href="#123"> 
                <p class="pic"><img src="./imgs/user/user_05.jpg" alt=""></p>
                <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_bronze.svg" alt="bronze"></p>
              </a></div>
              <dl class="txt_info">
                <dt class="info">
                  <span class="name">オオサカナオミ</span>
                  <span class="star"><img src="./imgs/common/ic/ic_star.svg" alt=""></span>
                  <span class="score">5.0</span>
                </dt>
                <dd class="world">個人広告</dd>
              </dl>
            </div>
            <p class="cate"><small>ゲーム</small></p>
          </div>
          <dl class="box_txt"><a href="#123">
            <dt class="tit">今年の新作アニメのおすすめリスト共有します。とても面白くて絶対に見なければならない名作です。</dt>
            <dd class="txt">
            見放題のラインアップ数は断トツのNo.1。だから観たい作品を、たっぷり、お得に楽しめます。また、最新作のレンタルもぞくぞく配信。もう、観たい気分を我慢する必要はありません。
            </dd>
          </a></dl>
        </article>
        <article class="box_post">
          <div class="box_profile">
            <div class="user_info">
              <div class="box_pic"><a href="#123"> 
                <p class="pic"><img src="./imgs/user/user_08.jpg" alt=""></p>
                <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_plat.svg" alt="bronze"></p>
              </a></div>
              <dl class="txt_info">
                <dt class="info">
                  <span class="name">スダりさ</span>
                  <span class="star"><img src="./imgs/common/ic/ic_star.svg" alt=""></span>
                  <span class="score">5.0</span>
                </dt>
                <dd class="world">個人広告</dd>
              </dl>
            </div>
            <p class="cate"><small>旅行/観光</small></p>
          </div>
          <dl class="box_txt"><a href="#123">
            <dt class="tit">今年の新作アニメのおすすめリスト共有します。とても面白くて絶対に見なければならない名作です。</dt>
            <dd class="txt">
            見放題のラインアップ数は断トツのNo.1。だから観たい作品を、たっぷり、お得に楽しめます。また、最新作のレンタルもぞくぞく配信。もう、観たい気分を我慢する必要はありません。
            </dd>
          </a></dl>
        </article>
      </section>
    </div>

    <script src="./serviceWorker.js"></script>
    <script src="./js/common.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script src="./js/main.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  </body>
</html>














