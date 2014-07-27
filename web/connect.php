<?php session_start();

        	$con=mysqli_connect("localhost","root","cfg2014!","we7");
        	if (mysqli_connect_errno($con))
	  		{
	  			echo "Problem!!!";
			  $_SESSION['userid']="Failed to connect to MySQL: ";
	  		}
?>