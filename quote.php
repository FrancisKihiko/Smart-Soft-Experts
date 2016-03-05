<?php
session_start();
$_SESSION['count'] = time();
$image;
?>
<!DOCTYPE HTML>
<html>
<header>
<title>smart soft experts</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="the scorpions" content="">
    <link rel="icon" href="../../favicon.ico">
	  <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="stylesoft.css" rel="stylesheet" type="text/css" media="screen" />
</header>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="jumbotron">
<div class="container">
    <div class="row">
	    <div class="  panel col-md-12">
		  <div class="row"> 
		    <div class=" col-md-12 btn-default">
			  <div class="col-md-4 col-md-offset-">
			  <div class=" col-md-offset- text-pull-">
			 <em> Thanks for your confidence in our service</em>
			   </div>
			  </div>
			  <div class="col-md-4 col-md-offset-0">
			  Find us on:
			       <a href="http://www.facebook.com/francis.kihiko"><img src="img/facebook (1).png" height="25px" width="25px"/></a.
			       <a href="http://www.twitter.com/FKihiko"><img src="img/twitter.png" height="25px" width="25px"/></a>
			      <a> <img src="img/rss.png" height="20px" width="20px"/></a>
			      <a href="http://ke.linkedin.com/pub/smart-soft-experts/a8/ba4/442"> <img src="img/linkedin.png" height="20px" width="20px"/></a>
			      <a href="http://ke.linkedin.com/pub/smart-soft-experts/a8/ba4/442"> <img src="img/pinterest.png" height="20px" width="20px"/></a>
				   <img src="img/download (4).jpg" height="25px" width="25px"/>  &nbsp; 0707071957
			  </div>
			  
			  <div class="col-md-3 col-md-offset-1">
			   <a href="order.php"><button  class="button  btn-danger"><span class="badge ">Order Now</span></button></a>
			  </div>
			</div>
		  </div>	
	  <div class="row">
	       <div class=" col-md-12 btn-success">
		      <div class="col-md-5 media">
<a class="pull-left" href="#">
<img class="media-object img-circle" src="img/sse.png" height="150px" width="150px"
alt="Media Object">
</a>
<div class="media-body">
</br>
<h3 class="media-heading"><b>Smart Soft Experts</b></h3>
<em>Providing business solutions through software applications</em>
</div>
</div>
			<div class="col-md-4">
			<b>
			</br>
			Best web designers & Software Developers
			   </b></br>
			   <em>Thanks for choosing and making us to be who </br>we are today.</em>
			</div>
			<div class="col-md-3 col-md-offset-"></br>
			    <span class="glyphicon glyphicon-phone-alt btn-lg-4 "> </span> &nbsp; 0707071957</br></br>
			    <span class="glyphicon glyphicon-phone-alt btn-lg-4"> </span> &nbsp; 0735619293</br></br>
			    <span class="glyphicon glyphicon-envelope"> </span>&nbsp; info@smartsoftexperts.com</br>
			</div>
			 
		  </div>
	 </div>
	 <div class="row">
	    <div class="col-md-12 penel-danger" style="background-color:black;color:white">
