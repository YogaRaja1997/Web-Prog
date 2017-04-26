function validateForm() {
 	if(document.myForm.FIRSTNAME.value=="")
 	{
     			alert("Name must be filled out");
        		return false;
    		}
			
	


	var y = document.myForm.LASTNAME.value;
    if (y == "") {
        alert("Name must be filled out");
        return false;
    }
	 var z = document.myForm.SURNAME.value;
    if (z == "") {
        alert("Name must be filled out");
        return false;
    }
	if((document.myForm.GENDER[0].checked==false)&&(document.myForm.GENDER[1].checked==false))
 	{
  		alert("Please select a gender.");
  		return false;
 	}
	
	if(document.myForm.CONTACT_NUMBER.value=="")
	{
	alert("Please Enter your CONTACT_NUMBER");
	return false;
	}
	 else if(isNaN(document.myForm.CONTACT_NUMBER.value))
	{
	alert("Contact number should contain only digits.");

	  document.myForm.CONTACT_NUMBER.value="";
	  return false;

	 }

	 else if(document.myForm.CONTACT_NUMBER.value.length!=10)
	{

	  alert("Contact number should contain only 10 digits.(Mobile number)");

	  document.myForm.CONTACT_NUMBER.value="";
	  return false;

	 }
	 if(document.myForm.CASTE.value="")  {
        alert("CASTE must be filled out");
        return false;
    }
	 if(document.myForm.DEPARTMENT.value=="SELECT")
	{
	alert("Please select your DEPARTMENT");
	return false;
	}

	
	
	if(document.myForm.SPECIALIZATION.value=="")
	{
	alert("Please Enter your SPECIALIZATION");
	return false;
	}
	if(document.myForm.YEAR_OF_COMPLETION.value=="")
	{
	alert("Please Enter your year of completion");
	return false;
	}
	 else if(document.myForm.YEAR_OF_COMPLETION.value.length!=4)
	{

	  alert("Enter a valid year");

	  document.myForm.YEAR_OF_COMPLETION.value="";
	  return false;

	 }	
	 
  if(document.myForm.UNIVERSITY.value=="")
	{
	alert("Please Enter your UNIVERSITY");
	return false;
     }
	
}
			