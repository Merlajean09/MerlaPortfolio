<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        <!-- title of site -->
        <title>Portfolio</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!--flat icon css-->
		<link rel="stylesheet" href="assets/css/flaticon.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!-- top-area Start -->
		<header class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">

			        <div class="container">

		<!-- Start Header Navigation -->
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				<i class="fa fa-bars"></i>
			</button>
    			<a class="navbar-brand" href="index.html">Merla Jean</a>
				</div><!--/.navbar-header-->
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
						<li class=" smooth-menu active"></li>
						<li class="smooth-menu"><a href="#welcome-hero">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resume <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="smooth-menu"><a href="#about">About</a></li>
								<li class="smooth-menu"><a href="#education">Education</a></li>
								<li class="smooth-menu"><a href="#skills">Skills</a></li>
								<li class="smooth-menu"><a href="#experience">Experience</a></li>
								<li class="smooth-menu"><a href="#webinars">Webinar</a></li>
								<li class="smooth-menu"><a href="#blogs">Blogs</a></li>
							</ul>
						</li>
						<li class="smooth-menu"><a href="#contact">Contact</a></li>
						<li class=""><a href="{{ route('login')}}">Login</a></li>
						<li class=""><a href="{{ route('register')}}">Register</a></li>
					</ul><!--/.nav -->
				</div><!-- /.navbar-collapse -->
			    </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->

		    <div class="clearfix"></div>

		</header><!-- /.top-area-->
		<!-- top-area End -->
	
		<!--welcome-hero start -->
		<section id="welcome-hero" class="welcome-hero">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="header-text">
							<h2>hi <span>,</span> i am <br> Merla Jean  <br> Ner <span>.</span>   </h2>
							<p>designer, photography and web developer</p>
						</div><!--/.header-text-->
					</div><!--/.col-->
				</div><!-- /.row-->
			</div><!-- /.container-->

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--about start -->
		<section id="about" class="about">
			<div class="section-heading text-center">
				<h2>about me</h2>
			</div>
			<div class="container">
			@foreach ($abouts as $about)
				<div class="about-content">
					<div class="row">
						<div class="col-sm-6">
							<div class="single-about-txt">
								<h3>{{$about->description}}</h3>
								<div class="row">
									<div class="col-sm-4">
										<div class="single-about-add-info">
											<h3>Phone</h3>
											<p>{{$about->phone}}</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-about-add-info">
											<h3>Email</h3>
											<p>{{$about->email}}</p>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-about-add-info">
											<h3>Address</h3>
											<p>{{$about->address}}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						<div class="col-sm-offset-1 col-sm-5">
							<div class="single-about-img">
								<img src="assets/images/about/profile.jpg" alt="profile_image">
								<div class="about-list-icon">
									<ul>
										<li>
											<a href="https://www.facebook.com/mer.la.904">
												<i  class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->
										<li>
											<a href="https://twitter.com/mj_ner09">
												<i  class="fa fa-twitter" aria-hidden="true"></i>
											</a>
											
										</li><!-- / li -->
										<li>
											<a href="https://www.linkedin.com/in/merla-jean-ner-41048a2bb/">
												<i  class="fa fa-linkedin" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->
										<li>
											<a href="https://www.instagram.com/nel_la0922/?hl=en">
												<i  class="fa fa-instagram" aria-hidden="true"></i>
											</a>
										</li><!-- / li -->
										
										
									</ul><!-- / ul -->
								</div><!-- /.about-list-icon -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</section><!--/.about-->
		<!--about end -->
		
			<!--education start -->
<section id="education" class="education">
	<div class="section-heading text-center">
		<h2>education</h2>
	</div>
	<div class="container">
		<div class="education-horizontal-timeline">
			<div class="row">
				@foreach ($education as $education)
				<div class="col-sm-4">
					<div class="single-horizontal-timeline">
						<div class="experience-time">
							<h2>{{$education->grade_level}}</h2>
							<h3>{{$education->school_year}}</h3>
						</div><!--/.experience-time-->
						<div class="timeline-horizontal-border">
							<i class="fa fa-circle" aria-hidden="true"></i>
							<span class="single-timeline-horizontal"></span>
						</div>
						<div class="timeline">
							<div class="timeline-content">
								<h4 class="title">{{$education->school_name}}</h4>
								<h5>{{$education->address}}</h5>
							</div><!--/.timeline-content-->
						</div><!--/.timeline-->
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section><!--/.education-->
<!--education end -->

