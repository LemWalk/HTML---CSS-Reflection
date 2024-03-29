
<?php
include 'inc/header.php';
?>

<!DOCTYPE html>
<html lang="en">

  <!-- =======================================
  ===========HEAD ==================== -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="js/slick/slick.css">
<link rel="stylesheet" href="js/slick/slick-theme.css">
<link rel="stylesheet" href="scss/application.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/fac1c8a231.js" crossorigin="anonymous"></script>
<title>Netmatters html and css reflection</title>
</head>

  <!-- =======================================
  ===========BODY - START==================== -->

<body>
  <div class="container-outer">  

    <!-- ========== Cookies ====================== -->

    <div class="btn-manage">Manage Consent</div>
    <div class="cookie-overlay" id="cookie-lo">
      <div class="cookie-menu">
        <div class="cookie-inner">
          <div><h2 class="cookie-title">Cookies Policy</h2></div>
          <hr class="cookie-hr">
          <div><p class="cookie-text">Our website uses cookies. This helps us provide you with a good experience on our website. To see what cookies we use and what they do, and to opt-in on non-essential cookies click "change settings". For a detailed explanation, click on "<span class="policy-text">Privacy Policy</span>" otherwise click "Accept Cookies" to enter.</p></div>
          <hr class="cookie-hr">
          <div class = "cookie-btns">
            <a class="cookie-btn-outer"><div class="btn-ch-set">Change Settings</div></a>
            <a class="cookie-btn-outer"><div class="btn-acc">Accept Cookies</div></a>
          </div>
        </div>
      </div>
    </div>

  <!-- =======================================
  ======== Top-Nav ==================== -->
  <div class="nav-container">   

    <header class="header">
    <div class="container-inner" id="nav-lo">

      <div class="nav-top-block">
        
        <a href="#" class="img-reset"><img class="nm-logo-dark" src="img/nm-logo-dark.png" alt="Netmatters Logo"></a>     

        <div class="right-block">
        <div class="nav-hidden">
          <a href="#" class="btn-reset"><span class="btn-mouse"><i class="fa-solid fa-computer-mouse" style="color: #fff;"></i>SUPPORT</span></a>
          <a href="#" class="btn-reset"><span class="btn-plane"><i class="fa-solid fa-paper-plane" style="color: #fff;"></i>CONTACT</span></a>
        </div>

        <div class="search-bar-hidden">
          <span class="search-input-hidden" ><input id="focus-blue" type="text" placeholder="Search..."></span>
          <span class="search-icn-hidden"><i class="icn-grey fa-solid fa-magnifying-glass fa-xl"></i></span>
        </div>

        
        <div class="icn-black-light"><i class=" fa-solid fa-phone-volume fa-xl"></i></div>

        <div class="burger-menu">
          <div class="burger-inner">
            <div class="ham-bar bar-top"></div>
            <div class="ham-bar bar-mid"></div>
            <div class="ham-bar bar-bot"></div>
          </div>          
        </div>
        
      </div>
    </div>

      <div id="search-bar">
        <span><input type="text" placeholder="Search..."></span>
        <span><i class="icn-grey-light fa-solid fa-magnifying-glass fa-xl"></i></span>
      </div>

    </div>
    </header>


  <!-- =======================================
  ========Nav Bar ==================== -->


    <nav class="main-nav" id="main-nav-lo">
      <div>
        <ul class="nav-bar container-inner">



<!-- ================ Bespoke Software =================== -->

          <li class="nav-bar-item-blue-pale">

          <div class="nav-item">
            <a href="#">
              <span class="nav-icon-blue-pale"><i class="fa-solid fa-laptop"></i></span>
              <p class="nav-p1"> Bespoke </p>
              <p class="nav-p2">Software </p> 
            </a>            
          </div>
          
          <ul class="dropdown dd-blue-pale container-nav">   
                <li><a href="#" class="link-white"><i class="fa-solid fa-gears" style="color: #fff;"></i>Bespoke CRM</a></li>
                <li><a href="#" class="link-white"><i class="fa-solid fa-mobile-screen-button" style="color: #fff;"></i>Mobile App Development</a></li>
                <li><a href="#" class="link-white"><i class="fa-sharp fa-solid fa-download" style="color: #fff;"></i>Operational systems</a></li>
                <li><a href="#" class="link-white"><i class="fa-solid fa-cloud" style="color: #fff;"></i>Intranet Development</a></li>
                <li><a href="#" class="link-white"><i class="fa-solid fa-briefcase" style="color: #fff;"></i>Business Automation</a></li>
                <li><a href="#" class="link-white"><i class="fa-sharp fa-solid fa-folder-open" style="color: #fff;"></i>bespoke Databases</a></li>
                <li><a href="#" class="link-white"><i class="fa-solid fa-users" style="color: #fff;"></i>Business Central Implementation</a></li>
                <li><a href="#" class="link-white"><i class="fa-solid fa-cloud-arrow-down" style="color: #fff;"></i>Customer Portal Development</a></li>
                <li><a href="#" class="link-white"><i class="fa-solid fa-shuffle" style="color: #fff;"></i>Software Intergrations</a></li>
                <li><a href="#" class="link-white"><i class="fa-solid fa-arrow-right-arrow-left" style="color: #fff;"></i>Sharepoint Development</a></li>
                <li><a href="#" class="link-white"><i class="fa-solid fa-tv" style="color: #fff;"></i>Internet of Things (IoT) Development</a></li>
                <li><a href="#" class="link-white"><i class="fa-sharp fa-solid fa-earth-americas" style="color: #fff;"></i>Reporting Hub</a></li>
              </ul> 
        
            
          </li> 

