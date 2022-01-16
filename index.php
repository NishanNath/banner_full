<!DOCTYPE html>
<?php
session_start();
require_once ('include/db.php');

?>
<html>
	<head>
		<title>
		
		</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Raleway:400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/all.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/slick.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		
	</head>
	<body>
		<div class="preloader">
			<div class="preloader_inner">
				<img src="images/preloaders.gif">
				
			</div>
			
		</div>
		<!--navbar start-->
		<nav class="navbar navbar-expand-md custom_nav justify-content-center">
			<div class="container" >
				<a class="navbar-brand logo" href="#" >
					<img src="images/logo.png" class="w-100">
				</a>
				<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#my_nav"  aria-expanded="false" aria-label="Toggle navigation">
				<span class="sr-only"></span>
				<i class="icon-bar"></i>
				<i class="icon-bar"></i>
				<i class="icon-bar"></i>
				</button>
					
								<div class="collapse navbar-collapse" id="my_nav">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#banner">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#work_part">Work</a>
						</li><li class="nav-item">
						<a class="nav-link" href="#service_part">Services</a>
					</li>
					
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#team_part">Team <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#prices_part">Prices</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#Blog_part">Blog</a>
					</li><li class="nav-item">
					<a class="nav-link" href="#map_form_part">Contact</a>
				</li>
				
			</ul>
		</div>
	</div>
</nav>
<!--navbar end-->
<!--banner start-->
<section id="banner">
	<?php 
	$select_query="SELECT * FROM banner  WHERE active_status=1 ORDER BY ID DESC LIMIT 3";
	$from_db= mysqli_query($db_connect, $select_query);
	foreach ($from_db as $banner):
		?>
	<div class="banner_item" style="background: url('<?=$banner['images_location']?>');">
		<div class="banner_caption">
			<h1><?=$banner['Head']?></h1>
			<p class="d-none d-md-inline-block"><?=$banner['Detail']?></p>
			<a href="">read more</a>
			<a href="">buy now</a>
		</div>
	</div>
	<?php endforeach?>
	<!-- <div class="banner_item" style="background: url('images/banner2.jpg');">
		<div class="banner_caption">
			<h1>We are Creative Web Stuff</h1>
			<p class="d-none d-md-inline-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, quidem! Consequuntur quod laudantium ducimus laborum est molestias possimus!</p>
			<a href="">buy now</a>
		</div>
	</div>
	<div class="banner_item" style="background: url('images/banner3.jpg');">
		<div class="banner_caption">
			<h1>We are Creative Web Stuff</h1>
			<p class="d-none d-md-inline-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, quidem! Consequuntur quod laudantium ducimus laborum est molestias possimus!</p>
			<a href="">read more</a>
			
		</div>
	</div> -->
</section>
<!--banner end-->
<!--about strat-->
<section id="about">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-lg-9 text-center">
				<div class="aboutheading">
					<h2>About us </h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 about_left">
				<div class="about_text">
					<h3><i class="fas fa-globe d-md-none"></i> Web Design <i class="fas fa-globe d-none d-md-inline-block "></i></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam amet, eos voluptate hic modi ab maiores esse.eos voluptate hic modi ab maiores esse.</p>
				</div>
				<div class="about_text">
					<h3><i class="far fa-gem d-md-none"></i> Our Misson  <i class="fas fa-globe d-none d-md-inline-block "></i></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam amet, eos voluptate hic modi ab maiores esse.eos voluptate hic modi ab maiores esse.</p>
				</div>
				<div class="about_text">
					<h3><i class="far fa-gem d-md-none"></i> Responsive Design<i class="fas fa-globe d-none d-md-inline-block "></i></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam amet, eos voluptate hic modi ab maiores esse.eos voluptate hic modi ab maiores esse.</p>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 d-none d-md-inline-block about_middle">
				<div class="middle_line">
				</div>
				
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 about_right">
				<div class="about_text">
					<h3><i class="far fa-gem d-md-inline-block "></i> Web Development </h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam amet, eos voluptate hic modi ab maiores esse.eos voluptate hic modi ab maiores esse.</p>
				</div>
				<div class="about_text">
					<h3><i class="far fa-gem d-md-inline-block "></i> Creative Design </h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam amet, eos voluptate hic modi ab maiores esse.eos voluptate hic modi ab maiores esse.</p>
				</div>
				<div class="about_text">
					<h3><i class="far fa-gem  d-md-inline-block "></i> 24/7 Live Support </h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam amet, eos voluptate hic modi ab maiores esse.eos voluptate hic modi ab maiores esse.</p>
				</div>
				
			</div>
		</div>
	</div>
