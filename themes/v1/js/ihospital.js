// JavaScript Document




$(document).ready(function() {
	 
	
	
$("#ihospital_form").validate({
		
 
		rules: {
			
 			name : {
					required: true
  				},
				
				
				landline1: {
				required: true,
				number: true,
				min: 2,
				max:3
 				},
				landline12: {
				required: true,
				number: true,
				min: 2,
				max:4
 				},
				landline13: {
				required: true,
				number: true,
				min: 4,
				max:4
 				},
				landline14: {
				required: true,
				number: true,
 				},
				
				
				mobile11: {
				required: true,
				number: true,
				min: 2,
				max:3
 				},
				mobile12: {
				required: true,
				number: true,
				max:4
 				},
				mobile13: {
				required: true,
				number: true,
				min: 4,
				max:4
 				},
				mobile14: {
				required: true,
				number: true
 				}, 
				
				email : {
				required: true,
				email: true,
 				},
				
		   hospitallogo: {
			    required: true, 
				accept: "png|jpe?g|gif", 
				filesize: 1048576  
				},
				
   		    address: "required",
			location: "required",
			city: "required",
			state: "required",
			terms: "required"
		},
		
		
		
		messages: {
			name : {
					required: 'Name is required',
  				},
  
			email: {
				required: 'please enter valid email!',
			    remote: 'email alerady exists  '
			},
			hospitallogo: {
				required: "File must be JPG, GIF or PNG, less than 1MB",
				 accept: "File must be JPG, GIF or PNG, less than 1MB",
			},
			 address: "please enter address",
			location: "please enter location",
			city: "please enter city",
			state: "please enter state",
			
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
	
	 $("#ihospital_form input[name='landline1[]']").each(function() {
       $(this).rules("add", { required: true ,
	   number: true,
				min: 2,
				max:3
	   });
    });  
 
}); 


 
 
var lcount=1; var mcount=1; var fcount=1;  var opdcount=1;

// Function to add the land line row
function addLand(path)
{
	
	//lcount = lcount + 1;
	lcount= parseInt(document.getElementById('lcount').value) +1;
  	
	var newTr = $('<tr id=landphone'+lcount+'> <td><p>Landline Phone:</p></td>\
      <td width="64" align="right"><input type="text" name="landline1[]"  style="width:50px;"/></td>\
      <td width="50" align="right">\
      	<label for="textfield9"></label>\
        <input type="text" name="landline2[]" style="width:50px;"/>\
        </td>\
      <td width="50" align="right"><input type="text" name="landline3[]" style="width:50px;"/></td>\
      <td width="50" align="right"><input type="text" name="landline4[]"  style="width:50px;"/></td>\
	   <td>	    <a href="javascript:removeLand('+lcount+');" >Remove</a>\
	   </td>      </tr>');
		 
		 
		//var lid = lcount-1;
		  //alert("hi" +lid);
	$('#landphone1').after(newTr);
	document.getElementById('lcount').value= lcount;
	
}

// Function to add the land line row
function addMobile()
{
	 
	mcount = parseInt(document.getElementById('mcount').value) +1;
 	var newTr = $(' <tr id="mobilephone'+mcount+'">\
      <td><p>Mobile'+mcount+':</p></td>\
      <td align="right"><input type="text" name="mobile1[]"   style="width:50px;"/></td>\
      <td align="right"><input type="text" name="mobile2[]"   style="width:50px;"/></td>\
      <td align="right"><input type="text" name="mobile3[]"   style="width:50px;"/></td>\
      <td align="right"><input type="text" name="mobile4[]"   style="width:50px;"/></td> <td>	    <a href="javascript:removeMobile('+mcount+');" >Remove</a>\
	   </td>    </tr>');
        
		var mid = mcount-1;
 
	$('#mobilephone1').after(newTr);
	document.getElementById('mcount').value= mcount;
	
}
 
 // Function to add the land line row
function addFax()
{
	 
	fcount = parseInt(document.getElementById('fcount').value) +1;
 	var newTr = $('<tr id="faxno'+fcount+'">\
      <td><p>Fax:</p></td>\
      <td align="right"><input type="text" name="fax1[]"   style="width:50px;"/></td>\
      <td align="right"><input type="text" name="fax2[]"   style="width:50px;"/></td>\
      <td align="right"><input type="text" name="fax3[]"   style="width:50px;"/></td>\
      <td align="right"><input type="text" name="fax4[]"   style="width:50px;"/></td>\
	  	          <td>	    <a href="javascript: removeFax('+fcount+');" >Remove</a>\
	   </td>      </tr>');
					
  	$('#faxno1').after(newTr);
	document.getElementById('fcount').value= fcount;
	
}
 

// Function to add the opd timings rows
function addOpd(path)
{
	 
 	opdcount = parseInt(document.getElementById('opdcount').value) +1;
 	var newTr = $('<tr id="opd'+opdcount+'" style="height:60px;">\
      <td>OPD Timings '+opdcount+':</td>\
      <td colspan="5" align="right">\
      <label>\
         <select name="opd_day1[]" size="1" >\
		  <option value="" disabled="disabled" selected="selected"> select day</option>\
           <option value="Sunday">Sunday</option>\
          <option value="Monday">Monday</option>\
           <option value="Tuesday">Tuesday</option>\
            <option value="Wednesday">Wednesday</option>\
          <option value="Thursday">Thursday</option>\
          <option value="Friday">Friday</option>\
          <option value="Saturday">Saturday</option>        </select>\
        </label>\
		<label>\
        <select name="day_timing1[]" >\
		<option value="" disabled="disabled" selected="selected">hh</option>\
         <option value="01">1</option>\
          <option value="02">2</option>\
          <option value="03">3</option>\
          <option value="04">4</option>\
          <option value="05">5</option>\
          <option value="06">6</option>\
          <option value="07">7</option>\
          <option value="08">8</option>\
          <option value="09">9</option>\
          <option value="10">10</option>\
          <option value="11">11</option>\
          <option value="12">12</option>\
        </select>\
		</label>\
         <label>\
        <select name="day_timing2[]" >\
           <option value="00">00min</option>\
          <option value="15">15min</option>\
          <option value="30">30min</option>\
          <option value="45">45min</option>\
        </select>\
		</label>\
        <label>\
        <select name="day_timing3[]" >\
          <option>am</option>\
          <option>pm</option>\
        </select>\
        </label>\
      <label>\
        <select name="day_timing4[]" >\
		<option value="" disabled="disabled" selected="selected">hh</option>\
          <option value="01">1</option>\
          <option value="02">2</option>\
          <option value="03">3</option>\
          <option value="04">4</option>\
          <option value="05">5</option>\
          <option value="06">6</option>\
          <option value="07">7</option>\
          <option value="08">8</option>\
          <option value="09">9</option>\
          <option value="10">10</option>\
          <option value="11">11</option>\
          <option value="12">12</option>\
        </select>\
		</label>\
        <label>\
        <select name="day_timing5[]" >\
           <option value="00" selected="selected">00min</option>\
          <option value="15">15min</option>\
          <option value="30">30min</option>\
          <option value="45">45min</option>\
        </select>\
		</label>\
        <label>\
        <select name="day_timing6[]" >\
          <option>am</option>\
          <option>pm</option>\
        </select>\
        </label>\
      </td>\
	  	        <td>	    <a href="javascript:removeOpd('+opdcount+');" >Remove</a>\
	   </td>        </tr>');
  		var opdid = opdcount-1;
 	$('#opd'+opdid).after(newTr);
	document.getElementById('opdcount').value= opdcount;
	
}

//FUNCTION TO REMOVE the opd timings row
function removeOpd($value)
{
	
	 opdcount=document.getElementById('opdcount').value;
	 if(opdcount != 1)
	{
 		$('#opd' + $value).remove();
 		opdcount = opdcount-1;
		document.getElementById('opdcount').value= opdcount;
	}
}

 

//FUNCTION TO REMOVE the land line row
function removeLand($value)
{
	lcount= parseInt(document.getElementById('lcount').value);
	 //intTextBox= document.getElementById('count').value ;
	 if(lcount != 1)
	{
		$('#landphone' + $value).remove();
 		lcount = lcount-1;
		document.getElementById('lcount').value= lcount;
	}
}

//FUNCTION TO REMOVE the mobile line row
function removeMobile($value)
{
 
		mcount = parseInt(document.getElementById('mcount').value) ;
 	 //intTextBox= document.getElementById('count').value ;
	 if(mcount != 1)
	{
		$('#mobilephone' + $value).remove();
 		mcount = mcount-1;
		document.getElementById('mcount').value= mcount;
	}
}

//FUNCTION TO REMOVE the mobile line row
function removeFax($value)
{
	fcount = parseInt(document.getElementById('fcount').value) ;
	
	 //intTextBox= document.getElementById('count').value ;
	  
	 if(fcount != 1)
	{
		$('#faxno' + $value).remove();
 		fcount = fcount-1;
		document.getElementById('fcount').value= fcount;
	}
}