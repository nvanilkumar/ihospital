// JavaScript Document




$(document).ready(function() {

/* adding alphanumeric validator*/	 
jQuery.validator.addMethod("alphanumeric", function(value, element) {
    return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
}, "Letters and numbers only please ...!"); 

	
$("#ihealth_camps_form").validate({
		
 
		rules: {
				
				
				
				camp_name : {
						required: true
				},
				
				p_name : {
						required: true
				},
				details : {
						required: true
				},
				fees : {
						required: true,
						alphanumeric: true
				},
					
				land_mark : {
						required: true
				},
				
				date_from : {
						required: true
				},
				date_to : {
						required: true
				},
				
				land11: {
				required: true,
				number: true,
				min: 1,
				max: 5399,
				minlength: 1,
				maxlength: 4,
 				},
				land12: {
				required: true,
				number: true,
				minlength: 2,
				maxlength: 4,
 				},
				land13: {
				required: true,
				number: true,
				minlength: 4,
				maxlength: 4,
 				},
				land14: {
				required: true,
				number: true,
				minlength: 4,
				maxlength: 4,
 				},
				
				fax11: {
				required: true,
				number: true,
				min: 1,
				max: 5399,
				minlength: 1,
				maxlength: 4,
 				},
				fax12: {
				required: true,
				number: true,
				minlength: 2,
				maxlength: 4,
 				},
				fax13: {
				required: true,
				number: true,
				minlength: 4,
				maxlength: 4,
 				},
				fax14: {
				required: true,
				number: true,
				maxlength: 4,
 				},
				
				
				mobile11: {
				required: true,
				number: true,
				min: 1,
				max: 5399,
				minlength: 1,
				maxlength: 4,
 				},
				mobile12: {
				required: true,
				number: true,
				minlength: 4,
				maxlength: 4,
 				},
				mobile13: {
				required: true,
				number: true,
				minlength: 3,
				maxlength: 3,
 				},
				mobile14: {
				required: true,
				number: true,
				minlength: 3,
				maxlength: 3,
 				}, 
				
				email : {
				required: true,
				email: true,
 				},
				pincode : {
				required: true,
				number: true,
 				},
				country : {
				required: true,
 				},
				
		  
				
   		    address:{ required: true},
			location:{ required: true},
			city:{ required: true},
			state:{ required: true},
			notes:{ required: true}
		},
		
		
		
		messages: {
			name : {
					required: 'Name is required',
  				},
			p_name : {
				required: 'field is required',
			},
			details: {
				required: 'field is required',
			},
			
			fees: {
				required: 'field is required',
				number: "Please provide valid currency"
			},
			fees: {
				required: 'field is required',
				number: "Please provide valid pincode"
			},
  
			email: {
				required: 'Please Enter Valid Email!',
			    remote: 'email alerady exists  '
			},
			
			
		}	,
		errorPlacement: function(error, element) {               
					error.appendTo(element.parent());     
				}

		});
	
	
 
});


 
 
var lcount=1; var mcount=1; var fcount=1;  var opdcount=1;

// Function to add the land line row
function addLand(path)
{
	
	//lcount = lcount + 1;
	lcount= parseInt(document.getElementById('lcount').value) +1;
 	
	var newTr = $('<tr id=landline'+lcount+'> <td><p>Landline'+lcount+':</p></td>\
      <td width="64" align="right"><input type="text" name="landline'+lcount+'1" id="landline'+lcount+'1" style="width:50px;" class="land1"/></td>\
      <td width="50" align="right">\
      	<label for="textfield9"></label>\
        <input type="text" name="landline'+lcount+'2" id="landline'+lcount+'2" style="width:50px;" class="land2"/>\
        </td>\
      <td width="50" align="right"><input type="text" name="landline'+lcount+'3" id="landline'+lcount+'3" style="width:50px;" class="land3"/></td>\
      <td width="50" align="right"><input type="text" name="landline'+lcount+'4" id="landline'+lcount+'4" style="width:50px;" class="land4"/></td>\
	  	            </tr>');
		 
		 
		var lid = lcount-1;
		  //alert("hi" +lid);
	$('#landline'+lid).after(newTr);
	document.getElementById('lcount').value= lcount;
	
}



