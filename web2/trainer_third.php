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
                    <a href="trainer_second.php">View Teachers of the School</a>
                </li>
                <li>
                    <a href="trainer_third.php">Create an Observation</a>
                </li>
                <li>
                    <a href="trainer_forth.php">Update attendance </a>
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
                        <h1>Trainer's Teacher Observation Sheet</h1>
                        

                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    
                    
                    		

					<div class="panel panel-default">
 						<div class="panel-heading">
    						<h3 class="panel-title" ></h3>
  						</div>
  					<div class="panel-body">
    					<div class="table-responsive">
  							<table class="table">
   								<tr>
   									<td colspan="1"><span>Date</span></td>
   									<td colspan="3"><span><input type="text" name="date"/></span></td>
   								</tr>
   								<tr>
   									<td colspan="1"><span>Name of the Teacher</span></td>
   									<td colspan="3"><span><input type="text" name="sess_name" width="100%" /></span></td>
   								</tr>
   								<tr>
   									<td colspan="1"><span>School </span></td>
   									<td colspan="1"><span><input type="text" name="name_facilitator" width="50%"/></span></td>
   				
   									<td colspan="1"><span>Topic </span></td>
   									<td colspan="1"><span><input type="text" name="train_location" width="50%"/></span></td>
   								</tr>
   								
   								
   							
  							</table>
						</div>
						</br></br>
						</br>
						</br>
						<div class="table-responsive">
  							<table class="table"   >
								<tr>
									<td> <span><b> Sl No </b></span> </td>
									<td> <span><b> Observation Points </b></span> </td>
									<td> <span><b> Scores </b></span> </td>
								</tr> 
  								<tr>
   									<td ><span>1</span></td>
   									<td ><span>Planning of the Lesson and Curriculum Completion Status </span></td>
   								
   									<td><span><input type="text" name="feed1"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>2</span></td>
   									<td ><span>Set-induction & Closure</span></td>
   									
   									<td><span><input type="text" name="feed2"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>3</span></td>
   									<td ><span>Questioning and interaction</span></td>
   									<td><span><input type="text" name="feed3"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>4</span></td>
   									<td ><span>Communication Skills</span></td>
   									
   									<td><span><input type="text" name="feed4"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>5</span></td>
   									<td ><span>
Conceptual Clarity </span></td>
   									
   									<td><span><input type="text" name="feed5"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>6</span></td>
   									<td ><span>Classroom Management</span></td>
   									
   									<td><span><input type="text" name="feed6"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>7</span></td>
   									<td ><span>Black-board organisation</span></td>
   								
   									<td><span><input type="text" name="feed7"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>8</span></td>
   									<td ><span>Use of Teaching Aids</span></td>
   									
   									<td><span><input type="text" name="feed8"> </span></td>
   									
   								</tr>
   							
                                                                <tr>
   									<td ><span>9</span></td>
   									<td ><span>Students Learning from the concept</span></td>
   									
   									<td><span><input type="text" name="feed9"> </span></td>
   									
   								</tr>
								<tr>
   									<td ><span>10</span></td>
   									<td ><span>Trainer's Self-reflection on training effectiveness </span></td>
   									
									<td><span><input type="text" name="feed10"> </span></td>
   									
   								</tr>
   							
   							
  							</table>
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

