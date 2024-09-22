<?php
session_start();

include 'connect.php';

if ($_SERVER["REQUEST_METHOD"]==="POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM reg_user WHERE email='$email' ";
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0) {
  
        $user = $result -> fetch_assoc();

       if ($user['password'] == $password) {
        $_SESSION["email"] = $email;
        header("Location:index.php");
        exit();
       }
       else {
        echo ' <br> <br> <div
         class="alert alert-danger alert-dismissible fade show mt-3"
         role="alert"
        >
         <button
             type="button"
             class="btn-close"
             data-bs-dismiss="alert"
             aria-label="Close"
         ></button>
        
         <strong>Incorrect email & password</strong>
        </div>'
        ;
        
     }
}
    else {
         echo '<br> <br><div
         class="alert alert-danger alert-dismissible fade show mt-3"
         role="alert"
        >
         <button
             type="button"
             class="btn-close"
             data-bs-dismiss="alert"
             aria-label="Close"
         ></button>
        
         <strong>User does not exist! &nbsp;<a href="reg.php">Register</a></strong>
        </div>'
        ;
    }


    
}
    


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
                                <a class="nav-link" href="index.php#about">About</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#trainer">Trainer</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="index.php#plan">Plan</a>
                            </li>

                        
                        </ul>

                

                    </div>

                </div>
            </nav>
            
        </header>
        <main>



        <div
            class="container-fluid section-1 py-5"
        >
            <div
                class="row justify-content-center align-items-center g-2"
            >

         
            


            <!-- col 1-->
             
              <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="box">
                    <p class="text-center h3 mb-4 form-label">Sign In</p>
                        <form action="" method="post">
                          
                       

                                <div class="mb-2">
                                    <label for="" class="form-label ">Email :</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        id="email"
                                        aria-describedby="emailHelpId"
                                        placeholder="abc@mail.com"
                                        Required
                                    />
                                  
                                </div>

                                <div class="mb-2">
                                    <label for="" class="form-label">Password :</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        id="pass"
                                        placeholder="Enter Your password"
                                        Required
                                    />
                                </div>
                                
                                

                               <center> <button type="submit"  class="btn button my-2" onclick="return valid()">Sign In</button></center>
                                
                                
                                <hr>

                           <span class="bold">
                           <p class="text-center"> Don't Have An Account &nbsp;? &nbsp;
                                <a href="reg.php" class="link-style">Sign Up</a>
                            </p>
                           </span>
                            
                        </form>
                    </div>
                </div>

           
            
               

                <!-- close div -->
            </div>
            
        </div>
        

                
          
            
        </main>

        <hr>
        
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
