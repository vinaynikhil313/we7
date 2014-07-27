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
								<a href="index.html"><img src="images/logo.png" alt="" style=""/></a>
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
                    <a href="#">Teacher's Profile</a>
                </li>
                <li>
                    <a href="teacher_first.html">Give Feedback</a>
                </li>
                <li>
                    <a href="#">View Performance</a>
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
                        <h1>Please fill up the feedback form</h1>
                        

                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    
                    
                     <div class="dropdown">
  						<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
   					 		Dropdown
   					 		<span class="caret"></span>
 						 </button>
  						<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">ID1</a></li>
    						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">ID2</a></li>
    						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">ID3</a></li>
    						
  						</ul>
					</div>
					

					<div class="panel panel-default">
 						<div class="panel-heading">
    						<h3 class="panel-title" >Training Feedback Form (F/G/TC/02/A)</h3>
  						</div>
  					<div class="panel-body">
    					<div class="table-responsive">
  							<table class="table">
   								<tr>
   									<td colspan="1"><span>Date</span></td>
   									<td colspan="3"><span><input type="text" name="date"/></span></td>
   								</tr>
   								<tr>
   									<td colspan="1"><span>Name of the session</span></td>
   									<td colspan="3"><span><input type="text" name="sess_name" width="100%" /></span></td>
   								</tr>
   								<tr>
   									<td colspan="1"><span>Name of the facilitator </span></td>
   									<td colspan="1"><span><input type="text" name="name_facilitator" width="50%"/></span></td>
   				
   									<td colspan="1"><span>Training Location </span></td>
   									<td colspan="1"><span><input type="text" name="train_location" width="50%"/></span></td>
   								</tr>
   								
   								
   							
  							</table>
						</div>
						</br></br>
						<blockquote>
 							 <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Please enter the score in the following statements as per the given key:</p><br>
						</blockquote>
						<div class="table-responsive">
  							<table class="table table-bordered"   >
   								<tr>
   									<td ><span>1</span></td>
   									<td ><span>2</span></td>
   									<td ><span>3</span></td>
   									<td ><span>4</span></td>
   									<td ><span>5</span></td>
   									<td ><span>6</span></td>
   									<td ><span>7</span></td>
   									<td ><span>8</span></td>
   									<td ><span>9</span></td>
   									<td ><span>10</span></td>
   								</tr>
   								<tr style="font-size:10px;">
   									<td ><span >0% to 10%</span></td>
   									<td ><span>11% to 20%</span></td>
   									<td ><span>21% to 30%</span></td>
   									<td ><span>31% to 40%</span></td>
   									<td ><span>41% to 50%</span></td>
   									<td ><span>51% to 60%</span></td>
   									<td ><span>61% to 70%</span></td>
   									<td ><span>71% to 80%</span></td>
   									<td ><span>81% to 90%</span></td>
   									<td ><span>91% to 100%</span></td>
   								</tr>
   								
   								
   								
   							
  							</table>
						</div>
						</br>
						</br>
						<div class="table-responsive">
  							<table class="table"   >
   								<tr>
   									<td ><span>1</span></td>
   									<td ><span>The content was meaningful with respect to
   									the objectives of the session and addressed the expectations 
   									of the participants.</span></td>
   								
   									<td><span><input type="text" name="feed1"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>2</span></td>
   									<td ><span>The activities, group discussions were useful and engaging.</span></td>
   									
   									<td><span><input type="text" name="feed2"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>3</span></td>
   									<td ><span>The facilitator was supportive and effective.</span></td>
   									<td><span><input type="text" name="feed3"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>4</span></td>
   									<td ><span>The facilitator questioned, probed, challenged the participants to draw out responses and processed them to facilitate learning.</span></td>
   									
   									<td><span><input type="text" name="feed4"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>5</span></td>
   									<td ><span>The presentation was clear and helped my understanding.</span></td>
   									
   									<td><span><input type="text" name="feed5"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>6</span></td>
   									<td ><span>The pace of the presentation was consistent.</span></td>
   									
   									<td><span><input type="text" name="feed6"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>7</span></td>
   									<td ><span>Learning of the session can be applied/used in the work place.</span></td>
   								
   									<td><span><input type="text" name="feed1"/></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>8</span></td>
   									<td ><span>Mention key learning which you will incorporate in your classroom. [200 words]</span></td>
   									
   									<td><span><textarea name="feed8"> </textarea></span></td>
   									
   								</tr>
   								<tr>
   									<td ><span>9</span></td>
   									<td ><span>Any suggestions related to content/facilitation you may have to further improve this session.</span></td>
   									
   									<td><span><textarea name="feed9"> </textarea></span></td>
   									
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
