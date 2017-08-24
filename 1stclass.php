
<script src="js/jquery-1.9.1.js" type="text/javascript"></script>

<script>
function openit(){
	
	window.scrollTo(0,500);
	$('#demo').click();
	}
</script>
<?php session_start();
 include('db/conn.php');
 include("header.php");
 $qry="SELECT * FROM mst_subcat WHERE prodcatsrno=".$_GET['id']; 	
	$result=$connection->query($qry);
 ?>


<!-- Page Main -->
<div role="main" class="main">
	<div class="page-default bg-grey shop-single">
		<!-- Container -->
		<div class="container">
			<div class="row">
				<!-- Member Image Column -->
				<div class="col-md-5">
					<div class="owl-carousel dots-inline" 
						data-animatein="" 
						data-animateout="" 
						data-items="1" data-margin="" 
						data-loop="true" 
						data-merge="true" 
						data-nav="false" 
						data-dots="true" 
						data-stagepadding="" 
						data-mobile="1" 
						data-tablet="1" 
						data-desktopsmall="1"  
						data-desktop="1" 
						data-autoplay="false" 
						data-delay="3000" 
						data-navigation="true">
						<div class="item"><img class="img-responsive" src="uploads1/101020035.jpg" alt="..." width="600" height="500"></div>
						<div class="item"><img class="img-responsive" src="uploads1/201020001.jpg" alt="..." width="600" height="500"></div>
						<div class="item"><img class="img-responsive" src="uploads1/101020001.jpg" alt="..." width="600" height="500"></div>
					</div><!-- carousel -->
				</div><!-- Coloumn -->
				<!-- Coloumn -->
				<div class="col-md-7">
					<div class="shop-detail-wrap">
						<h4 class="product-name" style="color:black"><b>1<sup>st</sup> Standard Course</b></h4>
						<ul class="review-box">
							
						</ul>
					<div>
						<h5>Price: <strong>Rs.100</strong></h5>

					</div>	
			
						<p class="margin-top-30">The course is based on Maharashtra state board syllabus and as per prescribed textbooks. The course offers unlimited access to audio-visual content, practice exam, final exam, analytics based on adaptive learning, exam oriented question and answer in the form of notes . User can participate in discussion forums and can rate content based on his experience.</p>
							<?php 
							if(!isset($_SESSION['id'])){?>
							<a href="payment.php?cid=<?php echo $_GET['id'];?>" class="btn">Buy Now</a>
							
							
							<a id="try" onclick="openit()"  class="btn">Try For Free</a>
							<?php } else{  ?>

							<?php $qry4="SELECT * FROM mst_order WHERE prodcatsrno='".$_GET['id']."' AND userid=".$_SESSION['id'];
							$result5=$connection->query($qry4);
							
							$row5=$result5->fetch_assoc();
							$cnt=$result5->num_rows;
							if($cnt == 0) { ?>
									<a href="payment.php?cid=<?php echo $_GET['id'];?>" class="btn">Buy Now</a>
									<a id="try" onclick="openit()"  class="btn">Try For Free</a>
							<?php } else { 
								if($row5['status']=='y' && $row5['prodcatsrno'] == $_GET['id']) {?>
									<input type="hidden" name="uid" id="uid" value="<?php echo $_SESSION['id'];?>">
									<a onclick="show1()" class="btn">View Course</a>
								<?php } else {  ?>							    
									<a onclick="show()" class="btn">Buy Now</a>
									<a class="btn">Try For Free</a>
								<?php } }?>	
							<?php } ?>
								
							
						
					</div><!-- Member Detail Wrapper -->
				</div><!-- Member Detail Column -->
			</div><!-- Row -->
			
			<!-- Product Features -->
			<div class="row margin-top-60">
				<div class="col-sm-12">
					<!-- Tab -->
					<div class="tab"> 
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
							<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Subject</a></li>
							<li role="presentation">
							<a href="#messages" id="demo" aria-controls="messages" role="tab" data-toggle="tab" >Demo Videos</a></li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home">
								<p>The course is based on Maharashtra state board syllabus and as per prescribed textbooks. The course offers unlimited access to audio-visual content, practice exam, final exam, analytics based on adaptive learning, exam oriented question and answer in the form of notes . User can participate in discussion forums and can rate content based on his experience.</p>
								
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile">
								<div class="row">
									<?php $sn=0;
									while($row=$result->fetch_assoc()){ ?>
									
									<!-- Item Begins -->
									<div class="col-sm-6 col-md-3" style="padding-bottom:25px">
										<!-- News Wrapper -->
										<div class="news-wrap">
											<a href="#"><img class="img-responsive" src="uploads1/<?php echo $row['subcatimage'];?>" alt="..." height="320" width="417"></a>
											<!-- News Content -->
											<div class="news-content">
												
												<h4><a href="#"><?php echo $row['subcatname'];?></a></h4>
											</div><!-- News Content -->
										</div><!-- News Wrapper -->
									</div>
									<?php 
										} 
										$sn++;
									?>
								<!-- Column -->
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="messages">
								<div class="row">								
									<div class="col-sm-6 col-md-4" style="padding-bottom:25px">
										<div class="news-content">												
											<video width="320" height="250" controls controlsList="nodownload">
												<source src="video/The_wheels_on_the_bus_Final.mp4" type="video/mp4">			
											</video>
											<div><label style="margin-left:0px"><b>Subject : English - </b>The Wheels on the bus</label></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-4" style="padding-bottom:25px">
										<div class="news-content">											
											<video width="320" height="250" controls controlsList="nodownload">
												<source src="video/१_आला_पाउस_आला.mp4" type="video/mp4">
											</video>
											<div><style>label{margin-left:80px;}</style><label><b>विषय : मराठी -  </b>आला पाउस आला</label></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-4" style="padding-bottom:25px">
										<div class="news-content">					
											<video width="320" height="250" controls  controlsList="nodownload">
												<source src="video/46_saptahache_var.mp4" type="video/mp4">
											</video>
											<div><style>label{margin-left:80px;}</style><label><b>विषय : मराठी  - </b>सप्ताहाचे वार</label></div>
										</div>
									</div>									
								<!-- Column -->
								</div>
							</div>
						</div><!-- Tab Content -->
					</div><!-- Tab -->
					
					
					<!-- Related Products -->
					<div class="margin-top-50"> 
						<h4 class="title-simple">You might also Read : </h4>
							<div class="owl-carousel" 
							data-animatein="zoomIn" 
							data-animateout="slideOutDown" 
							data-margin="30" 
							data-stagepadding="" 
							data-loop="true" 
							data-merge="true" 
							data-nav="true"
							data-dots="false" 
							data-items="1"  data-mobile="1" data-tablet="2" data-desktopsmall="2"  data-desktop="4" 
							data-autoplay="true" 
							data-delay="3000" 
							data-navigation="true">
							
							<div class="item">
								<!-- Related Wrapper -->
								<div class="related-wrap">
									<!-- Related Image Wrapper -->
									<div class="img-wrap">
										<img height="500" width="500" alt="Related Product" class="img-responsive" src="uploads1/2rie.jpg">
									</div>
									<!-- Related Content Wrapper -->
									
								</div><!-- Related Wrapper -->
							</div><!-- Item -->
							
							<div class="item">
								<!-- Related Wrapper -->
								<div class="related-wrap">
									<!-- Related Image Wrapper -->
									<div class="img-wrap">
										<img height="500" width="500" alt="Related Product" class="img-responsive" src="uploads1/2rim.jpg">
									</div>
									<!-- Related Content Wrapper -->									
								</div><!-- Related Wrapper -->
							</div><!-- Item -->
							
							<div class="item">
								<!-- Related Wrapper -->
								<div class="related-wrap">
									<!-- Related Image Wrapper -->
									<div class="img-wrap">
										<img height="500" width="500" alt="Related Product" class="img-responsive" src="uploads1/parent.png">
									</div>
									<!-- Related Content Wrapper -->									
								</div><!-- Related Wrapper -->
							</div><!-- Item -->
							
							<div class="item">
								<!-- Related Wrapper -->
								<div class="related-wrap">
									<!-- Related Image Wrapper -->
									<div class="img-wrap">
										<img height="500" width="500" alt="Related Product" class="img-responsive" src="uploads1/kids zone.png">
									</div>
									<!-- Related Content Wrapper -->									
								</div><!-- Related Wrapper -->
							</div><!-- Item -->
						</div><!-- Owl -->
					</div><!-- Related Post -->
				</div><!-- Product Features -->
			</div><!-- Row -->
		</div><!-- Container -->
	</div><!-- Page Default -->
</div><!-- Page Main -->

<!-- Footer -->
<script>
function show(){
	var rest4=confirm('Your Payment Still Pending,do you want to continue?');
	if(rest4)
	{
		window.location="http://localhost/elearning/finalpayment.php";
	}	
}
function show1(){	
	window.location="http://localhost/elearning/course.php";	
}
</script>
<?php
include('footer.php');
?>