function validationName() {

	var name = document.getElementById('name').value;
	if (name.length == 0) {
		producePrompt("Name is Required","namePrompt","red");
		return false;

	}
	if (!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) /* Rejex ([A-Z])\w+  */
	{
		producePrompt("First and Last name please","namePrompt","red");
		return false;
	}
	producePrompt("Welcome"+ name,"namePrompt","white");
	return true;

}

function validationEmail(){
	var email = document.getElementById('email').value;
	if(email.length == 0)
	{
		producePrompt("Email is Required","emailPrompt","red");
		return false;
	}
	if (!email.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/))
	{
		producePrompt("Email Address Invalid","emailPrompt","red");
		return false;
	}

	producePrompt("Valid Email Address","emailPrompt","white");
	return true;
}


function validationComment(){
	var comment = document.getElementById('comment').value;
	var required = 4;
	var left = required - comment.length;

	if(left > 0)
	{
		producePrompt(left + "Characters is Required","commentPrompt","red");
		return false;
	}
	producePrompt("Valid Comment","commentPrompt","white");
	return true;

} 


function producePrompt(message,promptLocation,color)
{
	document.getElementById(promptLocation).innerHTML = message;
	document.getElementById(promptLocation).style.color = color;
}

