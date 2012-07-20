
<!--   <form action="" method="post" id="ihospital_form" name="ihospital_form" enctype="multipart/form-data">
-->
<?php

 ?>



<script type="text/javascript">


function fiels()
{


 
 		var elem = document.getElementById("filesToUpload");
		var count = document.getElementById("imagescount");
		//alert("count "+count.value);
		//alert("files len : "+ elem.files.length);
   		var imagelength = 6-parseInt(count.value);
		//alert("no of files  : " + imagelength );
		
		
		for (var i = 0; i < elem.files.length; ++ i)
			 {
				
				if(elem.files[i].size > 358400)
				{ 
   					alert("maximum size of each image not more than 350kb");
					return false;
				}
			}
		
		
		//alert("count : " +count.value+"images selected"+imagelength);
		if(imagelength > 0)
		{
  			if(elem.files.length > imagelength)
			{
				
				alert("you can select upto six images only");
				return false;
			}
			else 
			{
				return true;
			}
		}
		else
		{
			alert("you can select upto six images only2");
			return false;
		}
		
			 
			
	// return false;

}
</script>

 <form method="post" action="slideshowinsert" enctype="multipart/form-data" onsubmit="return fiels()">
   <p>
     <input name="userfile[]" id="filesToUpload" type="file" multiple=""  />
     <input type="hidden" value="<?php echo $imagedata['imagecount'];?>" name="imagescount" id="imagescount" />
     
     <input type="hidden" name="<?php echo $this->csrf->token(); ?>" value="<?php echo $this->csrf->hash(); ?>" />
     <input type="submit" value="submit" name="submit"/>
   </p>
   <p>* you can add upto 6 images for a slide show and size of the file not more than 350KB</p>
 </form>
   
 <?php  $images = explode('#',$imagedata['imageurl']);
 
 
 	
 	foreach($images as $image)
	{
		if(strlen($image)>3)
		{
			echo '<img src="'.base_url().$image.'" alt="" width="100" height="100"/>
			<a href="'.base_url("ihospital/deleteimage/".$image).'"> delete </a>
			';
		}
	}//for each
 ?>
 
 		 