<!-- ================ IT Support ========================= -->

          <li class="nav-bar-item-blue">

            <div class="nav-item">
              <a href="#">
                <span class="nav-icon-blue"><i class="fa-sharp fa-solid fa-display"></i></span>
                <p class="nav-p1">IT </p>
                <p class="nav-p2">Support</p> 
              </a>
            </div>

            <ul class="dropdown dd-blue container-nav">  
              <li><a href="#" class="link-white"><i class="fa-solid fa-headphones" style="color: #fff;"></i>Managed IT Support</a></li>
              <li><a href="#" class="link-white"><i class="fa-solid fa-briefcase" style="color: #fff;"></i>Business IT Support</a></li>
              <li><a href="#" class="link-white"><i class="fa-sharp fa-solid fa-laptop" style="color: #fff;"></i>Office 365 for Business</a></li>
              <li><a href="#" class="link-white"><i class="fa-solid fa-graduation-cap fa-flip-horizontal" style="color: #fff;"></i>IT Consultancy</a></li>
              <li><a href="#" class="link-white"><i class="fa-solid fa-cloud" style="color: #fff"></i>Cloud Service Provider</a></li>
              <li><a href="#" class="link-white"><i class="fa-sharp fa-solid fa-hard-drive" style="color: #fff;"></i>Data Backup & Disaster Recovery</a></li>
            </ul>  
          </li>


<!-- ================ Digital Marketing ================== -->

          <li class="nav-bar-item-green">

            <div class="nav-item">
              <a href="#">
                <span class="nav-icon-green"><i class="fa-solid fa-chart-simple"></i></span>
                <p class="nav-p1">Digital </p>
                <p class="nav-p2">Marketing</p>
              </a>
            </div>

            <ul class="dropdown dd-green container-nav">  
              <li><a href="#" id="dd-item" class="link-white"><i class="fa-solid fa-magnifying-glass" style="color: #fff;"></i>Search Engine Optimisation (SEO)</a></li>
              <li><a href="#" class="link-white"><i class="fa-solid fa-money-bill" style="color: #fff;"></i>Pay Per Click Advertising (PPC)</a></li>
              <li><a href="#" class="link-white"><i class="fa-sharp fa-solid fa-arrow-trend-up" style="color: #fff;"></i>Conversion Rate Optimisation (CRO)</a></li>
              <li><a href="#" class="link-white"><i class="fa-solid fa-envelope" style="color: #fff;"></i>Email Marketing</a></li>
              <li><a href="#" class="link-white"><i class="fa-solid fa-users" style="color: #fff;"></i>Social Media Marketing</a></li>
              <li><a href="#" class="link-white"><i class="fa-sharp fa-solid fa-pencil" style="color: #fff;"></i>Content Marketing</a></li>
            </ul> 

          </li>                                                 
          

<!-- ================ Telecoms Services ================== -->

          <li class="nav-bar-item-red">

            <div class="nav-item">
              <a href="#">
                <span class="nav-icon-red"><i class="fa-solid fa-phone-volume"></i></span>
                <p class="nav-p1">Telecoms </p>
                <p class="nav-p2">Services</p>
              </a>
            </div>

            <ul class="dropdown dd-red container-nav">  
              <li><a href="#" class="link-white"><i class="fa-solid fa-ticket" style="color: #fff;"></i>Business Mobile</a></li>
              <li><a href="#" class="link-white"><i class="fa-solid fa-phone" style="color: #fff;"></i>Hosted VoIP Provider</a></li>
              <li><a href="#" class="link-white"><i class="fa-sharp fa-solid fa-square-phone" style="color: #fff;"></i>Business VoIP Systems</a></li>
              <li><a href="#" class="link-white"><i class="fa-solid fa-gauge-high" style="color: #fff;"></i>Business Broadband</a></li>
              <li><a href="#" class="link-white"><i class="fa-solid fa-handshake" style="color: #fff;"></i>Leased Lines Provider</a></li>
              <li><a href="#" class="link-white"><i class="fa-sharp fa-solid fa-phone-volume" style="color: #fff;"></i>3CX Systems</a></li>
            </ul> 
          </li>


<!-- ================ Web Design ========================= -->

          <li class="nav-bar-item-purple">

            <div class="nav-item">
              <a href="#">
                <span class="nav-icon-purple"><i class="fa-solid fa-code" ></i></span>
                <p class="nav-p1">Web </p>
                <p class="nav-p2">Design</p>
              </a>
            </div>

            <ul class="dropdown dd-purple container-nav">  
              <li><a href="#" class="link-white"><i class="fa-solid fa-pencil" style="color: #fff;"></i>Bespoke Website Design</a></li>
              <li><a href="#" class="link-white"><i class="fa-solid fa-cart-shopping" style="color: #fff;"></i>eCommerce Website Design</a></li>
              <li><a href="#" class="link-white"><i class="fa-sharp fa-solid fa-desktop" style="color: #fff;"></i>Pay Monthly Websites</a></li>
              <li><a href="#" class="link-white"><i class="fa-solid fa-bullhorn" style="color: #fff;"></i>Branding & Design</a></li>
              <li><a href="#" class="link-white"><i class="fa-solid fa-mobile" style="color: #fff;"></i>Mobile App Development</a></li>
              <li><a href="#" class="link-white"><i class="fa-sharp fa-solid fa-cloud" style="color: #fff;"></i>Web Hosting</a></li>
            </ul>
          </li>


<!-- ================ Cyber Security ===================== -->

          <li class="nav-bar-item-red-pink">
            <div class="nav-item">
              <a href="#">
                <span class="nav-icon-red-pink"><i class="fa-solid fa-shield-halved"></i></span>
                <p class="nav-p1">Cyber </p>
                <p class="nav-p2">Security</p>
              </a>
            </div>

            <ul class="dropdown dd-red-pink container-nav">  
              <li><a href="#" class="link-white"><i class="fa-solid fa-paste" style="color: #fff;"></i>Cyber Security Assessment</a></li>
              <li><a href="#" class="link-white"><i class="fa-sharp fa-regular fa-clock" style="color: #fff;"></i>Cyber Security Management</a></li>
              <li><a href="#" class="link-white"><i class="fa-sharp fa-solid fa-flask" style="color: #fff;"></i>Cyber Penetration Testing</a></li>
              <li><a href="#" class="link-white"><i class="fa-solid fa-graduation-cap fa-flip-horizontal" style="color: #fff;"></i>Cyber Essentials Certification</a></li>
              <li><a href="#" class="link-white"><i class="fa-solid fa-shield-halved" style="color: #fff"></i>PCI Compliance</a></li>
              <li><a href="#" class="link-white"><i class="fa-sharp fa-solid fa-lock" style="color: #fff;"></i>Hacking Prevention</a></li>
            </ul>
          </li>


