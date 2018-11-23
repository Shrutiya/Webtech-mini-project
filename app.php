<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bmi</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="intro.css">
	<style>
	
	div.transbox {
	  margin: 30px;
	  background-color: #ffffff;
	  border: 5px solid #39b54a;
	  opacity: 1;
	  filter: alpha(opacity=60); /* For IE8 and earlier */
	}

	</style>
</head>
	<body>



		

		<marquee scrollamount="2" class="marqueeTxt">As per the GOI circular on price capping of Orthopaedic Knee implant by NPPA(National Pharmaceutical Pricing Authority), new prices of knee implants have been implemented effective 16th August 2017. For details on knee implant pricing across our hospitals. | As per GOI’s circular dated 02nd April 2018 on price-capping of stents by NPPA(National Pharmaceutical Pricing Authority), new prices of coronary stents are revised with effect from 01st April, 2018. For details on stent pricing.</marquee>
    
		<img src="http://i68.tinypic.com/okbsjm.png" border="0" alt="Image and video hosting by TinyPic" style="margin: 20px 100px">
		<div style="float:right; padding-right: 40px; padding-top:40px;">
		<div align="justify" ><!-- Trigger/Open The Modal -->

    <button style="height: 50px;font-size:20px;color: white;background-color:#39b54a;" id="myBtn">Emergency Contact Numbers</button><br><br>
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div style="font-size: 30px;">
    <p align="middle" style="font-size: 30px;font-family:Josefin Sans;color: #39b54a;">EMERGENCY CONTACT NUMBERS</p>
      <table border="3" bordercolor="green" cellpadding="10" cellspacing="2" align="center" >
        <tr align="center">
            <td><b>Place</b></td>
            <td><b>Number</b></td>
        </tr>
        <tr align="center">
            <td>California</td>
            <td>105010</td>
        </tr>
        <tr align="center">
            <td>Seattle</td>
            <td>080-23004150</td>
        </tr>
        <tr align="center">
            <td>Las Vegas</td>
            <td>080-23014444</td>
        </tr>
        <tr align="center">
            <td>Colorado</td>
            <td>022-41114111</td>
        </tr>
        <tr align="center">
            <td>Washington DC</td>
            <td>044-49334933</td>
        </tr>
        <tr align="center">
            <td>Los Angeles</td>
            <td>01892242560</td>
        </tr>
        <tr align="center">
            <td>Pennysylvania</td>
            <td>0120 - 2400444</td>

        </tr>
        <tr align="center">
            <td>Texas</td>
            <td>0124 - 4213333</td>
        </tr>
        <tr align="center">
            <td>Arizona</td>
            <td>011-42254000</td>
        </tr>
        <tr align="center">
            <td>New York</td>
            <td>088 28074040</td>
        </tr>

    </table><br><br></p>
  </div>
</div>
</div>
</div>

		</div>




