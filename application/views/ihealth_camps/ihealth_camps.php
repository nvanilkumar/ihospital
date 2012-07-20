<?php  $version="themes/v1/"; ?>

<script src="<?php echo base_url().$version; ?>js/jquery.js"></script>
<script src="<?php echo base_url().$version; ?>js/jquery.validate.js"></script>
<script src="<?php echo base_url().$version; ?>js/ih_camps.js"></script>

<!--CSS Date Picker files-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/v1/css/date_css/jquery.ui.theme.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/v1/css/date_css/jquery.ui.core.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/v1/css/date_css/jquery.ui.datepicker.css"/>

<!---->
<style type="text/css" >
{
	span{
		color:red;
	}
}
</style>

<!--Jquery Date Picker files-->

<script src="<?php echo base_url();?>js/date_jquery/jquery.ui.core.js"></script>
<script src="<?php echo base_url();?>js/date_jquery/jquery.ui.widget.js"></script>
<script src="<?php echo base_url();?>js/date_jquery/jquery.ui.datepicker.js"></script>

<!--JavaScript for Date Picker-->
<script type="text/javascript" language="javascript">
$(function() {
		$("#date_from").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat : 'dd-mm-yy',
		yearRange: '1960:2020'
 	 });
});
</script>
<script type="text/javascript" language="javascript">
$(function() {
		$("#date_to").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat : 'dd-mm-yy',
		yearRange: '1960:2020'
 	 });
});
</script>


 <div class="mainwrap">
 <?php 
 if(isset($status))
 {
	 echo $status; 
 }
 ?>
  <?php echo $left_pan; ?> 
  


<div class="midpan">

