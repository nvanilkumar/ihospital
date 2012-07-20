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
 
 //delete function confirmation
function confirmAction(){
      var confirmed = confirm("Are you sure? You Want To Delete this news.");
      return confirmed;
}
</script>

 
<div class="mainwrap">
 <?php echo $left_pan; ?> 
<div class="midpan">

<?php echo $submit_status; ?>
  <form action="pressrelease" method="post" id="pressrelease" name="pressrelease_form" onsubmit="return pressvalidation()">
<table border="1px;">
   
 
<?php 
$content="";
foreach($recentnews as $row) {
$content.="<tr> 
<td>"	.$row->date."</td> <td> ".$row->newsdetails."</td> 

<td> <a href='".base_url("ihospital/pressrelease_edit/".$row->pressid ) ."'>Edit</a></td> 
<td> <a href='".base_url("ihospital/deletePressRelease/".$row->pressid ) ."' onclick='return confirmAction()'>Delete</a></td>
</tr>"; 
			 
			 
			}//for loop
			
echo $content;
?>


</table>
 
<?php echo $this->pagination->create_links(); ?>


 </div><!--midpanend-->
</div><!--mainwrap-->