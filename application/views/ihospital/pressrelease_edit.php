<?php  $version="themes/v1/"; ?>

<script src="<?php echo base_url().$version; ?>js/jquery.js"></script>
<script src="<?php echo base_url().$version; ?>js/jquery.validate.js"></script>
 
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
		$("#date").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat : 'dd-mm-yy',
		yearRange: '1960:2020'
 	 });
});
</script>



<!-- nice editor files -->
  
<script src="<?php echo base_url().$version;?>js/nicEdit.js"></script>

<script type="text/javascript">

 bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });

 var area1, area2;

 //to activate the plugin
function textbox()
{
	area2 = new nicEditor({fullPanel : true}).panelInstance('news');
}

 
//form validation 
function pressvalidation()
{
	
	var x=document.forms["pressrelease_form"]["date"].value;
	
if (x==null || x=="")
{
  alert("please select the date");
  return false;
}

var box1="";
box1=document.getElementById("news").value;
//alert("textbox :"+box1);
if (box1==null || box1=="")
{
  alert("please enter the news field text box");
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
<?php	

foreach($editdata as $row) {
			}//for loop
?>

<div class="mainwrap">
 <?php echo $left_pan; ?> 
<div class="midpan">

<?php echo $submit_status; ?>
   <form action="" method="post" id="pressrelease" name="pressrelease_form" onsubmit="return pressvalidation()">
<table>

<tr>
<td> Date </td>
<td> News Details </td>
</tr>

<tr>

<td> <input type="text" name="date"  id="date" value="<?php echo $row->date; ?>"/></td>
<td> <textarea name="news" id="news"  ><?php echo $row->newsdetails; ?></textarea> 
 
</td>
</tr>

<tr>
<td>
 <input type="hidden" name="<?php echo $this->csrf->token(); ?>" value="<?php echo $this->csrf->hash(); ?>" />
 <input type="submit" value="submit" name="submit"/>  </td>
</tr>

<tr>

</tr>
 


</table>
 



 </div><!--midpanend-->
</div><!--mainwrap-->