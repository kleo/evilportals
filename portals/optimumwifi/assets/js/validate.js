function validate(form,mso) {

	resetError();
    var hasError = false;
    var errorMessage = "";
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    if ( (username == null || username == "") && (password == null || password == "") )
    {
    	errorMessage = "Please enter Username and Password.<br>";
    	hasError = true;
    }
    else if ( username == null || username == "" )
    {
    	errorMessage = "Please enter Username.<br>";
    	hasError = true;
    }
    else if ( password == null || password == "" )
    {
    	errorMessage = "Please enter Password.<br>";
    	hasError = true;
    }
/*    if ( document.getElementById('tos').checked == false )
    {
    	errorMessage = errorMessage + "Please agree to the Terms of Service.<br>";
    	hasError = true;
    }*/
    
    if ( hasError )
    {
    	document.getElementById('errorMsg').innerHTML = errorMessage;
    	document.getElementById('errorMsg').style.display = "block";
    	return false;
    }

    var pattern = "";
    if ( mso == "spectrum" )
    {
    	//pattern = "([^@]+)@(nyc|nj|hvc|si)\\.rr\\.com";
    	//pattern = "([^@]+)@([^@]+)";
    	pattern = "";
    }
    else if ( mso == "cvc")
    {
    	//pattern = "([a-zA-Z0-9\\-_.]+)@optimum\\.net";
    }
/*    else if ( mso == "bhn" )
    {
    	//pattern = "([^@]+)@(bhnsso|bhn\\.com|cfl\\.rr\\.com)";
    	pattern = "";
    }*/
    else if ( mso == "ccc")
    {
    	//pattern = "([^@]+)@comcast\\.net";
    }
    else if ( mso == "cox")
    {
    	//pattern = "([^@]+)@comcast\\.net";
    }
    
    var regex = new RegExp(pattern);
    if (!username.match(regex))
    {
    	errorMessage = "Username is not valid: " + username;
    	hasError = true;
    }
    
    if ( hasError )
    {
    	document.getElementById('errorMsg').innerHTML = errorMessage;
    	document.getElementById('errorMsg').style.display = "block";
    	return false;
    }
 /*   else
    {
    	form.submit();
    	return true;
    }*/
}

function resetError()
{
	document.getElementById('errorMsg').innerHTML = "";
	document.getElementById('errorMsg').style.display = "none";
}