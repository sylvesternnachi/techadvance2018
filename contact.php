<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="charset=utf-8" />
  <meta name="author" content="Techadvance" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> -->
  <meta property="og:locale" content="en-US" />
  <meta property="og:type" content="website" />
  <!-- css links -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <title>Contact Us | TechAdvance </title>
</head>
<body>
  <div id="top-section" class="static-header" style="height: auto">
    <header>
      <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="assets/img/ta-logo.svg" style="width: 230px; "></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">

         <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About us</a></li>
             <li><a href="about.html#team">Team</a></li>
             <li><a href="#">Careers</a></li>
            <li><a href="http://blog.techadvance.ng/"> Blog</a></li>
            <li><a href="contact.php" style="background: #0293ec;
            color: #fff !important;
            border-radius: 7px;">Contact</a></li>
            <li style="background: white;border-radius: 10px;" class="hidden-sm hidden-xs"><a href="#"><img src="assets/img/2000px-Flag_of_Nigeria.svg.png" class="img-responsive" alt="" style="    height: 19px;
    border-radius: 5px;"></a></li>
          </ul>
        </div>
      </div>
    </nav> 
    </header>
    <div id="static_banner">
        <div class="container">
            <h1 align="center">Get in touch</h1>
            <p class="text-center" class="c-p" style="font-size: 20px;">Have a question? Send us a note using the form below.</p>
        </div>
    </div>
  </div>

  <div id="sub-plat">
    
    <div class="container">
      <div class="row">

       
        <div class="col-md-7">

                  <?php

                    if(isset($_POST['submit'])){

                        $name = htmlspecialchars($_POST['name']);
                        $email = htmlentities($_POST['email']);
                        $answer = htmlentities($_POST['answer']);
                        $subjects = htmlentities($_POST['subject']);
                        $mgs  = htmlentities($_POST['message']);

                        if($name != '' && $email != '' && $answer != '' && $subjects != '' && $mgs != ''  ){

                            $to      = 'enquiries@techadvance.ng';
                            $subject = $subjects;
                            $message = $mgs;
                            $headers = 'From: enquiries@techadvance.ng' . "\r\n" .
                                'Reply-To: enquiries@techadvance.ng' . "\r\n" .
                                'X-Mailer: PHP/' . phpversion();

                            $sentmail = mail($to, $subjects, $message, $headers);

                            if($sentmail){
                              echo '<div class="bg-success" style="padding:5%">'.'Message sent successfully'.'</div>';

                            }else{
                              echo '<div class="bg-danger" style="padding:5%">'.'Oops!!!, something went wrong. Try again'.'</div>';
                            }


                        }else{
                          

                          echo '<div class="bg-danger" style="padding:5%">'.'Oops !!! make sure all the field is fill correctly'.'</div>';
                          
                        }

                    }
                ?>
         
 <form action="" method="POST" class="allForm">
        <input type="text" class="form-control" name="name" placeholder="Name">
        <input type="email" class="form-control" name="email" placeholder="Email Address">
        <input type="text" class="form-control" name="subject" placeholder="Message Subject">
       <textarea name="message" id="" cols="30" rows="4" class="form-control" placeholder="Messages..."></textarea>
       <button class="btn btn-success" name="submit" style="border: none; padding: 15px 63px; font-size: 15px; background: #0EDE9A;">Send Message</button>
      </form>
        </div>

         <div class="col-md-5 hidden-sm hidden-xs">
          <img src="assets/img/DDI_5110-Edit-2.png" alt="" class="img-responsive">
        </div>
      </div>
     
    </div>

  </div>

  <div id="join-us-box">
    <h1 align="center">Interested in joining our team?</h1>
    <p align="center">
     <a href="#"><button class="j-button">Click here</button></a>
    </p>
  </div>



      <footer>
          <div class="container">
        

          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <h3>Subsidiaries</h3>
                <ul style="padding: 0%;">
                    <li> <a href="http://www.gpayafrica.com/" target="_blank">Gpay Africa</a></li>
                    <li>  Ace Remmittance</li>
                     <li> Data Analytics</li>
                     <li> Transfer2Africa</li>
                    
                </ul>
            </div>
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <h3>Platforms</h3>
                 <ul style="padding: 0%;">
                    <li>  Bills.com.ng</li>
                     <li <a href="https://www.payelectricitybills.com" target="_blank"> Pay Electricity Bills</a></li>
                     <li><a href="https://bus.com.ng" target="_blank">  Bus.com.ng </a></li>
                     <li> Business in the box</li>
                    
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <h3>About us</h3>
                <ul style="padding: 0%;">
                  <li> <a href="about.html"> Team members </a></li>
                     <li> <a href="#"> Careers </a></li>
                     <li> <a href="privacy-policy.html">Privacy Policy</a> </li>
            <li> Staff Portal</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                  <h3>Contact us</h3>
                  <ul style="padding: 0%;">
                    <li>  Address:   21c Akin Ogunlewe Street, Off Ligali Ayorinde V/I, Lagos </li>
                     <li> email: info@techadvance.ng</li>
                     <li> Tel: 01-4540013</li>
                </ul>
            </div>
          </div>

           <hr />
            <div class="row">

              <div class="col-md-4">
                <img src="assets/img/inspire-africa-2019.png" class="inspire" width="350px">
              </div>
               <div class="col-md-8">
                 <p align="right" class="inspire-p" style="font-size: 15px; margin-top: 2.6%"> &copy; 2014 Copyright | Allright reserve</p>
               </div>

            </div>

          </div>
      </footer>

   	
</body>
<!--Javascript link files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</html>