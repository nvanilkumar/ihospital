<?php $version="themes/v1/"; ?>
<script src="<?php echo base_url().$version; ?>js/jquery.js"></script>
<script src="<?php echo base_url().$version; ?>js/jquery.validate.js"></script>
<script src="<?php echo base_url().$version; ?>js/adddoctors.js"></script>
<div class="mainwrap">

<div class="leftpan">.</div>

<div class="midpan">

<form action="" method="post" id="doctrdetails" name="doctordetails">
<div class="docotoradd">Doctors > Add > Enter Details</div>
<div class="status">
<div class="docsname">
<p class="nametitle">Docs Name*</p>
<p><input name="docname" type="text" id="docname"/>
<span >  </span>
</p>
</div>
<div class="Speciality">
<p class="nametitle">Speciality*</p>
<p><input name="speciality" type="text" id="speciality"/>
<span >  </span>

</p>
</div>
<div class="OPDTimings">
<p class="nametitle01">OPD Timings*</p>
<p class="opd">
<span><img src="<?php echo base_url().$version; ?>images/plushicon.jpg" alt="button"/>
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
    
        <select name="day_timing2[]" id="day_timing12">
		 <option value="00">00min</option>
          <option value="15">15min</option>
          <option value="30">30min</option>
          <option value="45">45min</option>
        </select>
         
        <select name="day_timing3[]" id="day_timing13">
          <option>am</option>
          <option>pm</option>
        </select>
 
        <span class="bottomtimedetails">
 
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
	 
        
    
        <select name="day_timing5[]" id="day_timing15">
		 <option value="00">00min</option>
          <option value="15">15min</option>
          <option value="30">30min</option>
          <option value="45">45min</option>
        </select>
	 
        <select name="day_timing6[]" id="day_timing16">
          <option>am</option>
          <option>pm</option>
        </select>
        
       
     </span>
 <span >  </span>
</p>

</div>

<div class="ContactDetails">
<span class="contact">Contact Details</span>
<span class="phone">Phone

<p class="number">
<span class="line">Land line*</span> 
<span class="icon"><img src="<?php echo base_url().$version; ?>images/plushicon.jpg" alt="button"/></span> 
<span>
<input name="landline1[]" type="text" id="mobile11" value="91" /></span> 
<span class="input04"><input name="landline2[]" id="mobile12" type="text" value="" placeholder="000"/></span>
<span class="input04"><input name="landline3[]" id="mobile13" type="text" value="" placeholder="000"/></span>
<span class="input04"><input name="landline4[]" id="mobile14" type="text" value="" placeholder="0000"/></span>
</p>


<p class="number">
<span class="line">Mobile</span> 
<span class="icon"><img src="<?php echo base_url().$version; ?>images/plushicon.jpg" alt="button"/></span> 
<span><input name="mobile1[]" type="text"  id="mobile11" value="91"/></span> 
<span class="input04"><input name="mobile2[]" type="text" id="mobile12"  value="" placeholder="000"/></span>
<span class="input04"><input name="mobile3[]" type="text" id="mobile13"  value="" placeholder="000"/></span>
<span class="input04"><input name="mobile4[]" type="text" id="mobile14"  value="" placeholder="0000"/></span>
</p>
</span>




<span class="phone1">Email 
<p><input name="email" type="text" id="email" />

<span >  sfd  sdf sdf </span>
</p>
</span>
</div>

</div><!--statusend-->
<div class="clear"></div>

<div class="button02"><input name="Done" type="button" value="Done" id="Done" style="margin:0px;"/> <input name="Reset" type="reset" value="Reset" id="Reset" style="background-color:#993366;" /> <input type="submit" value="submit"  name="submit"/></div>


</form>
<div class="clear"></div>
<!--
<div class="Viewperpage">
<p class="view10">View per page: 10 entries, 15 entries, 25 entries, All</p>
<div class="dname">
<p>Doctor Name</p>
<p class="drabc">Dr. ABC Bhatt</p>
</div>

<div class="Speciality2">
<p class="specilty001">Speciality</p>
<p class="general">General Health / Internal Medicine</p>
</div>

<div class="Timings01">
<p>OPD Timings</p>
<p class="mon">Mon - Sat: 8 am - 4 pm
</p>
</div>

<div class="cdetails">
<p class="topdetails">Contact Details</p>
<p class="pmeaddres">
<span>Phone</span>
<span class="Mobile10">Mobile</span>
<span class="Email10">Email</span>
</p>
<p class="bottomcdtails">
<span class="mobilenumber">+91-9818 000 000</span>
<span class="phonenumber">+91-11-1111 1111</span>
<span class="emailid">info@test.com</span>
</p>
</div>
<div class="clear"></div>
<div class="pagination">Page: 1 | 2 | 3 | 4 | 5 | 6 | Next >></div>
</div>

<div class="button03"><input name="Done" type="button" value="Done" id="Done" style="margin:0px;"/> <input name="Edit" type="reset" value="Edit" id="Edit" style="background-color:#993366;" /></div>


</div> <!--midpanend-->
 


</div>