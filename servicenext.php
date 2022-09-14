<?php error_reporting(E_ALL ^ E_NOTICE); ?>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "localtradestreet";
		
		$id = $subcategory = $mondaystart = $mondayend = $tuestart = $tueend = $wenstart = $wenend = $thustart = $thusend = $fristart = $friend = $stastart = $staend = $sunstart = $sunend =  
        $logo = $banner = $description = $service = $locality = "";
        

        // Create Connection
            $conn = new mysqli ($servername, $username, $password, $dbname);

        //Check Connection
            if ($conn->connect_error)
            {
                die("Connection Failed. " .$conn->connect_error);
            }else

        //Taking Values form User
        $id = $_REQUEST['id'];
        $subcategory = $_REQUEST['subcategory'];
        $mondaystart = $_REQUEST['mondaystart'];
        $mondayend = $_REQUEST['mondayend'];
        $tuestart= $_REQUEST['tuestart'];
        $tueend = $_REQUEST['tueend'];
        $wedstart = $_REQUEST['wedstart'];
        $wedend = $_REQUEST['wedend'];
        $thustart = $_REQUEST['thustart'];
        $thusend = $_REQUEST['thusend'];
        $fristart = $_REQUEST['fristart'];
        $friend = $_REQUEST['friend'];
        $stastart = $_REQUEST['stastart'];
        $staend = $_REQUEST['staend'];
        $sunstart = $_REQUEST['sunstart'];
        $sunend = $_REQUEST['sunend'];
        $logo = $_REQUEST['logo'];
        $banner = $_REQUEST['banner'];
        $description = $_REQUEST['description'];
        $service = $_REQUEST['service'];
        $locality = $_REQUEST['locality'];
        
        
        //Performing Insert
        $sql = "INSERT INTO servicenextdata VALUES ('$id','$subcategory','$mondaystart','$mondayend','$tuestart','$tueend','$wedstart','$wedend',
        '$thustart','$thusend','$fristart','$friend','$stastart','$staend','$sunstart','$sunend','$logo','$banner','$description','$service','$locality')";

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
    <title>LTS-Submit Listing</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free php Templates" name="keywords">
    <meta content="Free php Templates" name="description">

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
                        <a class="px-3" style="color:#ff1717" href="https://www.facebook.com/avestantechnologies/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="px-3" style="color:#ff1717" href="https://twitter.com/LocalTradeStre2">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="px-3" style="color:#ff1717" href="https://www.linkedin.com/in/local-trade-street-34648a248/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="px-3" style="color:#ff1717" href="https://www.instagram.com/localtradestreets/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="pl-3 " style="color:#ff1717" href="">
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
                    <h1 class="m-0" style="color:#ff1717;"><img src="img/logo.jpeg " style="border-radius: 50%;"><span class="text-dark">Local Trade </span>Street</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
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
                        <a href="service.php" class="nav-item nav-link">Submit Listing</a>    
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    
    <!-- Carousel Start -->
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


    <!-- Blog Start -->
    <div class="container py-10  mt-3 mb-5" >
        <div class="container ">
               
            <h3><strong> Submit Listing </strong></h3>
            <hr style="background-color:red ;">
              
            <div class="row mt-2">
                <div class="col-lg " style="background-color: #f5f5f5;"> 
                    <div class="well ">
                    <form method = "post" action="servicenext.php">
                    <div class="form-group category">
                        <h4><label class="control-label text-danger">Categories <span class="required-feild">*</span></label></h4>
                        
                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Sub-Category</label>
                        &nbsp; &nbsp; &nbsp;&nbsp;
                       <input type="text" id="scategory" name="subcategory"/>
                        <br/> <br/>
                    <div class="form-group">
                        <label class="control-label"><h3>Opening Hours</h3></label>
                        <br><br/>
                        <table style="margin:auto; " class="table table-bordered">
                        <tbody>
                        <tr><td>Day</td>
                                <td>Start</td>
                                <td>End</td>
                        </tr>
                        <tr><td>Mon</td>
                            <td><input type="text" name="hours[Mon][]" id="hours_start" class="form-control " placeholder="Hours" value="9:00 am" name="mondaystart"></td>
                            <td><input type="text" name="hours[Mon][]" id="hours_end" class="form-control " placeholder="Hours" value="6:30 pm" name="mondayend"></td>
                        </tr>
                         <tr><td>Tue</td>
                            <td><input type="text" name="hours[Tue][]" id="hours_start" class="form-control " placeholder="Hours" value="9:00 am" name="tuestart"></td>
                            <td><input type="text" name="hours[Tue][]" id="hours_end" class="form-control " placeholder="Hours" value="6:30 pm" name="tueend"></td>
                        </tr>
                    <tr><td>Wed</td>
                            <td><input type="text" name="hours[Wed][]" id="hours_start" class="form-control " placeholder="Hours" value="9:00 am" name="wedstart"></td>
                            <td><input type="text" name="hours[Wed][]" id="hours_end" class="form-control " placeholder="Hours" value="6:30 pm" name="wedend"></td>
                        </tr>
                                                        <tr><td>Thu</td>
                            <td><input type="text" name="hours[Thu][]" id="hours_start" class="form-control " placeholder="Hours" value="9:00 am" name="thustart"></td>
                            <td><input type="text" name="hours[Thu][]" id="hours_end" class="form-control " placeholder="Hours" value="6:30 pm" name="thusend"></td>
                        </tr>
                                                        <tr><td>Fri</td>
                            <td><input type="text" name="hours[Fri][]" id="hours_start" class="form-control " placeholder="Hours" value="9:00 am" name="fristart"></td>
                            <td><input type="text" name="hours[Fri][]" id="hours_end" class="form-control " placeholder="Hours" value="6:30 pm" name="friend"></td>
                        </tr>
                                                        <tr><td>Sat</td>
                            <td><input type="text" name="hours[Sat][]" id="hours_start" class="form-control " placeholder="Hours" value="9:00 am" name="stastart"></td>
                            <td><input type="text" name="hours[Sat][]" id="hours_end" class="form-control " placeholder="Hours" value="6:30 pm" name="staend"></td>
                        </tr>
                                                        <tr><td>Sun</td>
                            <td><input type="text" name="hours[Sun][]" id="hours_start" class="form-control " placeholder="Hours" value="Close"name="sunstart"></td>
                            <td><input type="text" name="hours[Sun][]" id="hours_end" class="form-control " placeholder="Hours" value="Close" name="sunend"></td>
                        </tr>
                        
                        
                        </tbody>
                        </table>  
                    </div><!--form-group-->
                    
                </div>
                <div class="col-sm-6">
                    <div class="form-group row"> 
                        <div class="bussiness-logo-upload col-xs-6"> 
                           <label class="control-label col-sm-12" name="logo">Upload Logo <span class="required-feild">*</span> &nbsp;<small>600 X 600px<br>Size upto 2MB</small></label>
                            <div class="col-sm-6"> 
                                <div class="img-upload-picker"><div class="form-control btn btn-default btn-block img-upload-btn"><i class="glyphicon glyphicon-plus"></i><input type="file" name="logo"></div></div>
                            </div> 
                            <div class="clearfix"></div>									<label for="upload" class="error"></label><div class="clearfix"></div> 
                        </div> 
                        <div class="bussiness-banner-upload col-xs-6"> 
                           <label class="control-label col-sm-12" name="banner">Upload Banner &nbsp;<small>1000 X 400px<br>Size upto 2MB</small></label>
                            <div class="col-sm-6"> 
                                <div class="img-banner-picker"><div class="form-control btn btn-default btn-block img-upload-btn"><i class="glyphicon glyphicon-plus"></i><input type="file" name="banner"></div></div>
                            </div> 
                            <div class="clearfix"></div><div class="clearfix"></div> 
                        </div>
                        <div class="clearfix"></div>
                    </div><!--form-group-->

                    <div class="well ">
                    <div class="form-group">
                        <label class="control-label">Description <span class="required-feild">*</span></label>
                        <div class="clearfix"></div>								<label for="description" class="error"></label><div class="clearfix"></div> 
                        <textarea class="form-control" rows="3" name="description"></textarea>
                    </div> 
                    </div><!--well row-->
                
                
                    <div class="well ">
                    <div class="form-group">
                        <label class="control-label">Services <span class="required-feild">*</span></label>
                        <div class="clearfix"></div>								
                        <label for="services[]" class="error"></label><div class="clearfix"></div> 
                        <div class="form-group-options">
                          
                           <div class="input-group input-group-option col-md-12 col-xs-12">
                            <input type="text" name="service" class="form-control" placeholder="Service">
                            <span class="input-group-addon input-group-addon-remove">
                             <span class="glyphicon glyphicon-remove"></span>
                            </span>
                           </div>
    </div>
    
                    </div><!--form-group-->
                    </div><!--well row-->
                    
                    
                    <div class="form-group locality">
                        <label for="inputCategory">Locality</label> 

                        <select class="custom-select px-4" style="height: 47px;"name="subcategory">
                                                            <option selected>Locality</option>
                                                            <option value="1">Bagadganj</option>
                                                            <option value="2">Pardi</option>
                                                            <option value="3">Chapru Nagar</option>
                                                            <option value="4">Wardhman Nagar</option>
                                                            <option value="5">Lakadganj</option>
                                                            <option value="6">Bardi</option>
                                                            <option value="7">Manewada</option>
                                                            <option value="8">Chatrapati Square</option>
                                                            <option value="9">Kharbi</option>
                                                            <option value="10">Dighori</option>
                                                            <option value="11">Sakkardara</option>
                                                            <option value="12">MAnish Nagar</option>
                                                            <option value="13">Shantinagar</option>
                                                            <option value="13">Other</option>

                                                        </select>
                    </div>
                    </div><!--form-group-->
                       
                </div>
    </form>
            </div>
        </div>
       
    </div>
    <a href="servicenext.php"><button class="btn btn-block py-3 pt-3" style="background-color: #f55b5b; color: black; font-weight: bolder;" type="submit">Save and Continue</button></a>
                    </div>
    
</div>
                    
 
   
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50  px-md-5 px-lg-10" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5 py-10">
                <a href="" class="navbar-brand">
                    <h1 class="text-danger"><span class="text-white">Local Trade <br>
                        </span>Street</h1>
                </a>
                <p></p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-danger btn-square mr-2" href="https://twitter.com/LocalTradeStre2"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-danger btn-square mr-2" href="https://www.facebook.com/profile.php?id=100064148859759"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-danger btn-square mr-2" href="https://www.linkedin.com/in/local-trade-street-34648a248/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-danger btn-square" href="https://www.instagram.com/localtradestreets/"><i class="fab fa-instagram"></i></a>
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
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Find US</h5>
                <img src="img/location.jpg" class="image-fluid w-100"/>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">Domain</a>. All Rights Reserved.</a>
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
    <a href="#" class="btn btn-lg btn-danger btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


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