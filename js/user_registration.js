// JavaScript Document
 
 
 



$(document).ready(function() {
	
	// date function

	 $(function() {
 			$("#dob").datepicker({ 	
 			changeMonth: true,
			changeYear: true,
			dateFormat : 'yy-mm-dd'
 	 });  
	 
 	});
	
	
$("#formElem").validate({
		
 
		rules: {
			
			
			
			email : {
				required: true,
				email: true,
				
				remote: {
        url: "index.php/ihus/check_email_availablity",
        type: "post",
        data: {
          email: function() {
            return $("#email").val();
          }
        }
      }
				
				 
 			 
    		},
			 
			password: {
				required: true,
				minlength: 6,
				maxlength: 16,
				
			},
			 
			repassword: {
				required: true,
 				equalTo: "#password"
			},
 			 usertype: {
              required: true
              
          },
		   username: {
              required: true,
			  remote: {
        url: "index.php/ihus/check_username_availablity",
        type: "post",
        data: {
          username: function() {
            return $("#username").val();
          }
        }
      }
              
          },
		fname: { 
      			required: true,
     			 minlength: 3 
    			},
	lname: { 
     		 required: true,
     		 minlength: 3 
   		 },
   			dob: "required",
			terms: "required"
		},
		
		
		
		messages: {
			
			usertype:{
				required: "Please Select the User Type",
				 
			},
			username: {
             required: "Please enter the user name",
			  remote: 'username alerady exists  '
              
          },
			password: {
				required: "Provide a password",
				rangelength: jQuery.format("Enter at least {0} characters")
			},
			repassword: {
				required: "Repeat your password",
				minlength: jQuery.format("Enter at least {0} characters"),
				equalTo: "Enter the same password as above"
			},
			
			email: {
				required: 'Please Enter Valid Email!',
			    remote: 'email alerady exists  '
			}
			 
		}	,
		errorPlacement: function(error, element) {
			if ( element.is(":radio") )
				error.appendTo( element.parent().next().next() );
			else if ( element.is(":checkbox") )
				error.appendTo ( element.next() );
			else
			{
				error.appendTo( element.next() );
			}
		}, 
		
			
	});
	
	
 
});