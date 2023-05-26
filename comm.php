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
            <li><p class="btn_bell"><a href="#123"><img src="<?=DIR?>/imgs/common/ic/ic_bell.svg" alt=""></a></p></li>
            <li><p class="btn_user"><a href="#123"><img src="<?=DIR?>/imgs/user/user_01.jpg" alt=""></a></p></li>
          </ul>
        </div>
      </div>


      <section class="wrp_slide_list cate_nav tab">
        <h2 class="box_tit view_pc-tab">
          <span class="tit">コミュニティー</span>
        </h2>
        <div class="con_slide_list">
          <ul class="box_slide_list">
            <li class="active"><a href="#123">すべて</a></li>
            <li><a href="comm_cate_01.php">アニメ/マンガ</a></li>
            <li><a href="#123">ゲーム</a></li>
            <li><a href="#123">料理/飲食</a></li>
            <li><a href="#123">旅行/観光</a></li>
            <li><a href="#123">ビューティー</a></li>
            <li><a href="#123">健康/スポーツ</a></li>
            <li><a href="#123">恋愛/結婚</a></li>
            <li><a href="#123">会社生活</a></li>
            <li><a href="#123">悩み</a></li>
          </ul>
        </div>
      </section>
      
      <section class="wrp_slide_list comm">
        <h2 class="box_tit">
          <span class="st">今人気の掲示物</span>
        </h2>
        <div class="con_slide_list">
          <ul class="box_slide_list">
          <li><a href="#123">
              <h3 class="cate">お知らせ</h3>
              <p class="txt">ワプレーコミュニティ利用ガイド</p>
              <div class="box_util">
                <p class="logo"><img src="<?=DIR?>/imgs/common/waplay_wh.svg" alt="waplay"></p>
              </div>
            </a></li>
            <li><a href="#123">
              <h3 class="cate">アニメ</h3>
              <p class="txt">新しいアニメが欲しいです。誰かおしえてくれ新しいアニメが欲しいです。誰かおしえてくれ</p>
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
              <h3 class="cate">恋愛/結婚</h3>
              <p class="txt">共働き嫁に食材送るお母さん</p>
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

      <section class="con_bn">
        <div class="slider">
          <li>
            <a href="#123">
              <div class="box_bn">
                <div class="box_txt">
                  <span>ゴルフ専門スキンケアブランド</span>
                  <strong>VIVUS GOLF</strong>
                </div>
                <div class="box_img"><img src="<?=DIR?>/imgs/bn/bn_object_03.png" alt=""></div>
              </div>
            </a>
          </li>
        </div>
      </section>


      <section class="con_post">
        <article class="box_post">
          <div class="wrp_profile">
            <div class="profile_set">
              <div class="box_profile"><a href="#123">
                <p class="pic"><img src="<?=DIR?>/imgs/user/user_08.jpg" alt="user"></p>
                <p class="ic_md"><img src="<?=DIR?>/imgs/common/ic/ic_md_s_gold.svg" alt="gold"></p>
              </a></div>
              <dl class="box_txt">
                <dt>
                  <span class="p_name">移動しなさいマン</span>
                </dt>
                <dd>
                  <small class="p_wrd">ホーム/リビング</small>
                </dd>
              </dl>
            </div>
            <p class="cate"><small>恋愛/結婚</small></p>
          </div>
          <dl class="box_txt"><a href="#123">
            <dt class="tit">共働き嫁に食材送るお母さん</dt>
            <dd class="txt">
            家で料理しないとしたが食べない食材いっぱい送って包んでくれたお母さん仕事に疲れて何もできないのに私たちに生活費も受けながらこんなの買わないでそのまま惜しまないけれん的にお礼の電話もしたくないです一生懸命顔を立てるてずっと送るようて送らないでほしいと一言を発すれば、悪い人作るみたいで何もしたくないですね
            </dd>
          </a></dl>
          <div class="box_util">
            <div class="icons">
              <p class="ic_like">
                <i class="fa-solid fa-thumbs-up"></i>
                <span>29</span>
              </p>
              <p class="ic_comment">
                <i class="fa-solid fa-comment-dots"></i>
                <span>6</span>
              </p>
            </div>
            <p class="date">3分前</p>
          </div>
        </article>
        <article class="box_post">
          <div class="wrp_profile">
            <div class="profile_set">
              <div class="box_profile"><a href="#123">
                <p class="pic"><img src="<?=DIR?>/imgs/user/user_09.jpg" alt="user"></p>
                <p class="ic_md"><img src="<?=DIR?>/imgs/common/ic/ic_md_s_gold.svg" alt="gold"></p>
              </a></div>
              <dl class="box_txt">
                <dt>
                  <span class="p_name">移動しなさいマン</span>
                </dt>
                <dd>
                  <small class="p_wrd">ホーム/リビング</small>
                </dd>
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
          <div class="box_util">
            <div class="icons">
              <p class="ic_like">
                <i class="fa-solid fa-thumbs-up"></i>
                <span>29</span>
              </p>
              <p class="ic_comment">
                <i class="fa-solid fa-comment-dots"></i>
                <span>6</span>
              </p>
            </div>
            <p class="date">3分前</p>
          </div>

        </article>
        <article class="box_post">
          <div class="wrp_profile">
            <div class="profile_set unknown">
              <div class="box_profile"><a href="#123">
                <p class="pic"><img src="<?=DIR?>/imgs/user/unknown.jpg" alt="user"></p>
              </a></div>
              <dl class="box_txt">
                <dt>
                  <span class="p_name">匿名のプレーヤー</span>
                </dt>
                <dd>
                  <small class="p_wrd">非公開</small>
                </dd>
              </dl>
            </div>
            <p class="cate"><small>恋愛/結婚</small></p>
          </div>
          <dl class="box_txt"><a href="#123">
            <dt class="tit">誕生日サンドイッチ望んでいるのが欲ですか?</dt>
            <dd class="txt">
            この前誕生日でした。誕生日当日の朝、誕生日祝いそんなこと望んでいるのありません。普段してくれなくても誕生日に飢えて行く新郎朝に簡単に食べられるサンドイッチやおにぎり程度は期待しました。妻にその話をしたらあなたは私の誕生日の朝、作ってくれた返します。誕生日朝サンドイッチやおにぎり程度が欲ですか?
            </dd>
          </a></dl>
          <div class="box_util">
            <div class="icons">
              <p class="ic_like">
                <i class="fa-solid fa-thumbs-up"></i>
                <span>29</span>
              </p>
              <p class="ic_comment">
                <i class="fa-solid fa-comment-dots"></i>
                <span>6</span>
              </p>
            </div>
            <p class="date">3分前</p>
          </div>

        </article>
        <article class="box_post">
          <div class="wrp_profile">
            <div class="profile_set unknown">
              <div class="box_profile"><a href="#123">
                <p class="pic"><img src="<?=DIR?>/imgs/user/unknown.jpg" alt="user"></p>
              </a></div>
              <dl class="box_txt">
                <dt>
                  <span class="p_name">匿名のプレーヤー</span>
                </dt>
                <dd>
                  <small class="p_wrd">非公開</small>
                </dd>
              </dl>
            </div>
            <p class="cate"><small>恋愛/結婚</small></p>
          </div>
          <dl class="box_txt"><a href="#123">
            <dt class="tit">女友達気がてください。</dt>
            <dd class="txt">
              5年恋愛してもう結婚するか思案中ですが他のことはすべていいが、気が強いです。男が負けてくれて当然だと思って生きてきました。うちの父も母に声も苦手ですから。
            </dd>
          </a></dl>
          <div class="box_util">
            <div class="icons">
              <p class="ic_like">
                <i class="fa-solid fa-thumbs-up"></i>
                <span>29</span>
              </p>
              <p class="ic_comment">
                <i class="fa-solid fa-comment-dots"></i>
                <span>6</span>
              </p>
            </div>
            <p class="date">3分前</p>
          </div>

        </article>
        <article class="box_post">
          <div class="wrp_profile">
            <div class="profile_set unknown">
              <div class="box_profile"><a href="#123">
                <p class="pic"><img src="<?=DIR?>/imgs/user/unknown.jpg" alt="user"></p>
              </a></div>
              <dl class="box_txt">
                <dt>
                  <span class="p_name">匿名のプレーヤー</span>
                </dt>
                <dd>
                  <small class="p_wrd">非公開</small>
                </dd>
              </dl>
            </div>
            <p class="cate"><small>恋愛/結婚</small></p>
          </div>
          <dl class="box_txt"><a href="#123">
            <dt class="tit">彼女の借金...</dt>
            <dd class="txt">
            夜明けに弟の電話を受けてもどかしい気持ちに私と同じ考えをする人たちの助言を見せてあげたい、書き込みをあげたが…ランキング上位圏まで行くと知りませんでしたねそれだけ普通の事がないというのでしょう
            </dd>
          </a></dl>
          <div class="box_util">
            <div class="icons">
              <p class="ic_like">
                <i class="fa-solid fa-thumbs-up"></i>
                <span>29</span>
              </p>
              <p class="ic_comment">
                <i class="fa-solid fa-comment-dots"></i>
                <span>6</span>
              </p>
            </div>
            <p class="date">3分前</p>
          </div>

        </article>
      </section>
    </div>

    <?php include_once('./inc/aside.php'); ?>


    <!-- <script src="./serviceWorker.js"></script> -->
    <script src="./js/common.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script src="./js/comm.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  </body>
</html>














