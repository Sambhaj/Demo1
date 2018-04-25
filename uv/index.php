
<?php 
	include('config.php'); // // include database file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Home | Welcome To UV Advisory </title>
	<link rel="stylesheet" href="styles.css" />

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
			<link rel="shortcut icon" type="image/png" href="images/ico/logo.png"  width="16" height="16">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
			<div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +91 9757129164</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://in.linkedin.com/in/uttara-vaid-8b745234" target="blank"><i class="fa fa-linkedin"></i></a></li> 
                                
                            </ul>
                           
                       </div>
                    </div>
                </div>
               
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/ico/logo1.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
						<li ><a href="services.php" >Services </a></li>
                        <li><a href="clientele.html">Clientele</a></li>
                        <li><a href="#">Media Presence</a></li>
                       
                        <li><a href="http://liabilityleanings.blogspot.in/" target="_blank">Blog</a></li> 
                        <li><a href="contact-us.html">Contact Us</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Get to Know How Insurance Really Works...</h1>
                                    <h2 class="animation animated-item-2"></h2>
                                   
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img1.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Take Away The Risk And You Can Do Anything</h1>
<!--                                     <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
 -->                                    
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">All Your Protection Under One Roof</h1>
<!--                                     <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
 --><!--                                     <a class="btn-slide animation animated-item-3" href="#">Read More</a>
 -->                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Our Vision</h2>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                      <img src="images/vision1.jpg" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    </div><!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
					  <div class="feature-wrap" style="align:justify">
                          
                            <h2 style="color:#2D7DA4;">I have a dream </h2>
                            <h3>Through Uttara Vaid Advisory, I hope to 
							<ul>
                                  <li>Be of service to all three main constituents of the General Insurance Industry viz, the Insureds, the Brokers and the Insureds</li> 
                                  <li>Provide a neutral technical outsourcing platform to the Industry on                     complex lines of business</li>
                                  <li>Bring international best practices to the Indian Insurance Industry</li>
                                  <li>Bring the technical aspects back into winning deals</li>
							</ul></h3> <br>
                            <h2 style="color:#6AA42F;">For Brokers </h2>
                            <h3><ul>
							     <li>Help in acquiring and servicing complex liability accounts</li>
                                 <li>Doing contractual reviews for their clients and advising them both prior and post contract finalisation on the appropriateness and budgetary costs thereof</li>
                                 <li>Offering a technical audit of the liability policies placed through them</li>
                                 <li>Mentoring their staff on a continuous basis to  achieve excellence in operations including world class documentation and domain knowledge, skill upgradation and training </li>
                                 <li>Offering help in technical literature, brochures, newsletters</li></h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap" style="align:justify">
                            
                            <h2 style="color:#FFBD20;">For Insureds</h2>
                            <h3><ul><li>Complement their risk management processes , help them identify and manage their risks well using both contractual and financial  risk transfer mechanisms. 
                             <li>Contractual reviews – standard contracts and new business opportunity contracts, from their customers and to their suppliers 
                             <li>Help India Inc buy insurance optimally </li>
                             <li>Identify suitable Affinity Opportunities </li>
                             <li>Policy Reviews, Quote Reviews,  Technical Audits</li>
                              <li>Technical Advice on Claims </li>
							  </ul></h3><br>
                              <h2 style="color:#db3615;"> For Insurance Companies</h2>
                            <h3><ul><li>Complement their Liability departments in the following aspects :
                              <ul><li>Advice on best-in-class Policy wording filing and approval 
                               <li>Setting up underwriting protocols</li> 
                                    <li>Mentoring their staff on a continuous basis to achieve operational excellence and domain knowledge </li> 
                                    <li>Pre-launch and Competition Policy Review </li> 
                                    <li>Undertaking  technical audit </li> 
							  </ul>
                                    <li>Identifying suitable Affinity opportunities and implementing them </li> 
                                    <li>Technical Advice on Claims </li> </ul></h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <img src="images/vision2.jpg" width="500px" height="500px" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    </div><!--/.col-md-4-->

                    <!-- <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                           
                            <h2>Sed do eiusmod</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <!-- <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                           
                            <h2>Labore et dolore</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div> --> <!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Uttara Vaid </h2>
                <p class="lead" align="justify">An unmatched profile for a senior role which needs a skill set that straddles across underwriting, product development, claims and reinsurance 
                 Respected across the Indian Insurance Industry as a thought leader with unrivalled experience and expertise, she has worked in extremely senior capacities in insurance companies and broking organisations. In all her roles she has successfully steered her organisations through the era of transformation witnessed in the Indian Insurance industry from the setting up of private insurance companies, to achieving robust profitable operations, to successful transitioning into detariffed environments. 
                </p>
			</div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                               <p>Fun is like Life Insurance;The older you get,the more it costs.</p>
                                <a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                               <p>Its never to early to begin planning for retirement. </p>
                                <a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                               <p>Protecting things that are more important to you.</p>
                                <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item4.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <p>Unless You are immortal,you need Life Insurance.</p>
                                <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
                
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item5.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <p>If there is anyone dependent on your income-you need Life Insurance.</p>
                                <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item6.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                               <p>Justice is the Insurance which we have on our lives and property.</p>
                                <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item7.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                               <p>Life is not a having and a getting.But a being and a becoming.</p>
                                <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item8.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                               <p>Choosing life insurance doesn't have to be expensive.</p>
                                <a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                            </div> 
                        </div>
                    </div>
                </div>   
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>Professional Profile – Uttara Vaid</h2>
                            </div>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        
                        <div class="media-body">
                            
                            <p style="color:#c52d2f;font-size:15px"><b>CEO – Corporate , Landmark Insurance Brokers Pvt. Ltd.<br>
                              From 1st February 2016 to Date<hr></b></p>
                              <p align="justify">As a CEO, my task is to set up a profitable, growth oriented corporate broking division and encompasses the entire gamut of CEO duties including  all strategic  and operational functions such as defining the long term goals and mid and short term plans, providing strategy with a framework for implementation, senior level recruitment, business development from internal and external sources,  ensuring regulatory compliance, P & L responsibilities et al.</p>
                            <p align="justify">Landmark Insurance Brokers is the #1 Retail Broker in India with a combined staff strength of over 1800 employees. With over 300,000 retail customers and a large countrywide footprint of over 25 branches in India, Landmark has set up the Corporate Division with the aim of establishing a robust corporate broking practice,it already enjoys a relationship on account of its auto dealership and auto insurance businesses.</p>
						</div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        
                        <div class="media-body">
                            
                            <p  style="color:#c52d2f;font-size:15px"><b>Founder – Uttara Vaid Advisory <br>
                            From April 2015 to 31st January<br> 2016<hr> </b>
							</p>
                           <p align="justify">
                           Set up  Uttara Vaid Advisory (UV Advisory)to provide a neutral platform to the three main pillars of General insurance Industry in India viz, the Insureds, the Insurers and the Brokers to access  Liability and Affinity expertise. With distinct services to all three, Uttara Vaid Advisory  provided niche consultancy services including placement assistance of complex liability programmes, operational and product training on basic and advanced modules , policy structure and design assistance;  setting up and effective coordination of  Global insurance programmes, Contractual Reviews, Claims handling in the fields of Liability and Affinity
                            </p><br><p align="justify">In its short stint of 8 months, UV Advisory provided consultancy to some of the best known names in business and notched up a revenue of close to Rs. 3 m in the very niche area of Liability Consulting.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="media services-wrap wow fadeInDown">
                        
                        <div class="media-body">
                            
                             <p style="color:#c52d2f;font-size:15px"><b>From  August 2011 to December 2014 <br>Regional Director – Asia 
                              Financial Services and Professions Group (FSPG)<hr></b></p>
                             <p align="justify">In this role I reported into Regional Managing Director–Asia,Financial Services and Professions Group.In this I had oversight and responsibility for profitable growth and development of FSPG lines of business in 13 countries comprising the Asia region with special emphasis on South East Asian country.<br>I was also the designated Regional Resource for Cyber liability and Network Risks insurance for Asia.  In this role,I was also responsible for providing technical support and client relationship support to all the countries on all the above lines of business and in fact was called upon to directly handle sophisticated clients involving technical complexity where country teams would need requisite experience and expertise to handle such accounts.I was also the Chief editor of the Aon Asia Quarterly publication on FSPG lines which had a distribution  base of over 500 clients.</p>
							 
							
                        </div>
                    </div>
                </div>  
                                              
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h2>Our Skills</h2>
                       

                        <div class="progress-wrap">
                            <h3>Risk Management</h3>
                            <div class="progress">
                              <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                              </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Strategic Planning</h3>
                            <div class="progress">
                              <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                               <span class="bar-width">95%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Underwriting</h3>
                            <div class="progress">
                              <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="bar-width">80%</span>
                              </div>
                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h3>Customer Service</h3>
                            <div class="progress">
                              <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">90%</span>
                              </div>
                            </div>
                        </div>
                    </div>

                </div><!--/.col-sm-6-->

                <div class="col-sm-6 wow fadeInDown"><br>
                    <div class="accordion">
					<img src="images/uttara_vaid.jpg" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
					</div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 wow fadeInDown">
                   <div class="tab-wrap"> 
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Underwriting </a></li>
                                    <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Claims </a></li>
                                    <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Reinsurance </a></li>
                                    <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Product Development</a></li>
                                    <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">What We Do?</a></li>
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade  active in" id="tab1">
                                        <div class="media">
                                           <div class="media-body">
										   <p align="justify">Uttara Vaid is credited with establishing a strong liability presence in India when way back in the year 2000, she was appointed to head the first liability department in any insurance company in India.  Christened as Contingency Lines Department she was in charge of setting up the complete underwriting protocols of the Liability lines of business such as Financial Lines, Casualty, and filed 29 new products with the regulator which included Crisis Management, Surety, Trade Credits, and Environment Impairment etc..........<a href="services.html"> Read More</a> </p>
										
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane fade" id="tab2">
                                        <div class="media">
                                           
                                            <div class="media-body">
                                           <p>A lawyer by qualification, her nuanced appreciation of contract wording has earned her respect from surveyors, risk engineers, and claims professionals and her empathy towards her clients has won for her organisations deep client loyalty and respect from the industry.As the COO for Aon India at the time, her adroit handling of the 2008 terrorism claim for the Indian Hotels Company Ltd..........<a href="services.html"> Read More</a>   </p>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane fade" id="tab3">
                                      <p>As the Profit Centre Head in Tata AIG, she was responsible for arranging the reinsurance for the Liability lines of business through a combination of treaties and facultative placements. Subsequently her current role in the Singapore Broking Centre of Aon having an oversight over 13 countries in Financial Lines demanded facultative placement assistance on large programmes in designing and pricing multilayered reinsurance structures as well. Her past experience as an insurer and current experience as a technical and placement broker gives her a strong appreciation of the reinsurance needs and requirements of an insurance company   and the ability to extract the best from the brokers appointed by the insurance company.</p>                                    
									  </div>
                                     
                                     <div class="tab-pane fade" id="tab4">
                                     <p>In 2000 as the designated Head of Contingency Lines, Tata AIG General Insurance Company, she was sent for 21 days to New York Head office of AIG where she was tasked with identifying from the vast array of products in AIG, the new products that would work in India. Having identified those she  had to obtain regulatory approval for them through the cumbersome File and approval process of the IRDA, and  then  to cross the final frontier of adapting them to the expectations of the Indian customer and creating marketing plans around each of them..........<a href="services.html"> Read More</a>  </p>                                    
									 </div>

                                     <div class="tab-pane fade" id="tab5">
                                     <p>Respected across the Indian Insurance Industry as a thought leader with unrivalled experience and expertise, she has worked in extremely senior capacities in insurance companies and broking organisations. In all her roles she has successfully steered her organisations through the era of transformation witnessed in the Indian Insurance industry from the setting up of private insurance companies, to achieving robust profitable operations, to successful transitioning into detariffed environments. 
                                      Through her 27 years of experience, she has demonstrated a successful track record in different areas.</p> 
                                     </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                <div class="col-xs-12 col-sm-4 wow fadeInDown">
                    <div class="testimonial">
                        <h2>Downloads</h2>
                         <div class="media testimonial-inner" style="background-color:#f2f2f2">
                             <marquee direction="up" scrolldelay="300" width="100%" height="210px" scrollamount="11" onmouseover="this.stop();" onmouseout="this.start();" >
  <ul>
 <?php 
 // query for select all products data
	 $query_parent=mysql_query("Select * from tb_docs ORDER BY id DESC") or die("Query failed: ".mysql_error());
        
	/* // fetching all data in table format */
         while($r=mysql_fetch_row($query_parent))
         {			 			 
	
			echo "<b style='font-size:13px;'></b><br>";
			 echo "<li class='content'><b>$r[1]</b><br>";
			
		/* 	if ($r[2] == 'doc/') */
			
		/* 	}else{ */
				echo "<center><a href='download.php?nama=".$r[2]."' style='text-decoration:none;font-size:13px;'></b><img src='images/download1.png' alt='Download' width='140''></a></center>";
			
			
			 echo " <a href=$r[3]  style='font-size:13px;font-weight:bold;  '> $r[3]</a> ";
			/* echo "<b><a href='".$r[3]."'></b></a>"; */
			  echo "  </li>"; 
		}