<div class="bs-example">
    <nav id="myNavbar" class="navbar navbar-default" role="navigation" style="background-color: #39b54a;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><font color="white">Grey's</font></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="first.html"><font color="white">Home</font></a></li>
                    <li><a href="about.html"><font color="white">About</font></a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><font color="white">Specialities</font><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="cardio.html">Cardiology</a></li>
                            <li><a href="neuro.html">Neurology</a></li>
                            <li><a href="general.html">General Surgery</a></li>
                            <li><a href="pediatrics.html">Pediatrics</a></li>
                            <li><a href="plastic.html">Plastic Surgery</a></li>
                            <li><a href="ortho.html">Orthopaedics</a></li>
                        </ul>
                    </li>
                    <li><a href="faq.html"><font color="white">Enquiries</font></a></li>
                    <li><a href="app.html"><font color="white">Request an Appointment</font></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><font color="white">Health Calculators</font> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="bmi1.php">BMI Calculator</a></li>
                            <li><a href="http://localhost/php/duedate1.php">Due date Calculator</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div><br><br><br><br>



		<div class="container">
				<h2 style="font-family: Josefin Sans;color: #39b54a;">Request An Appointment</h2>
				<hr color="#39b54a" size="5">
		 
		 <div class="transbox"><br><br>
		 	<form style="font-size: 20px;color:blue;" action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
		 	<div align="middle">
		 	<input style="width: 200px;height: 50px;border:solid;border-color: green;color:#39b54a;" type="text" name="firstname" placeholder="First Name" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 	<input style="width: 200px;height: 50px;border:solid;border-color: green;color:#39b54a;" type="text" name="secondname" placeholder="Second Name" required><br><br>
		 	<input style="width: 200px;height: 50px;border:solid;border-color: green;color:#39b54a;" type="number" name="mob" placeholder="Phone number" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 	<select name="time" style="width: 200px;height: 50px;border:solid;border-color: green;color:#39b54a;">
		 	<option value="sel" style="color:#39b54a;">Select time</option>
		 	<option>10:00am - 12:00am</option>
		 	<option>12:00am - 2:00pm</option>
		 	<option>2:00pm - 4:00pm</option>
		 	<option>4:00pm - 6:00pm</option>
		 	</select>
		 	<br><br>
		 	<select name="speciality" style="width: 200px;height: 50px;border:solid;border-color: green;color:#39b54a;">
		 	<option value="sel" style="color:#39b54a;">Select speciality</option>
		 	<option>Cardiology</option>
		 	<option>General</option>
		 	<option>Neurology</option>
		 	<option>Pediatrics</option>
		 	<option>Plastic Surgery</option>
		 	<option>Orthopaedics</option>
		 	</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 	<select name="branch" style="width: 200px;height: 50px;border:solid;border-color: green;color:#39b54a;">
		 	<option value=sel>Select place</option>
		 	<option>California</option>
		 	<option>Seattle</option>
		 	<option>New York</option>
		 	<option>Los Angeles</option>
		 	<option>Las Vegas</option>
		 	<option>Washington DC</option>
		 	<option>Colorado</option>
		 	<option>Pennsylvania</option>
		 	<option>Texas</option>
		 	<option>Arizona</option>
		 	</select><br><br></div>
		 	
		    
		 	
		 	
		 	<div style="text-align:center;font-size:30px">  
	    	<input style="color:#ffffff;background-color: #39b54a" name="book" type="submit" />  
			</div><br>
			<div style="text-align:center;font-size:25px">  
	    	<input style="color:#ffffff;background-color: #39b54a" name="previous" type="submit" value="Get Previous Appointments"/><br>
	    		</div>
			<p id="nextdate" align="center" style="color:#39b54a;"></p>
		</form>
	</div>

			<script>
				var today=new Date();
				var tomorrow=new Date();
				tomorrow.setDate(today.getDate()+1);
				var datepara=document.getElementById("nextdate");
				datepara.innerHTML="This is for date "+tomorrow;
			</script>

	 
			<?php

//session_start();

include "connect.php";

$fullname="";
$firstname="";
$secname="";
$phone="";
$branch="";
$spl="";
$time="";
$errors=array();

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
			$sql="INSERT INTO appointment (Sl_no,Name,Mob_no,Branch,App_time,Specialties) VALUES (NULL,'$fullname','$phone','$branch','$time','$spl')";
			// mysqli_query($conn,$sql);
			//echo "Appointment Request Accepted";

			if(!mysqli_query($conn,$sql))
			{
    		die("DAMMIT");
			}
			else{ echo "Success"; }
			array_push($errors,"Appointment request accepted"); 
			$_SESSION["username"]=$fullname;
			$_SESSION["success"]="Appointment Request Accepted";
			$succes="Appointment Request Accepted";
			
			//header('location:app.php'); //redirect to home page
			//echo "Appointment Request Accepted";

		}
		
		else{//echo "Sorry,no appointment available in the given slot ";
		array_push($errors,"Sorry, no appointment available in the given slot");
	}

}

	
	$arrlength = count($errors);

	for($x = 0; $x < $arrlength; $x++) {
    echo "<center>".$errors[$x]."</center>";
    echo "<br>";
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


	

//session_destroy();

?>
	 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<footer>
	<div style="padding:20px";>
    <hr style="color: #39b54a;width: 20;">
	<p>SITE LINKS</p>
	<p><a href="about.html">About</a></p>
	<p><a href="faq.html">FAQ</a></p>
	<p><a href="app.html">Request an Appointment</a></p>

	<div style="float: right">
		<p size="6">Copyright © 2018 Grey's Health System</p></div>

</footer>

</body>
</html>