<?php  $this->load->view('common/header'); 
$version="themes/v1/";
?>

<script src="<?php echo base_url().$version; ?>js/jquery.js"></script>
<script src="<?php echo base_url().$version; ?>js/jquery.validate.js"></script>
<script src="<?php echo base_url().$version; ?>js/ihospital.js"></script>


 <div class="mainwrap">
   <?php echo $left_pan; ?> 


<div class="midpan">
  <form action="" method="post" id="ihospital_form" name="ihospital_form" enctype="multipart/form-data">

  <table width="100%" border="0" id="hospitalsnapshot">
  <tr>
      <td colspan="6" class="snapshot">Snapshot &gt; Enter Details</td>
      </tr>
    <tr>
      <td width="55">Name:</td>
      <td colspan="5" align="right"><label for="textfield"></label>
        <input type="text" name="name" id="name" style="width:220px; height:24px" />
        <p id="usr_verify"> </p>
        </td>
        <td width="58"> </td>
      </tr>
      
    <tr id="landphone1">
    
    
      <td><p>Landline Phone:</p></td>
      <td width="50" align="right"><input type="text" name="landline1[]" id="landline11" style="width:50px;"/></td>
      <td width="50" align="right">
      	<label for="textfield9"></label>
        <input type="text" name="landline2[]" id="landline12" style="width:50px;"/>
        </td>
      <td width="50" align="right"><input type="text" name="landline3[]" id="landline13" style="width:50px;"/></td>
      <td width="50" align="right"><input type="text" name="landline4[]" id="landline14" style="width:50px;"/></td>
      <td width="54" align="right">
       <p><a href="javascript:addLand('<?php echo base_url().$version; ?>')" ><img src="<?php echo base_url().$version; ?>images/addbutton.jpg" alt="button"/></a> &nbsp;
       
