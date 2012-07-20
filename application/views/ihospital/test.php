
<!--   <form action="" method="post" id="ihospital_form" name="ihospital_form" enctype="multipart/form-data">
-->
<?php
print_r($files);
?>


<script type="text/javascript">


function fiels()
{
	alert("hi");
		var elem = document.getElementById("filesToUpload");
			
			alert("no of files  : " + elem.files.length);
			
			if(elem.files.length>2)
			return false;
			var names = [];
			
		for (var i = 0; i < elem.files.length; ++ i) {
   			names.push(elem.files[i].name);
			}

}
</script>

 <form method="post" action="" enctype="multipart/form-data" onsubmit="return fiels();">
   <input name="userfile[]" id="filesToUpload" type="file" multiple=""  />
  
  <!-- <input type="file" name="userfile[]" size="20" class="multi" />-->

   <input type="submit" value="submit"/>
   </form>