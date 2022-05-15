function hideForm() {
	
	if(document.getElementById('paymethod').checked) {   
	       var valueRadio = document.getElementById('paymethod').value;  
	       
	       if(valueRadio==='Cash On Delivery')
	       {
	       	 document.getElementByClass('cod').style.visibility='visible';
	       }
	       else if (valueRadio==='Credit/Debit Card') 
	       {
	       	 document.getElementByClass('card').style.visibility='visible';
	       }
	}  

}

function callForm()
{
	if(document.querySelector('input[name="paymethod"]:checked'))
	hideForm();
}