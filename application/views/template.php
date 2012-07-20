<?php  
$version="themes/v1/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<!--         css files / Jquery Files    -->
<link rel="stylesheet" href="<?php echo base_url().$version; ?>css/style.css"  media="screen"/>

</head>

	<body>

<div class="main">

<div class="header">
<div class="topheader">
<div class="logo">

<img src="<?php echo base_url(); ?>themes/v1/images/logo.jpg" alt="logo"/>
<p>IHiS</p>
</div>

<div class="username">

<table width="100%" border="0" style="color:#FFF;">
  <tr>
    <td colspan="2" style="background-color:#993366; height:20px;">&nbsp;User Name
</td>
    </tr>
  <tr>
    <td width="52%" style="background-color:#ff9900; text-align:center; color:#fff; height:20px;"><a href="#">Profile</a></td>
    <td width="48%" style="background-color:#ff9900; color:#fff; text-align:center;"><a href="#">Log Out</a></td>
  </tr>
  <tr>
    <td colspan="2" style="color:#000; font-family:Arial, Helvetica, sans-serif; font-size:12px; letter-spacing:0px; height:20px;"><p>For Mobile Users</p></td>
    </tr>
  <tr>
    <td colspan="2" style="color:#000; font-family:Arial, Helvetica, sans-serif; font-size:11px; letter-spacing:0px; height:20px;"><p>Follow Us: StumbleOn, LinkedIn, Digg It</p></td>
    </tr>
</table>
<br />
</div>
</div><!--topheaderend-->

<div class="navigation">
    <ul>
    <li><a href="#">Home</a></li>
    <li style="width:135px;"><a href="#">About the Project</a></li>
    <li><a href="#">Research </a></li>
    <li><a href="#">Forums </a></li>
    <li><a href="#">Health</a></li>
    <li><a href="#">Feedback</a></li>
    <li><a href="#">FAQ</a></li>
    </ul>
</div><!--navigationend-->

</div><!--headerend-->
<div class="othercontent">

<?php echo $content; ?>

</div>
<div class="clear"></div>
<div class="footer">
<p><a href="#">About the Company</a> |<a href="#"> Partnerships</a> | <a href="#">Contact Us</a> |<a href="#"> Disclaimer</a> |<a href="#"> Privacy Policy </a>| <a href="#"> Terms of Use</a></p>
<p>Copyright: IHuS Research Private Limited</p>
</div>

</div><!--main-->


</body>
</html>