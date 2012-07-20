<?php  $version="themes/v1/"; ?>
<script src="<?php echo base_url().$version; ?>js/jquery.js"></script>
<script src="<?php echo base_url().$version; ?>js/jquery.validate.js"></script>
<script src="<?php echo base_url().$version; ?>js/ihospital.js"></script>

<?php 

		
			foreach ($details as $row)
			{
				   $row->hospital_name;
			}//for loop
			
			foreach ($address as $addrow)
			{
				  // $row->hospital_name;
			}//for loop
			
			
			foreach ($opddetails as $opdrow)
			{
				  // $row->hospital_name;
			}//for loop
			
 			 //land line 
 	
	
	$landdata="";
 	$landlines = explode('#',$row->landline);
 	$ltcount=sizeof($landlines)-1;
	$lcount=1;
	// echo "count valure :".$ltcount;
	
	foreach ( $landlines as  $landline)
	{
	 	if(strlen($landline)>3)
		{
			
			$landparts = explode('-', $landline);
			
			if($lcount == 1)
			{
				$landdata.='
			  <tr id="landphone'.$lcount.'">
      	 <td><p>Landline Phone:</p></td>
      	<td width="50" align="right"><input type="text" name="landline1'.$lcount.'" id="landline1'.$lcount.'" style="width:50px;" value="'.$landparts[0].'"/></td>
     	
		 <td width="50" align="right">
      	<label for="textfield9"></label>
 	    <input type="text" name="landline'.$lcount.'2" id="landline'.$lcount.'2" style="width:50px;" value="'.$landparts[1].'"/>
        </td>
		
      <td width="50" align="right"><input type="text" name="landline'.$lcount.'3" id="landline'.$lcount.'3" style="width:50px;" value="'.$landparts[2].'"/></td>
      <td width="50" align="right"><input type="text" name="landline'.$lcount.'4" id="landline'.$lcount.'4" style="width:50px;" value="'.$landparts[3].'"/></td>
    <td width="54" align="right">
       <p><a href="javascript:addLand(\''.base_url().$version.'\')" ><img src="'.base_url().$version.'images/addbutton.jpg" alt="button"/></a> &nbsp;<a href="javascript:removeLand();" >Remove</a></p>  
  <p> 
    <input type="hidden" name="lcount" id="lcount" value="'.$ltcount.'"/> 
 </p>  
      
      
      </td>
	
	
	 </tr>
 			';
			}
			else
			{
 				$landdata.='
			  <tr id="landphone'.$lcount.'">
      	 <td><p>Landline Phone:</p></td>
      	<td width="50" align="right"><input type="text" name="landline1'.$lcount.'" id="landline1'.$lcount.'" style="width:50px;" value="'.$landparts[0].'"/></td>
     	 <td width="50" align="right">
      	<label for="textfield9"></label>
        <input type="text" name="landline'.$lcount.'2" id="landline'.$lcount.'2" style="width:50px;" value="'.$landparts[1].'"/>
        </td>
      <td width="50" align="right"><input type="text" name="landline'.$lcount.'3" id="landline'.$lcount.'3" style="width:50px;" value="'.$landparts[2].'"/></td>
      <td width="50" align="right"><input type="text" name="landline'.$lcount.'4" id="landline'.$lcount.'4" style="width:50px;" value="'.$landparts[3].'"/></td>
     </tr>
 			';
			}
			
			
			$lcount=$lcount+1;
   		} 
		
	}//for loop for each land line
	
	
	
	
	//mobile data
	
	$mobiledata="";
 	$mobilenos = explode('#',$row->mobile);
 	$mobcount=sizeof($mobilenos)-1;
	$mcount=1;
	
	foreach ( $mobilenos as  $mobileno)
	{
	 	if(strlen($mobileno)>3)
		{
			
			$mobileparts = explode('-', $mobileno);
			
			if($mcount == 1)
			{
				$mobiledata.='
				 <tr id="mobilephone'.$mcount.'">
      <td><p>Mobile:</p></td>
      <td align="right"><input type="text" name="mobile'.$mcount.'1" id="mobile'.$mcount.'1" style="width:50px;" value="'.$mobileparts[0].'"/></td>
      <td align="right"><input type="text" name="mobile'.$mcount.'2" id="mobile'.$mcount.'2" style="width:50px;" value="'.$mobileparts[1].'"/></td>
      <td align="right"><input type="text" name="mobile'.$mcount.'3" id="mobile'.$mcount.'3" style="width:50px;" value="'.$mobileparts[2].'"/></td>
      <td align="right"><input type="text" name="mobile'.$mcount.'4" id="mobile'.$mcount.'4" style="width:50px;" value="'.$mobileparts[3].'"/></td>
      <td align="right"> 
      <p><a href="javascript:addMobile(\''.base_url().$version.'\')" ><img src="'.base_url().$version.'images/addbutton.jpg" alt="button"/></a> &nbsp;<a href="javascript:removeMobile();" >Remove</a></p>  
  <p> 
    <input type="hidden" name="mcount" id="mcount" value="'.$mobcount.'"/> 
 </p>  
      </td>
    </tr>
				';
			}
			else
			{
				
					$mobiledata.='
				 <tr id="mobilephone'.$mcount.'">
      <td><p>Mobile:</p></td>
      <td align="right"><input type="text" name="mobile'.$mcount.'1" id="mobile'.$mcount.'1" style="width:50px;" value="'.$mobileparts[0].'"/></td>
      <td align="right"><input type="text" name="mobile'.$mcount.'2" id="mobile'.$mcount.'2" style="width:50px;" value="'.$mobileparts[1].'"/></td>
      <td align="right"><input type="text" name="mobile'.$mcount.'3" id="mobile'.$mcount.'3" style="width:50px;" value="'.$mobileparts[2].'"/></td>
      <td align="right"><input type="text" name="mobile'.$mcount.'4" id="mobile'.$mcount.'4" style="width:50px;" value="'.$mobileparts[3].'"/></td>
        </tr>
				';
			}
			
			$mcount=$mcount+1;
		}
	}//for each for mobile
	
	
	
	//fax data
	
	
	$faxdata="";
 	$faxnos = explode('#',$row->fax);
 	$faxcounts=sizeof($faxnos)-1;
	$faxcount=1;
	
	foreach ( $faxnos as  $faxno)
	{
	 	if(strlen($faxno)>3)
		{
			
			$faxparts = explode('-', $faxno);
			
			if($faxcount == 1)
			{
				$faxdata.='<tr id="faxno'.$faxcount.'">
      <td><p>Fax:</p></td>
      <td align="right"><input type="text" name="fax'.$faxcount.'1" id="fax'.$faxcount.'1" style="width:50px;" value="'.$faxparts[0].'"/></td>
      <td align="right"><input type="text" name="fax'.$faxcount.'2" id="fax'.$faxcount.'2" style="width:50px;" value="'.$faxparts[1].'"/></td>
      <td align="right"><input type="text" name="fax13" id="fax'.$faxcount.'3" style="width:50px;" value="'.$faxparts[2].'"/></td>
      <td align="right"><input type="text" name="fax'.$faxcount.'4" id="fax'.$faxcount.'4" style="width:50px;" value="'.$faxparts[3].'"/></td>
        <td align="right"> 
     <p><a href="javascript:addFax(\''.base_url().$version.'\')" ><img src="'.base_url().$version.'images/addbutton.jpg" alt="button"/></a> &nbsp;<a href="javascript:removeFax();" >Remove</a></p>  
  <p> 
  <p> 
    <input type="hidden" name="fcount" id="fcount" value="'.$faxcounts.'"/> 
 </p>  
      </td>
     </tr>
				';
			}
			else
			{
            $faxdata.='<tr id="faxno'.$faxcount.'">
      <td><p>Fax:</p></td>
      <td align="right"><input type="text" name="fax'.$faxcount.'1" id="fax'.$faxcount.'1" style="width:50px;" value="'.$faxparts[0].'"/></td>
      <td align="right"><input type="text" name="fax'.$faxcount.'2" id="fax'.$faxcount.'2" style="width:50px;" value="'.$faxparts[1].'"/></td>
      <td align="right"><input type="text" name="fax'.$faxcount.'3" id="fax'.$faxcount.'3" style="width:50px;" value="'.$faxparts[2].'"/></td>
      <td align="right"><input type="text" name="fax'.$faxcount.'4" id="fax'.$faxcount.'4" style="width:50px;" value="'.$faxparts[3].'"/></td>
       
     </tr>
				';
			}
		}
		$faxcount=$faxcount+1;
	}//for each for fax
	
	
	//for opd timings
 	$totalopddaytimescounts="";
	//print_r($opdrow);exit();
  	$day="";
	$opddata="";
	 
	 $totaldays=$opdrow->monday.'@'.$opdrow->tuesday.'@'.$opdrow->wednesday.'@'.$opdrow->thursday.'@'.$opdrow->friday.'@'.$opdrow->saturday.'@'.$opdrow->sunday;
	  $totaldays=explode('@',$totaldays);
	
	//print_r($totaldays);
	//count the no of time periods
	$opddaytimescount=1;
	 
	 
	 for($i=0;$i<7;$i++)
		{
  			 if(strlen($totaldays[$i])>4)
			{
 				 $opddaytimes=explode('#',$totaldays[$i]);
 			echo	$totalopddaytimescounts+= sizeof( $opddaytimes)-1;
			}
		}
		 
	//
 	  for($i=0;$i<7;$i++)
		{
 		 	 
 			  //echo "<br />".$i.":".strlen($totaldays[$i]).":";
			 if(strlen($totaldays[$i])>4)
			{
				//echo " Period : ".$totaldays[$i] ."<br />";
				 $opddaytimes=explode('#',$totaldays[$i]);
 				//$totalopddaytimescounts+= sizeof( $opddaytimes)-1;
		 
				if($i==0)
				{$day="Monday";}
				else if($i==1)
				{$day="Tuesday";}
				else if($i==2)
				{$day="Wednesday";}
				else if($i==3)
				{$day="Thursday";}
				else if($i==4)
				{$day="Friday";}
				else if($i==5)
				{$day="Saturday";}
				else if($i==6)
				{$day="Sunday";  }
				else
				{$day="";}
			 
 		 
	 
	 //echo $totalopddaytimescounts."hi";
	 //echo "The time period  :".$day.": ". $opddaytimes = $daysdata;
	 
 	  //$opddaytimescounts=sizeof($opddaytimes)-1;
	  
	  foreach ( $opddaytimes as  $opddaytime )
	{
	 	if(strlen($opddaytime)>3)
		{
 			$opddaytime= explode('/', $opddaytime);
 			$opddaytimepartsstart = explode('-', $opddaytime[0]);
			$opddaytimepartsend = explode('-', $opddaytime[1]);
  			//hidden field value for opd count variable
			if($opddaytimescount == 1)
			{
				$opdcountdata= ' <td align="right"> 
				<p><a href="javascript:addOpd(\''.base_url().$version.'\')" ><img src="'.base_url().$version.'images/addbutton.jpg" alt="button"/></a> &nbsp;<a href="javascript:removeOpd();" >Remove</a></p>  
				
      
  <p> 
    <input type="hidden" name="opdcount" id="opdcount" value="'.$totalopddaytimescounts.'"/> 
 </p>  
      </td>	';
			}
			else
			$opdcountdata="";
			
 					$opddata.='
		 <tr id="opd'.$opddaytimescount.'" style="height:60px;">
      <td>OPD Timings:</td>
      <td colspan="5" align="right">
      <label>
         <select name="opd_day'.$opddaytimescount.'1" size="1" id="opd_day'.$opddaytimescount.'1">
          <option value="'.$day.'"  selected="selected"> '.$day.'</option>
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
        <select name="day_timing'.$opddaytimescount.'1" id="day_timing'.$opddaytimescount.'1">
          <option value="'.$opddaytimepartsstart[0].'"  selected="selected"> '.$opddaytimepartsstart[0].'</option>
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
        <select name="day_timing'.$opddaytimescount.'2" id="day_timing'.$opddaytimescount.'2">
	    <option value="'.$opddaytimepartsstart[1].'"  selected="selected"> '.$opddaytimepartsstart[1].'</option>
		 <option value="00">00min</option>
          <option value="15">15min</option>
          <option value="30">30min</option>
          <option value="45">45min</option>
        </select>
		</label>
        <label>
        <select name="day_timing'.$opddaytimescount.'3" id="day_timing'.$opddaytimescount.'3">
	 <option value="'.$opddaytimepartsstart[2].'"  selected="selected"> '.$opddaytimepartsstart[2].'</option>
           <option>AM</option>
          <option>PM</option>
        </select>
        </label>
        
      <label>
        <select name="day_timing'.$opddaytimescount.'4" id="day_timing'.$opddaytimescount.'4">
          <option value="'.$opddaytimepartsend[0].'"  selected="selected"> '.$opddaytimepartsend[0].'</option>
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
        <select name="day_timing'.$opddaytimescount.'5" id="day_timing'.$opddaytimescount.'5">
   <option value="'.$opddaytimepartsend[1].'"  selected="selected"> '.$opddaytimepartsend[1].'</option>
 		 <option value="00">00min</option>
          <option value="15">15min</option>
          <option value="30">30min</option>
          <option value="45">45min</option>
        </select>
		</label>
        <label>
        <select name="day_timing'.$opddaytimescount.'6" id="day_timing'.$opddaytimescount.'6">
		          <option value="'.$opddaytimepartsend[2].'"  selected="selected"> '.$opddaytimepartsend[2].'</option>
           <option>AM</option>
          <option>PM</option>
        </select>
        </label>
      </td>
     '.$opdcountdata.'
            </tr>
	';	 
				$opddaytimescount=$opddaytimescount+1;
 
		}//if
 	}//for each for in a day*/
	
	
	
	 }//if for day value enter
 	else
		{
				  
				
		 }  
	
	  }//for each for days* 
	
	
	/* 
	$opdrow->tuesday
	$opdrow->wednesday
	$opdrow->thursday
	$opdrow->friday
	$opdrow->saturday
	$opdrow->sunday
	 */
	
	


 


