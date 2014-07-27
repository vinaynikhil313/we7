<?php
        	
        	$con=mysqli_connect("localhost","CFG","","we7");
        	if (mysqli_connect_errno($con))
	  		{
	  			echo "Problem!!!";
			  $_SESSION['userid']="Failed to connect to MySQL: ";
	  		}
?>