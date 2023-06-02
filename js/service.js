  /* readyEvent
------------------------------------------------------------------------*/

// con_answer select Setting - each click
document.addEventListener("DOMContentLoaded", function(e) {
  const checkBoxlistItems = document.querySelectorAll('.answer_list.checkBox li label');
  const radioBoxlistItems = document.querySelectorAll('.answer_list.radio li label');
  
  for (var i = 0; i < checkBoxlistItems.length; i++) {
    checkBoxlistItems[i].addEventListener('click', function() {
      this.classList.toggle('active');
    });
  }
  for (var i = 0; i < radioBoxlistItems.length; i++) {
    radioBoxlistItems[i].addEventListener('click', function() {
      const activeItem = document.querySelector('.answer_list.radio .active');
      if (activeItem) {
        activeItem.classList.remove('active');
      }
      this.classList.add('active');
    });
  }

  // input Type number output styling 0000 -> 0,000
  function formatNumber(input) {
    const number = input.value.replace(/\D/g, '');
    const formattedNumber = Number(number).toLocaleString('en-US');
    input.value = formattedNumber;
  }
  
  const telInputs = document.querySelectorAll('.type_number');

  telInputs.forEach(function(input) {
    input.addEventListener('input', function() {
      formatNumber(this);
    });
  });

  // flatpickr calendar setting
  function initializeFlatpickr() {
    flatpickr("#datepicker", {
      // option here!
      disableMobile: true,
      minDate: "today"
    });
  }
  
  // add flatpickr script
  function loadFlatpickrScript() {
    const script = document.createElement('script');
    script.src = 'https://cdn.jsdelivr.net/npm/flatpickr';
    script.onload = initializeFlatpickr;
    document.head.appendChild(script);
  }
  
  loadFlatpickrScript();


  // Count button event setting
  const countBoxes = document.querySelectorAll('.countBox');

  countBoxes.forEach(function(countBox) {
    const btnInc = countBox.querySelector('.btn_inc');
    const btnDec = countBox.querySelector('.btn_dec');
    const countNum = countBox.querySelector('.count_num');
  
    btnDec.addEventListener('click', function(event) {
      event.preventDefault();
      let count = parseInt(countNum.innerText);
      countNum.innerText = count + 1;
    });
  
    btnInc.addEventListener('click', function(event) {
      event.preventDefault();
      let count = parseInt(countNum.innerText);
      if (count > 0) {
        countNum.innerText = count - 1;
      }
    });
  });


});


