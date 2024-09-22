<?php


session_start ();
include 'connect.php';

if (!isset($_SESSION["email"])) {
    header("Location:login.php");
    exit;
}


$show = "select * from reg_user";
$result_show = $conn -> query($show);


?>




<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
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
                                <a class="nav-link" href="display.php">View Data</a>
                            </li>
                        </ul>

                 
                    <a
                        name=""
                        id=""
                        class="btn button-1"
                        href="logout.php"
                        role="button"
                        >Logout</a
                    >
                    

                    </div>

                </div>
            </nav>
        </header>
        <main>

        <div
            class="container-fluid section-1 px-3 py-4"
        >
        

        <div
            class="table-responsive"
        >
            <table
                class="table table-striped table-hover table-borderless table-warning align-middle text-center"
            >
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Number</th>
                        <th>Option</th>
                    </tr>
                </thead>

                <?php
if ($result_show -> num_rows > 0) {
    while ($row = $result_show ->fetch_assoc()) {

echo "

        <tbody class='table-group-divider'>
        <tr
            class='table-warning'
        >
        
            <td>".$row['id']."</td>
            <td>  ".$row['username']."</td>
            <td> ".$row['email']."</td>
            <td>  ".$row['password']."</td>
            <td>  ".$row['number']."</td>
            <td>
                    <a  class='btn btn-success' href='edit.php?id=$row[id]' role='button'>Edit</a>
                                        
                                        
                    <a  class='btn btn-danger' href='delete.php?id=$row[id]' role='button' onclick='return del()'>Delete</a>
            </td>
        </tr>
        </tbody> 
  
  ";

       
    }
}
else {
    echo '<script>
    alert("No Record");
</script>';

}


?>     
          
                
            </table>
        </div>
        
       
            
    </div>
        
        
        
        </main>
        <footer>
            <!-- place footer here -->
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

