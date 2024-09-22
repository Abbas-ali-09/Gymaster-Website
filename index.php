<?php


session_start ();
include 'connect.php';
   




?>


<!doctype html>
<html lang="en">
    <head>
        <title>GYMASTER</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <!-- place navbar here -->

            
            <nav
                class="navbar navbar-expand-sm fixed-top" 
            >
                <div class="container">
                    <a class="navbar-brand" href="#">
            
                   
              <span class="logo h3">
                GYMASTER
               </span>
              
                    </a>
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0 ">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php" aria-current="page"
                                    >Home
                                    </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="#trainer">Trainer</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#plan">Plan</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="display.php">View Data</a>
                            </li>
                        </ul>

                    

                    </div>

                </div>
            </nav>
            
        </header>
        <main>

<div
    class="container-fluid section-1"
>
   
   <div
    class="row justify-content-center align-items-center g-3"
   >
   <!-- col 1 -->
   <div class="col-sm-12 col-md-6"> 
        <p class="index-title">Transform Your <span class="title-style">Body</span> Transform YourSelf</p>

        <a
            name=""
            id=""
            class="btn button mx-4"
            href="reg.php"
            role="button"
            >Get Started</a
        >
    
   </div>

   <!-- col  2 -->
   <div class="col-sm-12 col-md-6">

        <img
        src="img/home-img.png"
        class="img-fluid title-img"
        alt="home img"
    />
        
    </div>
 
    <!-- col close -->

   </div>
  
</div>



<!-- container 2 -->


<div
    class="container-fluid section-2"
> 


    <div
        class="row justify-content-center align-items-center g-3"
    >
    <hr>
    <!-- col 1 -->
        <div class="col-sm-12 col-md-6 col-lg-3">
        
            <div class="home-box">
                <h2>Heavy Weight</h2>
                <P>Join our Heavy Weight
                   class for <br>strong muscle </P>
               
                    
        
            </div> 
        </div>
        <!-- col 2 -->
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="home-box">
                 <h2>Indoor Cycling</h2>
                <P>Join our Heavy Weight
                   class for <br>strong muscle </P>

               
            </div> 
        </div>
        <!-- col 3 -->
        <div class="col-sm-12 col-md-6 col-lg-3">
       
            <div class="home-box">
                    <h2>Weight Loss</h2>
                    <P>Join our Heavy Weight
                   class for <br>strong muscle </P>

                  
        
            </div> 
        </div>
        <!-- col 4 -->
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="home-box">
                 <h2>Body Building</h2>
                 <P>Join our Heavy Weight
                   class for <br>strong muscle </P>

            </div> 
        </div>

        <!-- col close -->
    </div>
    
</div>

<!-- container 3 -->

<div
    class="container-fluid section-3" 
>
    <div
        class="row justify-content-center align-items-center g-3"
    >   
       
            
            
   <center>
   <h3 id="about">
                About Us
            </h3>
   </center>

        <!-- col 1-->
        <div class="col-sm-12 col-md-6">

            <div class="about-text">
                <p class="about-h">
                    Welcome to our best 
                    <span class="about-logo">GYMASTER</span> training center.
                </p>

                <p class="about-info">
                    welcome to our Gymaster Training Center! Achieve your fitness goals with expert trainers,
                    cutting-edge equipment and a supportive community. Join us to transform your health and 
                    jourmey today! 
                        
                </p>
            </div>
        </div>

        <!-- col 2-->
        <div class="col-sm-12 col-md-6">
           <div class="about">
                <img
                    src="img/heavy-weight.png"
                    class="img-fluid"
                    alt=""
                />
           </div>
            
        </div>
       
    </div>
    
</div>



<!-- container 4 -->

<div
    class="container-fluid section-4"
