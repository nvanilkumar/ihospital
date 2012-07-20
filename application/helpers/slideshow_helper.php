<?php
// first chek if funciton is already exists or not
if(!function_exists('slideshowimagecount')) {
	// so function demo is not existed //
	function slideshowimagecount($images)
	{
	
		$image = explode('#',$images);
 		$count=sizeof($image)-1;
		return $count;
	}//end of slideshowimagecount
}


//to update the slide show images
if(!function_exists('slideshowimageurl')) {
	// so function demo is not existed //
function slideshowimageurl($images, $imageurl)
	{
	$newimages="";
		$image = explode('#',$images);
		foreach($image as $path)
		{
			
			if($path != $imageurl and strlen($path)>3)
			{
				
				$newimages.=$path."#";
			}//if end
			else
			{
			 
			}
		}//for each
		
		 
 		 
		return $newimages;
	}//end of slideshowimagecount
}//if end