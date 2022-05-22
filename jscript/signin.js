function validateForm() {
  let name = document.forms["signinForm"]["usern"].value;
  let pass= document.forms["signinForm"]["passw"].value;
  
  if (name == " " || pass=="")
  {
    alert("You can't leave name and password empty!!");
  }
}

//coded by IT21174230