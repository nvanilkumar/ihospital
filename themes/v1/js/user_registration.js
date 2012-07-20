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
				email: true
			 
      		 
				
				 
 			 
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
        url: baseUrl + "ihus/check_username_availablity",
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
				landline1:
				{
					number: true
				},
				landline1:
				{
					number: true
				},
				landline2:
				{
					number: true
				},
				landline3:
				{
					number: true
				},
				landline4:
				{
					number: true
				},
				mobile1:
				{
					number: true
				},
				mobile2:
				{
					number: true
				},
				mobile3:
				{
					number: true
				},
				mobile4:
				{
					number: true
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
			fname: { 
      			 required: "Please enter the user name",
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
				landline1:
				{
					number: 'please eter numeric value!',
				},
				landline2:
				{
					number: 'please eter numeric value!',
				},
				landline3:
				{
					number: 'please eter numeric value!',
				},
				landline4:
				{
					number: 'please eter numeric value!',
				},
			mobile1:
				{
					number: 'please eter numeric value!',
				},
				mobile2:
				{
					number: 'please eter numeric value!',
				},
				mobile3:
				{
					number: 'please eter numeric value!',
				},
				mobile4:
				{
					number: 'please eter numeric value!',
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