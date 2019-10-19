<html>
<link href="./bootstrap.css" rel="stylesheet">

<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container">
<form class ="form-group" action="" method="post" width="100%">
First Name:<br>
<input type="text" name="name" placeholder="Enter your First Name" required><br>

Last Name:<br>
<input type="text" name="lname" placeholder="Enter your First name" required><br>
	
Email id:<br>
<input type="text" name="eid" placeholder="Enter your Email ID" required><br>

College Name:<br>
<input type="text" name="cn" placeholder="Enter your College Name" required><br>

Branch:<br>
<select placeholder="Select Your Branch" onchange="yesnoCheck()" name="branch">
    <option id="yesCheck" value="e">---Select Your Branch---</option>
    <option value="comp">Computer</option>
    <option value="it">IT</option>
    <option value="entc">E&TC</option>
    <option value="mech">Mechanical</option>
</select>
<br>


<div id="ifYes" style="display: none;">
    
Event:<br>
<select class="form-group" name='eve'>
  <optgroup label="Computer">
    <option value="Event1">Event1</option>
    <option value="Event2">Event2</option>
    <option value="Event1">Event1</option>
    <option value="Event2">Event2</option>
  </optgroup>
</select>
<br>
<select class="form-group" onchange="yesnoCheck(this);>
  <optgroup label="IT">
    <option value="Event1">Event1</option>
    <option value="Event2">Event2</option>
    <option value="Event1">Event1</option>
    <option value="Event2">Event2</option>
  </optgroup>
</select>
<br>
<select class="form-group">
  <optgroup label="E&TC">
    <option value="Event1">Event1</option>
    <option value="Event2">Event2</option>
    <option value="Event1">Event1</option>
    <option value="Event2">Event2</option>
  </optgroup>
</select>
<br>
<select class="form-group">
  <optgroup label="Mechanical">
    <option value="Event1">Event1</option>
    <option value="Event2">Event2</option>
    <option value="Event1">Event1</option>
    <option value="Event2">Event2</option>
  </optgroup>
</select>
<br>
<select class="form-group">
  <optgroup label="Fun Events">
  <option value="Event1">Event1</option>
  <option value="Event2">Event2</option>
  <option value="Event1">Event1</option>
  <option value="Event2">Event2</option>
  </optgroup>
</select>
</div>
<br>
<button class="btn btn-default btn-success" button-action="submit">Submit</button>
</form>
</div>

</body>

<script type="text/javascript">
function yesnoCheck(that) {
    if (that.value == "comp") {
  alert("check");
        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
}
</script>
 
</html> 

<?php
$data1 = $_POST['name'];
$data2 = $_POST['lname']; 
$data3 = $_POST['phn'];
$data4 = $_POST['eid'];
$data5 = $_POST['cn'];
$data6 = $_POST['eve']; 
$data7 = $_POST['branch'
$output=shell_exec("python test.py $data1 $data2 $data3 $data4 $data5 $data6");

echo $output;

?>

