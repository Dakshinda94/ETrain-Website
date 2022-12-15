function checkvalid()
{
	alert("Pleace Waiting...");
	var un = document.getElementById("un");
	var pw = document.getElementById("pw");
	
	if((un.value == "Ravindu")&&(pw.value == "1"))
	{ 
       var response = confirm("Successfull Login Pleace Click Ok!!");
          
	   return true;
	   
    }
	else
	{
		alert("Invalid Username or Password ??");
		return false;
	}
}