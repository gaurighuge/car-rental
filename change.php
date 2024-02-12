<?php
     if($_SERVER["REQUEST_METHOD"] == "POST") {
          $current = $_POST["current"];
          $new = $_POST["password"];
          $confirm = $_POST["confirm"];

          if($confirm === $new) {
               $host = "localhost";
               $username = "root";
               $password = "";
               $db_name = "id18841404_booking";

               $con = mysqli_connect($host, $username, $password, $db_name);
               $query = "update admin set password = '$new' where password = '$current'";
               $result = mysqli_query($con, $query);
          }
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<style>
     #contact{
          background-color: black;
     }

    table {
        width: 100%;
        background-color: darkred;
        color: white;
        border-collapse: collapse;
    }
    tr {
        border: 5px solid white;
        padding: 20px;
    }
    td, th {
        padding: 20px;
        font-weight: bolder;
        border: 3px solid white;
    }
    th {
        font-size: 20px;
        text-decoration: underline;
    }
    td {
        font-size: 15px;
        border-bottom: 3px solid white;
    }
    .input {
        display: block;
        border: 3px solid white;
        border-radius: 5px;
        margin: 20px;
        padding: 10px;
        width: 40%;
        font-weight: bolder;
    }
    .input:focus {
        outline: none;
    }
    .button {
        display: block;
        border: 3px solid white;
        border-radius: 5px;
        margin: 20px;
        padding: 10px;
        width: 40%;
        font-weight: bolder;
        background-color: darkred;
        color: white;
    }
    .button:hover {
         background-color: black;
    }

</style>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">Easy Go</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="current.php">Current Bookings</a></li>
                         <li class="active"><a href="change.html">Change Password</a></li>
                         <li><a href="index.html">Logout</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Change Password</h1>

                    <br>

                    <p class="lead"></p>
               </div>
          </div>
     </section>


     <!-- Login -->
     <section id="contact">
          <div class="container">
               <div class="row">

                   <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
                       <input type = "text" class = "input" id = "current" placeholder="Enter Current Password" name = "current" autcomplete = "off">
                       <input type = "text" class = "input" id = "password" placeholder = "Enter New Password" name = "password" autcomplete = "off">
                       <input type = "text" class = "input" id = "confirm" placeholder = "Confirm New Password" name = "confirm" autcomplete = "off">

                       <input type = "submit" class = "button" id = "change" value = "Change Password">
                   </form>

               </div>
          </div>
     </section>     


     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>V.E.S.Polytechnic <br>Chembur</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>98******21</p>
                                   <p><a href="mailto:contact@company.com">contact@company.com</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="terms.html">Terms & Conditions</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>