//echo $hospital_name; ?>

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
        <input type="text" name="name" id="name" style="width:220px; height:24px" value="<?php echo $row->hospital_name;?>"/>
        <span id="usr_verify"> </span>
        </td>
        <td width="58"> </td>
      </tr>
      
   <!-- <tr id="landphone1">
    
    
      <td><p>Landline Phone:</p></td>
      <td width="50" align="right"><input type="text" name="landline11" id="landline11" style="width:50px;"/></td>
      <td width="50" align="right">
      	<label for="textfield9"></label>
        <input type="text" name="landline12" id="landline12" style="width:50px;"/>
        </td>
      <td width="50" align="right"><input type="text" name="landline13" id="landline13" style="width:50px;"/></td>
      <td width="50" align="right"><input type="text" name="landline14" id="landline14" style="width:50px;"/></td>
      <td width="54" align="right">
       <p><a href="javascript:addLand('<?php //echo base_url().$version; ?>')" ><img src="<?php //echo base_url().$version; ?>images/addbutton.jpg" alt="button"/></a> &nbsp;<a href="javascript:removeLand();" >Remove</a></p>  
  <p> 
    <input type="hidden" name="lcount" id="lcount" value="1"/> 
 </p>  
      
      
      </td>
      
      
      
    </tr>-->
    <?php echo $landdata; 
	
		echo $mobiledata;
		echo $faxdata;
		
	 
	?>
   
    
    
   <!-- <tr id="mobilephone1">
      <td><p>Mobile:</p></td>
      <td align="right"><input type="text" name="mobile11" id="mobile11" style="width:50px;"/></td>
      <td align="right"><input type="text" name="mobile12" id="mobile12" style="width:50px;"/></td>
      <td align="right"><input type="text" name="mobile13" id="mobile13" style="width:50px;"/></td>
      <td align="right"><input type="text" name="mobile14" id="mobile14" style="width:50px;"/></td>
      <td align="right"> 
      <p><a href="javascript:addMobile('<?php //echo base_url().$version; ?>')" ><img src="<?php //echo base_url().$version; ?>images/addbutton.jpg" alt="button"/></a> &nbsp;<a href="javascript:removeMobile();" >Remove</a></p>  
  <p> 
    <input type="hidden" name="mcount" id="mcount" value="1"/> 
 </p>  
      </td>
    </tr>-->
    <!--<tr id="faxno1">
      <td><p>Fax:</p></td>
      <td align="right"><input type="text" name="fax11" id="fax11" style="width:50px;"/></td>
      <td align="right"><input type="text" name="fax12" id="fax12" style="width:50px;"/></td>
      <td align="right"><input type="text" name="fax13" id="fax13" style="width:50px;"/></td>
      <td align="right"><input type="text" name="fax14" id="fax14" style="width:50px;"/></td>
        <td align="right"> 
      <p><a href="javascript:addFax('<?php //echo base_url().$version; ?>')" ><img src="<?php //echo base_url().$version; ?>images/addbutton.jpg" alt="button"/></a> &nbsp;<a href="javascript:removeFax();" >Remove</a></p>  
  <p> 
    <input type="hidden" name="fcount" id="fcount" value="1"/> 
 </p>  
      </td>
     </tr>-->
    <tr>
      <td><p>Email:</p></td>
      <td colspan="5" align="right">
         <label for="textfield2"></label>
        <input type="text" name="email" id="email" style="width:220px; height:24px"  value="<?php echo $row->email;?>"/>
        <span id="email_verify"> </span>
        </td>
      </tr>
    <tr>
      <td height="29"><p>Website:</p></td>
      <td colspan="5" align="right">
        <label for="textfield3"></label>
        <input type="text" name="website" id="website" style="width:220px; height:24px" value="<?php echo $row->website;?>"/>
        </td>
      </tr>
    <tr>
      <td><p>Address:</p></td>
      <td colspan="5" align="right"><label for="textfield4"></label>
        <input type="text" name="address" id="address" style="width:220px; height:24px" value="<?php echo $addrow->address;?>"/>
        <span id="address_verify"> </span>
        </td>
      </tr>
    <tr>
      <td><p>Locality:</p></td>
      <td colspan="5" align="right"><label for="textfield5"></label>
        <input type="text" name="location" id="location" style="width:220px; height:24px" value="<?php echo $addrow->area;?>"/>
        <span id="location_verify"> </span>
        </td>
      </tr>
      <tr>
      <td><p>City:</p></td>
      <td colspan="5" align="right">
      	<label for="textfield5"></label>
        <input type="text" name="city" id="city" style="width:220px; height:24px" value="<?php echo $addrow->city;?>"/>
        <span id="city_verify"> </span>
        </td>
      </tr>
    
    <tr>
      <td><p>State:</p></td>
      <td colspan="5" align="right"><label for="textfield7"></label>
        <input type="text" name="state" id="state" style="width:220px; height:24px" value="<?php echo $addrow->state;?>"/>
        <span id="state_verify"> </span>
        </td>
      </tr>
      
      <tr>
      <td><p>Country:</p></td>
      <td colspan="5" align="right"><label for="textfield7"></label>
        <input type="text" name="country" id="country" style="width:220px; height:24px" value="<?php echo $addrow->country;?>"/>
        <span id="state_verify"> </span>
        </td>
      </tr>
      
      
    <tr>
      <td><p>Pin Code:</p></td>
      <td colspan="5" align="right"><label for="textfield8"></label>
      <input type="text" name="pincode" id="pincode" style="width:220px;height:24px" value="<?php echo $addrow->pincode;?>"/></td>
      </tr>
      <?php
      
      echo $opddata;
	?>
      
      <!--<tr id="opd1" style="height:60px;">
      <td>OPD Timings:</td>
      <td colspan="5" align="right">
      <label>
         <select name="opd_day11" size="1" id="opd_day11">
          <option value="" disabled="disabled" selected="selected"> Select day</option>
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
        <select name="day_timing11" id="day_timing11">
          <option value="" disabled="disabled" selected="selected"> Select time</option>
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
        <select name="day_timing12" id="day_timing12">
		 <option value="00">00min</option>
          <option value="15">15min</option>
          <option value="30">30min</option>
          <option value="45">45min</option>
        </select>
		</label>
        <label>
        <select name="day_timing13" id="day_timing13">
          <option>AM</option>
          <option>PM</option>
        </select>
        </label>
        
      <label>
        <select name="day_timing14" id="day_timing14">
        <option value="" disabled="disabled" selected="selected"> Select time</option>
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
        <select name="day_timing15" id="day_timing15">
		 <option value="00">00min</option>
          <option value="15">15min</option>
          <option value="30">30min</option>
          <option value="45">45min</option>
        </select>
		</label>
        <label>
        <select name="day_timing16" id="day_timing16">
          <option>AM</option>
          <option>PM</option>
        </select>
        </label>
      </td>
       <td align="right"> 
      <p><a href="javascript:addOpd('<?php echo base_url().$version; ?>')" ><img src="<?php echo base_url().$version; ?>images/addbutton.jpg" alt="button"/></a> &nbsp;<a href="javascript:removeOpd();" >Remove</a></p>  
  <p> 
    <input type="hidden" name="opdcount" id="opdcount" value="1"/> 
 </p>  
      </td>
            </tr>
            -->
            
      
      <tr>
      <td><p>Fees:</p></td>
      <td colspan="5" align="right">
      <input type="text" name="fees" id="fees" style="width:220px; height:24px" value="<?php echo $row->fees;?>"/>
      </td>
      </tr>
      
      <tr>
      <td>Upload Logo:</td>
      <td colspan="5" align="left">
       
           
     <input name="hospitallogo" type="file" class="browse"/>
    	<span id="image_error" style="float:right;">  </span>
       
      <?php //echo $error; ?>
      <img src="<?php echo base_url().$row->photourl ?>" alt="hospital logo" width="100px" height="100px"/>
     
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
</div><!--end of mdpan-->

<div class="rightpan">

</div>
</div><!--mainwrapend-->

 