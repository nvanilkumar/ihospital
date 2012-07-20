// JavaScript Document
$(document).ready(function() {
$("#overview").validate({
		
 
		rules: {
			
			established : {
				required: true,
				 			      		  
    		},
		mname: {
				required: true,
				 			      		  
    		},
		mdesignation: {
				required: true,
				 			      		  
    		},

   			  
		},
		
		
		
		messages: {
			
			established:{
				required: "please select the established date",
				 
			},
			mname: { 
      			 required: "please enter the management name",
     			},
			mdesignation: {
             required: "please enter the designation ",
			                
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
		
			
	});//form validation
	
	
 	});//document
	
	
// Function to add unit details
function addUnitDetails()
{
	 
	ucount = parseInt(document.getElementById('unitcount').value) +1;
	
	var unitdata='	<p id="unitbeddetails1'+ucount+'"><label>Unit Name:</label><input name="uname[]" type="text" /></p>\
<p id="unitbeddetails2'+ucount+'"><label>Unit Beds Number:</label><input name="ubeds[]" type="text" />\
<a href="javascript:removeUnitDetails('+ucount+');" >Remove</a></p>';
  	          
  
	$('#unitbeddetails21').after(unitdata);
	document.getElementById('unitcount').value= ucount;
	
}


// Function to add unit details
function addManagementDetails()
{
	 
	mcount = parseInt(document.getElementById('managementcount').value) +1;
	
	var managedata=' <p class="name1" id="managementdetails1'+mcount+'">\
<label>Name '+mcount+':</label>\
<select name="mnametype[]"  id="select3" class="nametitle">\
<option value="Dr" selected="selected">Dr.</option>\
<option value="Mr">Mr.</option>\
<option value="Ms">Ms</option>\
</select>\
 <input name="mname[]" type="text" />\
</p>\
<p id="managementdetails2'+mcount+'"><label>Designation:</label>  <input name="mdesignation[]" type="text" /> \
<a href="javascript:removeManagementDetails('+mcount+');" >Remove</a></p>';
  	          
  
	$('#managementdetails21').after(managedata);
	document.getElementById('managementcount').value= mcount;
	
}


//FUNCTION TO REMOVE the land line row
function removeManagementDetails($value)
{
	ucount= parseInt(document.getElementById('managementcount').value);
	 //intTextBox= document.getElementById('count').value ;
	 if(ucount != 1)
	{
 		$('#managementdetails1' + $value).remove();
		$('#managementdetails2' + $value).remove();
 		ucount = ucount-1;
		document.getElementById('managementcount').value= ucount;
	}
}


 
 //FUNCTION TO REMOVE the land line row
function removeUnitDetails($value)
{
	ucount= parseInt(document.getElementById('unitcount').value);
	 //intTextBox= document.getElementById('count').value ;
	 if(ucount != 1)
	{
 		$('#unitbeddetails1' + $value).remove();
		$('#unitbeddetails2' + $value).remove();
 		ucount = ucount-1;
		document.getElementById('unitcount').value= ucount;
	}
}
