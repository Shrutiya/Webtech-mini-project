<html>
<head>
	<title>Request an Appointment</title>

</head>
<body>

<?php

session_start();

include "connect.php";

$fullname="";
$firstname="";
$secname="";
$phone="";
$branch="";
$spl="";
$time="";
$errors=array();

/*$sql="SELECT * from appointment WHERE Branch LIKE '%California%' AND App_time LIKE '%10:00am - 12:00am%' ";
$result=$conn->query($sql);
$num=mysqli_num_rows($result);
echo $num."\n";
if($num>0){
	while($row = mysqli_fetch_assoc($result)){
    	foreach($row as $cname => $cvalue){
        	print "$cname: $cvalue\t";
	    	}
	   	 print "\r\n";
		}
	}
else{
	echo "no data";
}*/


if(isset($_POST['book'])){

	$firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
	$secname=mysqli_real_escape_string($conn,$_POST['secondname']);
	$phone = mysqli_real_escape_string($conn,$_POST['mob']);
	$branch =mysqli_real_escape_string($conn,$_POST['branch']);
	$spl=mysqli_real_escape_string($conn,$_POST['speciality']);
	$time=mysqli_real_escape_string($conn,$_POST['time']);
	
	$fullname=$firstname." ".$secname;
	if(empty($fullname)){
		array_push($errors, "Name is required");
	}	
		
	if($branch=='sel'){
		array_push($errors, "Branch is required");
	}
	if(empty($phone)){
		array_push($errors, "Contact is required");
	}
	if($spl=='sel'){
		array_push($errors, "Speciality is required");
	}
	if($time=='sel'){
		array_push($errors, "Time is Required");
	}
	$success="";
	if(count($errors)==0) {
		//$password= md5($pass); //Encrypting password

		//$check="SELECT * FROM appointment WHERE Branch LIKE '%" . $branch . "%' AND App_time LIKE '%". $time ."%' AND SpecialtieSs LIKE '%" . $spl . "%' ";
		$check="SELECT * FROM appointment WHERE Branch  = '$branch' AND App_time = '$time' AND Specialties = '$spl' ";
		$q=mysqli_query($conn,$check);
		$num=mysqli_num_rows($q);
		/*echo $num;
		if($num>0){
			while($row = mysqli_fetch_assoc($q)){
		    	foreach($row as $cname => $cvalue){
		        	print "$cname: $cvalue\t";
		    	}
		   	 print "\r\n";
			}
		}
		else{
			echo "no data";
		}*/

		if($num==0){
			echo "Appointment Request Accepted";
			$sql="INSERT INTO appointment (Sl_no,Name,Mob_no,Branch,App_time,Specialties) VALUES (NULL,'$fullname','$phone','$branch','$time','$spl')";
			// mysqli_query($conn,$sql);
			echo "Appointment Request Accepted";
			if(!mysqli_query($conn,$sql))
			{
	    		die(mysqli_query($conn,$sql));
			}
			else{echo "Appointment Request Accepted";
			 array_push($errors,"Success"); 
			$_SESSION["username"]=$fullname;
			$_SESSION["success"]="Appointment Request Accepted";
			$succes="Appointment Request Accepted";
			header('location:req.php'); //redirect to home page
			echo $success;

		}
		}
		else{
			array_push($errors,"Sorry, no appointment available in the given slot");
		}


}
	if(!$success){
	$arrlength = count($errors);

	for($x = 0; $x < $arrlength; $x++) {
    echo $errors[$x];
    echo "<br>";
}

}
	
}

if(isset($_POST['previous'])){

	$firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
	$secname=mysqli_real_escape_string($conn,$_POST['secondname']);
	$phone = mysqli_real_escape_string($conn,$_POST['mob']);

	$fullname=$firstname." ".$secname;

	if(empty($fullname)){
		array_push($errors, "Name is required");
	}	
		
	
	if(empty($phone)){
		array_push($errors, "Contact is required");
	}

	$success="";
	if(count($errors)==0){

		$check="SELECT * FROM appointment WHERE Name  = '$fullname' AND Mob_no = '$phone' ";
		$q=mysqli_query($conn,$check);
		$num=mysqli_num_rows($q);

		if($num>0){
			while($row = mysqli_fetch_assoc($q)){
		    	foreach($row as $cname => $cvalue){
		        	print "$cname: $cvalue\t";
		    	}
		   	 print "\n";
			}
		}
		else{
			echo "There are no previous appointments registered with this name";
		}
	}
}
session_destroy();




?>
<br><br>

<a href="app.html"><center>Return to main page</center></a>
</body>
</html>