?> 
				   
              
                
                
                    
            </ul>
          
       </marquee>
                         </div>

                    </div>
                </div>

            </div><!--/row-->
        </div><!--/container-->
    </section><!--/#content-->

    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Clients</h2>
                
            </div>  
			
	<ul class="demo-3">
    
        <figure>
            <img src="images/clientele/hdfc.png" alt=""/>
            <figcaption>
                <h2>HDFC</h2>
            </figcaption>
        </figure>
   
	</ul>
	
	<ul class="demo-3">
	
        <figure>
            <img src="images/clientele/ic.png" alt=""/>
            <figcaption>
                <h2>ICICI</h2>
            </figcaption>
        </figure>
   
    </ul>
	
	<ul class="demo-3">
	
        <figure>
            <img src="images/clientele/upl.png" alt=""/>
            <figcaption>
                <h2>Upl</h2>
            </figcaption>
        </figure>
    
    </ul>
	
	<ul class="demo-3">
	
        <figure>
            <img src="images/clientele/harsha.png" alt=""/>
            <figcaption>
                <h2>Harsha Engineers</h2>
            </figcaption>
        </figure>
    
    </ul>
	
	<ul class="demo-3">
	
        <figure>
            <img src="images/clientele/transasia.png" alt=""/>
            <figcaption>
                <h2>Transasia</h2>
            </figcaption>
        </figure>
    
    </ul>

        </div><!--/container-->
    </section><!--/#partner-->

    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need a custom quote?</h2>
                            <p>As a CEO, my task is to set up a profitable, growth oriented corporate broking division and encompasses the entire gamut of CEO duties including  all strategic  and operational functions.<br>We are always ready to help you.  +91 9757129164 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section>
	<!--/#conatcat-info-->

     <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Quick Links</h3>
                        <ul>
						    <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            
                            <li><a href="services.php">Services</a></li>
                            <li><a href="clientele.html">Clientele</a></li>
                            <li><a href="#">Media Presence</a></li>
                            <li><a href="https://in.linkedin.com/in/uttara-vaid-8b745234" target="_blank">Blog</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Social Links</h3>
                        <ul>
                            
                                <li><a href="#"><i class="fa fa-facebook"></i><span style="padding:15px">   Facebook </span></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i><span style="padding:9px">  Twitter</span></a></li>
                                <li><a href="https://in.linkedin.com/in/uttara-vaid-8b745234" target="_blank"><i class="fa fa-linkedin"></i> <span style="padding:10px"> Linkedin</span></a></li> 
                                
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Quick Contacts</h3>
                        <ul>
                           
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i><span style="padding:12px"> Gr. Floor, Sekhsaria House,
		        	                   28, Babulnath Road,<br>
	     	                           Mumbai 400007.</span>
                                    </p>
                                    <p><i class="fa fa-phone" aria-hidden="true"></i> <span style="padding:9px">  +91 9757129164 <br></span>
                                    <i class = "fa fa-envelope" aria-hidden = "true"> </i><span style="padding:5px">  uttara.vaid@uvadvisory.com </span></p>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Map</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.4383310235403!2d72.80582241489927!3d18.95623958715669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce091299bd07%3A0x64668aa9d0fcef28!2sSekhsaria+House!5e0!3m2!1sen!2sin!4v1484855920206" width="260" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>       

                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 <a target="_blank" href="http://sednainfosystems.com/" >Sedna</a>. All Rights Reserved.
                </div>
                
            </div>
        </div>
    </footer><!--/#footer-->
	
<script type="text/javascript">
// create the back to top button
$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

var amountScrolled = 300;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});

$('a.back-to-top, a.simple-back-to-top').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});
</script>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>