<!-- ================ Developer Training ================= -->

          <li class="nav-bar-item-orange">
            <div class="nav-item">
              <a href="#">
                <span class="nav-icon-orange"><i class="fa-solid fa-graduation-cap fa-flip-horizontal"></i></span>
                <p class="nav-p1">Developer </p>
                <p class="nav-p2">Training</p>
              </a>
            </div>

            <ul class="dropdown dd-orange container-nav">  
              <li><a href="#" class="link-white"><i class="fa-solid fa-laptop" style="color: #fff;"></i>Train For A Career In Tech</a></li>
              <li><a href="#" class="link-white"><i class="fa-solid fa-code" style="color: #fff;"></i>Skills Bootcamp</a></li>
              <li><a href="#" class="link-white"><i class="fa-sharp fa-solid fa-square-phone" style="color: #fff;"></i>Scion Scheme Frequently Asked Questions</a></li>
              <li><a href="#" class="link-white"><i class="fa-solid fa-circle-question" style="color: #fff;"></i>Scion Collaborators</a></li>
            </ul>            
          </li>



        </ul>
      </div>
    </nav>

  </div>



<!-- ======== Main Start ==================== -->

  <main>

    <!-- =======================================
    ========Hero slider ==================== -->
  <div class="hero-slider" id="hero-slider-lo">

      <div class="autoplay" id="hero-lo">

        <div class="test-slide slide-1"> 
          <div class="container-inner flex-central">
            <div class="hero-container" >        
            <div class="hero-item">
              <h2 class="hero-title">The East of England's Leading Technology Company</h2>
            </div>    
            <div class="hero-item">
              <p class="hero-text">Performance-driven digital and technology services with complete transparency.</p>
            </div>    
            <div class="hero-item">
              <a href="#"><span class="btn-slider-purple">WHY CHOOSE US?<i class="fa-solid fa-arrow-right" style="color:white;"></i></span></a>
            </div>
          </div> 
          </div>
        </div>  
  
        <div class="test-slide slide-2">
          <div class="container-inner flex-central">
            <div class="hero-container">        
            <div class="hero-item">
              <h2 class="hero-title">Bespoke Software</h2>
            </div>    
            <div class="hero-item">
              <p class="hero-text">Delivering expert bespoke software solutions across a range of industries.</p>
            </div>    
            <div class="hero-item">
              <a href="#"><span class="btn-slider-blue-pale">FIND OUT MORE<i class="fa-solid fa-arrow-right" style="color:white;"></i></span></a>
            </div> 
          </div>
          </div>
        </div>


        <div class="test-slide slide-3">
          <div class="container-inner">
            <div class="hero-container">        
            <div class="hero-item">
              <h2 class="hero-title">IT Support</h2>
            </div>    
            <div class="hero-item">
              <p class="hero-text">Fast and cost-effective IT support services for your business.</p>
            </div>    
            <div class="hero-item">
              <a href="#"><span class="btn-slider-blue">FIND OUT MORE<i class="fa-solid fa-arrow-right" style="color:white;"></i></span></a>
            </div> 
          </div>
          </div>
        </div>


        <div class="test-slide slide-4">
          <div class="container-inner">
            <div class="hero-container">        
            <div class="hero-item">
              <h2 class="hero-title">Digital Marketing</h2>
            </div>    
            <div class="hero-item">
              <p class="hero-text">Generating your new business through results-driven marketing activities.</p>
            </div>    
            <div class="hero-item">
              <a href="#"><span class="btn-slider-green">FIND OUT MORE<i class="fa-solid fa-arrow-right" style="color:white;"></i></span></a>
            </div> 
          </div>
          </div>
        </div>


        <div class="test-slide slide-5">
          <div class="container-inner">
            <div class="hero-container">        
            <div class="hero-item">
              <h2 class="hero-title">Telecoms Services</h2>
            </div>    
            <div class="hero-item">
              <p class="hero-text">A new approach to connectivity, see how we can help your business.</p>
            </div>    
            <div class="hero-item">
              <a href="#"><span class="btn-slider-red">FIND OUT MORE<i class="fa-solid fa-arrow-right" style="color:white;"></i></span></a>
            </div> 
          </div>
          </div>
        </div>


        <div class="test-slide slide-6">
          <div class="container-inner">
            <div class="hero-container">        
            <div class="hero-item">
              <h2 class="hero-title">Web Design</h2>
            </div>    
            <div class="hero-item">
              <p class="hero-text">For businesses looking to make a strong and effective first impression.</p>
            </div>    
            <div class="hero-item">
              <a href="#"><span class="btn-slider-purple">FIND OUT MORE<i class="fa-solid fa-arrow-right" style="color:white;"></i></span></a>
            </div> 
          </div>
          </div>
        </div>


        <div class="test-slide slide-7">
          <div class="container-inner">
            <div class="hero-container">        
            <div class="hero-item">
              <h2 class="hero-title">Cyber Security</h2>
            </div>    
            <div class="hero-item">
              <p class="hero-text">Keeping businesses and their customers sensitive information protected.</p>
            </div>    
            <div class="hero-item">
              <a href="#"><span class="btn-slider-red-pink">FIND OUT MORE<i class="fa-solid fa-arrow-right" style="color:white;"></i></span></a>
            </div> 
          </div>
          </div>
        </div>


      </div>

      

        <!-- ============== slide 1 ==================== -->
    


      </div>

    <!-- =========================================
    ====== Our Services ===================== -->
    

  <div class="our-services">
    <div class="container-inner" id="our-services-lo">

      <div class="service-title">
        <div> <h1>Our Services</h1></div>

        <div class="view-outer-hidden">
          <a class="view-link" href="#"><p>View Our work</p><p class="gap-blank">-</p><i class="fa-solid fa-arrow-right fa-2xl" style="color:inherit;"></i></a>
        </div>

      </div>

      <div class="service-block-top">

      <a href="">
        <div class="container-service-blue-pale bes-soft">
          <span><i class="icn-service-blue-pale fa-solid fa-laptop"></i></span>
          <span class="h2">Bespoke Software</span>
          <span class="p">Business software solutions for all your business needs including intergrations and reporting.</span>
          <span class="btn-service-blue-pale">READ MORE</span>
        </div>
      </a>


      <a href="">
        <div class="container-service-blue">
          <span><i class="icn-service-blue fa-sharp fa-solid fa-display"></i></span>
          <span class="h2">IT Support</span>
          <span class="p">Fully managed IT support and consultancy packages tailored to meet your business needs.</span>
          <span class="btn-service-blue">READ MORE</span>
        </div>
      </a>


      <a href="">
        <div class="container-service-green">
          <span><i class="icn-service-green fa-solid fa-chart-simple"></i></span>
          <span class="h2">Digital Marketing</span>
          <span class="p">Driven brand awareness & ROI through creative digital marketing campaigns.</span>
          <span class="btn-service-green">READ MORE</span>
        </div>
      </a>

      </div>


    <div class="service-block-bot">

      <a href="">
        <div class="container-service-red">
          <span><i class="icn-service-red fa-solid fa-phone-volume"></i></span>
          <span class="h2">Telecoms Services</span>
          <span class="p">Business telephony solutions including mobile & connectivity solutions.</span>
          <span class="btn-service-red">READ MORE</span>
        </div>
      </a>


      <a href="">
        <div class="container-service-purple">
          <span><i class="icn-service-purple fa-solid fa-code"></i></span>
          <span class="h2">Web Design</span>
          <span class="p">User-centric design for businesses looking to make a lasting impression.</span>
          <span class="btn-service-purple">READ MORE</span>
        </div>
      </a>


      <a href="">
        <div class="container-service-red-pink">

          <span><i class="icn-service-red-pink fa-solid fa-shield-halved"></i></span>
          <span class="h2">Cyber Security</span>
          <span class="p">Prevention, testing, consultancy and breach management services.</span>
          <span class="btn-service-red-pink">READ MORE</span>
        </div>
      </a>


      <a href="">
        <div class="container-service-orange">
          <span><i class="icn-service-orange fa-solid fa-graduation-cap fa-flip-horizontal"></i></span>
          <span class="h2">Developer Training</span>
          <span class="p">Web design and software training courses designed to secure a job in tech.</span>
          <span class="btn-service-orange">READ MORE</span>
        </div>
      </a>

      </div>


        <div class="view-outer">
        <a class="view-link" href="#"><p>View Our work</p><p class="gap-blank">-</p> <i class="fa-solid fa-arrow-right fa-2xl" style="color:inherit;"></i></a>
      </div>


    </div>
  </div>


  <!-- =======================================
  ========Accreditation Carousel ==================== -->

