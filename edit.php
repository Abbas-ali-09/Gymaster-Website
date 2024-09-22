<?php

session_start ();
include 'connect.php';

if (!isset($_SESSION["email"])) {
    header("Location:login.php");
    exit;
}


$id= $_GET['id'];

$sql = "select * from reg_user where id='$id'";
$edit = $conn -> query($sql);
$result_update = $edit -> fetch_assoc();



 if ($_SERVER["REQUEST_METHOD"]==="POST") {
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $number = $_POST["number"];

    $update = "update reg_user set username='$username',email='$email',password='$password'
    ,number='$number' where id='$id'";

    $update_ececute = $conn -> query($update);

  if ($update_ececute === true) {
    header("Location:display.php");
    exit();
  } else {
    echo "error";
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
                class="navbar navbar-expand-sm  
                " 
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
                                <a class="nav-link active" href="index.php" aria-current="page"
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
                                <a class="nav-link" href="index.php#plan">Plans</a>
                            </li>
                        </ul>


                    </div>

                </div>
            </nav>
            
        </header>
        <main>



        <div
            class="container-fluid"
        >
            <div
                class="row justify-content-center align-items-center g-3"
            >


              <!-- col 1 -->
              <div class="col-sm-12 col-md-6">
                <img
                        src="img/bodybuilders-fitness-club-logo.png"
                        class="img-fluid rounded"
                        alt=""
                    />

                </div>


            <!-- col 2 -->
                <div class="col-sm-12 col-md-6">
                    <div class="box px-4 m-lg-5">
                    <p class="text-center h3 mb-4 form-label">Edit Details</p>
                        <form action="" method="post">
                          
                        <div class="mb-2">
                                <label for="" class="form-label">UserName :</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="username"
                                    id="uname"
                                   value="<?php echo $result_update['username'];?>"
                                    aria-describedby="helpId"
                                    placeholder="Enter Your Name"
                                    Required
                                />
                                </div>   

                                <div class="mb-2">
                                    <label for="" class="form-label ">Email :</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        name="email"
                                        id="email"
                                        value="<?php echo $result_update['email'];?>"
                                        aria-describedby="emailHelpId"
                                        placeholder="abc@mail.com"
                                        Required
                                    />
                                  
                                </div>

                                <div class="mb-2">
                                    <label for="" class="form-label">Password :</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="password"
                                        id="pass"
                                        value="<?php echo $result_update['password'];?>"
                                        placeholder="Create a password"
                                        Required
                                    />
                                </div>

                                
                                <div class="mb-2">
                                    <label for="" class="form-label">Number :</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="number"
                                        id="phone-no"
                                        value="<?php echo $result_update['number'];?>"
                                        aria-describedby="helpId"
                                        placeholder="Enter Your Number"
                                        Required
                                    />
                                   
                                </div>

                               <center> <button type="submit"  class="btn button my-2">Upadte</button></center>
                                
                                
                            
                        </form>
                    </div>
                </div>

           
               

                <!-- close div -->
            </div>
            
        </div>
        

                
          
            
        </main>
        <footer class="text-center  mt-5">
            <hr>
            <!-- place footer here -->
            <div
                class="container-fluid"
            >
                <div
                    class="row justify-content-center align-items-center "
                >
                    <div class="col-sm-12 col-md-6 col-lg-3">
                    
                    <span class="logo-f h2">
                GYMASTER
               </span>
                    
               <p class="footer-p">
                Gym session or brisk walk can help physical activity stimulates many chemicals 
                that may leave you
               </p>
                    </div>

                   

                    <div class="col-sm-12 col-md-6 col-lg-3">

                        <ul class="ul-list">
                            <li class="footer-heading"> Company</li>
                            <li>Home</li>
                            <li >Class</li>
                            <li>Trainers</li>
                            <li>Contact</li>
                        </ul>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">

                        <ul class="ul-list">
                            <li class="footer-heading"> Category</li>
                            <li>Strength</li>
                            <li >Body Building</li>
                            <li>Weight Loss</li>
                            <li>Basic Yoga</li>
                        </ul>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">

                        <ul class="ul-list">
                            <li class="footer-heading">Contact Us</li>
                            <li>Mob : +91 7045836081</li>
                            <li >Email : nandoliya.abbas.aly@gmail.com</li>
                            <li>Location : B/201,kulsum Apt,Kashimira,Mira road (E)</li>
                            
                        </ul>
                    </div>

              

                   
                </div>
                
            </div>
            <span class="text-secondary text-center">
                   <b> Copyright &copy; 2024. All Rights Reserved By GYMASTER.</b>
                    </span>
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


        <!-- <script src="app.js"></script> -->
    </body>
</html>
