<?php


include "connect.php";
    
	
$result = $con->query("SELECT * FROM personal");
if ($result->num_rows != 0)  {

  $i=0;
  while($rows = $result->fetch_assoc()){
  $fn=$rows["FIRSTNAME"];
  $ln=$rows["LASTNAME"];
  $sn=$rows["SURNAME"];

  $gen=$rows["GENDER"];



  $cn=$rows["CONTACT_NO"];
  $dob=$rows["DATE_OF_BIRTH"];
  $caste=$rows["CASTE"];

  $dept=$rows["DEPARTMENT"];
  $sp=$rows["SPECIALIZATION"];
  $yoc=$rows["YEAR_OF_COMPLETION"];
  $dg=$rows["DEGREE"];
  $un=$rows["UNIVERSITY"];
  $ts=$rows["TECHNICAL_SKILLS"]; 
  $es=$rows["EXTRA_ACTIVITES"];

  
  echo "<p align='center'> FIRTNAME is : $fn <br>
                           LASTNAME is : $ln <br>
						   SURNAME is  : $sn <br>
						   GENDER is : $gen <br>
						   CONTACT_NO : $cn <br>
						   DATE OF BIRTH :$dob <br>
                            CASTE :$caste <br>

                           DEPARTMENT is : $dept <br>
                            SPECILAIZATION is : $sp <br>
                            YEAR_OF_COMPLETION is: $yoc <br>
                             DEGREE is : $dg <br>
                             UNIVERSSITY is : $un <br>
                          TECHINICAL_SKILLS  is: $ts <br> 
                           EXTRA_ACTIVITES is : $es <br>
						   </p>";
				}
	} else {
	   echo "0 results";
	   }
	   
	   
?>

  
						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
						   