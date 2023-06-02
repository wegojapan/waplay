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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    
  </head>
    
  <body>
    <?php include_once('../../../inc/header.php'); ?>
    <div id="con_page">
      <div class="con_fix_top view_pc-tab">
        <p class="btn_back" onclick="goBack()"><a href="javascript:void(0);"><img src="<?=DIR?>/imgs/common/ic/ic_back.svg" alt=""></a></p>
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
          <progress class="progress" value="0" max="13"></progress>
          <p class="box_step"><span>0</span><em>13</em></p>
        </div>
        <div class="con_answer step_01 active">
          <div class="tit_request">
            <h3>勤務日数はどのくらいですか？?</h3>
          </div>
          <ul class="answer_list checkBox">
            <li class="box_answer">
              <input type="checkbox" id="checkBox_step_01_01" name="check-group" />
              <label for="checkBox_step_01_01">協議可能</label>
            </li>
            <li class="box_answer etcBox">
              <input type="checkbox" id="checkBox_step_01_07" name="check-group" />
              <label for="checkBox_step_01_07">その他</label>
              <div class="box_input_etc">
                <input class="input_etc" type="text" placeholder="内容を入力してください。">
              </div>
            </li>
          </ul>
        </div>
        <div class="con_answer step_02 active">
          <div class="tit_request">
            <h3>勤務期間はどのくらいですか？?</h3>
          </div>
          <ul class="answer_list radio">
            <li class="box_answer">
              <input type="radio" id="radio_step_02_07" name="radio-group" />
              <label for="radio_step_02_07">協議可能</label>
            </li>
            <li class="box_answer etcBox">
              <input type="radio" id="radio_step_02_08" name="radio-group" />
              <label for="radio_step_02_08">その他</label>
              <div class="box_input_etc">
                <input class="input_etc" type="text" placeholder="内容を入力してください。">
              </div>
            </li>

          </ul>
        </div>
        <div class="con_answer step_03 active">
          <div class="tit_request">
            <h3>給与はどうなりますか？?</h3>
          </div>
          <ul class="answer_list radio">
            <li class="box_answer etcBox">
              <input type="radio" id="radio_step_03_01" name="radio-group" />
              <label for="radio_step_03_01">時給<small>(単位:円)</small></label>
              <div class="box_input_etc">
                <input class="input_etc type_number" type="tel" placeholder="金額を入力してください。" />
              </div>
            </li>
            <li class="box_answer etcBox">
              <input type="radio" id="radio_step_03_02" name="radio-group" />
              <label for="radio_step_03_02">日払い<small>(単位:円)</small></label>
              <div class="box_input_etc">
                <input class="input_etc type_number" type="tel" placeholder="金額を入力してください。" />
              </div>
            </li>
            <li class="box_answer etcBox">
              <input type="radio" id="radio_step_03_03" name="radio-group" />
              <label for="radio_step_03_03">月給<small>(単位:円)</small></label>
              <div class="box_input_etc">
                <input class="input_etc type_number" type="tel" placeholder="金額を入力してください。" />
              </div>
            </li>
          </ul>
        </div>
        <div class="con_answer step_04 active">
          <div class="tit_request">
            <h3>出勤予定日はいつですか？?</h3>
          </div>
          <ul class="answer_list radio">
            <li class="box_answer dateBox">
              <input  id="datepicker" class="flatpickr flatpickr-input active" type="text" placeholder="年 / 月 / 日" readonly="readonly">
              <i class="ic_calendar"><img src="<?=DIR?>/imgs/common/ic/ic_calendar.svg" alt="calendar"></i>
            </li>
          </ul>
        </div>
        <div class="con_answer step_05 active">
          <div class="tit_request">
            <h3>引越しの人数は何人ですか？?</h3>
          </div>
          <ul class="answer_list count">
          <li class="box_answer countBox">
              <dl>
                <dt class="tit">성인</dt>
                <dd class="count_util">
                  <button class="btn_count btn_inc">ー</button>
                  <p class="count_num">1</p>
                  <button class="btn_count btn_dec">＋</button>
                </dd>
              </dl>
            </li>
            <li class="box_answer countBox">
              <dl>
                <dt class="tit">대학생</dt>
                <dd class="count_util">
                  <button class="btn_count btn_inc">ー</button>
                  <p class="count_num">1</p>
                  <button class="btn_count btn_dec">＋</button>
                </dd>
              </dl>
            </li>
          </ul>
        </div>


        <div class="btns_fixed_bottom">
          <p class="btn_step_next btn_point"><a href="#123">募集を始める</a></p>
        </div>
      </form>
    </section>



    </div>

    <?php include_once('../../../inc/aside.php'); ?>
    


    <!-- <script src="./serviceWorker.js"></script> -->
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        pageTitM.innerHTML = 'アルバイト';
      });
    </script>

    <script src="../../../js/common.js"></script>
    <script src="../../../js/service.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  </body>
</html>