</section>
<!-- about part end-->
<!-- counter part start-->
<div id="counter_part">
	<div class="container">
		<div class="row justify-content-center text-center ">
			<div class="cl-lg-3 cl-sm-6 cl-xs-6  text-center" >
				<div class="counter_body">
					<i class="fab fa-free-code-camp"></i>
					<span class="counter" >200</span>
					<p>TOTAL EMPLOYEE</p>
				</div>
			</div>
			<div class="cl-lg-3 cl-sm-6 cl-xs-6 text-center">
				<div class="counter_body">
					<i class="far fa-gem"></i>
					<span class="counter" >150</span>

					<p>PROJECT</p>
				</div>
			</div>
			<div class="cl-lg-3 cl-sm-6 cl-xs-6 text-center">
				<div class="counter_body">
					<i class="fab fa-reddit-alien"></i>
					<span class="counter">50</span>
					<p>EXPERT TEAM</p>
				</div>
			</div>
			<div class="cl-lg-3 cl-sm-6 cl-xs-6 text-center">
				<div class="counter_body">
					<i class="fas fa-user"></i>
					<span class="counter">100</span>
					<p>CLIENT</p>
				</div>
			</div>
			
		</div>
	</div>
</div>
<!--about end-->
<!--work part start-->
<section id="work_part">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="work_heading">
					<h2>OUR WORK</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.
					</p>
					
				</div>
			</div>
			
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-12 col-md-12">
				<div class="work_filter">
					<ul>
						<li class="active" data-filter="all">ALL</li>
						<li data-filter="1">WEB-DESIGN</li>
						<li data-filter="2">Graphic</li>
						<li data-filter="3">Develop</li>
						<li data-filter="4">APPES</li>
						<li data-filter="5">PHOTO</li>
						
					</ul>
				</div>
				
			</div>
			
		</div>
	</div>
	<div class="filter-container">
		<div class="row px-0 mx-0">
			
			<div class="col-lg-3 col-md-4 col-sm-6 px-0 mx-0 filtr-item" data-category="1, 3">
				<div class="work_item ">
					<img src="images/work-1.jpg" class="w-100">
					<div class="over text-center">
						<div class="over_text">
							<h3>Enter Project Title</h3>
							<p>Web Design</p>
							<a href="images/work-1.jpg"><i class="far fa-eye"></i></a>
							<a href="#banner"><i class="fas fa-link"></i></a>
							
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 px-0 mx-0 filtr-item" data-category="5">
				<div class="work_item ">
					<img src="images/work-8.jpg" class="w-100">
					<div class="over text-center">
						<div class="over_text">
							<h3>Enter Project Title</h3>
							<p>Apps Design</p>
							<a href="images/work-8.jpg"><i class="far fa-eye"></i></a>
							<a href="#banner"><i class="fas fa-link"></i></a>
							
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 px-0 mx-0 filtr-item" data-category="1, 3">
				<div class="work_item ">
					<img src="images/work-3.jpg" class="w-100">
					<div class="over text-center">
						<div class="over_text">
							<h3>Enter Project Title</h3>
							<p>Web Design & Develop</p>
							<a href="images/work-3.jpg"><i class="far fa-eye"></i></a>
							<a href="#banner"><i class="fas fa-link"></i></a>
							
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 px-0 mx-0 filtr-item" data-category="4">
				<div class="work_item ">
					<img src="images/work-7.jpg" class="w-100">
					<div class="over text-center">
						<div class="over_text">
							<h3>Enter Project Title</h3>
							<p>Apps Design</p>
							<a href="images/work-7.jpg"><i class="far fa-eye"></i></a>
							<a href="#banner"><i class="fas fa-link"></i></a>
							
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 px-0 mx-0 filtr-item" data-category="5">
				<div class="work_item ">
					<img src="images/work-5.jpg" class="w-100">
					<div class="over text-center">
						<div class="over_text">
							<h3>Enter Project Title</h3>
							<p>Office Photo</p>
							<a href="images/work-5.jpg"><i class="far fa-eye"></i></a>
							<a href="#banner"><i class="fas fa-link"></i></a>
							
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 px-0 mx-0 filtr-item" data-category="2,3">
				<div class="work_item ">
					<img src="images/work-4.jpg" class="w-100">
					<div class="over text-center">
						<div class="over_text">
							<h3>Enter Project Title</h3>
							<p>Design & Develop</p>
							<a href="images/work-4.jpg"><i class="far fa-eye"></i></a>
							<a href="#banner"><i class="fas fa-link"></i></a>
							
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 px-0 mx-0 filtr-item" data-category="4">
				<div class="work_item ">
					<img src="images/work-6.jpg" class="w-100">
					<div class="over text-center">
						<div class="over_text">
							<h3>Enter Project Title</h3>
							<p>Office Photo</p>
							<a href="images/work-6.jpg"><i class="far fa-eye"></i></a>
							<a href="#banner"><i class="fas fa-link"></i></a>
							
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 px-0 mx-0 filtr-item" data-category="2,3">
				<div class="work_item" >
					<img src="images/work-2.jpg" class="w-100">
					<div class="over text-center">
						<div class="over_text">
							<h3>Enter Project Title</h3>
							<p>Design & Develop</p>
							<a href="images/work-2.jpg"><i class="far fa-eye"></i></a>
							<a href="#banner"><i class="fas fa-link"></i></a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--work part end-->
