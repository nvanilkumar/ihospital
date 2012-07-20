<?php  $version="themes/v1/"; ?>

<script src="<?php echo base_url().$version; ?>js/jquery.js"></script>
<script src="<?php echo base_url().$version; ?>js/jquery.validate.js"></script>
<script src="<?php echo base_url().$version; ?>js/ih_camps.js"></script>



 <div class="mainwrap">
 <?php 
 if(isset($status))
 {
	 echo $status; 
 }
 ?>
  <?php echo $left_pan; ?> 
  


<div class="midpan">



        <table border="1">
        <tr>
    
        	<th>Camp Name</th>
            <th>Date From</th>
            <th>Date To</th>
            <th>Time from</th>
            <th>Time To</th>
            <th>Land Mark</th>
            <th>Land Phone</th>
            <th>Mobile</th>
            <th>Fax</th>
            <th>Email</th>
            <th>Notes</th>
           

        </tr>
		<?php 
		 if(isset($records)){
		foreach($records as $row)
		{
			
		
		
		$land = explode('#',$row->landline_phone);
		$ln= $land[0];
		
		$mb = explode('#',$row->mobile);
		 $mobile = $mb[0];
		 
		 $fx = explode('#',$row->fax);
		 $fax = $fx[0];
		
		?><tr>
        	<td><?php echo $row->camp_name; ?></td>
            <td><?php echo $row->date_from; ?></td>
            <td><?php echo $row->date_to; ?></td>
            <td><?php echo $row->time_from; ?></td>
            <td><?php echo $row->time_to; ?></td>
            <td><?php echo $row->land_mark; ?></td>
            <td><?php echo $ln;?></td>
            <td><?php echo $mobile; ?></td>
            <td><?php echo $fax ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->notes; ?></td>
            </tr>
  <?php  } }?>
        </table>
        
        
        <?php //echo $this->table->generate($records); ?>
		<?php echo $this->pagination->create_links(); ?>

</div><!--end of mdpan-->

<div class="rightpan">

</div>
</div><!--mainwrapend-->

 