<!--       <a href="javascript:removeLand();" >Remove</a>
-->       
       </p>  
  <p> 
    <input type="hidden" name="lcount" id="lcount" value="1"/> 
 </p>  
      
      
      </td>
      
      
      
    </tr>
    
   
    
    
    <tr id="mobilephone1">
      <td><p>Mobile:</p></td>
      <td align="right"><input type="text" name="mobile1[]" id="mobile11" style="width:50px;"/></td>
      <td align="right"><input type="text" name="mobile2[]" id="mobile12" style="width:50px;"/></td>
      <td align="right"><input type="text" name="mobile3[]" id="mobile13" style="width:50px;"/></td>
      <td align="right"><input type="text" name="mobile4[]" id="mobile14" style="width:50px;"/></td>
      <td align="right"> 
      <p><a href="javascript:addMobile('<?php echo base_url().$version; ?>')" ><img src="<?php echo base_url().$version; ?>images/addbutton.jpg" alt="button"/></a> &nbsp; </p>  
  <p> 
    <input type="hidden" name="mcount" id="mcount" value="1"/> 
 </p>  
      </td>
    </tr>
    <tr id="faxno1">
      <td><p>Fax:</p></td>
      <td align="right"><input type="text" name="fax1[]" id="fax11" style="width:50px;"/></td>
      <td align="right"><input type="text" name="fax2[]" id="fax12" style="width:50px;"/></td>
      <td align="right"><input type="text" name="fax3[]" id="fax13" style="width:50px;"/></td>
      <td align="right"><input type="text" name="fax4[]" id="fax14" style="width:50px;"/></td>
        <td align="right"> 
      <p><a href="javascript:addFax('<?php echo base_url().$version; ?>')" ><img src="<?php echo base_url().$version; ?>images/addbutton.jpg" alt="button"/></a> &nbsp; </p>  
  <p> 
    <input type="hidden" name="fcount" id="fcount" value="1"/> 
 </p>  
      </td>
     </tr>
    <tr>
      <td><p>Email:</p></td>
      <td colspan="5" align="right">
         <label for="textfield2"></label>
        <input type="text" name="email" id="email" style="width:220px; height:24px"/>
        <p id="email_verify"> </p>
        </td>
      </tr>
    <tr>
      <td height="29"><p>Website:</p></td>
      <td colspan="5" align="right">
        <label for="textfield3"></label>
        <input type="text" name="website" id="website" style="width:220px; height:24px"/>
        </td>
      </tr>
    <tr>
      <td><p>Address:</p></td>
      <td colspan="5" align="right"><label for="textfield4"></label>
        <input type="text" name="address" id="address" style="width:220px; height:24px"/>
        <p id="address_verify"> </p>
        </td>
      </tr>
    <tr>
      <td><p>Locality:</p></td>
      <td colspan="5" align="right"><label for="textfield5"></label>
        <input type="text" name="location" id="location" style="width:220px; height:24px"/>
        <p id="location_verify"> </p>
        </td>
      </tr>
      <tr>
      <td><p>City:</p></td>
      <td colspan="5" align="right">
      	<label for="textfield5"></label>
        <input type="text" name="city" id="city" style="width:220px; height:24px"/>
        <p id="city_verify"> </p>
        </td>
      </tr>
    
    <tr>
      <td><p>State:</p></td>
      <td colspan="5" align="right"><label for="textfield7"></label>
        <input type="text" name="state" id="state" style="width:220px; height:24px"/>
        <p id="state_verify"> </p>
        </td>
      </tr>
      
      <tr>
      <td><p>Country:</p></td>
      <td colspan="5" align="right"><label for="textfield7"></label>
        <input type="text" name="country" id="country" style="width:220px; height:24px"/>
        <p id="state_verify"> </p>
        </td>
      </tr>
      
      
    <tr>
      <td><p>Pin Code:</p></td>
      <td colspan="5" align="right"><label for="textfield8"></label>
      <input type="text" name="pincode" id="pincode" style="width:220px;height:24px"/></td>
      </tr>
      <tr id="opd1" style="height:60px;">
      <td>OPD Timings:</td>
      <td colspan="5" align="right">
      <label>
         <select name="opd_day1[]" size="1" id="opd_day11">
          <option value="" disabled="disabled" selected="selected">day</option>
          <option value="Sunday">Sunday</option>
          <option value="Monday">Monday</option>
           <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
          <option value="Thursday">Thursday</option>
          <option value="Friday">Friday</option>
          <option value="Saturday">Saturday</option>
        </select>
        </label>
		<label>
        <select name="day_timing1[]" id="day_timing11">
          <option value="" disabled="disabled" selected="selected">hh</option>
          <option value="01">1</option>
          <option value="02">2</option>
          <option value="03">3</option>
          <option value="04">4</option>
          <option value="05">5</option>
          <option value="06">6</option>
          <option value="07">7</option>
          <option value="08">8</option>
          <option value="09">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
		</label>
        
        <label>
        <select name="day_timing2[]" id="day_timing12">
		 <option value="00">00min</option>
          <option value="15">15min</option>
          <option value="30">30min</option>
          <option value="45">45min</option>
        </select>
		</label>
        <label>
        <select name="day_timing3[]" id="day_timing13">
          <option>am</option>
          <option>pm</option>
        </select>
        </label>
        
      <label>
        <select name="day_timing4[]" id="day_timing14">
        <option value="" disabled="disabled" selected="selected">hh</option>
           <option value="01">1</option>
          <option value="02">2</option>
          <option value="03">3</option>
          <option value="04">4</option>
          <option value="05">5</option>
          <option value="06">6</option>
          <option value="07">7</option>
          <option value="08">8</option>
          <option value="09">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select>
		</label>
        
        <label>
        <select name="day_timing5[]" id="day_timing15">
		 <option value="00">00min</option>
          <option value="15">15min</option>
          <option value="30">30min</option>
          <option value="45">45min</option>
        </select>
		</label>
        <label>
        <select name="day_timing6[]" id="day_timing16">
          <option>am</option>
          <option>pm</option>
        </select>
        </label>
      </td>
       <td align="right"> 
      <p><a href="javascript:addOpd('<?php echo base_url().$version; ?>')" ><img src="<?php echo base_url().$version; ?>images/addbutton.jpg" alt="button"/></a> &nbsp; </p>  
    
     <p> 
    <input type="hidden" name="opdcount" id="opdcount" value="1"/> 
 </p>
      </td>
            </tr>
      
      <tr>
      <td><p>Fees:</p></td>
      <td colspan="5" align="right">
      <input type="text" name="fees" id="fees" style="width:220px; height:24px"/>
      </td>
      </tr>
      
      <tr>
      <td>Upload Logo:</td>
      <td colspan="5" align="left">
       
           
      <input name="hospitallogo" type="file" class="browse"/>
    <p id="image_error" style="float:right;">  </p>
       
      <?php echo $error; ?>
     
      </td>
      </tr>
      
      
      <tr>
      <td></td>
      <td colspan="5" align="left">
      <input type="hidden" name="<?php echo $this->csrf->token(); ?>" value="<?php echo $this->csrf->hash(); ?>" />
      <input type="submit" name="hsnapshot" id="hsnapshot" value="Validate" style="width:100px; height:30px; margin-left:110px;" />
      
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
</div>

<div class="rightpan">

</div>
</div><!--mainwrapend-->

 