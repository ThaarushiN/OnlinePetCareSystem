function callForm() {
  var formVisiblity1 = document.getElementsByClassName('when'); //cash on delivery
  var formVisiblity2 = document.getElementsByClassName('paycard'); //card payments

  if (document.getElementsByClassName('cod').clicked == true && formVisiblity1.style.visibility === 'hidden') {
    formVisiblity1.style.visibility = 'visible';
  } else if (document.getElementsByClassName('cod').clicked == true && formVisiblity1.style.visibility === 'visible') {
    formVisiblity1.style.visibility = 'hidden';
  } else if (document.getElementsByClassName('card').clicked == true && formVisiblity2.style.visibility === 'visible') {
    formVisiblity2.style.visibility = 'visible';
  } else if (document.getElementsByClassName('card').clicked == true && formVisiblity2.style.visibility === 'visible') {
    formVisiblity2.style.visibility = 'hidden';
  } else {
    formVisiblity1.style.visibility = 'hidden';
    formVisiblity1.style.visibility = 'hidden';
  }

}

document.addEventListener('DOMContentLoaded', function(){
  document.querySelector('.cod').onclick=callForm;
  document.querySelector('.card').onclick=callForm;
});