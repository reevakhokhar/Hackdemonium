<?php
$br = "<br>";
$br2 = "<br><br>";
 
$now = new DateTime();
$future_date = new DateTime('2021-01-15 16:00:00');

$interval = $future_date->diff($now);
$time_left = $interval->format("%a days, %h hours, %i minutes");

?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hackdemonium</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area ">
                <div class="container-fluid p-0">
                    <div class="row align-items-center justify-content-between no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="" width="300px">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">home</a></li>
                                        <li><a href="index.html#schedule">Schedule</a></li>
                                        <li><a href="index.html#faq">FAQ</a></li>
                                        <li><a href="index.html#creators">Creators</a></li>
                                        <li><a href="index.html#contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="buy_ticket">
                                <a href="https://hackdemoniumhackathon.typeform.com/to/eBoV4O6r" class="boxed-btn-white" target="_black">Register</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area slider_bg_1">
        <div class="slider_text">
            <div class="container">
                <div class="position_relv">
                    <h1 class="opcity_text d-none d-lg-block">HACKATHON</h1>
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="title_text">
                                <h3>Hackdemonium<br>
                                    the Virtual<br>
                                    Hackathon</h3>
                                <a href="https://calendar.google.com/calendar/u/4?cid=YnBkanJ1OXNnY3NqM3FjdjNrcW1nMm9mM3NAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ" class="boxed-btn-white">Add to your Calendar</a>
                                <a href="https://hackdemonium.devpost.com/?preview_token=QRpAY%2BsJcX9qYIarKLToIjt63x7QtpxO3lad0%2BebMbc%3D" class="boxed-btn-white">Sign up on Devpost</a>
                                <a href="https://discord.gg/pbXhTpnUMf" class="boxed-btn-white">Join the Discord</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="countDOwn_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="single_date">
                            <i class="ti-location-pin"></i>
                            <span>Online</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="single_date">
                            <i class="ti-alarm-clock"></i>
                            <span>15th-17th Jan 2021</span>
                        </div>
                    </div>

                    <div class="col-xl-5 col-md-12 col-lg-5">
                        <span id="clock"><?php echo $time_left;?></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="shape-1 d-none d-xl-block">
            <img src="img/about/shap1.png" alt="">
        </div>
        <div class="shape-2 d-none d-xl-block">
            <img src="img/about/shap2.png" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_thumb">
                        <img src="img/about/about.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="about_info">
                        <div class="section_title">
                            <span class="sub_heading">Welcome To</span>
                            <h3>Hackdemonium: the hackathon made by students for students</h3>
                        </div>
                        <p>Join us on January 15-17 for an amazing virtual hackathon! This is the perfect experience for both beginner and advanced hackers. We will have coding workshops, panels, adn fun activities for hackers to enjoy. The hackathon will take place on discord, devpost, and google meet. We hope to see you there!</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- event_area_start -->
    <div class="event_area" id="schedule">
        <h1 class="vr_text d-none d-lg-block">Event Schedule</h1>
        <div class="container">
            <div class="double_line">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <div class="date">
                            <h3>15 Jan 2021</h3>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="single_speaker">
                            <div class="speaker-name">
                                <div class="heading d-flex justify-content-between align-items-center">
                                    <span>Opening Ceremony</span>
                                    <div class="time">
                                        4-5 pm
                                    </div>
                                </div>
                                <p>Official beginning of the hackathon, prizes and themes will be announced.</p>
                            </div>
                        </div>
                        <div class="single_speaker">
                            <div class="speaker-name">
                                <div class="heading d-flex justify-content-between align-items-center">
                                    <span>Team Formation</span>
                                    <div class="time">
                                        5-6 pm
                                    </div>
                                </div>
                                <p>Meet other hackers to form teams for the hackathon.</p>
                            </div>
                        </div>
                        <div class="single_speaker">
                            <div class="speaker-name">
                                <div class="heading d-flex justify-content-between align-items-center">
                                    <span>Skribbl.io Tournament</span>
                                    <div class="time">
                                        8 pm
                                    </div>
                                </div>
                                <p>Take a break from coding and play a game of Skribbl.io to have fun with other hackers!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-xl-3 col-lg-3">
                    <div class="date">
                        <h3>16 Jan 2021</h3>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <div class="single_speaker">
                        <div class="speaker-name">
                            <div class="heading d-flex justify-content-between align-items-center">
                                <span>Intro to Python Workshop</span>
                                <div class="time">
                                    12-1 pm
                                </div>
                            </div>
                            <p>This workshop introduces basic Python.</p>
                        </div>
                    </div>
                    <div class="single_speaker">
                        <div class="speaker-name">
                            <div class="heading d-flex justify-content-between align-items-center">
                                <span>Intro to Webdev (HTML + CSS) Workshop</span>
                                <div class="time">
                                    1:30-2:30 pm
                                </div>
                            </div>
                            <p>Go over the basics of HTML and CSS in this workshop.</p>
                        </div>
                    </div>
                    <div class="single_speaker">
                            <div class="speaker-name">
                                <div class="heading d-flex justify-content-between align-items-center">
                                    <span>Intro to JavaScript Workshop</span>
                                    <div class="time">
                                        3-4 pm
                                    </div>
                                </div>
                                <p>This workshop goes over the basics of JavaScript.</p>
                            </div>
                        </div>
                        <div class="single_speaker">
                            <div class="speaker-name">
                                <div class="heading d-flex justify-content-between align-items-center">
                                    <span>Intro to iOS App-Building Workshop</span>
                                    <div class="time">
                                        4:30-5:30 pm
                                    </div>
                                </div>
                                <p>Learn the basics of app building in this workshop.</p>
                            </div>
                          </div>
                        <div class="single_speaker">
                          <div class="speaker-name">
                            <div class="heading d-flex justify-content-between align-items-center">
                                <span>Into to Android App-Building Workshop</span>
                                <div class="time">
                                    6-7 pm
                                </div>
                            </div>
                            <p>Learn the basics of app building in this workshop.</p>
                          </div>
                        </div>
                        <div class="single_speaker">
                          <div class="speaker-name">
                            <div class="heading d-flex justify-content-between align-items-center">
                                <span>Among Us Tournament</span>
                                <div class="time">
                                    8 pm
                                </div>
                            </div>
                            <p>Take a break after a long day of coding and play Among Us.</p>
                          </div>
                        </div>
                      </div>
                  </div>
                <div class="double_line">
              <div class="row" >
                <div class="col-xl-3 col-lg-3">
                    <div class="date">
                        <h3>17 Jan 2021</h3>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <div class="single_speaker">
                        <div class="speaker-name">
                            <div class="heading d-flex justify-content-between align-items-center">
                                <span>Women in STEM Panel</span>
                                <div class="time">
                                    10-11 am
                                </div>
                            </div>
                            <p>Learn from women in STEM about their experiences and how they're changing the future of STEM.</p>
                        </div>
                    </div>
                    <div class="single_speaker">
                        <div class="speaker-name">
                            <div class="heading d-flex justify-content-between align-items-center">
                                <span>CS Oppurtunities</span>
                                <div class="time">
                                    12-1 pm
                                </div>
                            </div>
                            <p>Learn from people all over the CS field about the different opportunities and diverse jobs there are.</p>
                        </div>
                    </div>
                    <div class="single_speaker">
                        <div class="speaker-name">
                            <div class="heading d-flex justify-content-between align-items-center">
                                <span>Submissions Due</span>
                                <div class="time">
                                    4 pm
                                </div>
                            </div>
                            <p>Your project should be submitted in Devpost by this deadline. </p>
                        </div>
                    </div>
                    <div class="single_speaker">
                            <div class="speaker-name">
                                <div class="heading d-flex justify-content-between align-items-center">
                                    <span>Spyfall Tournament</span>
                                    <div class="time">
                                        5 pm
                                    </div>
                                </div>
                                <p>Relax after submitting your project and play Spyfall with the rest of the hackers!</p>
                            </div>
                        </div>
                        <div class="single_speaker">
                            <div class="speaker-name">
                                <div class="heading d-flex justify-content-between align-items-center">
                                    <span>Closing Ceremony</span>
                                    <div class="time">
                                        7 pm
                                    </div>
                                </div>
                                <p>Official end of the hackathon. Winners will be announced.</p>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <!-- event_area_end -->

    <!-- resister_book_start -->
    <div class="resister_book resister_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="resister_text text-center">
                        <h3>Consider sponsoring us!</h3>
                        <a href="mailto:hackdemonium.hackathon@gmail.com" class="boxed-btn-white">Contact Us </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- resister_book_end -->

    <!-- brand_area_start -->
    <!-- <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand_active owl-carousel">
                        <div class="single_brand text-center">
                            <img src="img/barnd/1.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/barnd/2.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/barnd/3.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/barnd/4.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/barnd/5.png" alt="">
                        </div>
                        <div class="single_brand text-center">
                            <img src="img/barnd/6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- brand_area_end -->

    <!-- faq_area_Start -->
    <div class="faq_area" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="serction_title_large mb-95">
                        <h3>
                            Frequently Asked
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                                        <img src="img/barnd/info.png" alt=""> What is a hackathon and why should I attend?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion"
                                style="">
                                <div class="card-body">
                                    A hackathon is an event where people come together to collaborate to make programming projects to address real-world issues. You should attend because it is a great opportunity to solidify your coding skills, meet new people, create solutions to important issues, and have fun!

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="false" aria-controls="collapseOne">
                                        <img src="img/barnd/info.png" alt="">Who can participate in Hackdemonium?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordion" style="">
                                <div class="card-body">
                                    Any current middle or high school student is welcome to attend. Hackdemonium is a place for both new and experienced coders.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <img src="img/barnd/info.png" alt=""> Can I still compete even if I do not know how to program?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion" style="">
                                <div class="card-body">
                                    Yes! We will be offering workshops on how to create websites and apps. You can also contribute to your team in other ways that do not involve coding, such as graphic design or presentation.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading_4">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                                        <img src="img/barnd/info.png" alt=""> What is the cost to attend Hackdemonium?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse_4" class="collapse" aria-labelledby="heading_4" data-parent="#accordion"
                                style="">
                                <div class="card-body">
                                   Nothing, except maybe your sleep! Participation is free. All you need is a computer or other device and stable internet connection to attend.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive"
                                        aria-expanded="false" aria-controls="collapseFive">
                                        <img src="img/barnd/info.png" alt="">Can we participate in a team? If so, how large can it be?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordion" style="">
                                <div class="card-body">
                                    You can participate solo or with a team. If you don't have a team when you sign up, don't worry! We will be having a team creation event to form teams. Teams are limited to 4 people maximum.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSix"
                                        aria-expanded="false" aria-controls="collapseSix">
                                        <img src="img/barnd/info.png" alt="">What will submissions be judged on?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#accordion" style="">
                                <div class="card-body">
                                    TBA. For more information see our Devpost page.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSeven"
                                        aria-expanded="false" aria-controls="collapseSeven">
                                        <img src="img/barnd/info.png" alt="">What is the theme?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                data-parent="#accordion" style="">
                                <div class="card-body">
                                    TBA.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingEight">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseEight"
                                        aria-expanded="false" aria-controls="collapseEight">
                                        <img src="img/barnd/info.png" alt="">What are the prizes?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                data-parent="#accordion" style="">
                                <div class="card-body">
                                    Prizes will be announced in the opening ceremony.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq_area_end -->

    <!-- speakers_start -->
      <div class="speakers_area" id="creators">
        <h1 class="horizontal_text d-none d-lg-block">
            Creators
        </h1>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="serction_title_large mb-95">
                        <h3>
                            Creators
                        </h3>
                    </div>
                </div>
            </div>
				<div class="row">
					<div class="col-md-4">
						<div class="single-defination">
							<div class="single_speaker">
                <div class="speaker_thumb">
                  <img src="img/speakers/pfp/shreyapfp.png" alt="">
                  <div class="hover_overlay">
                    <div class="social_icon">
                      <a href="mailto:shreya1.karnati@gmail.com"><i class="fa fa-envelope"></i></a>
                      <a href="https://www.instagram.com/shreyakarnati/"><i class="fa fa-instagram"></i></a>
                      <a href="https://www.linkedin.com/in/shreya-karnati/"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
                <div class="speaker_name text-center">
                  <h3>Shreya Karnati</h3>
                  <h4>Founder & Co-President</h4>
                  <p>Shreya is a senior at Interlake High School, where she is an AP scholar, has earned an IB Diploma, and is a part of the Running Start program at Bellevue College. She has participated in numerous hackathons and loves to solve problems through code. She plans to pursue a double major in computer science and business in college.</p>
                </div>
              </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-defination">
							<div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/speakers/pfp/mokshapfp.png" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                  <a href="mailto:karuturi.moksha@gmail.com"><i class="fa fa-envelope"></i></a>
                                  <a href="https://www.instagram.com/its_moksha_/"><i class="fa fa-instagram"></i></a>
                                  <a href="https://www.linkedin.com/in/moksha-karuturi-3b83191b4/"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Moksha Karaturi</h3>
                            <h4>Founder & Co-President</h4>
                            <p>Moksha is a freshman at Interlake High School and plans to obtain an IB diploma. She has participated in numerous hackathons and loves to give design/marketing input on projects. In her free time, she listens to edgy music and geeks out. She plans to major in psychology and minor in history in college.</p>
                        </div>
                    </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-defination">
							<div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/speakers/pfp/sonalpfp.png" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                  <a href="mailto:sonal4aggarwal@gmail.com"><i class="fa fa-envelope"></i></a>
                                  <a href="https://www.linkedin.com/in/sonal-aggarwal-03386a184/"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Sonal Agarwal</h3>
                            <h4>Outreach Officer</h4>
                            <p>Sonal is a senior at Interlake High School where she is an AP scholar and has earned an IB Diploma. She is a programmer for her robotics team and has recently begun participating in hackathons. In her free time, she likes to sew, learn languages, and work out. She plans to pursue a major in computer science in college.</p>
                        </div>
                    </div>
						</div>
					</div>
          <div class="row">
					<div class="col-md-4">
						<div class="single-defination">
							<div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/speakers/pfp/merandapfp.png" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                  <a href="mailto:wangmeranda@gmail.com"><i class="fa fa-envelope"></i></a>
                                  <a href="https://www.instagram.com/merandawang/"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Meranda Wang</h3>
                            <h4>Logistics Officer</h4>
                            <p>Meranda is a freshman at Interlake High School and plans to obtain the IB Diploma. She has taken a few coding courses and has taken coding classes at school. In her free time she likes to draw digitally, read, and journal. She plans to pursue a major in medical science in college.</p>
                        </div>
                    </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-defination">
							<div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/speakers/pfp/maraellapfp.png" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                  <a href="mailto:maraella.khoo@gmail.com"><i class="fa fa-envelope"></i></a>
                                  <a href="https://www.instagram.com/maraellak/"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Maraella Khoo</h3>
                            <h4>Design Officer</h4>
                            <p>Maraella is a freshman at Interlake High School, where she is planning to obtain an IB diploma. She has taken a couple coding courses and classes before. In her free time, she likes to sketch, read, and paint. She plans to pursue a marketing/art related major in college.</p>
                        </div>
                    </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-defination">
							<div class="single_speaker">
                        <div class="speaker_thumb">
                            <img src="img/speakers/pfp/anushkapfp.png" alt="">
                            <div class="hover_overlay">
                                <div class="social_icon">
                                  <a href="mailto:anuchoug@gmail.com"><i class="fa fa-envelope"></i></a>
                                  <a href="https://www.instagram.com/chouguleanushka/"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="speaker_name text-center">
                            <h3>Anushka Chougule</h3>
                            <h4>Marketing Officer</h4>
                            <p>Anushka Chougule is a Sophomore at North Creek High School where she is a part of the AP program. She was first introduced to programming in seventh grade and has been interested in computer science since. She plans to pursue a major in computer science and a minor in biology in college.</p>
                        </div>
                    </div>
                  </div>
                </div>
						</div>
				</div>
      </div>
    <!-- speakers_end-->

    <!-- footer_start -->
    <footer class="footer footer_bg_1">
        <div class="circle_ball d-none d-lg-block">
            <img src="img/banner/footer_ball.png" alt="">
        </div>
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 col-lg-4">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                        Follow Us
                                </h3>
                                <ul>
                                    <li><a target="_blank" href="https://www.instagram.com/hackdemonium/">Instagram</a></li>
                                    <li><a target="_blank" href="https://www.youtube.com/channel/UCzFhjV3JFu7wTbKU5FmYtfw?guided_help_flow=5">YouTube</a></li>
                                    <li><a target="_blank" href="#">Devpost</a></li>
                                </ul>
    
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-lg-4">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                        Links
                                </h3>
                                <ul>
                                    <li><a target="_blank" href="schedule.html">Schedule</a></li>
                                    <li><a target="_blank" href="speakers.html">FAQ</a></li>
                                    <li><a target="_blank" href="contact.html">Creators</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-lg-4">
                            <div class="footer_widget">
                                <h3 class="footer_title" id="contact">
                                        Contact Us
                                </h3>
                                <p>
                                    <a style="color: white" href="mailto:hackdemonium.hackathon@gmail.com">Email</a> <br>
                                    <a style="color: white" href="https://www.instagram.com/hackdemonium/">DM us on Instagram</a> 
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!-- footer_end -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
