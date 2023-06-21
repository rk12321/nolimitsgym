<?php
   include('session.php');
   include('php/db.php');
   
   
   
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
     <link rel="stylesheet" href="css/index.css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <title>No Limits GYM</title>
      <style>
         body{
         overflow-x:hidden;
         }
      </style>
   </head>
   <body>
      <!--
         <div class="text-right p-3" style="background: aliceblue;">
         <h5 class=><span class="ml-5">Home</span> <span class="ml-5">Enquire</span> <span class="ml-5 mr-5"><a href="login.php" style="color:black; text-decoration:none;">Login</a></span></h5>
         </div>
         <div class="text-right mr-5">
         <h6>Welcome <?php// echo $login_session; ?></h6> 
               <h6><a href = "logout.php">Sign Out</a></h6>
               </div>
               -->
      <div class="card text-center">
         <div class="card-header p-4 d-lg-block d-none" style="background:aliceblue;">
            <h6 class="text-right"> <span class="ml-5" style="cursor:pointer;"> <a href="home.php" style="color:black; text-decoration:none;">  HOME</a>
               </span> <span class="ml-5" style="cursor:pointer;" data-toggle="tooltip" data-placement="bottom" title="CALL NOW TO BOOK DEMO"><a href="#contact" style="color:black; text-decoration:none;">GET MEMBERSHIP </a></span>
               <span class="ml-5" style="cursor:pointer;"><a href="supp.php" style="color:black; text-decoration:none;">SUPPLEMENTS</a> </span>
               <span class="ml-5" style="cursor:pointer;"><a href="blog.php" style="color:black; text-decoration:none;" target="_blank">BLOG</a>  </span>
               <span class="ml-5" style="cursor:pointer;"><a href="#contact" style="color:black; text-decoration:none;">CONTACT US</a></span>
               <span class="ml-5" style="cursor:pointer;"><span class="text-success">Welcome <span style="color:red;"><?php echo $login_session; ?></span></span> <br>
               <span><a href = "logout.php">Sign Out</a></span></span>
            </h6>
         </div>
         <div class="d-lg-none d-block" style="background: darkslategrey;padding: 1rem;">
         <h4 class="text-success">NO LIMITS GYM</h4>
<!--    Made by Erik Terwan    -->
<!--   24th of November 2015   -->
<!--        MIT License        -->
<nav role="navigation" style="margin-top:-2rem;">
  <div id="menuToggle">
    <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
    <input type="checkbox" value="X" />

    <!--
    Some spans to act as a hamburger.
    
    They are acting like a real hamburger,
    not that McDonalds stuff.
    -->
    <span></span>
    <span></span>
    <span></span>
    
    <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->

    <ul id="menu" class="text-left" style="   z-index: 1;    height: 100%;">
    <h4 class="text-success">NO LIMITS GYM</h4>
      <a href="index.php"><li>Home</li></a>
      <a href="#contact"><li>Get Membership</li></a>
      <a href="supp.php"><li>Supplements</li></a>
      <a href="blog.php"><li>Blog</li></a>
      <a href="#contact"><li>Contact us</li></a>
      <a href="login.php"><li>Login</li></a>
    </ul>
  </div>
</nav>
         </div>
         <!--  sidebar starts-->
         <?php include "rightsidebar.php" ?>
         <!--  sidebar ends-->
         <!--  dashboard starts-->
         <?php include "personaldashboard.php" ?>
         <!--  dashboard ends-->
         <div class="card-body" style="border:none;">
         <div class="d-lg-block d-none">
         <?php