<div class="carousel">
  <div class="carousel-container autoplay-carousel">

    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/future-50.jpg" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/google-partner.jpg" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/iso_27001.jpg" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/princess-royal-training.jpg" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/living_wage.png" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/norfolk_prohelp.png" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/norfolk-carbon-charter.jpg" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/PPC_logo.jpg" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/investing-in-future-growth.jpg" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/qms.jpg" alt="customer logo"></div>
    <div class="carousel-greyscale"><img class="carousel-img" src="./img/accreditations/skills-of-tomorrow.jpg" alt="customer logo"></div>

  </div>
</div>


  <!-- =======================================
  ========Intro and Reviews ==================== -->

  <div class="company-intro">

    <div class="container-inner"  id="company-intro-lo">

      <div class="intro-container">
        
      

      <div class="col-1">

        <div class="intro-title-container">
          <h1><strong class="intro-title">Welcome To Netmatters</strong></h1>
        </div>

        <div>
          <p class="font-lite">
            <strong class="strong">Netmatters is a leading <a href="#" class="link-white-bold" > Bespoke Software</a>, <a href="#" class="link-white-bold" >IT Support</a>, and <a href="#" class="link-white-bold" >Digital Marketing</a> company based in the East of England with offices in <a href="#" class="link-white-bold" >London</a>, <a href="#" class="link-white-bold" >Cambridge</a>, <a href="#" class="link-white-bold" >Wymondham</a>, and <a href="#" class="link-white-bold" >Great Yarmouth</a>.</strong><br><br>
            We aren't tied into contracts with third-party providers, so you know that our recommendations for your business are based purely with one benefit in mind: to help improve your business with the most appropriate solutions.<br><br>
            We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures you get the most from our relationship in an upfront manner.<br><br>
          </p>
        </div>

        <div class="intro-btns">
          <div class="btn-container">
            <a href="#"><div class="btn-blk-dark">WHY CHOOSE US? <i class="fa-solid fa-arrow-right" style="color:white;"></i></div></a>
          </div>

          <div class="btn-container">
            <a href="#"><div class="btn-blk-dark">OUR CULTURE <i class="fa-solid fa-arrow-right" style="color:white;"></i></div></a>
          </div>
        </div>

      </div>
  

      <div class="col-2">
        
        <div class="intro-title-container">
          <h1><strong class="intro-title">What Our Clients Think</strong></h1>
        </div>

        <div class="flex-row">
          <div><i class="fa-solid fa-star fa-2xl" style="color: #ffa500;"></i></div>
          <div><i class="fa-solid fa-star fa-2xl" style="color: #ffa500;"></i></div>
          <div><i class="fa-solid fa-star fa-2xl" style="color: #ffa500;"></i></div>
          <div><i class="fa-solid fa-star fa-2xl" style="color: #ffa500;"></i></div>
          <div><i class="fa-solid fa-star fa-2xl" style="color: #ffa500;"></i></div>
        </div>

          <div class="review">
            <p>Netmatters stood out from the start. Great guys and very easy to work with. Both the build and digital marketing teams are clearly skilled -they know their stuff! They delivered a website to our (high!) expectations and went over and above to ensure we were satisfied clients - and we are!</p>
          </div>

          <div class="author-name">
            <p class="news-text-grey">Eleanor Bishop, Head of Marketing - <a href="#" class="link-white">Ashcroft Partnership LLP</a></p>
          </div>

        <div class="intro-btns">
          <div>
          <a href="#"><div class="btn-intro-blue-l">GOOGLE REVIEWS <i class="fa-solid fa-arrow-right" style="color:white;"></i></div></a>
          </div>
          <div>
            <a href="#"><div class="btn-intro-green-l">TRUSTPILOT REVIEWS <i class="fa-solid fa-arrow-right" style="color:white;"></i></div></a>
          </div>

      </div>

      </div>

      </div>

    </div>
  </div>


  <!-- =======================================
  ========Latest News ==================== -->

  <div class="news">

    <div class="container-inner" id="news-lo">

      <div class="news-top">

      <div class="news-title">
        <h1>Latest News</h1>
      </div>

      <div class="view-outer-hidden">
        <a class="view-all" href="#">
          <p>View All</p><p class="gap-blank">-</p>
          <i class="fa-solid fa-arrow-right fa-2xl" style="color:inherit;"></i>
        </a>
      </div>
      

    </div>
    
      <div class="news-col">


      <?php
        include 'inc/news_articles.php';
      ?>


      <!-- <div class="flex-col">
      <a href="#" class="news-card">

        <a href="#" class="news-card">   
      <div class="flex-col">

        <div class="news-item">
          <div class="top-right-outer">
          <div class="top-right-blue">
            <span class="h5">CASE STUDIES</span>
          </div>
        </div>
          <div class="news-img">
            <img src="img/news-1.png" alt="***DO LATER***">
          </div>
          <div class="news-text">
            <div class="news-para">
              <h4 class="text-blue">Staying Secure and Connected With Netmatters -... <span class="text-grey">- 6 MINUTE READ</span></h4>
              <p>Urban Mission Schools and Community (UMSC) is an independent school aiming to re-engage youth...</p>
            </div>
            <span class="btn-news-blue">READ MORE</span>
            <hr class="hr">    
            <div class="news-bot">
              <img class="author-image" src="img/nm-logo-dark-small.png" alt="Netmatters Logo">
              <P><span class="strong">Posted by Netmatters</span> <br> 11th May 2023</P> 
            
            </div>
          </div>         
          
        </div>

        </a>
      </div> --> 
        

        
      <!-- <div class="flex-col">
        <a href="#" class="news-card"> 

        
      </div>
    </a>
        

        
      <div class="flex-col"><a href="#" class="news-card"> 

        <div class="news-item">
          <div class="top-right-outer">
          <div class="top-right-purple">
            <span class="h5">CASE STUDIES</span>
          </div>
        </div>
          <div class="news-img">
            <img src="img/news-2.png" alt="***DO LATER***">
          </div>
          <div class="news-text">
            <div class="news-para">
              <h4 class="text-purple">Glaven Valley - Web Case Study <span class="text-grey"> - 5 MINUTE READ</span></h4>
              <p>The Client - Since 2001, Glaven Valley has been a leading platform for the listing and booking of self-...</p>
            </div>
            <span class="btn-news-purple">READ MORE</span>    
            <hr class="hr">            
            <div class="news-bot">
              <img class="author-image" src="img/nm-logo-dark-small.png" alt="Netmatters Logo">
              <P><span class="strong">Posted by Netmatters</span><br> 10th May 2023</P> 
            </div>
          </div>         
          
        </div>
      </a>

      </div> -->
        


      <!-- <div class="flex-col med-dis"> 

      </div>
        

      
      <div class="flex-col med-dis"> 

        <a href="#" class="news-card">      
        <div class="news-item">
          <div class="top-right-outer">
            <div class="top-right-purple">
              <span class="h5">NEWS</span>
            </div> 
          </div>       

          <div class="news-img">
            <img src="img/news-3.png" alt="***DO LATER***">
          </div>          
          <div class="news-text">            
            <div class="news-para">
              <h4 class="text-purple">Bethany Shakespeare - Netmatters 5 Year Legend... <span class="text-grey">- 3 MINUTE READ</span></h4>
              <p>Today we are congratulating Bethany Shakespeare on achieving the Netmatters Long Service Award and b...</p>
            </div>            
            <span class="btn-news-purple">READ MORE</span>
            <hr class="hr">             
            <div class="news-bot">
              <img class="author-image" src="img/nm-logo-dark-small.png" alt="Netmatters Logo">
              <P><span class="strong">Posted by Netmatters</span><br> 8th May 2023</P>               
            </div>
          </div>
        </div>       
      </a>      

      </div>    
      

      </div>   
      


      <div class="view-outer">
        <a class="view-all" href="#">
          <p>View All</p><p class="gap-blank">-</p>
          <i class="fa-solid fa-arrow-right fa-2xl" style="color:inherit;"></i>
        </a>
      </div>
    

    </div>

    </div>
  </div>
  


  <!-- =========================================
  ====== Client carousel ======== -->

	<div class="carousel">
      <div class="carousel-container autoplay-carousel">
              
        <div class="img-container">  
          <div class="pop-con">
            <div class="pop-up">
              <h3>Survey Solutions</h3>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/survey_solutions_logo.png" alt="customer logo">
        </div>

        <div class="img-container">  
          <div class="pop-con">
          <div class="pop-up">
            <h3>One Traveller</h3>
            <p class="pop-up-text"> <a class="link-white-bold" href="#">One Traveller</a>, founded in 2007, is a leading provider of solo holidays for over 50s.</p>
            <span class="btn-hover-purple">VIEW OUR CASE STUDY <i class="fa-solid fa-arrow-right fa-lrg" style="color:inherit;"></i></span>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/onetravellerlogo_white_figuire.png" alt="customer logo">
        </div>

        <div class="img-container">  
          <div class="pop-con">
          <div class="pop-up">
            <h3>Searles Leisure Resort</h3>
            <p class="pop-up-text">Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday resort for families.</p>
            <span class="btn-hover-green">VIEW OUR CASE STUDY <i class="fa-solid fa-arrow-right fa-lrg" style="color:inherit;"></i></span>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/searles_logo.jpg" alt="customer logo">
        </div>

        <div class="img-container">  
          <div class="pop-con">
          <div class="pop-up">
            <h3>Sweetzy</h3>
            <p class="pop-up-text">Sweetzy are an online sweets retailer, based in Wymondham.</p>
            <span class="btn-hover-green">VIEW OUR CASE STUDY <i class="fa-solid fa-arrow-right fa-lrg" style="color:inherit;"></i></span>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/sweetzy_logo.png" alt="customer logo">
        </div>

        <div class="img-container">  
          <div class="pop-con">
          <div class="pop-up">
            <h3>Crane Garden Buildings</h3>
            <p class="pop-up-text">Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/crane_logo.png" alt="customer logo">
        </div>

        <div class="img-container">  
          <div class="pop-con">
          <div class="pop-up">
            <h3>Black Swan Care Group</h3>
            <p class="pop-up-text">Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on putting the needs of their residents first.</p>
            <span class="btn-hover-blue-pale">VIEW OUR CASE STUDY <i class="fa-solid fa-arrow-right fa-lrg" style="color:inherit;"></i></span>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/black_swan_logo.png" alt="customer logo">
        </div>
        
        <div class="img-container">  
          <div class="pop-con">
          <div class="pop-up">
            <h3>Ashcroft Partnership LLP</h3>
            <p class="pop-up-text">Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and are one of the top chartered accountancy firms in Cambridge, advising entrepreneurs and families.</p>
            <span class="btn-hover-purple">VIEW OUR CASE STUDY <i class="fa-solid fa-arrow-right fa-lrg" style="color:inherit;"></i></span>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/ashcroftlogo_landscape_goldblack_DP60P-small.png" alt="customer logo">
        </div>      
      
        <div class="img-container"> 
          <div class="pop-con">
          <div class="pop-up">
            <h3>Howes Percival</h3>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/howespercivallogo.png" alt="customer logo">
        </div>

        <div class="img-container"> 
          <div class="pop-con">
          <div class="pop-up">
            <h3>BEAT</h3>
            <p class="pop-up-text">The UK's eating disorder charity founded in 1989.</p>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/beat_logo.png" alt="customer logo">
        </div>

        <div class="img-container">  
          <div class="pop-con">
          <div class="pop-up">
            <h3>GDST</h3>
            <p class="pop-up-text">The <a class="link-white-bold" href="#">Girls' Day School Trust (GDST)</a> is the UK's leading family of 25 independent girls' schools.</p>
            <span class="btn-hover-green">VIEW OUR CASE STUDY <i class="fa-solid fa-arrow-right fa-lrg" style="color:inherit;"></i></span>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/girls_day_school_trust_logob.png" alt="customer logo">
        </div>  
      
        <div class="img-container">  
          <div class="pop-con">            
          <div class="pop-up">
            <h3>Xupes</h3>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/xupes_logo.png" alt="customer logo">
        </div>

        <div class="img-container">  
          <div class="pop-con">
          <div class="pop-up">
            <h3>Girl Guiding Anglia</h3>
            <p class="pop-up-text">Girl Guiding Anglia is part of Girlguiding, the UK's leading charity for girls and young women in the UK.</p>
            <span class="btn-hover-blue">VIEW OUR CASE STUDY <i class="fa-solid fa-arrow-right fa-lrg" style="color:inherit;"></i></span>
          </div>
            <div class="box-arrow"></div>
          </div>
          <img class="carousel-greyscale" src="./img/clients/girl_guides_anglia_logo.png" alt="customer logo">
        </div>  
      
        <div class="img-container"> 
          <div class="pop-con">            
          <div class="pop-up">
            <h3>Busseys</h3>
            <p class="pop-up-text">One of the UK's leading Ford dealerships.</p>
          </div>        
          <div class="box-arrow"></div>
        </div>

          <img class="carousel-greyscale" src="./img/clients/busseys.png.png" alt="customer logo">
        </div>

      </div>
    </div>

  
  <!-- =========================================
  ====== Form (Newsletter sign up) ======== -->

  <?php
  include 'inc/news_letter_sign_up.php';
  ?>
  

  </main>
      
