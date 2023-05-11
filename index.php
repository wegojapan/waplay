<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ワプレー｜必要なすべてのサービスの見積を簡単にもらおう。全国民交流プラットフォーム、われらのプレー</title>

    <!-- gtag 삽입 예정 -->
    <?php include_once('./config/config.php'); ?>
    <?php include_once('./config/meta.php'); ?>
        
    <link rel="stylesheet" href="./css/common.min.css"/>
    <link rel="stylesheet" href="./css/main.min.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="manifest" href="./manifest.json">


  </head>

    
  <body>
    <?php include_once('./inc/header.php'); ?>
    <div id="con_page">
      <div class="con_bn view_sp">
        <div class="slider">
          <li><p class="img"><img src="./imgs/bn/bn_main_01.jpg" alt=""></p></li>
          <li><p class="img"><img src="./imgs/bn/bn_main_02.jpg" alt=""></p></li>
        </div>
        <div class="slider-count"></div>
      </div>
      
      <section class="wrp_slide_list recent">
        <h2>
          <span>최근 진행한 플레이</span>
          <small><a href="#123">더보기</a></small>
        </h2>
        <div class="con_slide_list">
          <ul class="box_slide_list">
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_pt_01.jpg" alt="야끼니꾸"></p>
              <p class="box_txt">
                <span>야끼니꾸 전문점</span>
                <small>아르바이트</small>
              </p>
            </a></li>
            <li><a href="">
              <p class="box_img"><img src="./imgs/common/svc/svc_home_01.jpg" alt="원룸/소형이사"></p>
              <p class="box_txt">
                <span>원룸/소형이사</span>
                <small>홈/리빙</small>
              </p>
            </a></li>
            <li><a href="">
              <p class="box_img"><img src="./imgs/common/svc/svc_car_01.jpg" alt="자동차검사"></p>
              <p class="box_txt">
                <span>자동차 검사</span>
                <small>자동차</small>
              </p>
            </a></li>
            <li><a href="">
              <p class="box_img"><img src="./imgs/common/svc/svc_hc_01.jpg" alt="영어 공부"></p>
              <p class="box_txt">
                <span>영어 과외</span>
                <small>가정교사</small>
              </p>
            </a></li>
          </ul>
        </div>
      </section>

      <section class="con_wrd_list">
        <h2>인기 플레이 카테고리</h2>
        <ul class="box_wrd_list">
          <li>
              <p class="icon">
                <a href="#123"><img src="./imgs/common/ic/ic_wrd_influ.svg" alt="인플루언서"></a>
              </p>
              <small class="txt">インフルエンサー</small>
          </li>
          <li>
              <p class="icon">
                <a href="#123"><img src="./imgs/common/ic/ic_wrd_hc.svg" alt="가정교사"></a>
              </p>
              <small class="txt">家庭教師</small>
          </li>
          <li>
              <p class="icon">
                <a href="#123"><img src="./imgs/common/ic/ic_wrd_lesson.svg" alt="가정교사"></a>
              </p>
              <small class="txt">レッスン</small>
          </li>
          <li>
              <p class="icon">
                <a href="#123"><img src="./imgs/common/ic/ic_wrd_home.svg" alt="가정교사"></a>
              </p>
              <small class="txt">ホーム/リビング</small>
          </li>
          <li>
              <p class="icon">
                <a href="#123"><img src="./imgs/common/ic/ic_wrd_car.svg" alt="가정교사"></a>
              </p>
              <small class="txt">自動車</small>
          </li>
          <li>
              <p class="icon">
                <a href="#123"><img src="./imgs/common/ic/ic_wrd_inte.svg" alt="가정교사"></a>
              </p>
              <small class="txt">インテリア/撤去</small>
          </li>
          <li>
              <p class="icon">
                <a href="#123"><img src="./imgs/common/ic/ic_wrd_pt.svg" alt="가정교사"></a>
              </p>
              <small class="txt">アルバイト</small>
          </li>
        </ul>
      </section>

      <section class="wrp_slide_list rec">
        <h2>
          <span>이달의 추천 플레이</span>
          <small><a href="#123">더보기</a></small>
        </h2>
        <div class="con_slide_list">
          <ul class="box_slide_list">
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_home_01.jpg" alt="웜룸/소형이사"></p>
              <p class="box_txt">
                <span>원룸/소형이사</span>
                <small><em class="p-num">452,152</em>명 플레이</small>
              </p>
            </a></li>
            <li><a href="">
              <p class="box_img"><img src="./imgs/common/svc/svc_home_05.jpg" alt="에어콘 청소"></p>
              <p class="box_txt">
                <span>에어콘 청소</span>
                <small><em class="p-num">52,152</em>명 플레이</small>
              </p>
            </a></li>
            <li><a href="">
              <p class="box_img"><img src="./imgs/common/svc/svc_home_03.jpg" alt="해충 방역"></p>
              <p class="box_txt">
                <span>해충 방역</span>
                <small><em class="p-num">2,152</em>명 플레이</small>
              </p>
            </a></li>
            <li><a href="">
              <p class="box_img"><img src="./imgs/common/svc/svc_car_01.jpg" alt="자동차검사"></p>
              <p class="box_txt">
                <span>자동차 검사</span>
                <small><em class="p-num">52,152</em>명 플레이</small>
              </p>
            </a></li>
          </ul>
        </div>
      </section>

      <section class="wrp_slide_list open">
        <h2>
          <span>모집중인 오픈 플레이</span>
          <small><a href="#123">더보기</a></small>
        </h2>
        <div class="con_slide_list">
          <ul class="box_slide_list">
            <li><a href="#123">
              <p class="box_img"><img src="./imgs/common/svc/svc_op_01.jpg" alt="이자카야 오프카이"></p>
              <p class="box_txt">
                <span class="tit">이자카야 오프카이</span>
                <small>모집인원<em class="c-num"><strong>6</strong>8</em></small>
              </p>
            </a></li>
            <li><a href="">
              <p class="box_img"><img src="./imgs/common/svc/svc_op_07.jpg" alt="수다 오프카이"></p>
              <p class="box_txt">
                <span class="tit">수다 오프카이</span>
                <small>모집인원<em class="c-num"><strong>3</strong>4</em></small>
              </p>
            </a></li>
            <li><a href="">
              <p class="box_img"><img src="./imgs/common/svc/svc_op_02.jpg" alt="야끼토리 오프카이"></p>
              <p class="box_txt">
                <span class="tit">야키토리 오프카이</span>
                <small>모집인원<em class="c-num"><strong>3</strong>5</em></small>
              </p>
            </a></li>
          </ul>
        </div>
      </section>

      <section class="wrp_slide_list hot_player">
        <h2>
          <span>최근 인기 플레이어</span>
          <small><a href="#123">더보기</a></small>
        </h2>
        <div class="con_slide_list">
          <div class="box_slide_list player_list">
            <li>
              <div class="pic">
                <a href="#123">
                  <p class="user"><img src="./imgs/user/user_01.jpg" alt="user"></p>
                  <p class="ic_md"><img src="./imgs/common/ic/ic_md_s_bronze.svg" alt="bronze"></p>
                </a>
              </div>
              <dl class="box_txt">
                  <dt>
                    <span class="p_id">인스타슬레이어</span>
                    <em class="ic_star"><img src="./imgs/common/ic/ic_star.svg" alt="star">5.0</em>
                  </dt>
                  <dd>
                    <small class="cate">인플루언서</small>
                    <small class="info">평균 <span>1 시간</span> 이내 응답</small>
                  </dd>
              </dl>
            </li>
          </ul>
        </div>
      </section>



      <?php include_once('./inc/footer.php'); ?>
    </div>
    <script src="./serviceWorker.js"></script>
    <script src="./js/common.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script src="./js/main.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script> 
    	AOS.init({
        duration: 800,
        delay: 100,
        easing: 'ease',
      });
    </script>

  </body>
</html>














