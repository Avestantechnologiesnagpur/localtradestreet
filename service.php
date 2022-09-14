<?php error_reporting(E_ALL ^ E_NOTICE); ?>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "localtradestreet";
		
		$id = $title = $category = $oname = $email = $password = $city = $address = $pincode = $mobno = $landline ="";
        

        // Create Connection
            $conn = new mysqli ($servername, $username, $password, $dbname);

        //Check Connection
            if ($conn->connect_error)
            {
                // die("Connection Failed. " .$conn->connect_error);
            }else

        //Taking Values form User
        // $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $category = $_REQUEST['category'];
        $oname = $_REQUEST['oname'];
        $email= $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $city = $_REQUEST['city'];
        $address = $_REQUEST['address'];
        $pincode = $_REQUEST['pincode'];
        $mobno = $_REQUEST['mobno'];
        $landline = $_REQUEST['landline'];
        
        
        //Performing Insert
        $sql = "INSERT INTO submitlist VALUES ('$id','$title','$category','$oname','$email','$password','$city','$address','$pincode','$mobno','$landline')";

        if(mysqli_query($conn, $sql))
        {
            //  echo "Data Stored Successfully:";
        //  echo nl2br("\n $id \n $title \n $category \n $subcategory \n $oname \n $address \n $pincode \n $logo \n $banner");
        }else
            echo "Error Storing Data $sql. " .mysqli_error($conn);
        
        mysqli_close($conn);
        
        ?>




