<?php session_start(); ?>
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
						</div>
					</div>
	</div>
    <?php
    	if(isset($_POST['select']))
    	{
    	
			
	  		$sql="SELECT * FROM Observation_CC where Teacher_ID = '$_POST[T_ID]'";
        	$result = mysqli_query($con,$sql);

						if(!$result)
			{
				echo "Error\n";
			}
			$row=mysqli_fetch_array($result);
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
                    <a href="admin_first.php">View Charts of the Teachers</a>
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
                        <h1>Teacher's Report</h1>
                        <form method="post" action="admin_first.php" >
                        <div class="table-responsive">
  							<table class="table">
   								 <tr>
   								 	<td> <input type="text" placeholder="Enter the Teacher's ID" name="T_ID"</td>
   								 </tr>
   								

 							 </table>
						</div>
						<input type="submit" value="Select the Name" name="select"/>
						</form>
                        <div class="table-responsive">
  							<table class="table">
								<tr>
									<td> <span><b> Sl No </b></span> </td>
									<td> <span><b> Observation Points </b></span> </td>
									<td> <span><b> Grade </b></span> </td>
								</tr> 
  								<tr>
   									<td ><span>1</span></td>
   									<td ><span>TLM </span></td>
   								
   									<td><span><input type="text" name="feed1" value="<?php echo $row[4]?>"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>2</span></td>
   									<td ><span>Seating Plan</span></td>
   									
   									<td><span><input type="text" name="feed2" value="<?php echo $row[5]?>"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>3</span></td>
   									<td ><span>Was classroom teaching interactive, developing connect with students?</span></td>
   									<td><span><input type="text" name="feed3" value="<?php echo $row[6]?>"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>4</span></td>
   									<td ><span>Were students comfortable and confident?</span></td>
   									
   									<td><span><input type="text" name="feed4" value="<?php echo $row[7]?>"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>5</span></td>
   									<td ><span>Recently done classwork & homework; notebook correction & maintainance </span></td>
   									
   									<td><span><input type="text" name="feed5" value="<?php echo $row[8]?>"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>6</span></td>
   									<td ><span>Quick Check for Learning</span></td>
   									
   									<td><span><input type="text" name="feed6" value="<?php echo $row[9]?>"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>7</span></td>
   									<td ><span>Lesson plan dairy</span></td>
   								
   									<td><span><input type="text" name="feed7" value="<?php echo $row[10]?>"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>8</span></td>
   									<td ><span>Curriculum Implementation</span></td>
   									
   									 <td><span><input type="text" name="feed8" value="<?php echo $row[11]?>"/></span></td>
   									
   								</tr>
   							
  							</table>
						</div>
                        

                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    
                    
                    		

				
                  
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