<!--services part start-->
<section id="service_part">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-12 text-center">
				<div class="service_heading">
					<h2>Our Services</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.
					</p>
					
				</div>
			</div>
			
		</div>
		<div class="row service_items text-center">
			<div class="col-lg-4 col-md-6 col-sm-12 px-0 mx-0">
				<div class="service_item">
					<i class="far fa-gem"></i>
					<h3>Web design</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 px-0 mx-0">
				<div class="service_item">
					<i class="fa fa-database"></i>
					<h3>Web design</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 px-0 mx-0 ">
				<div class="service_item">
					<i class="far fa-lightbulb"></i>
					<h3>Web design</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 px-0 mx-0">
				<div class="service_item">
					<i class="fas fa-code"></i>
					<h3>Web design</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 px-0 mx-0">
				<div class="service_item">
					<i class="fa fa-cubes"></i>
					<h3>Web design</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 px-0 mx-0 ">
				<div class="service_item">
					<i class="fa  fa-snowflake"></i>
					<h3>Web design</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quisquam, blanditiis iste, sequi fuga ipsum assumenda unde soluta, fugit, cumque impedit. Quo ex expedita !
					</p>
				</div>
			</div>
		</div>
		
	</div>
</section>
<!--services part end-->
<!--skill part start-->
<div id="skill_part">
	
	<div class="row px-0 mx-0 ">
		<div class="col-lg-6 col-md-6 mx-0 px-0 bx_shadow ">
			<div class="skill_left_part text-left">
				<h2>SOME OF OUR SKILLS</h2>
				<p>
					
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quidem odio a, consequatur quibusdam sunt veritatis ea! Et dolore architecto harum aliquam, in quis iusto quo, similique dignissimos. Laboriosam, minima?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quidem odio a, consequatur quibusdam sunt veritatis ea! Et dolore architecto harum aliquam, in quis iusto quo, similique dignissimos. Laboriosam, minima?
				</p>
				
			</div>
			
		</div>
		<div class="col-lg-6 col-md-6 mx-0 px-0 ">
			<div class="skill_right_part text-left">
				<span> Web Design</span>
				<div id="bar1" class="barfiller">
					<span class="tip"></span>
					<span class="fill" data-percentage="85"></span>
				</div>
				<span> WEB DEVELOPMENT</span>
				<div id="bar2" class="barfiller">
					<span class="tip"></span>
					<span class="fill" data-percentage="75"></span>
				</div>
				<span> GRAPHIC DESIGN</span>
				<div id="bar3" class="barfiller">
					<span class="tip"></span>
					<span class="fill" data-percentage="55"></span>
				</div>
				<span> MANAGMENT</span>
				<div id="bar4" class="barfiller">
					<span class="tip"></span>
					<span class="fill" data-percentage="60"></span>
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	
	
