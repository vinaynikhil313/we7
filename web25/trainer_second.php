<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="header_bg">
					<div class="wrap">
						<div class="header">
							
							<div class="logo">
								<a href="index.php"><img src="images/logo.png" alt="" style=""/></a>
							</div>	
																					<div class="btn-group" style="float:right;">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    Logout<span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="logout.php">Logout</a></li>
  
</div>
						</div>
					</div>
	</div>
	        <?php
        	
			include 'connect.php';
			if(isset($_POST['school_name']))
			{
				$school=$_POST['school'];
				
				$sql="SELECT Teacher_ID,Teacher_Name FROM Teacher_Profile where School='$school';";
        		$result = mysqli_query($con,$sql);
				if(!$result)
				{
					echo "Error\n";
				}
				
				
			}
			
        ?>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        					
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Menu
                    </a>
                </li>
                <li>
                    <a href="trainer_first.php">Trainers's Profile</a>
                </li>
                <li>
                    <a href="trainer_second.php">View Teachers of the School </a>
                </li>
                <li>
                    <a href="trainer_third.php">View all the Schools </a>
                </li>
                <li>
                    <a href="trainer_forth.php">Create an Observation </a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
            		<div class="logo">
								<img src="web/images/logo.png" alt="" />
							</div>	
                <div class="row">
                    <div class="col-lg-12">
                       
                        

                        
                    
                         <h3>Please enter the school name </h3>
                     		

					<div class="panel-body">
					<form method="post" action="CC_second.php">
    					<div class="table-responsive">
  							<table class="table">
   								<tr>
   									<td colspan="1"><span>School </span></td>
   									<td colspan="3"><span><input type="text" name="school"/></span></td>
   								</tr>
   								 								
   							
  							</table>
						</div>
						<input type="submit" value="Ok" name="school_name"/>
					</form>
	</br></br>
					
					<div class="table-responsive">
  							<table class="table">
   								<tr>
   									<td colspan=""><span><b>Teacher ID</b></span></td>
   									<td colspan=""><span><b>Teacher Name</b></span></td>
   								</tr>
   							<?php while($row=mysqli_fetch_array($result)){ ?>
   								<tr>
   									<td colspan=""> <span> <?php echo $row['Teacher_ID'] ?> </span></td>
   									<td colspan=""> <span> <?php echo $row['Teacher_Name']?> </span></td>
   								</tr>

   							<?php	}
   								?>
   								
   							
  							</table>
						</div>





		<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>











					
    			</div>
			</div>
			</div>              
                  
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>