<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <title>Local Trade Street
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>localtradestreetnagpur@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+91 70586 90562</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-danger px-3" href="https://www.facebook.com/profile.php?id=100064148859759">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-danger px-3" href="https://twitter.com/LocalTradeStre2">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-danger px-3" href="https://www.linkedin.com/in/local-trade-street-34648a248/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-danger px-3" href="https://www.instagram.com/localtradestreets/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-danger pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 "><img src="img/logo.jpeg" style="border-radius:50%;"> <span class="text-dark">Local Trade
                        </span> <span style="color: #ff1717;">Street </span></h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="blog.php" class="dropdown-item">Blog Grid</a>
                                <a href="single.php" class="dropdown-item">Blog Detail</a>
                                <a href="destination.php" class="dropdown-item">Destination</a>
                                <a href="guide.php" class="dropdown-item">Travel Guides</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            </div>
                        </div> -->
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="package.php" class="nav-item nav-link">Login</a>

                        <a href="service.php" class="nav-item nav-link active">Submit Listing</a>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/l1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3 mt-3" style="max-width: 900px;">
                            <!-- <h4 class="display-3 text-white mb-md-4">Welcome to Local Trade Street</h4> -->
                            <!-- <h1 class="text-white">
                                Search and apply to millions of Listings</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a> -->
                        </div> <br><br>
                        <div class="container-fluid booking mt-5 pb-5">
                            <div class="container pb-5">
                                <div class="shadow" style="padding: 30px;">
                                    <div class="row align-items-center" style="min-height: 60px;">
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3 mb-md-0">
                                                        <select class="custom-select px-4" style="height: 47px;">
                                                            <option selected>what are you looking for ?</option>
                                                            <option value="1">Beauty</option>
                                                            <option value="2">Automobile</option>
                                                            <option value="3">Doctor</option>
                                                            <option value="4">Real Estate</option>
                                                            <option value="5">IT</option>
                                                            <option value="6">Pets</option>
                                                            <option value="7">Wedding</option>
                                                            <option value="8">Furniture</option>
                                                            <option value="9">Hospital</option>
                                                            <option value="10">Restaurants</option>
                                                            <option value="11">Security Services</option>
                                                            <option value="12">Tours & travels</option>
                                                            <option value="13">Insurance</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3 mb-md-0">
                                                        <div class="date" id="date1" data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control p-4 datetimepicker-input"
                                                                placeholder="Location" data-target="#date1"
                                                                data-toggle="datetimepicker" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3 mb-md-0">
                                                        <!-- <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <!-- <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Duration</option>
                                        <option value="1">Duration 1</option>
                                        <option value="2">Duration 1</option>
                                        <option value="3">Duration 1</option>
                                    </select>
                                </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn  btn-block" type="submit"
                                                style="height: 47px; margin-top: -2px; background-color: #ff1717; color:white">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/l2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3 mt-3" style="max-width: 900px;"> 
                            <!-- <h6 class="display-3 text-white mb-md-4">Welcome to Local Trade Street</h6> -->
                            <!-- <h1 class="text-white-50">
                                Search and apply to millions of Listings</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a> -->
                        </div> <br><br>
                        <div class="container-fluid booking mt-5 pb-5">
                            <div class="container pb-5">
                                <div class="shadow" style="padding: 30px;">
                                    <div class="row align-items-center" style="min-height: 60px;">
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3 mb-md-0">
                                                        <select class="custom-select px-4" style="height: 47px;">
                                                            <option selected>what are you looking for ?</option>
                                                            <option value="1">Beauty</option>
                                                            <option value="2">Automobile</option>
                                                            <option value="3">Doctor</option>
                                                            <option value="4">Real Estate</option>
                                                            <option value="5">IT</option>
                                                            <option value="6">Pets</option>
                                                            <option value="7">Wedding</option>
                                                            <option value="8">Furniture</option>
                                                            <option value="9">Hospital</option>
                                                            <option value="10">Restaurants</option>
                                                            <option value="11">Security Services</option>
                                                            <option value="12">Tours & travels</option>
                                                            <option value="13">Insurance</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3 mb-md-2">
                                                        <div class="date" id="date1" data-target-input="nearest">
                                                            <input type="text"
                                                                class="form-control p-4 datetimepicker-input"
                                                                placeholder="Location" data-target="#date1"
                                                                data-toggle="datetimepicker" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3 mb-md-0">
                                                        <!-- <div class="date" id="date2" data-target-input="nearest">
                                                            <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <!-- <div class="mb-3 mb-md-0">
                                                        <select class="custom-select px-4" style="height: 47px;">
                                                            <option selected>Duration</option>
                                                            <option value="1">Duration 1</option>
                                                            <option value="2">Duration 1</option>
                                                            <option value="3">Duration 1</option>
                                                        </select>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-primary btn-block" type="submit"
                                                style="height: 47px; margin-top: -2px; background-color: #ff1717;">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
 <!-- Carousel End -->


 <br><br><br>
    <div class="container py-2">
        <div class="card border-0">
            <div class="card-header  text-center p-4" style="background-color: #f55b5b;">
                <h1 class="text-dark m-0" >Basic Informations</h1>
            </div>
            <div class="card-body rounded-bottom bg-white p-5">
                <form>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Title Of Your Business</label>

                        <input type="text" class="form-control p-4" required="required" name="title"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Category</label>

                        <select class="custom-select px-4" style="height: 47px;" name="category">
                                                            <option selected >Select Categories</option>
                                                            <option value=" Beauty">Beauty</option>
                                                            <option value="Automobile">Automobile</option>
                                                            <option value="Doctor">Doctor</option>
                                                            <option value="Real Estate">Real Estate</option>
                                                            <option value="IT">IT</option>
                                                            <option value="Pets">Pets</option>
                                                            <option value="Wedding">Wedding</option>
                                                            <option value="Furniture">Furniture</option>
                                                            <option value="Hospital">Hospital</option>
                                                            <option value="Restaurants">Restaurants</option>
                                                            <option value="Security Services">Security Services</option>
                                                            <option value="Tours & travels">Tours & travels</option>
                                                            <option value="Insurance">Insurance</option>

                                                        </select>
                    </div>

                    <div class="form-group">
                        <label for="oname" class="form-label">Owner Name</label>

                        <input type="text" class="form-control p-4" required="required" name="oname" />
                    </div>


                    <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control form-control-lg" id="email" type="email" required name="email"> 
                     </div>

                     <div class="form-group">
                         <label for="password" class="form-label">Password</label>
                         <input class="form-control form-control-lg" id="password" type="password" required name="password">
                        </div>
                    
                                        <div class="form-group">
                        <label for="city" class="form-label">City</label>

                        <input type="text" class="form-control p-4" required="required" name="city" />
                    </div>
                    <div class="form-group">
                        <label for="address" class="form-label">Address</label>

                        <textarea type="text" class="form-control p-4" required="required" name="address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Pincode</label>

                        <input type="text" class="form-control p-4" required="required" name="pincode"/>
                    </div>
                    
    <div>
        <label for="mob" class="form-label">Mobile No.</label>
        <input class="form-control form-control-lg" id="mob" type="text" required name="mobno">
      </div>
      <div><br>
        <label for="landline" class="form-label">Landline</label>
        <input class="form-control form-control-lg" id="lanline" type="text" required name="landline">
      </div>
                    
                    <!-- <div class="mt-3">

                    </div>
                    
                   <label for="formFileLg" class="form-label">Category</label>

                   <div class="input-group mb-3">
                    
                        <input type="text" class="form-control" placeholder="Select Category" aria-label="Username">
                        <span class="input-group-text"></span>
                        <input type="text" class="form-control" placeholder="Subcategory" aria-label="Server">
                      </div> -->
                      <br>
                    <div>
                    <a href="servicenext.php"><button class="btn btn-block py-3" style="background-color: #f55b5b; color: black; font-weight: bolder;" type="submit">Save and Continue</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-10 px-md-5 px-lg-10" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5 py-10">
                <a href="" class="navbar-brand">
                    <h1 class="text-danger"><span class="text-white">Local Trade <br>
                        </span>Street</h1>
                </a>
                <p></p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-danger btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-danger btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-danger btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-danger btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white-50 mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                    <a class="text-white-50 mb-2" href="package.php"><i class="fa fa-angle-right mr-2"></i>Login</a>
                    <!-- <a class="text-white-50 mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Login</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a> -->
                    <a class="text-white-50" href="service.php"><i class="fa fa-angle-right mr-2"></i>Submit Listing</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                <!-- <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;"
                            placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <!-- <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Find US</h5>
                <img src="img/location.jpg" class="image-fluid w-100"/> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="index.php">localtradestreet.com</a>. All Rights Reserved.</a>
                </p>
            </div>
            <!-- <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by <a href="https://phpcodex.com">php Codex</a>
                </p>
            </div> -->
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</php>