</div>
<!--skill part end-->
<section id="team_part">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="team_heading">
					<h2>OUR TEAM</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.
					</p>
				</div>
				
			</div>
			
		</div>
		<div class="row  px-0 mx-0 team_slide">
			<div class="col-lg-3 col-sm-4 text-center">
				<div class="team_img">
					<img src="images/team_1.jpg">
					
				</div>
			</div>
			<div class="col-lg-3 col-sm-4 text-center">
				<div class="team_img">
					<img src="images/team_2.jpg">
					
				</div>
			</div>
			<div class="col-lg-3 col-sm-4 text-center">
				<div class="team_img">
					<img src="images/team_3.jpg">
					
				</div>
			</div>
			<div class="col-lg-3 col-sm-4 text-center">
				<div class="team_img">
					<img src="images/team_4.jpg">
					
				</div>
			</div>
			<div class="col-sm-4 ">
				<div class="team_img">
					<img src="images/team_2.jpg" alt="">
				</div>
			</div>
			<div class="col-sm-4 ">
				<div class="team_img">
					<img src="images/team_4.jpg" alt="">
				</div>
			</div>
			
		</div>
		<div>
			<div class="row justify-content-center member_info">
				<div class="col-lg-8 col-md-6 col-sm-6   ">
					<div class="detail">
						<h3>
						HERMAN MILLER
						</h3>
						<h6>Web Developer</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.
						</p>
						<a href=""><i class="fab fa-facebook-f"></i></a>
						<a href=""><i class="fab fa-twitter"></i></a>
						<a href=""><i class="fab fa-linkedin-in"></i></a>
						<a href=""><i class="fab fa-youtube"></i></a>
						<a href=""><i class="fab fa-google-plus-g"></i></a>
					</div>
					
				</div>
				<div class="col-md-10 col-md-offset-1 ">
					<div class="detail">
						<h3>
						Jhone Doe
						</h3>
						<h6>Web Developer</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate
						</p>
						<a href=""><i class="fab fa-facebook-f"></i></a>
						<a href=""><i class="fab fa-twitter"></i></a>
						<a href=""><i class="fab fa-linkedin-in"></i></a>
						<a href=""><i class="fab fa-youtube"></i></a>
						<a href=""><i class="fab fa-google-plus-g"></i></a>
					</div>
					
				</div>
				<div class="col-lg-8 col-md-6 col-sm-6  ">
					<div class="detail">
						<h3>
						John Toi
						</h3>
						<h6>Web Developer</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.
						</p>
						<a href=""><i class="fab fa-facebook-f"></i></a>
						<a href=""><i class="fab fa-twitter"></i></a>
						<a href=""><i class="fab fa-linkedin-in"></i></a>
						<a href=""><i class="fab fa-youtube"></i></a>
						<a href=""><i class="fab fa-google-plus-g"></i></a>
					</div>
					
				</div>
				<div class="col-lg-8 col-md-6 col-sm-6  ">
					<div class="detail">
						<h3>
						Jhone Doe
						</h3>
						<h6>Web Developer</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate
						</p>
						<a href=""><i class="fab fa-facebook-f"></i></a>
						<a href=""><i class="fab fa-twitter"></i></a>
						<a href=""><i class="fab fa-linkedin-in"></i></a>
						<a href=""><i class="fab fa-youtube"></i></a>
						<a href=""><i class="fab fa-google-plus-g"></i></a>
					</div>
				</div>
				
				<div class="col-lg-8 col-md-6 col-sm-6   ">
					<div class="detail">
						<h3>
						HERMAN MILLER
						</h3>
						<h6>Web Developer</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.
						</p>
						<a href=""><i class="fab fa-facebook-f"></i></a>
						<a href=""><i class="fab fa-twitter"></i></a>
						<a href=""><i class="fab fa-linkedin-in"></i></a>
						<a href=""><i class="fab fa-youtube"></i></a>
						<a href=""><i class="fab fa-google-plus-g"></i></a>
					</div>
					
				</div>
				<div class="col-lg-8 col-md-6 col-sm-6   ">
					<div class="detail">
						<h3>
						Jhone Doe
						</h3>
						<h6>Web Developer</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad ipsa minus earum nulla accusamus soluta harum, error cupiditate illo nostrum, maiores, aspernatur provident necessitatibus quasi praesentium. Exercitationem, quas, mollitia? Nobis.
						</p>
						<a href=""><i class="fab fa-facebook-f"></i></a>
						<a href=""><i class="fab fa-twitter"></i></a>
						<a href=""><i class="fab fa-linkedin-in"></i></a>
						<a href=""><i class="fab fa-youtube"></i></a>
						<a href=""><i class="fab fa-google-plus-g"></i></a>
					</div>
					
				</div>
				
				
			</div>
		</div>
		
	</div>
	