<?php
  include 'inc/footer.php';
?>


  <form action="#" method="get" >
		<div class="container-inner" id="form-lo">

			<div>
				<h2>Email Newsletter Sign-Up</h2>
			</div>

			<div class="input-boxes">
			
					<div class="data-input">
						<label id="name-id" for="form-input-name">Your Name <span class="p-red">*</span></label>
						<input id="form-input-name" type="text">
					</div>

					<div class="data-input">
						<label id="e-mail-id" for="form-input-email">Your Email <span class="p-red">*</span></label>
						<input id="form-input-email" type="text">
					</div>

				</div>

			<div class="checkbox">
        <div class="custom-tickbox"></div>
				<input type="checkbox" class="tickbox" id="checkbox-id" name="#" value="#">
        <label for="checkbox-id" class="form-text">Please tick this box if you wish to receive marketing information from us. Please see our <a href="#" class="link-blk">Privacy Policy</a> for more information on how we keep your data safe.</label>
      </div>

			<div>
				<button type="submit" class="btn-blk">SUBSCRIBE</button>
			</div>

		</div>
	</form>  


  </main>
      
<!-- ===========================
======= Footer ============ -->

  <footer class="footer">
    <div class="container-inner">

        <div class="footer-inner" id="footer-lo">

          <div class="company-info">
            <span class="nm-logo-white"><img src="img/nm-logo-white-med.png" alt="Netmatters logo"></span>
            <h4><span>Follow us on:</span></h4>
            <div class="socials">
              <div class="socials-top">
              <a class="social-links fb" href="#"><i class="fa-brands fa-facebook-f fa-2xl"></i></a>
              <a class="social-links li" href="#"><i class="fa-brands fa-linkedin-in fa-2xl"></i></a>
            </div>
              <div class="socials-bot">
              <a class="social-links twtr" href="#"><i class="fa-brands fa-twitter fa-2xl" ></i></a>
              <a class="social-links ig" href="#"><i class="fa-brands fa-instagram fa-2xl"></i></a>
            </div>
            </div>        
      </div>

      <div class="footer-col">
      
      <div class="footer__list">
        <h4>About Netmatters </h4>
        <ul>          
          <li><a href="#">News</a></li> 
          <li><a href="#">Our Careers</a></li> 
          <li><a href="#">Our Team</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Cookie Policy</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Environmental Policy</a></li>
          <li><a href="#">Contact Us</a></li> 
        </ul>
      </div>

      <div class="footer__list">
        <h4>Our services</h4>
        <ul>          
          <li><a href="#">Bespoke Software</a></li> 
          <li><a href="#">IT Support</a></li>
          <li><a href="#">Digital Marketing</a></li>
          <li><a href="#">Telecoms Services</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Cyber Security</a></li>
          <li><a href="#">Developer Training</a></li>
        </ul>  
      </div>
    
      <div class="footer__list">
        <h4>Our Industries</h4>  
        <ul>       
          <li><a href="#">Financial Services</a></li> 
          <li><a href="#">Construction</a></li>
          <li><a href="#">Retail & E-Commerce</a></li>
          <li><a href="#">Non-Profits</a></li>
          <li><a href="#">SME's</a></li>
          <li><a href="#">Healthcare</a></li>
          <li><a href="#">Education & Training</a></li>
          <li><a href="#">Travel & Leisure</a></li>
        </ul> 
      </div>
    
      <div class="footer__list">
        <h4>Locations</h4> 
        <ul>         
          <li><a href="#">London Office</a></li> 
          <li><a href="#">Cambridge Office</a></li>
          <li><a href="#">Wymondham Office</a></li>
          <li><a href="#">Great Yarmouth Office</a></li>
        </ul>
      </div>

    </div>
    </div>
    </div>
  </footer>

  <!-- =======================================
  ========Footer-Bottom ==================== -->

  <div class="footer-bottom ">
    <div Class="container-inner" id="footer-bot-lo">
      <p>&copy; Copyright Netmatters 2023.</p>
      <p>All rights reserved.</p>
      <p class="sm-dis">-</p>
      <Ul class="footer__list">
        <li>
          <a id="sitemap" href="#">Sitemap</a>
        </li>
      </Ul>
    </div>
  </div>


