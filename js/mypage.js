document.addEventListener("DOMContentLoaded", function(e) {

    pageTitM.innerHTML = 'マイページ';

    btnExp = document.querySelector(".btn_exp");
    expBar = document.querySelector(".exp");
    expScore = document.querySelector(".lv_next .prog");

    function expChange() {
        this.style.display = 'none';
        expBar.style.width = '30%';
        expScore.innerHTML = '30';
    }
    btnExp.addEventListener("click",expChange);
});
