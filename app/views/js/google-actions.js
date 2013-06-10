function signinCallback(authResult) {
  if (authResult['access_token']) {
    // Successfully authorized
    // Hide the sign-in button now that the user is authorized, for example:
    //document.getElementById('signinButton').setAttribute('style', 'display: none');
    $.get(
    	'https://www.googleapis.com/oauth2/v1/userinfo?alt=json&key=AIzaSyB6WmrURVt8hsDvKme1URxS6JYPK_mX0K0&access_token='+authResult['access_token'],
    	function(userProfile){ 
			if (userProfile['hd'] === 'eestec.ro') {
				$.ajax({
		    		url: 'checkUser',
		    		type: 'POST',
		    		data: {
			    		uid : userProfile['id'],
			    		givenName : userProfile['given_name'],
			    		familyName : userProfile['family_name'],
			    		email : userProfile['email'],
			    		image : userProfile['picture'],
			    		birthday : userProfile['birthday']		    		
		    		},
		    		async: false,
		    		success: function(){window.location = 'home';}
	    		});	
			} else {
				disconnectUser(authResult['access_token']);
				alert('Sorry, you don\'t have an "eestec.ro" domain email.');	
			}    		
    	});
  } else if (authResult['error']) {
    // There was an error.
    // Possible error codes:
    //   "access_denied" - User denied access to your app
    //   "immediate_failed" - Could not automatically log in the user
    console.log('There was an error: ' + authResult['error']);
  }
}

function disconnectUser(access_token) {
  var revokeUrl = 'https://accounts.google.com/o/oauth2/revoke?token=' +
      access_token;

  // Perform an asynchronous GET request.
  $.ajax({
    type: 'GET',
    url: revokeUrl,
    async: false,
    contentType: "application/json",
    dataType: 'jsonp',
    success: function(nullResponse) {
      // Do something now that user is disconnected
      // The response is always undefined.
    },
    error: function(e) {
      // Handle the error
      // console.log(e);
      // You could point users to manually disconnect if unsuccessful
      // https://plus.google.com/apps
    }
  });
}
// Could trigger the disconnect on a button click
//$('#logout').click(disconnectUser(authResult['access_token']));

