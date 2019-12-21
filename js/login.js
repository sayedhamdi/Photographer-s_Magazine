function loginPost(){
    // Create our XMLHttpRequest object
    event.preventDefault();
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "./includes/login.php";
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var vars = "email="+email+"&password="+password;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
        if(return_data=="login"){
          window.open("index.php",'_self',false);
          return;
        }
			document.getElementById("status").innerHTML = '<div class="alert alert-danger" role="alert">'+return_data+'</div>'
	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
}