$querry = "Select * from datas where username = '$user_check' ";
                  $result = mysqli_query($db,$querry);
                  if($result){
                      while($row=mysqli_fetch_assoc($result)){
                          ?>
         
         <div class="text-danger" id="movingcontent">

         <?php
         $feepending = $row["paid"];
         if ($feepending==1) {
            echo "<h4><b>FEE PAYMENT PENDING</b></h4>";
         } else          if ($feepending==0) {
            echo "<h4><b>Want to pay fee?</b></h4>";
         }
         
        
         ?> 
        
         </div>
         <button class="btn-success" style="    position: absolute;  z-index: 3;    margin-top: -5rem; margin-left: 33rem;"><a href="razorpayconn/checkoutforfees.php?fee=<?php echo $row["fees"] ?>" style="color:white; text-decoration:none;">Pay now</a></button> 
        </div>


         <?php }
                  }
                  ?>

            <div class="card mt-n3" data-aos="zoom-in" data-aos-duration="1000" style="border:none;">
               <img src="img/img1.png" class="d-lg-block d-none" style="height:100vh;" alt="">
               <img src="img/img1.png" class="d-block mt-4 d-lg-none" style="height:30vh;" alt="">
            </div>
            <div class="mt-5 my-lg-5 my-0 mb-3">
               <div class="row">
                  <div class="col-lg-4 col-12" data-aos="fade-up" data-aos-duration="1500">
                     <div class="card">
                        <img src="img/img6.jpg" style="height:246.5px;" alt="">
                     </div>
                  </div>
                  <div class="col-lg-4 col-12 mt-lg-0 mt-3" data-aos="fade-down" data-aos-duration="2000">
                     <h5 class=" ">THE MANTRA's</h5>
                     <div class="card py-4" style=" border:none;" >
                        <div class="accordion" style="" id="accordionExample">
                           <div class="card" style="border:none;">
                              <div class="card-header" id="headingOne" style="background:aliceblue;">
                                 <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-center" style="box-shadow:none; text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    EAT
                                    </button>
                                 </h2>
                              </div>
                              <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                 <div class="card-body">
                                    Good Nutrition is a must. Without nutrition its like running a car without petrol/diesel.
                                 </div>
                              </div>
                           </div>
                           <div class="card" style="border:none;">
                              <div class="card-header" id="headingTwo" style="background:aliceblue;">
                                 <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-center collapsed" style="box-shadow:none; text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    SLEEP
                                    </button>
                                 </h2>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                 <div class="card-body">
                                    Atleast 8-10 hours of sleep is required for a good recovery.
                                 </div>
                              </div>
                           </div>
                           <div class="card" style="border:none;" >
                              <div class="card-header" id="headingThree" style="background:aliceblue;">
                                 <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-center collapsed" style="box-shadow:none; text-decoration:none;" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    REPEAT
                                    </button>
                                 </h2>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                 <div class="card-body">
                                    Repeat these for lifetime.
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-12" data-aos="fade-up" data-aos-duration="1500">
                     <div class="card">
                        <img src="img/img7.jpg" style="height:246.5px;" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="card my-lg-5 my-0 container" style="border:none;">
               <h4>We can give you<br><span class="text-success">Much More Than Others</span></h4>
               <div class="row mt-3">
                  <div class="col-lg-2 col-6" data-aos="flip-left" data-aos-duration="1000">
                     <div class="card" style="border:none;">
                        <img src="https://goldsgym.in/uploads/home_icons/gyms.png" class="card-img-top" alt="...">
                        <div class="card-body">
                           <h5 class="card-title">150 Gyms</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-6" data-aos="flip-right" data-aos-duration="1000">
                     <div class="card" style="border:none;">
                        <img src="https://goldsgym.in/uploads/home_icons/cities.png" class="card-img-top" alt="...">
                        <div class="card-body">
                           <h5 class="card-title">95 cities</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-6" data-aos="flip-left" data-aos-duration="1000">
                     <div class="card" style="border:none;">
                        <img src="https://goldsgym.in/uploads/home_icons/states.png" class="card-img-top" alt="...">
                        <div class="card-body">
                           <h5 class="card-title">25 states</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-6" data-aos="flip-right" data-aos-duration="1000">
                     <div class="card" style="border:none;">
                        <img src="https://goldsgym.in/uploads/home_icons/Website_Personal.png" class="card-img-top" alt="...">
                        <div class="card-body">
                           <h5 class="card-title">Training Program</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-6" data-aos="flip-left" data-aos-duration="1000">
                     <div class="card" style="border:none;">
                        <img src="https://goldsgym.in/uploads/home_icons/Corporate.png" class="card-img-top" alt="...">
                        <div class="card-body">
                           <h5 class="card-title">Wellness Program</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-2 col-6" data-aos="flip-right" data-aos-duration="1000">
                     <div class="card" style="border:none;">
                        <img src="https://goldsgym.in/uploads/home_icons/Group_Exercise.png" class="card-img-top" alt="...">
                        <div class="card-body">
                           <h5 class="card-title">Group Program</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card my-lg-5 my-0 py-4" style="border:none;">
               <div class="row">
                  <div class="col-lg-6 col-12 "  data-aos="fade-up" data-aos-duration="1500">
                     <div class="card" style="border:none;">
                        <img class="border border-warning" src="img/images.jfif" alt="">
                     </div>
                  </div>
                  <div class="col-lg-6 col-12" data-aos="fade-down" data-aos-duration="1500">
                     <h4 class="text-success mt-lg-0 mt-3">Our Speciality</h4>
                     <p class="text-justify" style="font-weight:500;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                     <p class="text-justify" style="font-weight:500;">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
               </div>
            </div>
            <!--  slideshow starts-->
            <div id="carouselExampleIndicators" class="carousel slide my-lg-5 my-0" data-ride="carousel" data-aos="fade-up" data-aos-duration="1500">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="img/img2.png" class="d-lg-block d-none w-100" style="height:100vh;" alt="...">
                     <img src="img/img2.png" class="d-block d-lg-none w-100" style="height:251px;" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="img/img4.png" class="d-lg-block d-none  w-100" style="height:100vh;" alt="...">
                     <img src="img/img4.png" class="d-block d-lg-none  w-100" style="height:251px;" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="img/img11.jfif" class="d-lg-block d-none  w-100" style="height:100vh;" alt="...">
                     <img src="img/img11.jfif" class="d-block d-lg-none  w-100" style="height:251px;" alt="...">
                  </div>
               </div>
               <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
            <!--  slideshow ends-->
            <!--  faq starts-->
            <?php include "faq.php" ?>
            <!--  faq ends-->
         </div>
         <div class="card-footer py-4 text-muted" style="background:ghostwhite;">
            <div class="row">
               <h5 class="text-success container d-block d-lg-none">NO LIMITS GYM WELCOMES YOU</h5>
               <div class="col-lg-4 col-5 text-left">
                  <h4 class="text-success d-lg-block d-none">NO LIMITS GYM WELCOMES YOU</h4>
                  <h6><a href="home.php" class="text-muted" style=" text-decoration:none;">HOME</a></h6>
                  <h6>JOIN NOW</h6>
                  <h6><a href="blog.php" class="text-muted" style=" text-decoration:none;" target="_blank">BLOG</a> </h6>
                  <h6>CAREERS</h6>
                  <h5 id="contact" class="text-dark d-lg-block d-none">Mobile - 9871066091 or,<br>E-mail - nolimitgym@gmail.com</h5>
               </div>
               <div class="col-lg-3 col-6 d-block d-lg-none">
                  <h6 class="mb-4">JOIN OUR NEWSLETTER</h6>
                  <input type="text" placeholder="your email here">
                  <h6 class="mt-2"><a class="btn btn-success" href="#">Subscribe</a></h6>
               </div>
               <div class="col-12 d-block mt-4 mb-3  d-lg-none">
                  <h5 id="contact" class="text-dark d-block d-lg-none">Mobile - 9871066091 or,<br>E-mail - nolimitgym@gmail.com</h5>
               </div>
               <div class="col-lg-5 col-12 mt-lg-0 mt-3">
                  <h6 class="text-success container d-block d-lg-none">SHOP FROM OUR SUPPLEMENT STORE</h6>
                  <h5 class="text-success d-lg-block d-none">SHOP FROM OUR SUPPLEMENT STORE</h5>
                  <div class="row">
                     <div class="col-lg-4 col-12">
                        <img src="img/two.jfif" class="d-lg-block d-none" style="height:19vh;" alt="">
                        <img src="img/two.jfif" class="d-block container d-lg-none" style="" alt="">
                     </div>
                     <div class="col-lg-6 col-12">
                        <h5 class="text-danger text-lg-left text-center"><a href="supp.php" style="color:red; text-decoration:none;" target="_blank">Shop now</a></h5>
                        <p class="text-dark">Get authentic products at your doorstep.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-6 d-lg-block d-none">
                  <h6 class="mb-4">JOIN OUR NEWSLETTER</h6>
                  <input type="text" placeholder="your email here">
                  <h6 class="mt-2"><a class="btn btn-success" href="#">Subscribe</a></h6>
               </div>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
         AOS.init();
      </script>
   </body>
</html>