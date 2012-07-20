// JavaScript Document
$(document).ready(function()
 {
    /// make loader hidden in start
    $('#Loading').hide();    
 
    $('#email').blur(function()
	{
	
	var a = $("#email").val();
	alert("hi" + a);
	var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
       // check if email is valid
	if(filter.test(a))
	{
                // show loader 
		$('#Loading').show();
		$.post("index.php/ihus/check_email_availablity", {
			email: $('#email').val()
		}, function(response){
                        //#emailInfo is a span which will show you message
			$('#Loading').hide();
			setTimeout("finishAjax('Loading', '"+escape(response)+"')", 400);
		});
		return false;
	}
});
});

function finishAjax(id, response){
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn();
}