<!--skills start -->
<section id="skills" class="skills">
	<div class="skill-content">
		<div class="section-heading text-center">
			<h2>skills</h2>
		</div>
		<div class="container">
			<div class="row">
				@foreach ($skills as $skill)
				<div class="col-md-6">
					<div class="single-skill-content">
						<div class="barWrapper">
							<span class="progressText">{{$skill->name}}</span>
							<div class="single-progress-txt">
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->percentage}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$skill->percentage}}%;">
									</div>
								</div>
								<h3>{{$skill->percentage}}%</h3>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.skill-content -->
</section><!--/.skills-->
<!--skills end -->

<!--experience start -->
		<section id="experience" class="experience">
			<div class="section-heading text-center">
				<h2>experience</h2>
			</div>
			<div class="container">
			@foreach ($experiences as $experience)
				<div class="experience-content">
						<div class="main-timeline">
							<ul>
								<li>
									<div class="single-timeline-box fix">
										<div class="row">
											<div class="col-md-5">
												<div class="experience-time text-right">
													<h2>TITLE</h2>
													<h3>{{$experience->title}}</h3>
												</div><!--/.experience-time-->
											</div><!--/.col-->
											<div class="col-md-offset-1 col-md-5">
												<div class="timeline">
													<div class="timeline-content">
														<h4 class="title">
															<span><i class="fa fa-circle" aria-hidden="true"></i></span>
															Details
														</h4>
														<p class="description">
															{{$experience->details}}
														</p>
													</div><!--/.timeline-content-->
												</div><!--/.timeline-->
											</div><!--/.col-->
										</div>
										@endforeach
									</div><!--/.single-timeline-box-->
							</ul>
						</div><!--.main-timeline-->
					</div><!--.experience-content-->
			</div>

		</section><!--/.experience-->
		<!--experience end -->

		<!--webinars start -->
<section id="webinars" class="webinars">
	<div class="section-heading text-center">
	<h2>webinars</h2> 
	</div>
	<div class="container"> 
		<div class="webinars-horizontal-timeline">
			<div class="row">
				@foreach ($webinars as $webinar)
				<div class="col-sm-4">
					<div class="single-horizontal-timeline">
						<div class="experience-time">
							<h3>{{$webinar->certificate}}</h3>
						</div><!--/.experience-time-->
						<div class="timeline-horizontal-border">
							<i class="fa fa-circle" aria-hidden="true"></i>
							<span class="single-timeline-horizontal"></span>
						</div>
						<div class="timeline">
							<div class="timeline-content">
								<h4 class="title">{{$webinar->agenda}}</h4>
								<h5></h5>
								<p class="description">
								{{$webinar->description}}</p>
							</div><!--/.timeline-content-->
						</div><!--/.timeline-->
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section><!--/.webinars-->
<!--webinars end -->


<!--blogs start -->
<section id="blogs" class="blogs">
    <div class="section-heading text-center">
        <h2>blogs</h2>
    </div>
    <div class="blogs-area">
        <div class="container">
            <!-- @php $count = 0; @endphp -->
            @foreach($blogs as $blog)
                <!-- @if($count % 2 == 0) -->
                    <div class="row">
                <!-- @endif -->
                    <div class="col-md-6">
                        <div class="item" style="margin-top: 20px;">
                            <center><h1>{{$blog->title}}</h1></center>
                            <a href="#">
                                <img src="{{'storage/'. $blog->image}}" alt="brand-image" style="max-width: 100%; height: auto;" />
                            </a>
                            <div class="item-description" style="margin-top: 20px;" > <!-- Adjust margin-top as needed -->
                                <h2>{{$blog->content}}</h2>
                            </div><!--/.item-description-->
                        </div><!--/.item-->
                    </div><!--/.col-md-6-->
                <!-- @if($count % 2 != 0 || $loop->last) -->
                    </div><!--/.row-->
                <!-- @endif -->
                <!-- @php $count++; @endphp -->
            @endforeach
        </div><!--/.container-->
    </div><!--/.blogs-area-->
