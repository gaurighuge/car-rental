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
                         <li class="active"><a href="current.php">Current Bookings</a></li>
                         <li><a href="change.php">Change Password</a></li>
                         <li><a href="index.html">Logout</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Current Bookings</h1>

                    <br>

                    <p class="lead"></p>
               </div>
          </div>
     </section>


     <!-- Login -->
     <section id="contact">
          <div class="container">
               <div class="row">

                   <table>
                       <tr>
                           <th>Pick Up</th>
                           <th>Return</th>
                           <th>Pick Up Date</th>
                           <th>Return Date</th>
                           <th>Full Name</th>
                           <th>Email ID</th>
                           <th>Contact No.</th>
                       </tr>
                       <?php
                       
                      $host = 'localhost';
                      $username = 'root';
                      $password = '';
                      $db_name = 'id18841404_booking';
                      $date = date('Y-m-d');

                       $con = mysqli_connect($host, $username, $password, $db_name);
                       $query = "select * from booking where pickupdate = '$date'";
                       $result = mysqli_query($con, $query);
                            foreach ($result as $row) 
                            {
                               ?> 
                               <tr>
                                   <td>
                                       <?php echo $row['pickup']; ?>
                                   </td>
                                   <td>
                                       <?php echo $row['returnl']; ?>
                                   </td>
                                   <td>
                                       <?php echo $row['pickupdate']; ?>
                                   </td>
                                   <td>
                                       <?php echo $row['returndate']; ?>
                                   </td>
                                   <td>
                                       <?php echo $row['fullname']; ?>
                                   </td>
                                   <td>
                                       <?php echo $row['email']; ?>
                                   </td>
                                   <td>
                                       <?php echo $row['phone']; ?>
                                   </td>
                               </tr>
                               <?php
                            }
                       
                       ?>
                   </table>

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