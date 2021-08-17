<?php include("header.php");?>

<div class="content">
<!---->
<div class="container">
	<div class="contact">
	<h2>Contact</h2>
				<div class="contact-in">
				
				<div class=" col-md-9 contact-left">
				  
					    <form method="POST" action="" >
					    	<div>
						    	<span>Name</span>
						    	<input name="userName" type="text" class="textbox">
						    </div>
						    <div>
						    	<span>E-Mail</span>
						    	<input name="userEmail" type="text" class="textbox">
						    </div>
						    <div>
						    	<span>Subject</span>
						    	<textarea name="userMsg"> </textarea>
						    </div>
						   <div>
						   		<input type="submit" name="ok" value="Submit">
								
						  </div>
					    </form>
				  </div>
<?php
if(isset($_POST['ok'])){
/*
$con=mysql_connect("localhost","root","");
if(!$con){
die("Unable to Connect!");
}
mysql_select_db('bhagat');	
$userName=$_POST['userName'];
 $userEmail=$_POST['userEmail'];
 $userMsg=$_POST['userMsg'];
//$comment=$_POST['comment'];
$conn="INSERT INTO users(name,email,subject)
VALUES ('$userName','$userEmail','$userMsg')";
$result=mysql_query($conn);*/
$userName=$_POST['userName'];
 $userEmail=$_POST['userEmail'];
 $To="shahjad@smartworkindian.in";
 $userMsg=$_POST['userMsg'];
$d=mail($To,$userName,$userMsg,$userEmail);

if($d)
{
echo "mail send";

}else
{
echo "mail failed";
}
}
?>
				<div class=" col-md-3 contact-right">
				     	<h5>Company Information</h5>
						    	<p># 1623 PHASE 3B-2 (SECTOR-60), </p>
						   		<p>MOHALI ,CHANDIGARH -160059,</p>
						   		<p>	INDIA</p>
				   		<p>PH:+91 172 2223 447</p>
						<p>HAND PHONE: +91 97819 91623</p>
				 	 	<p>Email:<br>bhagat@texglobal.in(preferred)<br> info@texglobal.in<br>texglobalincorp@gmail.com
 </a></p>
				   		<p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
				    </div>
					  <div class="clearfix"></div>
				 </div>
				
			    
      		</div>

	</div>
	<!-- <div class="map">
				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d505145.6949089349!2d115.07157704999999!3d-8.455471450000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd22f7520fca7d3%3A0x2872b62cc456cd84!2sBali%2C+Indonesia!5e0!3m2!1sen!2sin!4v1418170815897"></iframe>
				</div>-->
</div>
<?php include("footer.php");?>