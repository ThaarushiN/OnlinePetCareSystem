var form1=document.getElementById('when');
var form2=document.getElementById('paycard');

var formVisibility1=form1.style.display;
var formVisibility2=form2.style.display;

var form1button=document.getElementById('cod');
var form2button=document.getElementById('card');

function callForm1() {
  if (formVisibility1==='block') 
  {
    formVisibility1='none';
  }
  else 
  {
    formVisibility1='block';
  }
}

function callForm2() {
  if (formVisibility2==='block') 
  {
    formVisibility2='none';
  }
  else
  {
    formVisibility2='block';
  }
}