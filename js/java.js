//check password function
function checkPassword()
{

	if(document.getElementById("pwd").value !=document.getElementById("conformed").value)
	{
		alert("password mismatched"); 
		return false;
	}
	else
	{
		alert("succesfully created");
		return true;
	}
}
