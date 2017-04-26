<!DOCTYPE html>
<html>
<head lang="en-us">
<link rel="stylesheet" type="text/css" href="c.css">
<script src="j.js">	
</script>

</head>
<body>


<form name="myForm" onsubmit="return validateForm()" action="yoga.php" method="post">

<fieldset>
<legend><b><ins>PERSONAL INFORMATION</ins></b></legend>
<table style "width:100%" >
  <tr>
  <td>FIRST NAME:<td>
  <input type="text" name="FIRSTNAME"></td>
  </tr>
  <tr>
  <td>LAST NAME:<td>
  <input type="text" name="LASTNAME"></td>
  </tr>
  <tr>
  <tr>
  <td>SURNAME:<td>
  <input type="text" name="SURNAME"></td>
  </tr>
  <tr>
  
  <td> GENDER:<td>
   <input type="radio" name="GENDER" value="male"> Male
  <input type="radio"  name="GENDER"  value="female"> Female</td>
  </tr>
  <tr>
  <td>CONTACT NO:<td> 
  <input type="NUMBER" name="CONTACT_NUMBER"></td>
  </tr>
  <tr>
  <td>DATE OF BIRTH<td>
  <input type="date" name="DATE_OF_BIRTH"></td>
  </tr>
  <tr>
  <td>CASTE<td>
  <input type="text" name="CASTE"></td>
  </tr>

  <tr>
<td>DEPARTMENT:</td>
</td> 
<td><select name="DEPARTMENT">
<option value="SELECT"> SELECT</option>
<option value="INFORMATION TECHNOLOGY"> INFORMATION TECHNOLOGY </option>
<option value="ELECTRONICS "> ELECTRONICS</option>
<option value="MECHANICAL "> MECHANICAL  </option>


<option value="COMPUTER ENGINEERING"> COMPUTER </option>

</select></td>
</tr>
</table>
<hr>


<table>

<ins><b>QUALIFICATION</b></ins>
<tr>
<td>SPECIALIZATION:</td>

<td><input type="text" name="SPECIALIZATION"></td>
</tr>

<tr>
<td>YEAR OF COMPLETION:</td>
<td><input type="number" name="YEAR_OF_COMPLETION"></td>
</tr>

<tr>
<td>DEGREE:</td>
<td><input type="text" name="DEGREE"></td>
</tr>


<tr> 
<td>UNIVERSITY:</td>
<td><input type="text" name="UNIVERSITY"></td>
</tr>
</table>
<hr>


 <table>
 <ins><b>TECHNICAL SKILLS:</ins></b>
  <tr>
<td>   <input type="checkbox" name="TECHNICAL_SKILLS" value="C"> C</td>
</tr>
<tr>
 <td> <input type="checkbox"  name="TECHNICAL_SKILLS"  value="C++"> C++</td>
 </tr>
 <tr>
  <td><input type="checkbox"  name="TECHNICAL_SKILLS"  value="java"> java</td>
  </tr>
  <tr>
  <td><input type="checkbox"  name="TECHNICAL_SKILLS"  value="web programming "> web programming </td>
  </tr>
  </table>
  <hr>
  <table>
  
  <ins><b>EXTRA ACTIVITES:</ins></b>
  
  <tr>
<td>   <input type="checkbox" name="EXTRA_ACTIVITES" value="IEEE">IEEE</td>
</tr>
<tr>
  <td><input type="checkbox"  name="EXTRA_ACTIVITES"  value="CSI"> CSI</td>
</tr>
<tr>    
  <td><input type="checkbox"  name="EXTRA_ACTIVITES" value="ACM"> ACM</td>
  </tr>
  <tr>
  <td><input type="checkbox"  name="EXTRA_ACTIVITES" value="ACM"> other</td>
  </tr>
 <tr>
 <td> <input type="submit" name="sub" value="SUBMIT">
 </td>
 </tr>




  

  
  
  </form>
  </table>
  </fieldset>
</body>
</html>




<?php
if(isset($_POST['sub']))
{
$fn=$_POST["FIRSTNAME"];
$ln=$_POST["LASTNAME"];
$ln=$_POST["SURNAME"];

$gen=$_POST["GENDER"];



$cn=$_POST["CONTACT_NO"];
$dob=$_POST["DATE_OF_BIRTH"];
$caste=$_POST["CASTE"];

$dept=$_POST["DEPARTMENT"];
$sp=$_POST["SPECIALIZATION"];
$yoc=$_POST["YEAR_OF_COMPLETION"];
$dg=$_POST["DEGREE"];
$un=$_POST["UNIVERSITY"];
$ts=$_POST["TECHNICAL_SKILLS"];
$es=$_POST["EXTRA_ACTIVITES"];


include "connect.php";

$sql = "INSERT INTO personal VALUES('$fn','$ln','$sn','$gen','$cn','$dob','$caste','$dept','$sp','$yoc','$dg','$un','$ts','$es')";
      
		$result = mysqli_query($con,$sql);
		echo "<h2><font color=green>Member successfully added</font></h2>";
}
?>	
