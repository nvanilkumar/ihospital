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



 var area1, area2;

 //to activate the plugin
function textbox()
{
 	area2 = new nicEditor({fullPanel : true}).panelInstance('overviewarea');
}

function textbox2()
{
	area2 = new nicEditor({fullPanel : true}).panelInstance('facilites');
}
function textbox3()
{
	area2 = new nicEditor({fullPanel : true}).panelInstance('achievements');
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



var box1="";
box1=document.getElementById("overviewarea").value;
//alert("textbox :"+box1);
if (box1==null || box1=="")
{
  alert("please enter the overview " );
  return false;
}

var box2="";
box2=document.getElementById("facilites").value;
//alert("textbox :"+box1);
if (box2==null || box2=="")
{
  alert("please enter facilites data");
  return false;
}




var box="";
box = nicEditors.findEditor('news').getContent();
//alert("textarea :"+box);

 if (box==null || box=="" || box.length<6)
{
  alert("please enter the news field");
  return false;
}




return true;	
}
 
 
</script>	

<div class="mainwrap">
 <?php 
// print_r($record);
 foreach ($record as $row) {
				
 			}//for loop
			
			
//management details data
$managementcountdata="";
$managementdata="";
$managements = explode('#',$row->management);
 	$managementcount=sizeof($managements)-1;
	$mcount=1;
	// echo "count valure :".$ltcount;
	
	foreach ( $managements as  $management)
	{
		//if it's a valid entry
	 	if(strlen($management)>3)
		{
			
			$managementparts = explode('-', $management);
			
			//intial entry keep the total count data
			if($mcount == 1)
			{
				$managementcountdata='
				<a href="javascript:addManagementDetails()" >
				<img src="'.base_url().$version.'images/addbutton.jpg" alt="button"/></a>
<span class="overviewerror"   >  </span>
<input type="hidden" name="managementcount" id="managementcount" value="'.$managementcount.'"/>

				
			  
 			';
			}
			else
			{$managementcountdata="<a href=\"javascript:removeManagementDetails('".$mcount."');\" >Remove</a>";}
			
			$managementdata.='<p class="name1"  id="managementdetails1'.$mcount.'"><label>Name 1:*</label>
<select name="mnametype[]"    class="nametitle">
<option value="Dr" selected="selected">Dr.</option>
<option value="Mr">Mr.</option>
<option value="Ms">Ms</option>
</select>
 <input name="mname[]" id="mname" type="text" value="'.$managementparts[1].'"/>
<span class="overviewerror"   >  </span>
</p>
<p  id="managementdetails2'.$mcount.'"><label>Designation:*</label>  <input name="mdesignation[]" id="mdesignation" value="'.$managementparts[2].'" type="text" />'.$managementcountdata.'
<span class="overviewerror"   >  </span>

</p>
';
			
			
			
			$mcount=$mcount+1;
   		} 
		
	}//for loop for each land line
				
			

//unit details data
$unitcountdata="";//to store the hidden value
$unitdata="";//to loop all the unit values

$units = explode('#',$row->unitdetails);
$unitcount=sizeof($units)-1;
$ucount=1;
	// echo "count valure :".$ltcount;
	
	foreach ( $units as  $unit)
	{
		//if it's a valid entry
	 	if(strlen($unit)>2)
		{
 			$unitparts = explode('-', $unit);
 			//intial entry keep the total count data
			if($ucount == 1)
			{
				$unitcountdata=' <a href="javascript:addUnitDetails()" ><img src="'.base_url().$version.'images/addbutton.jpg" alt="button"/></a>
<input type="hidden" name="unitcount" id="unitcount" value="'.$unitcount.'"/>
			  
 			';
			}
			
			else
			{
				$unitcountdata="<a href='javascript:removeUnitDetails(\"".$ucount."\");' >Remove</a>";
				}
			
			$unitdata.='<p id="unitbeddetails1'.$ucount.'" ><label>Unit Name:</label><input name="uname[]" type="text" value="'.$unitparts[0].'" /></p>
<p id="unitbeddetails2'.$ucount.'" ><label>Unit Beds Number:</label><input name="ubeds[]" type="text" value="'.$unitparts[1].'"/>
'.$unitcountdata.'
</p>
';
			
			
			$ucount=$ucount+1;
   		}
		else if( strlen($unit)<3 And $ucount == 1)
		{
			echo "no records";
			$unitdata.='<p><label>Unit Name:</label><input name="uname[]" type="text" value="" /></p>
<p id="unitbeddetails"><label>Unit Beds Number:</label><input name="ubeds[]" type="text" value=""/>
<a href="javascript:addUnitDetails()" ><img src="'.base_url().$version.'images/addbutton.jpg" alt="button"/></a>
<input type="hidden" name="unitcount" id="unitcount" value="'.$unitcount.'"/>
</p>
';
$ucount=$ucount+1;
		}
		
	}//for loop for each land line
				

			
 
 echo $left_pan; ?> 
<div class="midpan">
 
 <form action="" method="post" name="overview" id="overview"  onsubmit="return overviewvalidation()">
<p ><label>Established:*</label><input name="established" value="<?php echo $row->established;?>" id="established" type="text" />
			<span class="overviewerror" >   </span>
</p>
<br />

<p><label>Total Beds:</label><input name="totalbeds" type="text" value="<?php echo $row->beds;?>"/>

</p>

<?php echo $unitdata;?>


<p><label>Total Doctors:</label><input name="tdoctors" type="text" value="<?php echo $row->totaldoctors;?>"/></p>
<p><label>Total Consultants:</label><input name="tconsultants" type="text" value="<?php echo $row->consultants;?>"/></p>
<p><label>Total Residents:</label><input name="tresidents" type="text" value="<?php echo $row->totalresidents;?>"/></p>
<p><label>Management:</label></p><br />

<?php echo $managementdata;?>
<br />

<div class="facilities"><label>Overview:*</label>
<textarea name="overview" id="overviewarea" cols="" rows=""  ><?php echo $row->overview;?></textarea>
 <span class="overviewerror"   >  </span>
</div>
<p class="facilities">
<label>Facilities:*</label> 
<textarea name="facilites" id="facilites" cols="" rows="" ><?php echo $row->facilities;?></textarea>
<span class="overviewerror"   >  </span>
</p>
<p class="Achievements"><label>Achievements:</label> 
<textarea name="achievements" id="achievements"cols="" rows=""  ><?php echo $row->achievements;?></textarea>
<span class="overviewerror"   >  </span>
</p>
 
 
 <p class="button02 submit cancel"><label></label><span>
 
 <input name="submit" type="submit" value="Submit" id="Submit021" /></span> 
 </p>
 
 
 
</div><!--midpanend-->
</div><!--mainwrap-->