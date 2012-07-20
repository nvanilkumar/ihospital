<div class="leftpan">
    <ul>
 <h3>Hospital Snapshot</h3>
 
 <li><?php //echo anchor('ihospital/', 'View');?></li>
<li><?php echo anchor('ihospital/snapshot_edit', 'Edit');?></li>
 
    <li><a href="#">View</a></li>
    <li><a href="#">Edit</a></li>
    <li><a href="#">Send Details</a></li>
 <h3>Doctors</h3>
  	<li><a href="#">View</a></li>
    <li><a href="#">Edit</a></li>
    <li><a href="#">Edit / Delete</a></li>
    <li><a href="#">Send Details</a></li>
<h3>Hospital Overview</h3>
    <li><a href="#">View</a></li>
    <li><a href="#">Edit</a></li>
    <li><a href="#">Send Details</a></li>
<h3>Press Releases</h3>

<li><?php echo anchor('ihospital/pressrelease', 'Add');?></li>
<li><?php echo anchor('ihospital/pressrelease_view', 'View');?></li>

 
<h3>Health Camps</h3>
    <li><a href="#">View</a></li>
    <li><a href="#">Current Camps</a></li>
    <li><a href="#">Past Camps</a></li>
    <li><a href="#">Add</a></li>
    <li><a href="#">Edit / Delete</a></li>
    <li><a href="#">Send Details</a></li>
<h3>Personal Details</h3>
    <li><a href="#">View User Details</a></li>
    <li><a href="#">Edit</a></li>
    <li class="user"><a href="#">User Details</a></li>
    <li><a href="#">Password</a></li>
<h5><a href="#">Log Out</a></h5>
<h4>Search</h4>
    <li>
    
    <table width="100%" border="0">
    <form action="ihospital/snapshot_edit" method="get">
  <tr>
    <td width="48%">Type:</td>
    <td width="52%"><label for="select2"></label>
      <select name="select2" id="select2" style="width:100px;">
        <option>Doctor</option>
      </select></td>
  </tr>
  <tr>
    <td><p>State:</p></td>
    <td><label for="select3"></label>
      <select name="select3" id="select3" style="width:100px;">
        <option>Andhra pradesh</option>
      </select></td>
  </tr>
  <tr>
    <td><p>City:</p></td>
    <td><label for="select4"></label>
      <select name="select4" id="select4" style="width:100px;">
        <option>Hyderabad</option>
      </select></td>
  </tr>
  <tr>
    <td><p>Locality:</p></td>
    <td><label for="select5"></label>
      <select name="select5" id="select5" style="width:100px;">
        <option>Dilsukh Nagar</option>
      </select></td>
  </tr>
  <tr>
    <td></td>
    <td>

      <input type="submit" name="button3" id="button3" value="Search" style="width:100px; background-color:#FF9900; height:30px; color:#fff;"  />
</td>
  </tr>
      </form>
</table>
    </li>
    </ul>
</div>