</section><!--/.blogs-->
<!--blogs end -->

<!--contact start -->
		<section id="contact" class="contact">
			<div class="section-heading text-center">
				<h2>contact me</h2>
			</div>
			<div class="container">
				<div class="contact-content">
					<div class="row">
						<div class="col-md-offset-1 col-md-5 col-sm-6">
							<div class="single-contact-box">
								<div class="contact-form">
									<form method="POST" action="{{route('contact.store')}}">
									@csrf
										<div class="row">
											<div class="col-sm-6 col-xs-12">
												<div class="form-group">
												  <input type="text" class="form-control" id="first_name" placeholder="First_name*" name="first_name">
												</div><!--/.form-group-->
											</div><!--/.col-->
											<div class="col-sm-6 col-xs-12">
												<div class="form-group">
													<input type="text" class="form-control" id="last_name" placeholder="Last_name*" name="last_name">
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="text" class="form-control" id="email" placeholder="Email*" name="email">
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<textarea class="form-control" rows="8" id="comment" name="message" placeholder="Message" ></textarea>
												</div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
										<div class="row">
											<div class="col-sm-12">
												<div class="single-contact-btn">
												<center><button type="submit" class="contact-btn" >submit</button></center>
												</div><!--/.single-single-contact-btn-->
											</div><!--/.col-->
										</div><!--/.row-->
									</form><!--/form-->
								</div><!--/.contact-form-->
							</div><!--/.single-contact-box-->
						</div><!--/.col-->
						<div class="col-md-offset-1 col-md-5 col-sm-6">
							<div class="single-contact-box">
								<div class="contact-adress">
									<div class="contact-add-head">
										<h3>Merla Jean Ner</h3>
										<p>designer, photography & web developer</p>
									</div>
									<div class="contact-add-info">
										<div class="single-contact-add-info">
											<h3>phone</h3>
											<p>09064219655</p>
										</div>
										<div class="single-contact-add-info">
											<h3>email</h3>
											<p>mj.ner@mlgcl.edu.ph</p>
										</div>
										<div class="single-contact-add-info">
											<h3>Address</h3>
											<p>Brgy. Cacao Hilongos Leyte</p>
										</div>
									</div>
								</div><!--/.contact-adress-->
								<div class="hm-foot-icon">
									<ul>
										<li><a href="https://www.facebook.com/mer.la.904"><i class="fa fa-facebook"></i></a></li><!--/li-->
										<li><a href="https://twitter.com/mj_ner09"><i class="fa fa-twitter"></i></a></li><!--/li-->
										<li><a href="https://www.linkedin.com/in/merla-jean-ner-41048a2bb/"><i class="fa fa-linkedin"></i></a></li><!--/li-->
										<li><a href="https://www.instagram.com/nel_la0922/?hl=en"><i class="fa fa-instagram"></i></a></li><!--/li-->
									</ul><!--/ul-->
								</div><!--/.hm-foot-icon-->
							</div><!--/.single-contact-box-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.contact-content-->
			</div><!--/.container-->

		</section><!--/.contact-->
		<!--contact end -->

		<!--footer-copyright start-->
		<footer id="footer-copyright" class="footer-copyright">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<p>
						&copy; copyright yourname. design and developed by <a href="https://www.themesine.com/">themesine</a>
					</p><!--/p-->
				</div><!--/.text-center-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" ></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-copyright-->
		<!--footer-copyright end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>
		
		<!-- jquery.sticky.js -->
		<script src="assets/js/jquery.sticky.js"></script>
		
		<!-- for progress bar start-->

		<!-- progressbar js -->
		<script src="assets/js/progressbar.js"></script>

		<!-- appear js -->
		<script src="assets/js/jquery.appear.js"></script>

		<!-- for progress bar end -->

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>