>

    <div
        class="row justify-content-center align-items-center g-2"
    >

    <h2 class="section-4-h" id="trainer">Meet Our Trainers</h2>
    <p class="section-4-p">Whether you're looking build strength, improve flexibility or <br>
            emback on a transform fiteness journy</p>

         <!-- col 1-->
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card body-card-4">
                <img class="card-img-center rounded" src="img/trainers-1.jpg" alt="Title" />
                <h4>Jenny Wilson</h4>
            </div>
           
            
        </div>

        <!-- col 2-->
        <div class="ccol-sm-12 col-md-6 col-lg-3">
    
            <div class="card body-card-4">
                <img class="card-img-top" src="img/trainers-2.jpg" alt="Title" />
                    <h4 class="card-title">Ronald Richards</h4>
            </div>
            
        </div>

        <!-- col 3-->
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card body-card-4">
                <img class="card-img-center rounded" src="img/trainers-3.jpg" alt="Title" />
                <h4>Elina Miles</h4>
            </div>
        </div>



          <!-- col 4-->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card body-card-4">
                <img class="card-img-center rounded" src="img/trainers-4.jpg" alt="Title" />
                <h4>Ralph Edwards</h4>
            </div>
        </div>
         <!-- col close -->
    </div> 
    
</div>

<!-- container 5 -->
<div
    class="container-fluid section-5"
>
    <div
        class="row justify-content-center align-items-center g-2"
    >

        <h2 class="section-5-h" id="plan">Our Princing plan</h2>

        <p class="section-5-p"> our pricing plan cames with various membership tiers, 
                each tailored <br>to cater to different preference and fitness aspirations.</p>
      <!-- col 1 -->
        <div class="col-sm-12 col-md-6 col-lg-4">


                <div
                    class="card body-card-5"
                >
                    <div class="card-body">
                              <h3>Basic Plan</h3>
                                <h2>500 ₹</h2>
                                <hr>
                                
                                <p>2 hours of excercises</p>
                                <p>Free consultaion to coaches</p>
                                <p>Access to the community</p>
                            
                                <br>
                                <a
                                    name=""
                                    id=""
                                    class="btn btn-p mt-5"
                                    href="#"
                                    role="button"
                                    >Join Now</a>
                    </div>
                </div>
        
        </div>

        <!-- col 2 -->
        <div class="col-sm-12 col-md-6 col-lg-4">
            
               <div
                class="card body-card-5"
               >
               
                    <div class="card-body ">
                        <h3>Premium Plan</h3>
                        <h2>800 ₹ </h2>
                        <hr>
                        
                        <p>5 hour excercises</p>
                        <p>Free consultaion to coaches</p>
                        <p>Smart Workout Plan</p>
                    
                        <br>
                        <a
                            name=""
                            id=""
                            class="btn btn-p mt-5"
                            href="#"
                            role="button"
                            >Join Now</a>
                    </div>
               </div>
               
        
        </div>

        <!-- col 3 -->
        <div class="col-sm-12 col-md-6 col-lg-4">
            
                <div
                    class="card body-card-5"
                >
                    
                    <div class="card-body ">
                            <h3>Pro Plan</h3>
                            <h2>1200 ₹ </h2>
                            <hr>
                            
                            <br>
                            <p>8 hour excercises</p>
                            <p>Consultation of Private Coach</p>
                            <p>Prosnal Training</p>
                            <p>Free Fitness Merchandises</p>
                        
                            <a
                                name=""
                                id=""
                                class="btn btn-p mt-2"
                                href="#"
                                role="button"
                                >Join Now</a >
                    </div>
                </div>
                
           
        </div>

          <!-- col close -->
    </div>
    
</div>


<!-- container 6 -->

<div
    class="container-fluid section-6"
>

<div
    class="row justify-content-center align-items-center g-2"
>
    
            
                <div class="col-sm-12 col-md-6">
                    <img
                        src="img/front-body.png"
                        class="img-fluid rounded"
                        alt=""
                    />
                    
                </div>





                <div class="col-sm-12 col-md-6">

                    <h4 class="section-6-h">Discover Your Perfect Workout Space!</h4>
                        <p class="section-6-p">
                            Explore our top-notch facilities, featuring cutting-edge equipment and a variety of 
                            fitness classes designed for all levels. From personalized training sessions to group 
                            workouts, our gym is committed to helping you achieve your fitness goals. Watch the video 
                            to get a sneak peek of our vibrant gym environment and see what makes us the best choice
                            for your fitness journey!
                        </p>
                </div>
              
          
            
                   
            
  <!--close -->