<script src="<?php echo base_url();?>js/nic_editor/nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>

  <form action="" method="post" id="ihealth_camps_form" name="ihealth_camps_form" enctype="multipart/form-data">

  <table width="100%" border="0" id="hospitalsnapshot">
  <tr>
      <td colspan="6" class="snapshot">Health Camps &gt; Add &gt; Enter Details</td>
      </tr>
    <tr>
      <td width="60">Camp Name:</td>
      <td colspan="5" align="right"><label for="textfield"></label>
        <input type="text" name="camp_name" id="camp_name" style="width:220px; height:24px" value=""/>
        <span id="cn_verify"> </span>
        </td>
        <td width="58"> </td>
      </tr>
      
  
  <tr>
      <td width="60">Programmes / Packages :</td>
      </tr>
    
      <tr>
      <td width="60">Programme/ Package</td>
      <td colspan="5" align="right"><label for="textfield"></label>
        <input type="text" name="p_name" id="p_name" style="width:220px; height:24px" value=""/>
        <span id="pp_verify"> </span>
        </td>
        <td width="58"> </td>
      </tr>
   
   <tr>
      <td width="60">Details:</td>
      <td colspan="5" align="right"><label for="textfield"></label>
      <textarea name="details" id="details" style="width:250px;" cols="20" rows="5"></textarea>
		 <span id="details_verify"> </span>
        </td>
        <td width="58"> </td>
      </tr>
    
    <tr id="fees1">
      <td>Fees:</td>
      <td colspan="4" align="right">
        <input type="text" name="fees" id="fees"  value=""/>
        <span id="fs_verify"> </span>
        </td>
        
      <td align="right"> 
      		<p><a href="javascript:addFees('<?php echo base_url().$version; ?>')" ><img src="<?php echo base_url().$version; ?>images/addbutton.jpg" alt="button"/></a> &nbsp;<a href="javascript:removeFees();" >Remove</a></p>  
  			<p><input type="hidden" name="feecount" id="feecount" value="1"/></p>  
      </td>
      </tr>
  
    <tr>
      <td><p>Dates</p></td>
      </tr>
      <tr>
      <td align="center">From:</td>
      <td colspan="5" align="right">
      <input type="text" name="date_from" id="date_from" style="width:220px; height:24px" readonly/>
      </td>
      </tr>
      <tr>
      <td align="center">To:</td>
      <td colspan="5" align="right">
      <input type="text" name="date_to" id="date_to" style="width:220px; height:24px" readonly/>
      </td>
      </tr>
    
    
    <tr>
      <td><p>Times</p></td>
      </tr>
      <tr>
      <td align="center">From:</td>
      <td colspan="5" align="right">

      <select name="time_from_hrs" id="time_from_hrs" style="width:60px; height:24px" title="Hours" alt="Hours">
      <option>HH</option>
      <option>01</option>
      <option>02</option>
      <option>03</option>
      <option>04</option>
      <option>05</option>
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      </select>
      <select name="time_from_mns" id="time_from_mns" style="width:60px; height:24px" title="Minutes">
      <option>00</option>
      <option>15</option>
      <option>30</option>
      <option>45</option>
      </select>
      
      <select name="time_from_ampm" id="time_from_ampm" style="width:60px; height:24px">
      <option>AM</option>
      <option>PM</option>
      </select>
      </td>
      </tr>
      <tr>
      <td align="center">To:</td>
      <td colspan="5" align="right">
    <select name="time_to_hrs" id="time_to_hrs" style="width:60px; height:24px" title="Hours">
      <option>HH</option>
      <option>01</option>
      <option>02</option>
      <option>03</option>
      <option>04</option>
      <option>05</option>
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      
      </select>
      <select name="time_to_mns" id="time_to_mns" style="width:60px; height:24px" title="Minutes">
      <option>00</option>
      <option>15</option>
      <option>30</option>
      <option>45</option>
      
      </select>
      
      <select name="time_to_ampm" id="time_to_ampm" style="width:60px; height:24px">
      <option>AM</option>
      <option>PM</option>
      </select>
      </td>
      </tr>
    
    <tr>
      <td style="width:200px">House and Street Address:</td>
      <td colspan="5" align="right"><label for="textfield4"></label>
        <input type="text" name="address" id="address" style="width:220px; height:24px" value=""/>
        <span id="address_verify"> </span>
        </td>
      </tr>
    <tr>
      <td><p>Locality:</p></td>
      <td colspan="5" align="right"><label for="textfield5"></label>
        <input type="text" name="location" id="location" style="width:220px; height:24px" value=""/>
        <span id="location_verify"> </span>
        </td>
      </tr>
      <tr>
      <td><p>City:</p></td>
      <td colspan="5" align="right">
      	<label for="textfield5"></label>
        <input type="text" name="city" id="city" style="width:220px; height:24px" value=""/>
        <span id="city_verify"> </span>
        </td>
      </tr>
    
    <tr>
      <td><p>State:</p></td>
      <td colspan="5" align="right"><label for="textfield7"></label>
        <input type="text" name="state" id="state" style="width:220px; height:24px" value=""/>
        <span id="state_verify"> </span>
        </td>
      </tr>
      
      <tr>
      <td><p>Country:</p></td>
      <td colspan="5" align="right"><label for="textfield7"></label>
        <input type="text" name="country" id="country" style="width:220px; height:24px" value=""/>
        <span id="state_verify"> </span>
        </td>
      </tr>
      
      
    <tr>
      <td><p>Pin Code:</p></td>
      <td colspan="5" align="right"><label for="textfield8"></label>
      <input type="text" name="pincode" id="pincode" style="width:220px;height:24px" value=""/>
      <span id="pincode_verify"> </span>
      </td>
      </tr>
      
      <tr>
      <td><p>Land Mark:</p></td>
      <td colspan="5" align="right"><label for="textfield8"></label>
      <input type="text" name="land_mark" id="land_mark" style="width:220px;height:24px" value=""/>
      <span id="lm_verify"> </span>
      </td>
      </tr>
      
      <tr id="landline1">
      <td><p>Landline:</p></td>
      <td align="right"><input type="text" name="land11" id="land11" style="width:50px;" class="land1" value="ISD"/></td>
      <td align="right"><input type="text" name="land12" id="land12" style="width:50px;" class="land2" value="STD"/></td>
      <td align="right"><input type="text" name="land13" id="land13" style="width:50px;" class="land3" value="Area code"/></td>
      <td align="right"><input type="text" name="land14" id="land14" style="width:50px;" class="land4" value="Area code"/></td>
      <td align="right"> 
      <p><a href="javascript:addLand('<?php echo base_url().$version; ?>')" ><img src="<?php echo base_url().$version; ?>images/addbutton.jpg" alt="button"/></a> &nbsp;<a href="javascript:removeLand();" >Remove</a></p>  
  <p> 
    <input type="hidden" name="lcount" id="lcount" value="1"/> 
 </p>  
      </td>
    </tr>
      
      <tr id="mobilephone1">
      <td><p>Mobile:</p></td>
      <td align="right"><input type="text" name="mobile11" id="mobile11" style="width:50px;" value="ISD"/></td>
      <td align="right"><input type="text" name="mobile12" id="mobile12" style="width:50px;"/></td>
      <td align="right"><input type="text" name="mobile13" id="mobile13" style="width:50px;"/></td>
      <td align="right"><input type="text" name="mobile14" id="mobile14" style="width:50px;"/></td>
      <td align="right"> 
      <p><a href="javascript:addMobile('<?php echo base_url().$version; ?>')" ><img src="<?php echo base_url().$version; ?>images/addbutton.jpg" alt="button"/></a> &nbsp;<a href="javascript:removeMobile();" >Remove</a></p>  
  <p> 
    <input type="hidden" name="mcount" id="mcount" value="1"/> 
 </p>  
      </td>
    </tr>
    
    <tr id="faxno1">
      <td><p>Fax:</p></td>
      <td align="right"><input type="text" name="fax11" id="fax11" style="width:50px;" value="ISD"/></td>
      <td align="right"><input type="text" name="fax12" id="fax12" style="width:50px;"/></td>
      <td align="right"><input type="text" name="fax13" id="fax13" style="width:50px;"/></td>
      <td align="right"><input type="text" name="fax14" id="fax14" style="width:50px;"/></td>
        <td align="right"> 
      <p><a href="javascript:addFax('<?php echo base_url().$version; ?>')" ><img src="<?php echo base_url().$version; ?>images/addbutton.jpg" alt="button"/></a> &nbsp;<a href="javascript:removeFax();" >Remove</a></p>  
  <p> 
    <input type="hidden" name="fcount" id="fcount" value="1"/> 
 </p>  
      </td>
     </tr>
      
      <tr>
      <td><p>Email:</p></td>
      <td colspan="5" align="right">
         <label for="textfield2"></label>
        <input type="text" name="email" id="email" style="width:220px; height:24px"  value=""/>
        <span id="email_verify"> </span>
        </td>
      </tr>
      
      <tr>
      <td width="60">Notes:</td>
      <td colspan="5" align="right"><label for="textfield"></label>
      <textarea name="notes" id="notes" style="width:250px;" cols="20" rows="5"></textarea>
		 <span id="notes_verify"> </span>
        </td>
        <td width="58"> </td>
      </tr>
      
      <tr>
      <td></td>
      <td colspan="5" align="left">
      <input type="hidden" name="<?php echo $this->csrf->token(); ?>" value="<?php echo $this->csrf->hash(); ?>" />
      <input type="submit" name="ihealth_camps" id="ihealth_camps" value="Submit" style="width:100px; height:30px; margin-left:110px;" />
      
      </td>
      </tr>
      
      <tr>
      <td></td>
      <td colspan="5" align="right"></td>
      </tr>
      
      <tr>
      <td></td>
      <td colspan="5" align="right"></td>
      </tr>
      
      <tr>
      <td></td>
      <td colspan="5" align="right"></td>
      </tr>
    
  </table>
  </form>
</div><!--end of mdpan-->

<div class="rightpan">

</div>
</div><!--mainwrapend-->

 