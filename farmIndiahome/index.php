<?php include '../mail.php'; ?>
<?php
session_start();
 include '../bidding/admin/db_connect.php' 
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FarmIndia</title>
        
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
         


    </head>
    <body id="page-top">
    <?php echo $alert; ?>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets\img\farmindia.jpg " style="height: 20%;width: 20%"> FarmIndia</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#serv">Services </a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li>
                        <?php if(isset($_SESSION['login_id'])): ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../bidding/admin/ajax.php?action=logout2"><?php echo "Welcome ".$_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a></li>
                      <?php else: ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="javascript:void(0)" id="Login">Login</a></li>
                      <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">FarmIndia</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Farming is not a job ,its a part of life </h2>
                    <a class="btn btn-primary js-scroll-trigger" href="#about">Get Started</a>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-white mb-4">Abouts Us !</h2>
                        <p class="text-white-50">
                          FarmIndia is the Farmers Welfare Web Application which provides employment opportunities to the farmers .
Provides financial benefits/profit to the farmers .
Provides the knowledge about the crops /pesticides /weather report
provides the Farmer a facility to rent necessary equipment/Tractor .
provides the Farmer a facility to sell their crops.
Security and Safety Transactions.

FarmIndia is a community-based Web Application that focuses on solving unnoticed and serious problems of the Farmers who don't get the proper price to their crop which result in losses,and also FarmIndia focuses on Providing the employment opportunities to the farmers . FarmIndia also helps the Farmers to Rent the tractor for their use and also provides knowledge about the crops/weather forecasting/pesticides. 
                        </p>
                    </div>
                </div>
               
            </div>
        </section>
  <!-- services icon-->
  <div>
   <!--    <div  ><h1 style="background: white;border-color: black;font-size: 30px;align-self: center;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b >Our Services</b>  </h1></div>-->
        <div class="services-wrapper projects-section " id="serv">
  <div class="container svcs-container">

    <div class="row">

      <div class="col-sm-4 services-box hoverServices">
      
          <h3 class="services-subheading">
           FarmIndia Action System 
          </h3>
        
        <div class="info col-lg-10 col-lg-offset-1">
          <ul>
            <li>We Provide a Facility to Bid 
            </li>
            <li>Real Time Auction System
            </li>
            <li>Safe and Secure
            </li>
            <br>
            <a class="btn btn-primary js-scroll-trigger" href="../bidding/index.php">Visit Page</a>
          </ul>
        </div>
      </div>
      <div class="col-sm-4 services-box hoverServices">
        
       
          <h3>
        FarmIndia Jobs 
          </h3>
        
        <div class="info col-lg-10 col-lg-offset-1">
          <ul>
            <li>Jobs to farmers
            </li>
            <li>100% Verified Jobs
            </li>
            <li>Safe and Secure
            </li>
            <br>
            
            <a class="btn btn-primary js-scroll-trigger" href="../FarmJobs/index.php">Visit Page</a>
          </ul>
        </div>
      </div>
      <div class="col-sm-4 services-box hoverServices last">
       
      
          <h3 class="services-subheading">
            FarmIndia Shop
          </h3>
     
        <div class="info col-lg-10 col-lg-offset-1">
          <ul>
            <li>Best Prices
            </li>
            <li>All Farming Equipments
            </li>
            <li>Safe and Secure
            </li>
            <br>
            
            <a class="btn btn-primary js-scroll-trigger" href="../farmvehicle/index.php">Visit Page</a>
          </ul>
        </div>
      </div>
    </div>
    </div>
    <br>
    <br><br><br><br><br><br>
    <!--row0-->
    <div><br><br> <table align="center">
        <tr>
            <td>
                   <iframe src="topbidder.php" scrolling="yes" width="1000px" height="400px">my bidd</iframe>

            </td>
            <td>
                   <iframe src="biddem.php" scrolling="no" width="400px" height="400px"></iframe>
            </td>
        </tr>
    </table>
     </div>    
          
  
   
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container">
                <!-- Featured Project Row-->
                 <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0"  alt="" /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                        
                        </div>
                    </div>
                </div>
              
                <!-- Project One Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid" src="https://s01.sgp1.cdn.digitaloceanspaces.com/article/106791-wnsiqtowdr-1599740528.jpg" style="background-color: black;color: white" alt="" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                   
                                    <a class="btn btn-primary js-scroll-trigger" href="pest.php">Know About Pesticides !! </a>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- weather
--->
                
                
                
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6"><img class="img-fluid" src="https://financialsamachar.com/wp-content/uploads/2020/09/farmer.jpg" alt="" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right"><label style="color: white;font-size: 30px">Real Time Price Of Crops</label>
                                  <a class="btn btn-primary js-scroll-trigger" href="https://visualize.data.gov.in/?inst=9ef84268-d588-465a-a308-a864a43d0070&embed=1">Check the Prices !! </a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid" src="weather_img/wea.jpg"  alt="" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                   
                                      
                        <?php 
                         include('weather.php');
                        ?>
<<<<<<< HEAD
                
         <a class="btn btn-primary js-scroll-trigger" href="../weather/index.html">Check Other Place  !?</a
=======

         <a class="btn btn-primary js-scroll-trigger" href="../weather/index.html">Check Other Place  !?</a>


>>>>>>> 88e5533cef864ed61befb33fb8a35690ab52d785
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
               
            </div>

        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Want to be a part of FarmIndia?</h2>
                        <form class="form-inline d-flex" action="" method="post">
                    
                            <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" type="email" name="email" placeholder="Enter email address..." />
                            <input type="submit" name="submit" class="" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">Dairy circle ,Bangalore-29,India</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" />
                                <p>FarmIndia58@gmail.com</p>
                                <div class="small text-black-50" ><a href=""></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">+91 6364229284</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container">FarmIndia58@gmail.com</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script type="text/javascript">
      $('#login').click(function(){
        uni_modal("Login",'../bidding/login.php')
      })
      $('.datetimepicker').datetimepicker({
          format:'Y-m-d H:i',
      })
      $('#find-car').submit(function(e){
        e.preventDefault()
        location.href = 'index.php?page=search&'+$(this).serialize()
      })
    </script>
      
    <?php $conn->close() ?>
    </body>
</html>