// Function to add the land line row
function addMobile()
{
	 
	mcount = parseInt(document.getElementById('mcount').value) +1;
 	var newTr = $(' <tr id="mobilephone'+mcount+'">\
      <td><p>Mobile'+mcount+':</p></td>\
      <td align="right"><input type="text" name="mobile'+mcount+'1" id="mobile'+mcount+'1" style="width:50px;"/></td>\
      <td align="right"><input type="text" name="mobile'+mcount+'2" id="mobile'+mcount+'2" style="width:50px;"/></td>\
      <td align="right"><input type="text" name="mobile'+mcount+'3" id="mobile'+mcount+'3" style="width:50px;"/></td>\
      <td align="right"><input type="text" name="mobile'+mcount+'4" id="mobile'+mcount+'4" style="width:50px;"/></td> </tr>');
        
		var mid = mcount-1;
 
	$('#mobilephone'+mid).after(newTr);
	document.getElementById('mcount').value= mcount;
	
}
 
 // Function to add the land line row
function addFax()
{
	 
	fcount = parseInt(document.getElementById('fcount').value) +1;
 	var newTr = $('<tr id="faxno'+fcount+'">\
      <td><p>Fax'+fcount+':</p></td>\
      <td align="right"><input type="text" name="fax'+fcount+'1" id="fax'+fcount+'1" style="width:50px;"/></td>\
      <td align="right"><input type="text" name="fax'+fcount+'2" id="fax'+fcount+'2" style="width:50px;"/></td>\
      <td align="right"><input type="text" name="fax'+fcount+'3" id="fax'+fcount+'3" style="width:50px;"/></td>\
      <td align="right"><input type="text" name="fax'+fcount+'4" id="fax'+fcount+'4" style="width:50px;"/></td>\
	  	            </tr>');
 		var fid = fcount-1;
 	$('#faxno'+fid).after(newTr);
	document.getElementById('fcount').value= fcount;
	
}
 

function addFees()
{
	 
	feecount = parseInt(document.getElementById('feecount').value) +1;
 	var newTr = $('<tr id="fees'+feecount+'">\
      <td width="60"><p>Fees '+feecount+':</p></td><td align="right"></td>\
      <td align="right" colspan="3"><input type="text" name="fee'+feecount+'1" id="fee'+feecount+'1" style="width:200px; height:24px"/></td>\
	  	            </tr>');
 		var fid = feecount-1;
 	$('#fees'+fid).after(newTr);
	document.getElementById('feecount').value= feecount;
	
}

function removeFees()
{
	feecount= parseInt(document.getElementById('feecount').value);
	 //intTextBox= document.getElementById('count').value ;
	 if(feecount != 1)
	{
		$('#fees' + feecount).remove();
 		feecount = feecount-1;
		document.getElementById('feecount').value= feecount;
	}
}


 

//FUNCTION TO REMOVE the land line row
function removeLand()
{
	lcount= parseInt(document.getElementById('lcount').value);
	 //intTextBox= document.getElementById('count').value ;
	 if(lcount != 1)
	{
		$('#landline' + lcount).remove();
 		lcount = lcount-1;
		document.getElementById('lcount').value= lcount;
	}
}

//FUNCTION TO REMOVE the mobile line row
function removeMobile()
{
		mcount = parseInt(document.getElementById('mcount').value) ;

	 //intTextBox= document.getElementById('count').value ;
	 if(mcount != 1)
	{
		$('#mobilephone' + mcount).remove();
 		mcount = mcount-1;
		document.getElementById('mcount').value= mcount;
	}
}

//FUNCTION TO REMOVE the mobile line row
function removeFax()
{
	fcount = parseInt(document.getElementById('fcount').value) ;
	
	 //intTextBox= document.getElementById('count').value ;
	  
	 if(fcount != 1)
	{
		$('#faxno' + fcount).remove();
 		fcount = fcount-1;
		document.getElementById('fcount').value= fcount;
	}
}




