<!DOCTYPE php>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>PMA - Patient Medication Application</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/PMA-mini.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
   <!-- [if lt IE 9] -->

   <style>
      table, th, td {
        text-align: center;
        border: 1px solid black;
      }
      </style>
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->
      <header>
         <div class="header-top wow fadeIn">
            <a class="navbar-brand" href="index.php"><img src="images/PMA-logo.png" alt="image"></a>
            <div class="container">
               <div class="right-header">
                  <div class="header-info">

                     <!-- <div class="info-inner">
                        <span class="icontop"><img src="images/phone-icon.png" alt="#"></span>
                        <span class="iconcont"><a href="tel:800 123 456">800 123 456</a></span>	
                     </div> -->
                     <div class="info-inner">
                        <!-- <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span> -->
                        <span class="iconcont"><a data-scroll href="signup.html">Sign Up</a></span>	
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="mThe Specialist Clinicain-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a class="active" href="index.php">Home</a></li>

                        <li><a data-scroll href="signup.html">Sign Up</a></li>
                        <li><a data-scroll href="login.html">Login</a></li>

                        <li><a data-scroll href="#about">About us</a></li>
                        <li><a data-scroll href="#service">Book Appointment</a></li>
                        <li><a data-scroll href="#testimonials">Your Medication</a></li>
                        <li><a data-scroll href="#doctors">Consult a Doctor</a></li>
                        <li><a data-scroll href="#price">Find a Clinic</a></li>
                        <li><a data-scroll href="#getintouch"></a></li>

                     </ul>
                  </div>
               </nav>
               <!-- <diThe Specialist Clinic class="serch-bar">
                  <div id="custom-search-input">
                     <div class="input-group col-md-12">
                        <input type="text" class="form-control input-lg" placeholder="Search" />
                        <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        </span>
                     </div>
                  </div>
               </diThe> -->
            </div>
         </div>
      </header>
      <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/meds.png');">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="text-contant">

                     <!-- <h2>
                        <span class="center"><span class="icon"><img src="images/PMA-logo-medium.png" alt="#" /></span></span>
                        <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome to PMA", "We Care About Your Health"]'>
                        <span class="wrap"></span>
                        </a>
                     </h2> -->
                  </div>
               </div>
            </div>
            <!-- end row -->
            <div class="col-md-12 col-sm-12">
               <div class="row">
                  <h2>
                     <span class="center"><span class="icon"><img src="images/PMA-logo-medium.png" alt="#" /></span></span>
                     <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome to PMA!"]'>
                     <span class="wrap"></span>
                     </a>
                  </h2>
               </div>
            </div>
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->

      <div class="signup" style="background:#91cdfd;">
         <a href="signup.html" data-scroll="" class="btn btn-dark btn-radius btn-brd">Sign Up</a>
      </div>
   
       <div class="login" style="background:#0071d1;">
         <a href="login.html" data-scroll="" class="btn btn-dark btn-radius btn-brd">Login</a>

      </div>

      <div id="about" class="section wow fadeIn">
         <div class="container">
            <div class="heading">

               <span class="icon-logo"><img src="images/PMA-logo-medium.png" alt="#"></span>
               <h2>About us</h2>
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-6">
                  <div class="message-box">
                     <h4>What We Do</h4>
                     <h2>Creating a centralized system for all patients medical needs</h2>
                     <p class="lead">We are web application that allows patients to register their healthcare information including medication details, family physician (if they have one), and pharmacy. It directs them to nearby clinics and pharmacies if they don’t register with a family physician or pharmacy through Google Maps API. 
                     The Patient Medication Application sends reminders, through email or text, for each medication registered when patients need to take or refill their medication. If they choose to refill their medication, the application allows them to notify the registered pharmacy or book an appointment with their physician, as needed. 
                     Our esteemed web application also allow patients to have a log or make note of any side effects that they experience. As well, a general chat feature would allow patients to have their questions or concerns addressed immediately by their doctor or pharmacist. 
                     </p>
                     <!-- <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a> -->
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
               <div class="col-md-6">
                  <div class="post-media wow fadeIn">
                     <img src="images/water.png" alt="#">
                  </div>
                  <!-- end media -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         <!-- end container -->
      </div>
      
      <div id="service" class="services wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="appointment-form">
                     <h3><span>+</span> Book Appointment</h3>
                     <div class="form">
                        <form action="/PatientMedicationApplication/book_action.php" method="post">
                           <fieldset>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="text" id="name" placeholder="Your Name"  />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="email" placeholder="Email Address" id="email" />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                 <div class="row">
                                    <div class="form-group">
                                       <!-- <select class="form-control"> -->
                                          <input type= "date">  <!-- LETS PATIENT SELECT DATE OF APPOINTMENT-->
                                          <!-- <option>Day</option>
                                          <option>Sunday</option>
                                          <option>Monday</option>
                                          <option>Tuesday</option>
                                          <option>Wednesday</option>
                                          <option>Monday</option> -->
                                       <!-- </select> -->
                                    </div>
                                    <div class="form-group">
                                       <input type="time">
                                       <!-- <select class="form-control">
                                          <option>Time</option>
                                          <option>AM</option>
                                          <option>PM</option>
                                       </select> -->
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <select name="doctor" id="doctor" class="form-control">
                                          <option value="default">Doctor Name</option>
                                          <?php 
                                             require __DIR__ . '/helper.php';
                                             $url = "https://localhost:5001/api/doctors/GetDoctors";
                                             $arr = make_curl_get_request($url);
                                          
                                             foreach($arr["value"] as $key=>$value){
                                                echo '<option value='.$value["id"].'>' . $value["name"] . '</option>';
                                             }

                                             // $url = "https://localhost:5001/api/worksAt/GetWorksAt";
                                             // $arr = make_curl_get_request($url);
                                             // foreach($arr["value"] as $key=>$value){
                                             //    if($value["medID"] == $_POST['doctor']){
                                             //       echo '<option value='.$value["clinicNo"].'>' . $value["clinicNo"] . '</option>';
                                             //    }
                                             // }
                                             ?>
                                       </select> 
                                       <!-- <select id="clinic" class="form-control">
                                          <option value="default">Doctor's Clinic</option>   
                                       </select> -->
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <textarea rows="4" id="textarea_message" class="form-control" placeholder="Your Message..."></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <div class="center"><button type="submit">Submit</button></div>
                                    </div>
                                 </div>
                              </div>
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
	  
	  <!-- doctor -->
	  
	  
	
    <!-- <a href="login.html" target="_self">Login</a> -->

    <!-- <div class="signup">
      <a href="signup.html" data-scroll="" class="btn btn-dark btn-radius btn-brd">Sign Up</a>
   </div>

    <div class="login">
      <a href="login.html" data-scroll="" class="btn btn-dark btn-radius btn-brd">Login</a>
   </div> -->
    <!-- <div id="login" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="login" tabindex="-1">

      <div class="container">
         
      </div>

    </div>
           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="appointment-form">
                     <h3><span>+</span> Contact your doctor!</h3>
                     <div class="form">
                        <form action="index.php">
                           <fieldset>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="text" id="name" placeholder="Your Name"  />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="email" placeholder="Your Email" id="email" />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="email" placeholder="Doctors Email" id="email" />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <select class="form-control">
                                          <option>Doctor Name</option>
                                          <option>Mr.XYZ</option>
                                          <option>Mr.ABC</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <textarea rows="4" id="textarea_message" class="form-control" placeholder="Your Message..."></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <div class="center"><button type="submit">Send Message!</button></div>
                                    </div>
                                 </div>
                              </div>
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

	  
	  
	  end doctor section -->
	  
       <div id="testimonials" class="section wb wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/PMA-logo-medium.png" alt="#"></span>
               <h2>Your Medication</h2>
            </div> 
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
               <div class="appointment-form">
                  <h3><span>+</span> Add Medication</h3>
                  <div class="form">
                     <form action="index.php">
                        <fieldset>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="row">
                                 <div class="form-group">
                                    <input type="text" id="name" placeholder="Medication Name"  />
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="row">
                                 <div class="form-group">
                                    <label for ="expiry"> Expiration Date</label>
                                    <input type="datetime-local" placeholder="Expiration Date" id="expiry" />
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                              <div class="row">
                                 <div class="form-group">
                                    <!-- <select class="form-control"> -->
                                       <!-- <<input type= "date">  LETS PATIENT SELECT DATE OF APPOINTMENT> -->
                                      <input type="number" placeholder="Doseage eg. 1 tablet">
                                    
                                 </div>

                                 <div class="form-group">
                                    <!-- <select class="form-control"> -->
                                       <!-- <<input type= "date">  LETS PATIENT SELECT DATE OF APPOINTMENT> -->
                                      <input type="number" placeholder="Time eg. Every x hours">
                                       <!-- <option>Day</option>
                                       <option>Sunday</option>
                                       <option>Monday</option>
                                       <option>Tuesday</option>
                                       <option>Wednesday</option>
                                       <option>Monday</option> -->
                                    <!-- </select> -->
                                 </div>

                                 <div class="form-group">
                                    <!-- <input type="time"> -->
                                    <select class="form-control">
                                       <option>Time Units</option>
                                       <option>Every <i>x </i> Hours</option>
                                       <option>Daily</option>
                                       <option>Weekly</option>
                                       <option>Monthly</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="row">
                                 <div class="form-group">
                                    <select class="form-control">
                                       <option>Medication Period</option>
                                       <option>Fixed Time eg. 1 week</option>
                                       <option>Indefinte Time Period</option>
                                    </select>
                                 </div>
                              </div>
                           </div> -->
                           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <div class="row">
                                 <div class="form-group">
                                    <textarea rows="4" id="textarea_message" class="form-control" placeholder="Notes... Side Effects"></textarea>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="row">
                                 <div class="form-group">
                                    <div class="center"><button type="submit">Submit</button></div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
               <div class="appointment-form">
            <h3><span>+</span>Medication List</h3>

               <table style="width: 100%;">
               <tr>
                  <th>Med Name</th>
                  <th>Expiration Date</th>
                  <th>Doseage</th>
                  <th>Time</th>
                  <th>Side Effects</th>
               </tr>
               <tr>
                  <td>Allergy Medication</td>
                  <td>12/1/1990</td>
                  <td>3</td>
                  <td>2</td>
                  <td>Light headaches</td>
               </tr>
               <tr>
                  <td>Vitamins</td>
                  <td>12/11/1999</td>
                  <td>5</td>
                  <td>1</td>
                 
               </tr>
               </table>
               </div>
            </div>

            

            <div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
               <div class="container">
             
             <div class="heading">
                      <span class="icon-logo"><img src="images/PMA-logo-medium.png" alt="#"></span>
                      <h2>Meet Our Doctors!</h2>
                   </div>
       
                   <div class="row dev-list text-center">
                       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                           <div class="widget clearfix">
                               <!-- <img src="images/doctor_01.jpg" alt="" class="img-responsive img-rounded"> -->
                               <div class="widget-title">
                                   <h3>Melanie Nguyen</h3>
                                   <small>Software + Biomedical Engineering</small>
                               </div>
                               <!-- end title -->
                               <p>Hello guys, I am the Head of R&D at Stark Industries. In my spare time, I like doing advanced theoretical physics and inventing new coding languages</p>
       
                               <div class="footer-social">
                                   <!-- <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a> -->
                                   <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                   <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a>
                                   <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                               </div>
                           </div><!--widget -->
                       </div><!-- end col -->
       
                       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                           <div class="widget clearfix">
                               <!-- <img src="images/doctor_02.jpg" alt="" class="img-responsive img-rounded"> -->
                               <div class="widget-title">
                                   <h3>Huda Abbas</h3>
                                   <small>Software + Biomedical Engineering</small>
                               </div>
                               <!-- end title -->
                               <p>Hello guys, I am the Vice-President of SpaceX and Art Director for the MET Gallery. In my spare time, I create advance computational algorithms for reinventing the laws of space-time.</p>
       
                               <div class="footer-social">
                                   <!-- <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a> -->
                                   <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                   <!-- <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a> -->
                                   <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                               </div>
                           </div><!--widget -->
                       </div><!-- end col -->
       
                       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
                           <div class="widget clearfix">
                               <!-- <img src="images/doctor_03.jpg" alt="" class="img-responsive img-rounded"> -->
                               <div class="widget-title">
                                   <h3>Nuha Shaikh </h3>
                                   <small>Software + Biomedical Engineering</small>
                               </div>
                               <!-- end title -->
                               <p>Hello, I am the Head of the Harvard Medical Board. In my spare time, I like studying complex microbiology to develop better genetic modification techniques. </p>
       
                               <div class="footer-social">
                                   <!-- <a href="#" class="btn grd1"><i class="fa fa-facebook"></i></a> -->
                                   <a href="#" class="btn grd1"><i class="fa fa-github"></i></a>
                                   <!-- <a href="#" class="btn grd1"><i class="fa fa-twitter"></i></a> -->
                                   <a href="#" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                               </div>
                           </div><!--widget -->
                       </div><!-- end col -->
       
                   </div><!-- end row -->
               </div><!-- end container -->
           </div>


      <div id="price" class="section wb wow fadeIn" style="padding-bottom:0;">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/PMA-logo-medium.png" alt="#"></span>
               <h2>Find your closest clinic/pharmacy!</h2>
            </div>
         </div>
         <div class="contact-section">
            <div class="form-contant">
               <form id="ajax-contact" action="assets/mailer.php" method="post">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group in_name">
                           <input type="text" class="form-control" placeholder="Address" required="required">
                        </div>
                        <div class="actions">
                           <input type="submit" value="Submit" name="submit" id="submitButton" class="btn small" title="Submit Your Message!">
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div id="googleMap" style="width:100%;height:450px;"></div>
         </div>
      </div>

      <footer id="footer" class="footer-area wow fadeIn">
         <!-- <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="logo padding">
                     <a href=""><img src="images/PMA-logo.png" alt=""></a>
                     <p>Locavore pork belly scen ester pine est chill wave microdosing pop uple itarian cliche artisan.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-info padding">
                     <h3>CONTACT US</h3>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                     <p><i class="fa fa-paper-plane" aria-hidden="true"></i> info@gmail.com</p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i> (+1) 800 123 456</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="subcriber-info">
                     <h3>SUBSCRIBE</h3>
                     <p>Get healthy news, tip and solutions to your problems from our experts.</p>
                     <div class="subcriber-box">
                        <form id="mc-form" class="mc-form">
                           <div class="newsletter-form">
                              <input type="email" autocomplete="off" id="mc-email" placeholder="Email address" class="form-control" name="EMAIL">
                              <button class="mc-submit" type="submit"><i class="fa fa-paper-plane"></i></button> 
                              <div class="clearfix"></div>
                              <!-- mailchimp-alerts Start -->
                              <!-- <div class="mailchimp-alerts"> -->
                                 <!-- <div class="mailchimp-submitting"></div> -->
                                 <!-- mailchimp-submitting end -->
                                 <!-- <div class="mailchimp-success"></div> -->
                                 <!-- mailchimp-success end -->
                                 <!-- <div class="mailchimp-error"></div> -->
                                 <!-- mailchimp-error end -->
                              <!-- </div> -->
                              <!-- mailchimp-alerts end -->
                           <!-- </div> -->
                        <!-- </form> -->
                     <!-- </div> -->
                  <!-- </div> -->
               <!-- </div> -->
            <!-- </div> --> -->
         <!-- </div> -->
      </footer>

      <div class="copyright-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="footer-text">
                     <p>© 2021 PMA. All Rights Reserved.</p>
                  </div>
               </div>
               <div class="col-md-4">
               </div>
            </div>
         </div>
      </div>
      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
   </body>
</html>
