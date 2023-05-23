
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



