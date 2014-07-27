<?php
session_start();
//   $con=mysqli_connect("localhost","root","cfg2014!","we7");
   // $con=mysqli_connect("http://ec2-54-254-195-240.ap-southeast-1.compute.amazonaws.com","root","cfg2014!","we7");
        include 'connect.php';
    $phpro_username=$_POST['U_ID'];
    $phpro_password=$_POST['Password'];
    $phpro_role=$_POST['Role'];
     
		if (mysqli_connect_errno($con))
	  	{
	  		echo "Problem!!!";
		  $_SESSION['userid']="Failed to connect to MySQL: ";
	  	}
        $sql="SELECT Role,U_ID,Password FROM Login WHERE U_ID ='$phpro_username' AND Password ='$phpro_password' AND Role ='$phpro_role'";
		$_SESSION['userid']=0;
		
		

			$result=mysqli_query($con,$sql);
			if(!$result)
			{
				echo "Error\n";
			}
			$row=mysqli_fetch_array($result);
			if (($row['U_ID'])!=NULL)
  			{
  				$_SESSION['userid']=$row['U_ID'];
                        $x=$_SESSION['userid'];
				
				if($phpro_role == 'Teacher')
					header("Location: teacher_first.php");
				else if($phpro_role == 'CC')
					header("Location: CC_first1.php");
				else if($phpro_role == 'Trainer')
					header("Location: trainer_first.php");
			}
		

?>