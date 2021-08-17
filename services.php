<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include("header.php");?>

<div class="content">
<!---->
<div class="container">
		<div class="blog">
		
		
			<div class="col-md-12">
				<div class="blog-grid-in">		
							<a href="#"><img class="img-responsive " src="images/b8.jpg" alt="" /></a>
					<div class="blog-top">
						<div class="blog-left">
							<h3>Our<br>
							Services
						</div>
						<div class="top-blog">
						<!--	<a class="fast" href="single.php">It is a long established fact that a reader will be distracted </a>
							<p>Posted by <a href="single.php">Admin</a> in General | <a href="#">10 Comments</a></p> -->
							<p class="to-blog">We Identify a total fit for the specific requirements of Suppliers and Customers and than deliver our best offers to them.We cater to the needs of supplier and customer right from the order confirmation to the final realization with their ease and satisfaction.
Our yarn supplier base is the leading and prominent Spinning mills of North India and also from some parts of southern India as well having a diverse variety of products in our basket to offer our customers.</p><p>We ensure well organized supply chain management and quality checks before actual delivery.
We are in regular touch with the market having a deep market insight for better buyer decision to invest on the right time and as well as for the supplier to make best selling decision offering the best price in lieu of prevailing demand.We also support our suppliers for new product development and sampling as per prevailing market trends.
Our responsibility starts before actual order booking to facilitate our suppliers and customers in form of taking quality reports and share with the buyer for his product satisfaction , sampling and sample approvals , personal visit to suppliers and buyers for making a strong bond which shall exists forever, and orders shall itself follow.

</p> 
         						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
<!--<div class=" single-profile">
				<h4> RELATED POSTS</h4>
				<div class="single-left ">					
					<div class="col-md-3 post-top">
					<img class="img-responsive " src="images/si.jpg" alt="">
						<h6>Duis autem</h6>
						<p>Lorem ipsum dolor sit amet, consectetuer .</p>
					</div>
					<div class="col-md-3 post-top">
					<img class="img-responsive " src="images/si1.jpg" alt="">
						<h6>Duis autem</h6>
						<p>Lorem ipsum dolor sit amet, consectetuer .</p>
					</div>
					<div class="col-md-3 post-top">
					<img class="img-responsive " src="images/si2.jpg" alt="">
						<h6>Duis autem</h6>
						<p>Lorem ipsum dolor sit amet, consectetuer .</p>
					</div>
					<div class="col-md-3 post-top">
					<img class="img-responsive " src="images/si4.jpg" alt="">
						<h6>Duis autem</h6>
						<p>Lorem ipsum dolor sit amet, consectetuer .</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>--></br></br></br>
<div class="leave-comment">
				<h3>ANY QUERY</h3>
				<div class="table-form">
					<form method="POST" action="" >
				<div>
				<span>Name</span>
					<input type="text" value="" name="userName">
				</div>
				<div>
					<span>Email</span>
					<input type="text" value="" name="userEmail">
				</div>
				<div>
					<span>Your Query</span>
					<textarea name="userquery"> </textarea>	
				</div>
				
					<input type="submit" value="Submit" name="ok"></br></br></br></br></br></br>
			</form>					
			</div>
		</div>			
				</div>	
		<!--	<div class="col-md-3 categories-grid">
				<div class="grid-categories">
					<h4>CATEGORIES</h4>
					<ul class="popular ">
						<li><a href="#"><i> </i>Contrary to popular belief</a></li>
						<li><a href="#"><i> </i>There are many variation</a></li>
						<li><a href="#"><i> </i>Lorem Ipsum is simply</a></li>
						<li><a href="#"><i> </i>Sed ut perspiciatis unde</a></li>
						<li><a href="#"><i> </i>Nemo enim ipsam volume</a></li>
						<li><a href="#"><i> </i>At vero eos et accusamus</a></li>
						<li><a href="#"><i> </i>Contrary to popular belief</a></li>
						<li><a href="#"><i> </i>There are many variation</a></li>
					</ul>
				</div>-->
			<!--	<div class="grid-categories">
					<h4>ACHIVEMENTS</h4>
					<ul class="popular popular-in">
						<li><a href="#"><i> </i>MAY 2014</a></li>
						<li><a href="#"><i> </i>SEP 2012</a></li>
						<li><a href="#"><i> </i>JANUARY 2011</a></li>
						<li><a href="#"><i> </i>FEB 2010</a></li>
						<li><a href="#"><i> </i>NOV 2009</a></li>
					</ul>
				</div>
			</div>-->
			<div class="clearfix"> </div>
			
		</div>	
	</div>
	</div>
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
 $To="bhagat@texglobal.in";
 //$userquery=$_POST['userquery'];
//$userquery = '<html><body>';
$userquery = '<div style="background:url(images/b2.png);height:200px;color:white;">';
$userquery.= '<p style="color:yellow;"> userNAME ->'.$_POST['userName'].'</p>';
 $userquery.= '<p style="color:green;"> USEREMAIL->'.$_POST['userEmail'].'</p>';
$userquery .= '<p> user query->'.$_POST['userquery'].'</p>';
$userquery .= '</div>';
//$userquery .= '</body></html>';
$d=mail($To,$userName,$userquery,$userEmail);
if($d)
{
echo "mail send";

}else
{
echo "mail failed";
}
echo $userquery;
}
?>								
<?php include("footer.php");?>