</div>

<!-- ========== Side menu ======================== -->

<div class="side-menu" id="side-nav-lo">
  <div class="side-menu-inner">
    <ul class="side-menu-list">

  <li class="side-list-item hidden-lrg"><a href="#" class="section-title">Contact us</a></li>
    

  <li class="side-menu-section-outer hidden-lrg">   
    <ul class="side-menu-section-list">

      <li class="side-list-item">
        <a href="#" class="section-title">
        <span class="nav-icon-blue-pale"><i class="fa-solid fa-laptop"></i></span>
        <p class="side-nav-p1"> Bespoke </p>
        <p class="side-nav-p2">Software </p> 
      </a>  
    </li>

    <li class="side-list-item-dark-sml"><a class="section-link" href="#">Bespoke CRM</a></li>
    <li class="side-list-item-dark-sml"><a class="section-link" href="#">Business Automation</a></li>
    <li class="side-list-item-dark-sml"><a class="section-link" href="#">Software Intergrations</a></li>
    <li class="side-list-item-dark-sml"><a class="section-link" href="#">Mobile App Development</a></li>
    <li class="side-list-item-dark-sml"><a class="section-link" href="#">Bespoke Databases</a></li>
    <li class="side-list-item-dark-sml"><a class="section-link" href="#">Sharepoint Development</a></li>
    <li class="side-list-item-dark-sml"><a class="section-link" href="#">Operational Systems</a></li>
    <li class="side-list-item-dark-sml"><a class="section-link" href="#">Business Central Implementation</a></li>
    <li class="side-list-item-dark-sml"><a class="section-link" href="#">Internet of Things (IOT) Software</a></li>
    <li class="side-list-item-dark-sml"><a class="section-link" href="#">Intranet Development</a></li>
    <li class="side-list-item-dark-sml"><a class="section-link" href="#">Customer Portal Development</a></li>
    <li class="side-list-item-dark-sml"><a class="section-link" href="#">Reporting Hub</a></li>
  </ul>
