<?php  $version="themes/v1/"; ?>

<script src="<?php echo base_url().$version; ?>js/jquery.js"></script>
<script src="<?php echo base_url().$version; ?>js/jquery.validate.js"></script>
<script src="<?php echo base_url().$version; ?>js/overview.js"></script>

 
<!--CSS Date Picker files-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/v1/css/date_css/jquery.ui.theme.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/v1/css/date_css/jquery.ui.core.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/v1/css/date_css/jquery.ui.datepicker.css"/>

<script src="<?php echo base_url();?>js/date_jquery/jquery.ui.core.js"></script>
<script src="<?php echo base_url();?>js/date_jquery/jquery.ui.widget.js"></script>
<script src="<?php echo base_url();?>js/date_jquery/jquery.ui.datepicker.js"></script>

<!--JavaScript for Date Picker-->
<script type="text/javascript" language="javascript">
$(function() {
		$("#established").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat : 'dd-mm-yy',
		yearRange: '1960:2020'
 	 });
});
</script>

<script src="<?php echo base_url();?>js/nic_editor/nicEdit.js"></script>
<script type="text/javascript">
	 bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>

<script type="text/javascript">


 var area1, area2, area3;

 //to activate the plugin
function textbox()
{
	 
 	area1 = new nicEditor({fullPanel : 

true}).panelInstance('overviewarea');
}

function textbox2()
{
	area2 = new nicEditor({fullPanel : 

true}).panelInstance('facilites');
}
function textbox3()
{
	area3 = new nicEditor({fullPanel : 

true}).panelInstance('achievements');
}


//to rese the form
function formReset()
{
document.getElementById("pressrelease").reset();
 nicEditors.findEditor('news').setContent('');

 //box = nicEditors.findEditor('news').getContent();
 }
 
//form validation 
function overviewvalidation()
{

		mname = document.getElementsByName("mname[]");
		mdesignation=document.getElementsByName("mdesignation[]");
		
		 if (mname[0].value == "" ) {
			
		 
			document.getElementById("mnameerror").innerHTML="please enter manager name";
 			 
            mname[0].focus();
            return false;
       	}//if for mname
		
		 if (mdesignation[0].value == "" ) {
			
		 
			document.getElementById("mdesignationerror").innerHTML="please enter designation";
 			 
            mdesignation[0].focus();
            return false;
       	}//if for mname
			 
			 
			 
			 
			 

var box1="";
box1=document.getElementById("overviewarea").value;
//alert("textbox :"+box1);
if (box1==null || box1=="")
{
  //alert("please enter the overview " );
  document.getElementById("overviewtexterror").innerHTML="please enter the overview";
  return false;
}

var box2="";
box2=document.getElementById("facilites").value;
//alert("textbox :"+box1);
if (box2==null || box2=="")
{
  //alert("please enter facilites data");
  document.getElementById("facilitestexterror").innerHTML="please enter the facilites";
  return false;
}




var box3="";
box3 = nicEditors.findEditor('overviewarea').getContent();
// alert("textarea :"+box3);

 if (box3==null || box3=="" || box3.length<6)
{
  document.getElementById("overviewtexterror").innerHTML="please enter the overview";
nicEditors.findEditor('overviewarea').focus();
  return false;
}



var box4="";
box4 = nicEditors.findEditor('facilites').getContent();
//alert("textarea :"+box);

 if (box4==null || box4=="" || box4.length<6)
{
  document.getElementById("facilitestexterror").innerHTML="please enter the facilites";
  return false;
}


return true;	
}
 
 
</script>	



<div class="mainwrap">
 <?php echo $left_pan; ?> 
<div class="midpan">
 
 <form action="" method="post" name="overview" id="overview"  onsubmit="return overviewvalidation()">
<p ><label>Established:*</label><input name="established" value="" id="established" type="text" />
			<span class="overviewerror" >   </span>
</p>
<br />

<p><label>Total Beds:</label><input name="totalbeds" type="text" />

</p>
<p><label>Unit Name:</label><input name="uname[]" type="text" /></p>
<p id="unitbeddetails21"><label>Unit Beds Number:</label><input name="ubeds[]" type="text" /> <a href="javascript:addUnitDetails('<?php echo base_url().$version; ?>')" ><img src="<?php echo base_url().$version; ?>images/addbutton.jpg" alt="button"/></a>
<input type="hidden" name="unitcount" id="unitcount" value="1"/>
</p>

<p><label>Total Doctors:</label><input name="tdoctors" type="text" /></p>
<p><label>Total Consultants:</label><input name="tconsultants" type="text" /></p>
<p><label>Total Residents:</label><input name="tresidents" type="text" /></p>
<p><label>Management:</label></p><br />

<p class="name1"><label>Name 1:*</label>
<select name="mnametype[]"    class="nametitle">
<option value="Dr" selected="selected">Dr.</option>
<option value="Mr">Mr.</option>
<option value="Ms">Ms</option>
</select>
 <input name="mname[]" id="mname" type="text" />
<span class="overviewerror"  id="mnameerror"  >  </span>
</p>
<p><label>Designation:*</label>  <input name="mdesignation[]" id="mdesignation" type="text" />
<span class="overviewerror"  id="mdesignationerror" >  </span>
</p>

<p class="name1">
<label>Name 2:</label>
<select name="mnametype[]"  id="select3" class="nametitle">
<option value="Dr" selected="selected">Dr.</option>
<option value="Mr">Mr.</option>
<option value="Ms">Ms</option>
</select>
 <input name="mname[]" type="text" />
<span class="overviewerror"   >  </span>

</p>

<p id="managementdetails21"><label>Designation:</label>  <input name="mdesignation[]" type="text" /><a href="javascript:addManagementDetails('<?php echo base_url().$version; ?>')" ><img src="<?php echo base_url().$version; ?>images/addbutton.jpg" alt="button"/></a>
<span class="overviewerror"   >  </span>
<input type="hidden" name="managementcount" id="managementcount" value="2"/>


</p>
<br />

<div class="facilities">
<label>Overview:*</label><!--onfocus="textbox();"-->
<textarea name="overview" id="overviewarea" cols="" rows="" style="width: 300px; height: 100px; float:right;"   ></textarea>
 <span id="overviewtexterror"   >  </span>
</div>
<div class="facilities">

<label>Facilities:*</label> 
<textarea name="facilites" id="facilites" style="width: 300px; height: 100px;" ></textarea>
 <span id="facilitestexterror"   >  </span>

</div>
<div class="Achievements"><label>Achievements:</label> 
<textarea name="achievements" id="achievements" style="width: 300px; height: 100px;" ></textarea>
<span class="overviewerror"   >  </span>
</div>
 
 
 <p class="button02 submit cancel"><label></label><span>
 
 <input name="submit" type="submit" value="Submit" id="Submit021" /></span> 
 </p>
 
 
 
</div><!--midpanend-->
</div><!--mainwrap-->