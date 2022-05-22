var form1=document.getElementById('when');
var form2=document.getElementById('paycard');

function callForm1() {
  if (form1.style.display==='block') 
  {
    form1.style.display='none';
  }
  else 
  {
    form1.style.display='block';
    form2.style.display='none';
  }
}

function callForm2() {
  if (form2.style.display==='block') 
  {
    form2.style.display='none';
  }
  else
  {
    form2.style.display='block';
    form1.style.display='none';
  }
}

//coded by IT21174230