</li>

<li class="side-menu-section-outer hidden-lrg">   
  <ul class="side-menu-section-list">
    <li class="side-list-item">
    <a href="#" class="section-title">
      <span class="nav-icon-blue"><i class="fa-sharp fa-solid fa-display"></i></span>
      <p class="side-nav-p1">IT </p>
      <p class="side-nav-p2">Support</p> 
    </a>
    </li>

      <li class="side-list-item-dark-sml"><a class="section-link" href="#">Managed IT Support</a></li>
    <li class="side-list-item-dark-sml"><a class="section-link" href="#">Business IT Support</a></li>
    <li class="side-list-item-dark-sml"><a class="section-link" href="#">Office 365 For Business</a></li>
    <li class="side-list-item-dark-sml"><a class="section-link" href="#">IT Consultancy</a></li>
    <li class="side-list-item-dark-sml"><a class="section-link" href="#">Cloud Service Provider</a></li>
    <li class="side-list-item-dark-sml"><a class="section-link" href="#">Data Backup and Disaster Recovery</a></li>
  </ul>
</li>


<li class="side-menu-section-outer hidden-lrg">   
  <ul class="side-menu-section-list">
    <li class="side-list-item">
    <a href="#" class="section-title">
      <span class="nav-icon-green"><i class="fa-solid fa-chart-simple"></i></span>
      <p class="side-nav-p1">Digital </p>
      <p class="side-nav-p2">Marketing</p>
    </a>
  </li>

  <li class="side-list-item-dark-sml"><a class="section-link" href="#">Search engine Optimisation (SEO)</a></li>
  <li class="side-list-item-dark-sml"><a class="section-link" href="#">Pay Per Click Advertising (PPC)</a></li>
  <li class="side-list-item-dark-sml"><a class="section-link" href="#">Conversion Rate Optimisation (CRO)</a></li>
  <li class="side-list-item-dark-sml"><a class="section-link" href="#">Email Marketing</a></li>
  <li class="side-list-item-dark-sml"><a class="section-link" href="#">Social Media Marketing</a></li>
  <li class="side-list-item-dark-sml"><a class="section-link" href="#">Content Marketing</a></li>
</ul>
</li>


  <li class="side-menu-section-outer hidden-lrg">   
    <ul class="side-menu-section-list">  
  <li class="side-list-item">
  <a href="#" class="section-title">
    <span class="nav-icon-red"><i class="fa-solid fa-phone-volume"></i></span>
    <p class="side-nav-p1">Telecoms </p>
    <p class="side-nav-p2">Services</p>
  </a>
  </li>

  <li class="side-list-item-dark-sml"><a class="section-link" href="#">Business Mobile</a></li>
  <li class="side-list-item-dark-sml"><a class="section-link" href="#">Hosted VOIP Provider</a></li>
  <li class="side-list-item-dark-sml"><a class="section-link" href="#">Business VOIP Systems</a></li>
  <li class="side-list-item-dark-sml"><a class="section-link" href="#">Business Broadband</a></li>
  <li class="side-list-item-dark-sml"><a class="section-link" href="#">Leased Lines Provider</a></li>
  <li class="side-list-item-dark-sml"><a class="section-link" href="#">3CX Systems</a></li>