</section>
<!--team part end-->
<!--comment part start-->
<div id="comment_part">
	<div class="container ">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="comment_heading">
					<h2>Feedback</h2>
				</div>
				<div class="comment">
					<div class="comment_element">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore consequuntur odio perspiciatis eos itaque, recusandae repellat assumenda ratione maiores officia eveniet amet fugit repellendus enim culpa distinctio, adipisci atque molestiae?
						</p>
						<h3>Smith,
						<span>Client</span>
						</h3>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						
					</div>
					<div class="comment_element">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore consequuntur odio perspiciatis eos itaque, recusandae repellat assumenda ratione maiores officia eveniet amet fugit repellendus enim culpa distinctio, adipisci atque molestiae?
						</p>
						<h3>Smith,
						<span>Client</span>
						</h3>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<!--comment part end-->
<!--price part start-->
<section id="prices_part">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="prices_heading">
					<h2>Our plans</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.
					</p>
					
				</div>
				
			</div>
			
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<div class="prices_item">
					<h2>Standard</h2>
					<h3>
					$10
					<span>Per Month</span>
					</h3>
					<p>100 GB Monthly Bandwith</p>
					<p>30 Email Accounts</p>
					<p>Unlimited Subdomains</p>
					<p>24/7 Support</p>
					<a href="#"> Buy Now</a>
					
					
				</div>
				
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<div class="prices_item">
					<h2>Business</h2>
					<h3>
					$50
					<span>Per Month</span>
					</h3>
					<p>100 GB Monthly Bandwith</p>
					<p>30 Email Accounts</p>
					<p>Unlimited Subdomains</p>
					<p>24/7 Support</p>
					<a href="#"> Buy Now</a>
					
					
				</div>
				
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<div class="prices_item">
					<h2>Premimum</h2>
					<h3>
					$80
					<span>Per Month</span>
					</h3>
					<p>100 GB Monthly Bandwith</p>
					<p>30 Email Accounts</p>
					<p>Unlimited Subdomains</p>
					<p>24/7 Support</p>
					<a href="#"> Buy Now</a>
					
					
				</div>
				
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<div class="prices_item">
					<h2>Ultimate</h2>
					<h3>
					$100
					<span>Per Month</span>
					</h3>
					<p>100 GB Monthly Bandwith</p>
					<p>30 Email Accounts</p>
					<p>Unlimited Subdomains</p>
					<p>24/7 Support</p>
					<a href="#"> Buy Now</a>
					
					
				</div>
				
			</div>
		</div>
		
	</div>
	
</section>
<!--price part end-->
<!--video part start-->
<div  id="video_part" >
	<div  class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<a href=""><i class="fab fa-youtube"></i></a>
				
			</div>
			
		</div>
		
	</div>
