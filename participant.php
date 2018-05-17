<?php
include_once("php/config.php");
//variables
$fname=$_REQUEST['p_name'];
$middle=$_REQUEST['p_m_name'];
$lname=$_REQUEST['p_l_name'];
$address=$_REQUEST['p_address'];
$contact=$_REQUEST['p_contact'];
$education=$_REQUEST['p_education'];
$course=$_REQUEST['p_course'];
$ins=$_REQUEST['p_college'];
$ins_address=$_REQUEST['p_institution'];
$topic=$_REQUEST['p_topic'];
$language=$_REQUEST['p_lang'];



$sql="
INSERT INTO `final_project`.`elocution_competition` (`p_name`, `p_m_name`, `p_l_name`, `p_address`, `p_contact`, `p_education`, `p_course`, `p_college`, `p_institution`, `topic`, `language`) VALUES ('$fname','$middle','$lname','$address','$contact','$education','$course','$ins','$ins_address','$topic','$language')";
if(mysqli_multi_query($conn,$sql) )
	{
echo"record inserted";
//header('location:../index.php');
	}
else
		{
echo"error in inserting:".mysqli_error($conn);

echo "You have not filled data properly please fill it again";
echo "<a href='ec.php'>Form</a>";
		}

	

?>