</ul>
</li>


<li class="side-menu-section-outer hidden-lrg">   
    <ul class="side-menu-section-list">          
  <li class="side-list-item">
  <a href="#"  class="section-title">
    <span class="nav-icon-purple"><i class="fa-solid fa-code" ></i></span>
    <p class="side-nav-p1">Web </p>
    <p class="side-nav-p2">Design</p>
  </a>
</li>

<li class="side-list-item-dark-sml"><a class="section-link" href="#">Bespoke Website Design</a></li>
<li class="side-list-item-dark-sml"><a class="section-link" href="#">eCommerce Website Design</a></li>
<li class="side-list-item-dark-sml"><a class="section-link" href="#">Pay Monthly Websites</a></li>
<li class="side-list-item-dark-sml"><a class="section-link" href="#">Branding and Design</a></li>
<li class="side-list-item-dark-sml"><a class="section-link" href="#">Mobile App Development</a></li>
<li class="side-list-item-dark-sml"><a class="section-link" href="#">Web Hosting</a></li>
</ul>
</li>


<li class="side-menu-section-outer hidden-lrg">   
  <ul class="side-menu-section-list">
<li class="side-list-item">
<a href="#" class="section-title">
  <span class="nav-icon-red-pink"><i class="fa-solid fa-shield-halved"></i></span>
  <p class="side-nav-p1">Cyber </p>
  <p class="side-nav-p2">Security</p>
</a>
</li>

<li class="side-list-item-dark-sml"><a class="section-link" href="#">Cyber Security Assessment</a></li>
<li class="side-list-item-dark-sml"><a class="section-link" href="#">Cyber Security Management</a></li>
<li class="side-list-item-dark-sml"><a class="section-link" href="#">Cyber Penetration Testing</a></li>
<li class="side-list-item-dark-sml"><a class="section-link" href="#">Cyber Essentials Certification</a></li>
<li class="side-list-item-dark-sml"><a class="section-link" href="#">PCI Compliance</a></li>
<li class="side-list-item-dark-sml"><a class="section-link" href="#">Hacking Prevention</a></li>
</ul>
</li>


<li class="side-menu-section-outer hidden-lrg">   
  <ul class="side-menu-section-list">
<li class="side-list-item">
<a href="#" class="section-title">
  <span class="nav-icon-orange"><i class="fa-solid fa-graduation-cap fa-flip-horizontal"></i></span>
  <p class="side-nav-p1">Developer </p>
  <p class="side-nav-p2">Training</p>
</a>
</li>

<li class="side-list-item-dark-sml"><a class="section-link" href="#">Train For a Career In Tech</a></li>
<li class="side-list-item-dark-sml"><a class="section-link" href="#">Skills Bootcamp</a></li>
<li class="side-list-item-dark-sml"><a class="section-link" href="#">Scion Scheme Frequently Asked Questions</a></li>
<li class="side-list-item-dark-sml"><a class="section-link" href="#">Scion Collaborators</a></li>
</ul>
</li>

<!-- ========================================================= -->
<!-- ============= side nav menu second block ===================== -->

<li class="side-menu-section-outer lrg-reapp">   
  <ul class="side-menu-section-list">
    <li class="side-list-item-wide"><a href="#" class="section-title">Services</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Bespoke Software</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>It Support</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Digital Marketing</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Telecoms Services</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Web Design</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Cyber Security</a></li>
  </ul>
</li>

<li class="side-menu-section-outer">   
  <ul class="side-menu-section-list">
    <li class="side-list-item-wide margin-top"><a href="#" class="section-title">Our work</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Case Studies</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Our It Clients</a></li>
  </ul>
</li>

<li class="side-menu-section-outer">   
  <ul class="side-menu-section-list">
    <li class="side-list-item-wide "><a href="#" class="section-title">Our Knowledge</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Technologies</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Industries</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>News</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Insights</a></li>
    </ul>
</li>

<li class="side-menu-section-outer">   
  <ul class="side-menu-section-list">
    <li class="side-list-item-wide "><a href="#" class="section-title">Training</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Train For A Career In Tech</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Skills Bootcamp</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>SCS Frequently Asked Questions</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Scion Collaborators</a></li>
    </ul>
</li>

<li class="side-menu-section-outer">   
  <ul class="side-menu-section-list">
    <li class="side-list-item-wide "><a href="#" class="section-title">Our Company</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Why Choose Us?</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Our Culture</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Our Team</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Our Careers</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Our Benefits</a></li>
    </ul>
</li>

<li class="side-menu-section-outer">   
  <ul class="side-menu-section-list">
    <li class="side-list-item-wide "><a href="#" class="section-title">Contact Us</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>London Office</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Cambridge Office</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Wymondham Office</a></li>
    <li class="side-list-item-dark-sml-wide"><a class="section-link-sec" href="#"><span><i class="fa-solid fa-angles-right fa-2xs"></i></span>Great Yarmouth Office</a></li>
    </ul>
</li>

<li class="side-menu-section-outer">   
  <ul class="side-menu-section-list">
    <li class="side-list-item-wide "><a href="#" class="section-title">Covid Risk Assessments</a></li>
  </ul>
</li>

<li class="side-menu-section-outer lrg-disapp">   
  <ul class="side-menu-section-list">
    <li class="side-list-item-wide "><a href="#" class="section-title">Support</a></li>
  </ul>
</li>


</ul>


  </div> 
</div>

<div class="overlay"></div>



  <script src="js/jquery-3.7.0.min.js"></script>
  <script src="js/cookies.js"></script>
  <script src="js/slick/slick.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.autoplay').slick({
  draggable : true,      
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4000,
  infintie : true,
  dots : true,
  arrows : false,
});
});
  </script>
  <script>
  $(document).ready(function(){
    $('.autoplay-carousel').slick({
  variableWidth: true,
  autoplay: true,
  pauseOnHover: true,
  dots: false,
  arrows: false,
  infinite: true,
  autoplaySpeed: 4000,
  cssEase: "ease-in-out",
  // speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  draggable: false,
});
});
  </script>
  <script src="js/sticky.js"></script>
  <script src="js/main.js"></script>
</body>
</html>