<ul class="nav nav-tabs " style="background-color;font:20px arial;">
<li class=""><a href="index.php" style="color:white;"><span class="glyphicon glyphicon-home"></span>Home</a></li>
<li><a href="aboutus.php" style="color:white">About us</a></li>
<li><a href="order.php" style="color:white">Website Design</a></li>
<li><a href="seo.php" style="color:white">SEO</a></li>
<li><a href="software.php" style="color:white">Software Development</a></li>
<li><a href="contactus.php" style="color:white">Contact Us</a></li>
<li><a href="#"  style="color:white">Blog</a></li>
</ul>
		
	
	</div>
	 </div>
  <div class="row">
        <div class="col-md-6">
		</br>
		 <?php
				  $id=@$_GET['id'];
				  
				  ?>
		<div class="text text- col-md-offset-4"> <em>You have selected </em><b class="text text-danger"><?php echo $id ;?> </b></br>
		<em> Please fill the following detail  to complete the order.</em>
		</div>
		<hr/>
		</div>
   </div>
 
 
 <div class="row">
          <div class="col-md-12">		  
		         <div class="col-md-8">
				 
				  <div class="col-md-offset-2">
				  
				  
				    <form role="form" class="inline " action="quote.php" method="POST">
					       <div class="form-group">
						     <label class="col-md-3" for="name">Name:</label>
							 <div class="col-md-9">
							 <input type="text" name="name" required class="form-control"/>
							 </div>
						   </div> </br></br></br>
						   <div class="form-group">
						     <label class="col-md-3" for="email">Email address:</label>
							 <div class="col-md-9">
							 <input type="email" name="email" required  class="form-control"/>
							 </div>
						   </div></br></br></br>
						   <div class="form-group">
						     <label class="col-md-3" for="phone">Phone Number:</label>
							 <div class="col-md-9">
							 <input type="tel" name="phone" required  class="phone form-control" />
							 </div>
						   </div> </br></br></br>
						   <div class="form-group">
						     <label class="col-md-3" for="company">Organisation/company</label>
							 <div class="col-md-9">
							 <input type="text" name="company" required  class="form-control"/>
							 </div>
						   </div></br></br></br>
						   <div class="form-group">
						     <label class="col-md-3" for="service">Required service</label>
							 <div class="col-md-9">
							 <select  name="service" class="form-control">
							     <option value="new_website">New Website</option>
							     <option value="re-design">Web re-design</option>
							     <option value="maintainance">Website maintainance</option>
							 </select>
							 </div>
						   </div></br></br></br></br>
						   <div class="form-group">
						      <label class="col-md-3" for="description">Brief description:</label>
							    <div class="col-md-9">
						        <textarea class="form-control" required  name="description" class="form-control" rows="6" type="textarea"></textarea>
								</div>
						   </div></br></br></br></br></br></br></br>
						   <?php
						    require('capcha.php');
						   
						   
						   ?></br></br>
						   <div class="form-group col-md-offset-3">
				             <div class="col-md-4 col-sm-offset-1 ">
				            <input type="submit" name="submit" value="Send" class="form-control btn-primary"/>
				           </div>
				               <div class="col-md-4 col-md-offset-1 ">
				                <input type="Reset" name="submit" value="clear" class="form-control btn-danger"/>
				                  </div>
				 
				              </div>
					</form>
					</br></br>
					 <?php
				  require("connection.php");
				  $id=@$_GET['id'];
				  echo $id;
				 if(isset($_POST['submit'])&& isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['phone'])&& isset($_POST['company'])&& isset($_POST['service'])&& isset($_POST['description']) )
				     {
					   $name=$_POST['name'];
					   $email=$_POST['email'];
					   $phone=$_POST['phone'];
					   $service=$_POST['service'];
					   $company=$_POST['company'];
					   $description=$_POST['description'];
					   $id=@$_GET['id'];
					   echo $id ;
					    require("connection.php");
					    $query=mysql_query("INSERT INTO quote SET name='$name',phone='$phone',email='$email',company='$company',description='$description',package='$id',service='$service'");
						   if($query)
						     {?>
							      <script>
                          alert('sent successfuly! We will be in touch soon');
                         window.location.href='order.php?fail';
                          </script> 
						  <?php
							 } else{echo "not sent";}
							 
					 }
				 
				  
				  ?>
				  </div>
				  </div>
				  <div class="rightbar col-md-4">
				         <div class="panel panel-success">
						         <div class="panel-heading">
								     Why Choose Us:
								 </div>
								 <div class="panel-body">
								  <ul class="list-group">
                                      <li class="list-group-item"><span class="glyphicon glyphicon-ok ok-info"></span>&nbsp;Quality is the hallmark of our service</li>
                                      <li class="list-group-item"><span class="glyphicon glyphicon-ok ok-info"></span>&nbsp;We have a dedicated and innovative team having experience and expertise</li>
                                      <li class="list-group-item"><span class="glyphicon glyphicon-ok ok-info"></span>&nbsp;We are passionate about what we do</li>
                                      <li class="list-group-item"><span class="glyphicon glyphicon-ok ok-info"></span>&nbsp;Our support is Unmatched</li>
								 </ul>
								 </div>
						 </div>
						 <div class="panel panel-default">
						      <div class="body">
							    						  <div class="col-md-off-1">
							    <table width="%" cellspacing=""> 

