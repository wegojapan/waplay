<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ワプレー｜必要なすべてのサービスの見積を簡単にもらおう。人と人をつなぐ、われらのプレー</title>

    <!-- gtag 삽입 예정 -->
    <?php include_once('./config/config.php'); ?>
    <?php include_once('./config/meta.php'); ?>
        
    <link rel="stylesheet" href="./css/common.min.css"/>
    <link rel="stylesheet" href="./css/main.min.css"/>
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

      <section class="con_bn">
        <div class="slider">
        <li>
            <a href="#123">
              <div class="box_bn">
                <div class="box_txt">
                  <span>仕事も遊びもすべてがプレイ</span>
                  <strong>ワプレーで遊ぼう!!</strong>
                </div>
                <div class="box_img"><img src="./imgs/bn/bn_object_01.png" alt=""></div>
              </div>
            </a>
          </li>
          <li>
            <a href="#123">
              <div class="box_bn">
                <div class="box_txt">
                  <span>インフルエンサー広告高いな...</span>
                  <strong>でも、プレイすれば安い！</strong>
                </div>
                <div class="box_img"><img src="./imgs/bn/bn_object_02.png" alt=""></div>
              </div>
            </a>
          </li>
        </div>
        <div class="slider-count"></div>
      </section>

      <section class="wrp_slide_list recent">
        <h2 class="box_tit">
          <span class="tit">最近進行したプレー</span>
          <small class="more"><a href="#123">すべて見る</a></small>
        </h2>
        <div class="con_slide_list">
          <ul class="box_slide_list">
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_pt_01.jpg" alt="야끼니꾸"></p>
              <p class="box_txt">
                <span class="p_name">焼肉店</span>
                <small class="p_wrd">バイト</small>
              </p>
            </a></li>
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_home_01.jpg" alt="원룸/소형이사"></p>
              <p class="box_txt">
                <span class="p_name">簡便引越し</span>
                <small class="p_wrd">ホーム/リビング</small>
              </p>
            </a></li>
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_car_01.jpg" alt="자동차검사"></p>
              <p class="box_txt">
                <span class="p_name">車検</span>
                <small class="p_wrd">くるま</small>
              </p>
            </a></li>
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_lesson_03.jpg" alt="골프레슨"></p>
              <p class="box_txt">
                <span class="p_name">ゴルフレッスン</span>
                <small class="p_wrd">レッスン</small>
              </p>
            </a></li>
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_op_04.jpg" alt="피트니스"></p>
              <p class="box_txt">
                <span class="p_name">フィットネス</span>
                <small class="p_wrd">レッスン</small>
              </p>
            </a></li>
          </ul>
        </div>
      </section>

      <section class="con_wrd_list">
        <h2 class="box_tit"><span class="tit">人気プレイワールド</span></h2>
        <ul class="box_wrd_list">
          <li>
              <p class="icon">
                <a href="#123"><img src="./imgs/common/ic/ic_wrd_influ.svg" alt="인플루언서"></a>
              </p>
              <small class="txt">個人広告</small>
          </li>
          <li>
              <p class="icon">
                <a href="#123"><img src="./imgs/common/ic/ic_wrd_hc.svg" alt="가정교사"></a>
              </p>
              <small class="txt">家庭教師</small>
          </li>
          <li>
              <p class="icon">
                <a href="#123"><img src="./imgs/common/ic/ic_wrd_lesson.svg" alt="레슨"></a>
              </p>
              <small class="txt">レッスン</small>
          </li>
          <li>
              <p class="icon">
                <a href="#123"><img src="./imgs/common/ic/ic_wrd_home.svg" alt="홈/리빙"></a>
              </p>
              <small class="txt">ホーム/リビング</small>
          </li>
          <li>
              <p class="icon">
                <a href="#123"><img src="./imgs/common/ic/ic_wrd_car.svg" alt="자동차"></a>
              </p>
              <small class="txt">自動車</small>
          </li>
          <li>
              <p class="icon">
                <a href="#123"><img src="./imgs/common/ic/ic_wrd_inte.svg" alt="인테리어/철거"></a>
              </p>
              <small class="txt">インテリア/撤去</small>
          </li>
          <li>
              <p class="icon">
                <a href="wrd_cate_list.php"><img src="./imgs/common/ic/ic_wrd_pt.svg" alt="아르바이트"></a>
              </p>
              <small class="txt">アルバイト</small>
          </li>
          <li>
              <p class="icon">
                <a href="#123"><img src="./imgs/common/ic/ic_wrd_etc.svg" alt="모두보기"></a>
              </p>
              <small class="txt">すべて見る</small>
          </li>
        </ul>
      </section>

      <section class="wrp_slide_list rec">
        <h2 class="box_tit">
          <span class="tit">今月のおすすめプレー</span>
          <small class="more"><a href="#123">すべて見る</a></small>
        </h2>
        <div class="con_slide_list">
          <ul class="box_slide_list">
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_home_01.jpg" alt="웜룸/소형이사"></p>
              <p class="box_txt">
                <span class="p_name">簡便引越し</span>
                <small class="p_wrd">ホーム/リビング</small>
              </p>
            </a></li>
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_home_05.jpg" alt="에어콘 청소"></p>
              <p class="box_txt">
                <span class="p_name">エアコンクリニック</span>
                <small class="p_wrd">ホーム/リビング</small>
              </p>
            </a></li>
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_home_03.jpg" alt="해충 방역"></p>
              <p class="box_txt">
                <span class="p_name">害虫駆除・害獣駆除</span>
                <small class="p_wrd">ホーム/リビング</small>
              </p>
            </a></li>
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_car_01.jpg" alt="자동차검사"></p>
              <p class="box_txt">
                <span class="p_name">車検</span>
                <small class="p_wrd">くるま</small>
              </p>
            </a></li>
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_inte_01.jpg" alt="홈인테리어"></p>
              <p class="box_txt">
                <span class="p_name">ホームインテリア</span>
                <small class="p_wrd">ホーム/リビング</small>
              </p>
            </a></li>
          </ul>
        </div>
      </section>

      <section class="wrp_slide_list open">
        <h2 class="box_tit">
          <span class="tit">OPEN PLAY 募集中</span>
          <small class="more"><a href="#123">すべて見る</a></small>
        </h2>
        <div class="con_slide_list">
          <ul class="box_slide_list">
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_op_01.jpg" alt="이자카야 오프카이"></p>
              <p class="box_txt">
                <span class="p_name">居酒屋オフ会</span>
                <small class="p_member"><em class="c-num">26</em>件プレイ中</small>
              </p>
            </a></li>
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_op_07.jpg" alt="수다 오프카이"></p>
              <p class="box_txt">
                <span class="p_name">おしゃべりオフ会</span>
                <small class="p_member"><em class="c-num">110</em>件プレイ中</small>
              </p>
            </a></li>
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_op_02.jpg" alt="야끼토리 오프카이"></p>
              <p class="box_txt">
                <span class="p_name">焼き鳥オフ会</span>
                <small class="p_member"><em class="c-num">526</em>件プレイ中</small>
              </p>
            </a></li>
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_op_05.jpg" alt="이자카야 오프카이"></p>
              <p class="box_txt">
                <span class="p_name">コスプレオフ会</span>
                <small class="p_member"><em class="c-num">26</em>件プレイ中</small>
              </p>
            </a></li>
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_op_06.jpg" alt="야끼토리 오프카이"></p>
              <p class="box_txt">
                <span class="p_name">ミュージカルオフ会</span>
                <small class="p_member"><em class="c-num">82</em>件プレイ中</small>
              </p>
            </a></li>
          </ul>
        </div>
      </section>

      <section class="con_slide_hot">
        <h2 class="box_tit">
          <span class="tit">最近の人気プレイヤー</span>
          <small class="more"><a href="#123">すべて見る</a></small>
        </h2>
        <div class="box_list">
        <ul>
            <li>
              <div class="profile_set">
                <div class="box_profile"><a href="#123">
                  <p class="pic"><img src="./imgs/user/user_01.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_bronze.svg" alt="bronze"></p>
                </a></div>
                <dl class="box_txt">
                  <dt>
                    <span class="p_name">寺西渉</span>
                    <small class="ic_star">
                      <img src="./imgs/common/ic/ic_star.svg" alt="star">
                      <em class="score">5.0</em>
                    </small>
                  </dt>
                  <dd>
                    <small class="cate">くるま</small>
                    <small class="time">平均 <em>1時間</em> 以内に応答</small>
                  </dd>
                </dl>
              </div>
            </li>
            <li>
              <div class="profile_set">
                <div class="box_profile"><a href="#123">
                  <p class="pic"><img src="./imgs/user/user_02.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_master.svg" alt="master"></p>
                </a></div>
                <dl class="box_txt">
                  <dt>
                    <span class="p_name">スダりさ</span>
                    <small class="ic_star">
                      <img src="./imgs/common/ic/ic_star.svg" alt="star">
                      <em class="score">5.0</em>
                    </small>
                  </dt>
                  <dd>
                    <small class="cate">インフルエンサー</small>
                    <small class="time">平均 <em>30分</em> 以内に応答</small>
                  </dd>
                </dl>
              </div>
            </li>
            <li>
              <div class="profile_set">
                <div class="box_profile"><a href="#123">
                  <p class="pic"><img src="./imgs/user/user_03.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_silver.svg" alt="silver"></p>
                </a></div>
                <dl class="box_txt">
                  <dt>
                    <span class="p_name">コンビニマスタ</span>
                    <small class="ic_star">
                      <img src="./imgs/common/ic/ic_star.svg" alt="star">
                      <em class="score">5.0</em>
                    </small>
                  </dt>
                  <dd>
                    <small class="cate">バイト</small>
                    <small class="time">平均 <em>10分</em> 以内に応答</small>
                  </dd>
                </dl>
              </div>
            </li>
            <li>
              <div class="profile_set">
                <div class="box_profile"><a href="#123">
                  <p class="pic"><img src="./imgs/user/user_04.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_gold.svg" alt="gold"></p>
                </a></div>
                <dl class="box_txt">
                  <dt>
                    <span class="p_name">移動しなさいマン</span>
                    <small class="ic_star">
                      <img src="./imgs/common/ic/ic_star.svg" alt="star">
                      <em class="score">5.0</em>
                    </small>
                  </dt>
                  <dd>
                    <small class="cate">ホーム/リビング</small>
                    <small class="time">平均 <em>1時間</em> 以内に応答</small>
                  </dd>
                </dl>
              </div>
            </li>
          </ul>
          <ul>
            <li>
              <div class="profile_set">
                <div class="box_profile"><a href="#123">
                  <p class="pic"><img src="./imgs/user/user_09.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_plat.svg" alt="platinum"></p>
                </a></div>
                <dl class="box_txt">
                  <dt>
                    <span class="p_name">インスタスレイヤー</span>
                    <small class="ic_star">
                      <img src="./imgs/common/ic/ic_star.svg" alt="star">
                      <em class="score">5.0</em>
                    </small>
                  </dt>
                  <dd>
                    <small class="cate">インフルエンサー</small>
                    <small class="time">平均 <em>1時間</em> 以内に応答</small>
                  </dd>
                </dl>
              </div>
            </li>
            <li>
              <div class="profile_set">
                <div class="box_profile"><a href="#123">
                  <p class="pic"><img src="./imgs/user/user_10.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_dia.svg" alt="diamond"></p>
                </a></div>
                <dl class="box_txt">
                  <dt>
                    <span class="p_name">異議ありのなるほど</span>
                    <small class="ic_star">
                      <img src="./imgs/common/ic/ic_star.svg" alt="star">
                      <em class="score">5.0</em>
                    </small>
                  </dt>
                  <dd>
                    <small class="cate">インテリア/撤去</small>
                    <small class="time">平均 <em>30分</em> 以内に応答</small>
                  </dd>
                </dl>
              </div>
            </li>
            <li>
              <div class="profile_set">
                <div class="box_profile"><a href="#123">
                  <p class="pic"><img src="./imgs/user/user_11.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_silver.svg" alt="silver"></p>
                </a></div>
                <dl class="box_txt">
                  <dt>
                    <span class="p_name">緋村剣心</span>
                    <small class="ic_star">
                      <img src="./imgs/common/ic/ic_star.svg" alt="star">
                      <em class="score">5.0</em>
                    </small>
                  </dt>
                  <dd>
                    <small class="cate">バイト</small>
                    <small class="time">平均 <em>10분</em> 以内に応答</small>
                  </dd>
                </dl>
              </div>
            </li>
            <li>
              <div class="profile_set">
                <div class="box_profile"><a href="#123">
                  <p class="pic"><img src="./imgs/user/user_12.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_gold.svg" alt="gold"></p>
                </a></div>
                <dl class="box_txt">
                  <dt>
                    <span class="p_name">サイトはじめ</span>
                    <small class="ic_star">
                      <img src="./imgs/common/ic/ic_star.svg" alt="star">
                      <em class="score">5.0</em>
                    </small>
                  </dt>
                  <dd>
                    <small class="cate">ホーム/リビング</small>
                    <small class="time">平均 <em>1時間</em> 以内に応答</small>
                  </dd>
                </dl>
              </div>
            </li>
          </ul>
          <ul>
            <li>
              <div class="profile_set">
                <div class="box_profile"><a href="#123">
                  <p class="pic"><img src="./imgs/user/user_05.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_bronze.svg" alt="bronze"></p>
                </a></div>
                <dl class="box_txt">
                  <dt>
                    <span class="p_name">寺西渉</span>
                    <small class="ic_star">
                      <img src="./imgs/common/ic/ic_star.svg" alt="star">
                      <em class="score">5.0</em>
                    </small>
                  </dt>
                  <dd>
                    <small class="cate">くるま</small>
                    <small class="time">平均 <em>1時間</em> 以内に応答</small>
                  </dd>
                </dl>
              </div>
            </li>
            <li>
              <div class="profile_set">
                <div class="box_profile"><a href="#123">
                  <p class="pic"><img src="./imgs/user/user_06.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_master.svg" alt="master"></p>
                </a></div>
                <dl class="box_txt">
                  <dt>
                    <span class="p_name">スダりさ</span>
                    <small class="ic_star">
                      <img src="./imgs/common/ic/ic_star.svg" alt="star">
                      <em class="score">5.0</em>
                    </small>
                  </dt>
                  <dd>
                    <small class="cate">インフルエンサー</small>
                    <small class="time">平均 <em>30分</em> 以内に応答</small>
                  </dd>
                </dl>
              </div>
            </li>
            <li>
              <div class="profile_set">
                <div class="box_profile"><a href="#123">
                  <p class="pic"><img src="./imgs/user/user_07.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_silver.svg" alt="silver"></p>
                </a></div>
                <dl class="box_txt">
                  <dt>
                    <span class="p_name">コンビニマスタ</span>
                    <small class="ic_star">
                      <img src="./imgs/common/ic/ic_star.svg" alt="star">
                      <em class="score">5.0</em>
                    </small>
                  </dt>
                  <dd>
                    <small class="cate">バイト</small>
                    <small class="time">平均 <em>10分</em> 以内に応答</small>
                  </dd>
                </dl>
              </div>
            </li>
            <li>
              <div class="profile_set">
                <div class="box_profile"><a href="#123">
                  <p class="pic"><img src="./imgs/user/user_08.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_gold.svg" alt="gold"></p>
                </a></div>
                <dl class="box_txt">
                  <dt>
                    <span class="p_name">移動しなさいマン</span>
                    <small class="ic_star">
                      <img src="./imgs/common/ic/ic_star.svg" alt="star">
                      <em class="score">5.0</em>
                    </small>
                  </dt>
                  <dd>
                    <small class="cate">ホーム/リビング</small>
                    <small class="time">平均 <em>1時間</em> 以内に応答</small>
                  </dd>
                </dl>
              </div>
            </li>
          </ul>
          <ul>
            <li>
              <div class="profile_set">
                <div class="box_profile"><a href="#123">
                  <p class="pic"><img src="./imgs/user/user_09.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_plat.svg" alt="platinum"></p>
                </a></div>
                <dl class="box_txt">
                  <dt>
                    <span class="p_name">インスタスレイヤー</span>
                    <small class="ic_star">
                      <img src="./imgs/common/ic/ic_star.svg" alt="star">
                      <em class="score">5.0</em>
                    </small>
                  </dt>
                  <dd>
                    <small class="cate">インフルエンサー</small>
                    <small class="time">平均 <em>1時間</em> 以内に応答</small>
                  </dd>
                </dl>
              </div>
            </li>
            <li>
              <div class="profile_set">
                <div class="box_profile"><a href="#123">
                  <p class="pic"><img src="./imgs/user/user_10.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_dia.svg" alt="diamond"></p>
                </a></div>
                <dl class="box_txt">
                  <dt>
                    <span class="p_name">異議ありのなるほど</span>
                    <small class="ic_star">
                      <img src="./imgs/common/ic/ic_star.svg" alt="star">
                      <em class="score">5.0</em>
                    </small>
                  </dt>
                  <dd>
                    <small class="cate">インテリア/撤去</small>
                    <small class="time">平均 <em>30分</em> 以内に応答</small>
                  </dd>
                </dl>
              </div>
            </li>
            <li>
              <div class="profile_set">
                <div class="box_profile"><a href="#123">
                  <p class="pic"><img src="./imgs/user/user_11.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_silver.svg" alt="silver"></p>
                </a></div>
                <dl class="box_txt">
                  <dt>
                    <span class="p_name">緋村剣心</span>
                    <small class="ic_star">
                      <img src="./imgs/common/ic/ic_star.svg" alt="star">
                      <em class="score">5.0</em>
                    </small>
                  </dt>
                  <dd>
                    <small class="cate">バイト</small>
                    <small class="time">平均 <em>10분</em> 以内に応答</small>
                  </dd>
                </dl>
              </div>
            </li>
            <li>
              <div class="profile_set">
                <div class="box_profile"><a href="#123">
                  <p class="pic"><img src="./imgs/user/user_12.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_gold.svg" alt="gold"></p>
                </a></div>
                <dl class="box_txt">
                  <dt>
                    <span class="p_name">サイトはじめ</span>
                    <small class="ic_star">
                      <img src="./imgs/common/ic/ic_star.svg" alt="star">
                      <em class="score">5.0</em>
                    </small>
                  </dt>
                  <dd>
                    <small class="cate">ホーム/リビング</small>
                    <small class="time">平均 <em>1時間</em> 以内に応答</small>
                  </dd>
                </dl>
              </div>
            </li>
          </ul>

        </div>
      </section>

      <section class="wrp_slide_list comm">
        <h2 class="box_tit">
          <span class="tit">コミュニティで話そう</span>
          <small class="more"><a href="comm.php">すべて見る</a></small>
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
              <p class="txt">新しいアニメが欲しいです。誰かおしえてくれ新しいアニメが欲しいです。誰かおしえてくれ</p>
              <div class="box_util">
                <p class="like">
                  <i class="fa-solid fa-thumbs-up"></i>
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
                  <i class="fa-solid fa-thumbs-up"></i>
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
                  <i class="fa-solid fa-thumbs-up"></i>
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
                  <i class="fa-solid fa-thumbs-up"></i>
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

      <section class="con_story">
        <h2 class="box_tit">
          <span class="tit">プレイストーリー</span>
        </h2>
        <div class="box_story">
          <ul class="story_list">
            <li>
              <a href="#123">
                <div class="tit">
                  <small class="stxt">2024年新しいスタート</small>
                  <span class="txt">引っ越しを計画中ですか？</span>
                </div>
                <p class="img"><img src="./imgs/story/img_story_01.jpg" alt=""></p>
              </a>
            </li>
            <li>
              <a href="#123">
                <div class="tit">
                  <small class="stxt">勉強も楽しく！</small>
                  <span class="txt">プレイヤーと一緒に勉強して成績を上がりましょう。</span>
                </div>
                <p class="img"><img src="./imgs/story/img_story_02.jpg" alt=""></p>
              </a>
            </li>
            <li>
              <a href="#123">
                <div class="tit">
                  <small class="stxt">心配な車検</small>
                  <span class="txt">見積もりを比較して安く！</span>
                </div>
                <p class="img"><img src="./imgs/story/img_story_03.jpg" alt=""></p>
              </a>
            </li>
            <li>
              <a href="#123">
                <div class="tit">
                  <small class="stxt">ワプレーに望む</small>
                  <span class="txt">送っていただいたご意見でワプレーは進化中！</span>
                </div>
                <p class="img"><img src="./imgs/story/img_story_04.jpg" alt=""></p>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </div>

    <?php include_once('./inc/aside.php'); ?>

    <!-- <script src="./serviceWorker.js"></script> -->
    <script src="./js/common.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>