</div>


</div>





<!-- container 7 -->

<div
    class="container-fluid section-7 mb-3"
>

    <center></center>

    <h2 class="section-7-h">Join the Gymnastic Family</h2> <br> 
    <p class="section-7-p">Gym session or brisk walk can help. Physical activity stimulates <br>
            many brain chemicals that may leave you.
        </p>
    
       <center>
       <a
            name=""
            id=""
            class="btn button"
            href="reg.php"
            role="button"
            >Be A Member</a
        >
       </center>

        </div>


            <!-- main close -->
    </main>


    <footer class="footer">
       
        <!-- place footer here -->
           <div
               class="container-fluid"
           >
          
               <div
                   class="row justify-content-center align-items-center g-2 mx-3"
               >

             
               <div class="col-sm-12 col-md-6 col-lg-3 ">
              
                   <span class="logo-f h2">
               GYMASTER
              </span>
                   
              <p class="footer-p">
               Gym session or brisk walk can help physical activity stimulates many chemicals 
               that may leave you
              </p>

              <p class="developer">
                  &copy; 2024 Developed By Abbas Ali
               </p>
                          <div class="footer-img">
                                
                                       <a href="https://www.instagram.com/_abbas.aly_?igsh=MWM1N2l5YTRqdTkzYg==">
                                       <img
                                           src="img/instagram.png"
                                           class="img-fluid"
                                           alt="instagram logo"
                                       />
                                  
                                       </a>


                                  
                                      <a href="https://www.linkedin.com/in/abbas-ali-nandoliya-a24708310?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                      <img
                                           src="img/linkedin.png"
                                           class="img-fluid"
                                           alt="linkedin logo"
                                       />
                                      </a>
                                 

                                
                                       <a href="https://github.com/Abbas-ali-09">
                                       <img
                                           src="img/github.png"
                                           class="img-fluid"
                                           alt="github logo"
                                       />
                                       </a>
                                 
                          </div>

                           
                   </div>

                  

                   <div class="col-sm-12 col-md-6 col-lg-3 ">

                       <ul class="ul-list">
                           <li class="footer-heading"> Company</li>
                           <li>Home</li>
                           <li >Class</li>
                           <li>Trainers</li>
                           <li>Contact</li>
                       </ul>
                   </div>

                   <div class="col-sm-12 col-md-6 col-lg-3 ">

                       <ul class="ul-list">
                           <li class="footer-heading"> Category</li>
                           <li>Strength</li>
                           <li >Body Building</li>
                           <li>Weight Loss</li>
                           <li>Basic Yoga</li>
                       </ul>
                   </div>

                   <div class="col-sm-12 col-md-6 col-lg-3 ">

                       <ul class="ul-list">
                           <li class="footer-heading">Contact Us</li>
                              <li>
                                   <img
                                       src="img/call.png"
                                       class="img-fluid footer-contact-img"
                                       alt="Phone Logo"
                                   />
                                   : &nbsp; +91 7045836081
                               </li>
                               <li >
                                   <img
                                       src="img/email.png"
                                       class="img-fluid footer-contact-img"
                                       alt="Email logo"
                                   />
                                   : &nbsp; abbasaly.nandoliya@gmail.com
                               </li>
                               <li>
                                   <img
                                   src="img/location.png"
                                   class="img-fluid footer-contact-img"
                                   alt="Location logo"
                                   />
                                   : &nbsp; B/201, kulsum Apt, Kashimira, Mira road(E)
                               </li>
                           
                       </ul>
                   </div>

             

              
                  
                  
               </div>
               
             
            
            
              
           </div>
        
          
       </footer>


        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>


        <script src="app.js"></script>
    </body>
</html>