</div>
<!--video part end-->
<!--Blog part start-->
<section id="Blog_part">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="Blog_heading">
					<h2>Our Blog</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.
					</p>
					
				</div>
				
			</div>
			
		</div>
		<div class="row justify-content-center blog px-0 mx-0">
			<div class="col-sm-12 col-lg-4 px-0 mx-0">
				<div class="blog_post">
					<a href="">
						<img src="images/blog-3.jpg" >
					</a>
					
					<h2>Blog Post Title Here</h2>
					<h3>
					by <span>admin |</span> December 30, 2016. at 11:00 AM
					</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi beatae aut in, commodi dolorem ad adipisci autem debitis delectus alias nobis fugit repudiandae voluptate, minus laboriosam consequatur aliquam molestias nisi.
					</p>
					<a href="#">Read More..</a>
				</div>
			</div>
			<div class="col-sm-12 col-lg-4 px-0 mx-0">
				<div class="blog_post">
					<a href="">
						<img src="images/blog-2.jpg" >
					</a>
					<h2>Blog Post Title Here</h2>
					<h3>
					by <span>admin |</span> December 30, 2016. at 11:00 AM
					</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi beatae aut in, commodi dolorem ad adipisci autem debitis delectus alias nobis fugit repudiandae voluptate, minus laboriosam consequatur aliquam molestias nisi.
					</p>
					<a href="#">Read More..</a>
				</div>
			</div>
			<div class="col-sm-12 col-lg-4 px-0 mx-0">
				<div class="blog_post">
					<a href="">
						<img src="images/blog-3.jpg" >
					</a>
					<h2>Blog Post Title Here</h2>
					<h3>
					by <span>admin |</span> December 30, 2016. at 11:00 AM
					</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi beatae aut in, commodi dolorem ad adipisci autem debitis delectus alias nobis fugit repudiandae voluptate, minus laboriosam consequatur aliquam molestias nisi.
					</p>
					<a href="#">Read More..</a>
				</div>
			</div>
			<div class="col-sm-12 col-lg-4 px-0 mx-0">
				<div class="blog_post">
					<a href="">
						<img src="images/blog-1.jpg" >
					</a>
					<h2>Blog Post Title Here</h2>
					<h3>
					by <span>admin |</span> December 30, 2016. at 11:00 AM
					</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi beatae aut in, commodi dolorem ad adipisci autem debitis delectus alias nobis fugit repudiandae voluptate, minus laboriosam consequatur aliquam molestias nisi.
					</p>
					<a href="#">Read More..</a>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!--Blog part end-->
<!--client part start-->
<div id="Client_part">
	<div class="container">
		<div class="row justify-content-center Client">
			<div class="col-sm-4">
				<div class="client_logo">
					<a href="">
						<img src="images/client_logo_1.png">
					</a>
				</div>
				
			</div>
			<div class="col-sm-4">
				<div class="client_logo">
					<a href="">
						<img src="images/client_logo_2.png">
					</a>
				</div>
				
			</div>
			<div class="col-sm-4">
				<div class="client_logo">
					<a href="">
						<img src="images/client_logo_3.png">
					</a>
				</div>
				
			</div>
			<div class="col-sm-4">
				<div class="client_logo">
					<a href="">
						<img src="images/client_logo_1.png">
					</a>
				</div>
				
			</div>
			<div class="col-sm-4">
				<div class="client_logo">
					<a href="">
						<img src="images/client_logo_2.png">
					</a>
				</div>
				
			</div>
			<div class="col-sm-4">
				<div class="client_logo">
					<a href="">
						<img src="images/client_logo_3.png">
					</a>
				</div>
				
			</div>
			<div class="col-sm-4">
				<div class="client_logo">
					<a href="">
						<img src="images/client_logo_1.png">
					</a>
				</div>
				
			</div>
			<div class="col-sm-4">
				<div class="client_logo">
					<a href="">
						<img src="images/client_logo_2.png">
					</a>
				</div>
				
			</div>
			<div class="col-sm-4">
				<div class="client_logo">
					<a href="">
						<img src="images/client_logo_3.png">
					</a>
				</div>
				
			</div>
		</div>
		
	</div>
	
