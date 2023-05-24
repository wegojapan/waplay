
// aside Alarm settings
const btnAlarm = document.querySelector(".con_fix_top .btn_bell");
const btnAlarmM = document.querySelector(".btn_bell");
const asideAlarm = document.querySelector("aside.con_alarm");
const asideAlarmTime = document.querySelector(".con_alarm .time") 
const btnCloseAlarm = document.querySelector(".con_alarm .btn_close");

function viewAsideAlarm() {
	asideAlarm.classList.add('active');
}
function closeAsideAlarm() {
	asideAlarm.classList.remove('active');
}
btnAlarm.addEventListener('click', viewAsideAlarm);
btnAlarmM.addEventListener('click', viewAsideAlarm);
btnCloseAlarm.addEventListener('click', closeAsideAlarm);


// Sub page Title Settings
const gnavHome = document.querySelector(".box_gnav .home");
const gnavComm = document.querySelector(".box_gnav .comm");
const gnavMsg = document.querySelector(".box_gnav .msg");
const gnavMypage = document.querySelector(".box_gnav .mypage");
const gnavBtnPlay = document.querySelector(".box_gnav .btn_play");

//Sub page Title target
const pageTit = document.querySelector("h2.box_tit .tit");
const pageTitM = document.querySelector("#header h1.p_tit");
