<?php  $version="themes/v1/"; ?>

<script type="text/javascript">var baseUrl = '<?php echo base_url(); ?>';</script>

<script src="<?php echo base_url().$version; ?>js/jquery.js"></script>
<script src="<?php echo base_url().$version; ?>js/jquery.validate.js"></script>
<script src="<?php echo base_url().$version; ?>js/user_registration.js"></script>
<!--<script src="js/email.js"></script>
-->

<link rel="stylesheet" type="text/css" href="<?php echo base_url().$version; ?>css/date_css/jquery.ui.theme.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().$version; ?>css/date_css/jquery.ui.core.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().$version; ?>css/date_css/jquery.ui.datepicker.css"/>
<script src="<?php echo base_url().$version; ?>js/date_jquery/jquery.ui.core.js"></script>
<script src="<?php echo base_url().$version; ?>js/date_jquery/jquery.ui.datepicker.js"></script>
 
<?php
/*include("utils/captcha/captcha.php");
/*$var="";
$var=base_url()."utils/captcha/captcha.php";
$this->load->file($var, true);
*/

$maincat="";
foreach($main as $r)
{
	$maincat.='<option value="'.$r->catid.'" disabled="disabled">'.$r->catname.'</option> ';
		foreach($sub as $record)
		{
			if($record->parentcatid == $r->catid)
		   $maincat.='<option value="'.$record->catid.'" >'.$record->catname.'</option> ';
		}
		
	
}

 
?>

<div class="mainwrap">
<div class="leftpan">.</div>

<div class="midpan">
<div class="datfile">

   <form id="formElem" name="formElem" action="" method="post">
<table width="481" border="0"class="tabledata">
   <tr>
    <td colspan="2" valign="middle" class="td1" id="details">Sign Up &gt; Enter Details</td>
    </tr>
  <tr>
    <td class="td1" >&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="td1">User Type</td>
    <td>
      <p>
       <select id="usertype" name="usertype">
        <option value="">Select a type</option>
        <?php echo $maincat; ?>
       </select>
       <span name="uerror" id="uerror"> </span>
       </p>
     
      </td>
  </tr>
    <tr>
    <td class="td1"><label for="select3">First Name:</label></td>
    <td>
        <select name="select3" id="select3" class="nametitle">
         <option value="Dr" selected="selected">Dr.</option>
        <option value="Mr">Mr.</option>
        <option value="Ms">Ms</option>
      </select>
      <span></span>
      <p>
                            
                               <input id="fname" name="fname"  class="inputname"/>
                                <span > </span>
                 </p>
       
      </td>
  </tr>
  <tr>
    <td class="td1"><p>Last Name:</p></td>
    <td>
    <p>
               
                                 <input id="lname" name="lname" />
                                <span > </span>
                           </p>
  </tr>
  <tr>
    <td class="td1"><p>Date of Birth:</p></td>
    <td class="dateofbirth"><p>
                              
                                <input id="dob" name="dob" type="text" AUTOCOMPLETE=OFF />
                                <span > </span>
                           </p>
                            </td>
  </tr>
  <tr>
    <td class="td1"><p>Gender:</p></td>
    <td>  <p>
                                
                               
                                Male&nbsp;<input type="radio" name="gender" checked  value="male"/> &nbsp; &nbsp;  &nbsp; &nbsp; FeMale&nbsp;<input type="radio" name="gender" value="female"/>
                                <span > </span>
                             </p>
</td>
  </tr>
  <tr>
    <td class="td1"><p>User ID </p></td>
    <td>
     <p>
                           
                                <input id="username" name="username" type="text" value="" />
                                <span id="usr_verify"> </span>
                </p>
    
    </td>
  </tr>
  
  <tr>
    <td class="td1"><p>Primary Email</p></td>
    <td>
     <p>
                           
                                  <input id="email" name="email" type="text" value=""  />
                                <!--<span id="Loading"><img src="images/loader.gif" alt="Ajax Indicator" /></span>-->
                                <span id="email_verify"> </span>
                  </p>
    
   </tr>
  <tr>
    <td class="td1"><p>Password:</p></td>
    <td>
     <p>
                                
                                 <input id="password" name="password" type="password" AUTOCOMPLETE=OFF />
                                <span > </span>
                            </p>
     </td>
  </tr>
  <tr>
    <td class="td1"><p>Password (Confirm):</p></td>
    <td>
    <p>
                          
                                 <input id="repassword" name="repassword" type="password" AUTOCOMPLETE=OFF />
                                <span > </span>
                            </p>
    
     
    </td>
  </tr>
  <tr>
    <td class="td1">Landline Phone:</td>
    <td class="landlinenumber">
    <input type="text" name="landline1" maxlength="2" style="width:30px;" placeholder="91" class="required number"/> 
    <input type="text" name="landline2" maxlength="4" style="width:50px;" placeholder="8888" class="required"/>  
   <input type="text" name="landline3" maxlength="3" style="width:50px;" placeholder="8888" class="required"/>
 <input type="text" name="landline4" maxlength="10" style="width:50px;" placeholder="888" class="required"/>
    <span > </span>
    
    </td>
  </tr>
  <tr>
    <td class="td1" ><label for="cardnumber">Mobile</label></td>
    <td class="mobile">
    
      <p>
      
     
   <input type="text" name="mobile1" maxlength="2" style="width:30px;" placeholder="91" class="required "/> 
  <input type="text" name="mobile2" maxlength="4" style="width:50px;" placeholder="9999"  class="required"/>
  <input type="text" name="mobile3" maxlength="3" style="width:50px;" placeholder="222"  class="required"/> 
  <input type="text" name="mobile4" maxlength="3" style="width:50px;" placeholder="222"  class="required"/>
                                  <span > </span>
                             </p>
    
 <!--   <span style="margin:0px;"><input type="text" value="+91" /></span>
    <span><input type="text" value="9999" /></span>
    <span><input type="text" value="222" /></span>
    <span><input type="text" value="222" /></span>-->
    </td>
  </tr>
  
  <tr>
    <td class="td1" ><label for="cardnumber">Verification Code</label></td>
    <td  >
    
<?php
/*//require_once('recaptchalib.php');
// Get a key from https://www.google.com/recaptcha/admin/create
			$publickey = "6LePAdQSAAAAAOwfEnoJeK4xXg1kByoLasJ7lrTu";
			$privatekey = "6LePAdQSAAAAAKq0BBVzlQbh4BPNwSLH9BLExAdk";

# the response from reCAPTCHA
			$resp = null;
# the error code from reCAPTCHA, if any
			$error = null;

# was there a reCAPTCHA response?
			if (isset($_POST["recaptcha_response_field"])) {
				$resp = $this->recaptcha->recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);

				if ($resp->is_valid) {
					echo "You got it!";
				} else {
					# set the error code so that we can display it
					$error = $resp->error;
				}
			}
			echo $this->recaptcha->recaptcha_get_html($publickey, $error);*/
			?>    
    
 
    </td>
  </tr> 
  
  
  
  <tr>
    <td>&nbsp;</td>
    <td class="button">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left" class="button">
    
    
     <input type="hidden" name="<?php echo $this->csrf->token(); ?>" value="<?php echo $this->csrf->hash(); ?>" />
<!--    <button id="registerButton" type="submit" name="submit">Register</button>
-->    <input type="submit"name="submit" id="registerButton" value="Register" />
    
    </td>
  </tr>
</table>
  </form>
<div class="clear"></div>
</div><!--datfile-->
</div><!--midpanend-->
</div><!--mainwrap-->


  