</div>
<!--client part end-->
<!--map & form start-->
<section id="map_form_part">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="contact_heading">
					<h2>Contact Us</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.
					</p>
					
				</div>
			</div>
			
		</div>
		
	</div>
	
	<div class="row px-0 mx-0 ">
		<div class="col-lg-6 col-md-6 mx-0 px-0 ">
			<div class="map_part text-left">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233667.822391377!2d90.27923731743151!3d23.7808874568017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1625837167390!5m2!1sen!2sbd" class="map" allowfullscreen="" loading="lazy"></iframe>
				
			</div>
			
		</div>
		<div class="col-lg-6 col-md-6 mx-0 px-0 bx_shadow ">
			<div class="contact_part text-center">
				<h2>Get In Touch</h2>
				<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
						<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </symbol>
                    </svg>
				<?php
                        if (isset($_SESSION['massage_success'])){
                    ?>
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        <div>
                        <?php
                                echo $_SESSION['massage_success'];
                                unset($_SESSION['massage_success']);
                            ?>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
				<form action="massage/massage.php" method="post">
					<div class="row">
						
						<div class="col-md-6  form">
							
						<?php
								if (isset($_SESSION['Name_error'])):
															
							?>
							<p class="text-danger mt-0 alart Name">
								
								<?php echo $_SESSION['Name_error'];
									unset($_SESSION['Name_error']);
								?>
							</p>
						<?php endif?>
							<input type="text" name="Name" class="form_input" placeholder="Name">
							
						</div>
						<div class="col-md-6 pr form ">
							
						<?php
								if (isset($_SESSION['Email_error'])):
															
							?>
							<p class="text-danger mt-0 alart Email">
								
								<?php echo $_SESSION['Email_error'];
									unset($_SESSION['Email_error']);
								?>
							</p>
						<?php endif?>
							<input type="email" name="Email" class="form_input" placeholder="Email">
						</div>
						
					</div>
					<div class="form">
					
					<?php
								if (isset($_SESSION['Subject_error'])):
															
							?>
							<p class="text-danger mt-0 alart subject">
								
								<?php echo $_SESSION['Subject_error'];
									unset($_SESSION['Subject_error']);
								?>
							</p>
						<?php endif?>
						<input type="text" name="Subject" class="form_input" placeholder="Subject">
					</div>
					<div class="form">
					
					<?php
								if (isset($_SESSION['Massage_error'])):
															
							?>
							<p class="text-danger mt-0 alart massage">
								
								<?php echo $_SESSION['Massage_error'];
									unset($_SESSION['Massage_error']);
								?>
							</p>
						<?php endif?>
						<textarea name="Massage" class="form_input textarea " placeholder="Massage"></textarea>
					</div>
					<div class="form text-center">
						<input type="submit" name="" class="btn" value="Submit">
					</div>
				</form>
				
			</div>
			
		</div>
		
	</div>
	
	
	
</section>
<!--map & form end-->
<!--footer-->
<div id="footer">
	<div class="b2t">
		<i class="fas fa-arrow-up"></i>
	</div>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<img src="images/logo.png" >
			</div>
		</div>
		<div class="row justify-content-center text-center">
			<div class="col-lg-4">
				<div class="address">
					<i class="fas fa-home"></i>
					Momtaz Plaza (4th Floor) House#7, <br> Road#4, Dhanmondi Dhaka-1205. Bangladesh
					
				</div>
			</div>
			<div class="col-lg-4">
				<div class="address">
					<i class="fas fa-phone-volume"></i>  +8801624657136 <br>
					<i class="fas fa-phone-volume"></i>  +8801790290976
					
				</div>
			</div>
			<div class="col-lg-4">
				<div class="address">
					<a href="mailto: nishandebnath1122@gmail.com"><i class="fas fa-envelope"></i>  nishandebnath1122@gmail.com</a>
					
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-3 text-center">
				<div class="social_media">
					<i class="fab fa-facebook-f"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-linkedin-in"></i>
					<i class="fab fa-google"></i>
					<i class="fab fa-behance"></i>
				</div>
			</div>
		</div>
		
	</div>
	
</div>
<!--footer-->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.barfiller.js"></script>
<!-- <script type="text/javascript" src="js/jquery.scrollspy.js"></script> -->
<script type="text/javascript" src="js/jquery.filterizr.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>