<tr><td><div class="fb-like-box" data-href="https://www.facebook.com/softexperts"
 data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true" style="width:30%"></div></td></tr>

</table></div>
							  </div>
						 </div>
				  
				  </div>
		  </div>   
 </div>
 <div class="row">
           <div class="col-md-12 btn-" style="background-color:black;">
		   </br>
		   </br>
		  
		         <div class="col-md-3" style="background-color:black; color:white">
				     <a href="#" class=" " style="background-color:black; color:white" >
                      <b> <h3>Web  Services<h3></b>
					  
                     </a>
                      <a href="order.php" class="" style="background-color:black; color:white" ><h5>Website Design</h5></a>
                      <a href="seo.php" class="" style="background-color:black; color:white"><h5>SEO</h5></a>
                      <a href="order.php" class="" style="background-color:black; color:white"><h5>Website maintenance</h5></a>
                      <a href="order.php" class="" style="background-color:black; color:white"><h5>Website re-design</h5> </a>
				 </div> 
				 <div class="col-md-3" style="background-color:black; color:white">
				     <a href="#" class=" " style="background-color:black; color:white" >
                      <b> <h3>Software Development<h3></b>
					  
                     </a>
                      <a href="software.php" class="" style="background-color:black; color:white" ><h5>Mobile Apps</h5></a>
                      <a href="software.php" class="" style="background-color:black; color:white"><h5>Petrol station management system</h5></a>
                      <a href="software.php" class="" style="background-color:black; color:white"><h5>Library System</h5></a>
                      <a href="software.php" class="" style="background-color:black; color:white"><h5>Graphic design <span class="badge">Others</span></h5> </a>
				 </div>
				 <div class="col-md-3" style="background-color:black; color:white">
				     <a href="#" class=" " style="background-color:black; color:white" >
                      <b> <h3> Company<h3></b>
					  
                     </a>
                      <a href="aboutus.php" class="" style="background-color:black; color:white" ><h5>About Us</h5></a>
                      <a href="#" class="" style="background-color:black; color:white"><h5>Blog</h5></a>
                      <a href="" class="" style="background-color:black; color:white"><h5><b>Can now pay through</b></h5></a>
                      <a href="#" class="" style="background-color:black; color:white"><h5><img class="media-object" src="img/download (1).jpg" height="70px" width="110px"/>
					  <img class="media-object" src="img/paypalicon.png" height="80px" width="100px"/></h5> </a>
				 </div>
				 <div class="col-md-3" style="background-color:black; color:white">
				     <a href="#" class=" " style="background-color:black; color:white" >
                      <b> <h3>  Contact Us<h3></b>
					  
                     </a>
                      <a href="#" class="" style="background-color:black; color:white" ><h5><span class="glyphicon glyphicon-phone-alt btn-lg-4 "> </span> &nbsp; 0707071957</h5></a>
                      <a href="#" class="" style="background-color:black; color:white"><h5><span class="glyphicon glyphicon-phone-alt btn-lg-4 "> </span> &nbsp; 0707071957</h5></a>
                      <a href="#" class="" style="background-color:black; color:white"><h5><span class="glyphicon glyphicon-envelope btn-lg-4 "> </span> &nbsp; info@smartsoftexperts.com</h5></a>
                      <a href="#" class="" style="background-color:black; color:white"><img src="img/facebook-icon.png" width="200px" height="30px"/> </a>
                      <a href="#" class="" style="background-color:black; color:white"><img src="img/twitter-icon.png" width="200px" height="30px"/> </a>
					 
				 </div>
				
				 
				
			<div class="col-md-12 col-md-offset-" style="color:white;background-color:green">
			          <div class="col-md-offset-3">
		             Copyright © Smart Soft Experts 2015 all right reserved professionals in software development
					 
					 </div>
		  </div>
		   </div>
 </div>
 <div class="row">
         
 </div>
 
			
		
		</div>
	</div>
</div>
</div>






<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="js/jquery.min.js"></script> -->
	<script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>