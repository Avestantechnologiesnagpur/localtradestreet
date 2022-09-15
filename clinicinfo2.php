<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="utf-8">
    <title>Hospital Info</title>
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

    <style>
        star{
            display: inline;
        }
    </style>
</head>

<body>
   <!-- Topbar Start -->
   <div class="container-fluid bg-light pt-3 d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <p><i class="fa fa-envelope mr-2"></i>marketing@localtradestreet.com</p>
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
                <h1 class="m-0" style="color:#ff1717 ;"><img src="img/logo.jpeg " style="border-radius: 50%;"><span class="text-dark">Local Trade </span>Street</h1>
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
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
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
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;"> 
                        <!-- <h4 class="display-3 text-white mb-md-4">Welcome to Local Trade Street</h4> -->
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
        <!-- <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a> -->
    </div>
</div>
<!-- Carousel End -->
<!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <!-- <h2 class="mb-3">Cherries n Chillies International Cuisine Restaurant</h2> -->
                                <img class="img-fluid w-100" src="img/Abhyudaya.jpg" alt="Cherries">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1"><span style="background-color: #ff1717;"></span></h6>
                                    <small class="text-white text-uppercase"><span style="background-color: #ff1717;"></span></small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="container">
                                <div class="header">
                                    <h1 itemprop="name">Abhyudaya Multispeciality Hospital</h1>
                                      <ul class="list-group b-info" style="margin-bottom: 4px; ">
                                          <li class="list-group-item"> 
                                              <div class="pull-left" style="width:100px; height:24px; margin-top: 4px;">
                                              <div class="ratting-box">
                                                <div class="stars">
                                                    <div class="active" style="width:80%">
                                                    </div>
                                                </div>
                                            </div> 
                                              </div>
                                              <div class="pull-left">
                                                    <span style="font-size: 40px; color:#ff1717; vertical-align: middle;">***** </span><a href="https://www.facebook.com/Cherries-n-Chillies-1055781421145269/" target="_blank">
                                                        <amp-img src="https://www.pickeronline.com/assets/theme/images/facebook.png" alt="facebook" width="28" height="28" layout="fixed" class="i-ampphp-element i-ampphp-layout-fixed i-ampphp-layout-size-defined i-ampphp-built i-ampphp-layout" i-ampphp-layout="fixed" style="width: 28px; height: 28px; --loader-delay-offset:343ms !important;">
                                                            <img decoding="async" alt="facebook" src="https://www.pickeronline.com/assets/theme/images/facebook.png" class="i-ampphp-fill-content i-ampphp-replaced-content" style="vertical-align:middle;"></amp-img></a>&nbsp;
                                            </div>
                                              <div class="clearfix"></div>
                                          </li>
                                          
                                          <li class="list-group-item"><i class='fas fa-phone'></i> <a href="tel:0712-2241941" itemprop="telephone">0712-2241941</a>.</li><li itemprop="telephone" class="list-group-item"><i class='fas fa-mobile-alt'></i> <a href="tel:9326863318" itemprop="telephone">9371513961</a>.</li> <li itemprop="email" class="list-group-item"><i class='fas fa-envelope-open'></i> <a href="mailto:drpavi_ayu@rediffmail.com">drpavi_ayu@rediffmail.com</a></li><li class="list-group-item"><i class="fa fa-globe"></i> <a itemprop="sameAs" target="_blank" href=" http://pilesfistulacure.com/" rel="nofollow"></a> http://pilesfistulacure.com</a></li><li class="list-group-item" itemprop="address"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span itemprop="streetAddress" style="color:#ff1717;"> Shree Sairam Apartment, Kashi Nagar, Near Rameshwari Bus Stop,</span><br>&nbsp; &nbsp;&nbsp; <span style="color:#ff1717;" itemprop="addressLocality" style="color:#ff1717;">Rameshwari</span>, <span itemprop="addressRegion"style="color:#ff1717;">Nagpur</span> - <span style="color:#ff1717;" itemprop="postalCode">440010</span>.</li
                                      </ul> 
                                      <div class="row pt-3">
                                        <div class="col-xs-3 col-sm-1 profile-bottom ">
                                            <a href="https://www.pickeronline.com/edit-business-listing/cherries-n-chillies-international-cuisine-restaurant" rel="nofollow" class="" title="Edit Cherries n Chillies International Cuisine Restaurant"><i class='fas fa-edit' style='font-size: 24px;'></i></a>
                                        </div>
                                        <div class="col-xs-9 profile-bottom ">
                                            <i class="fa fa-eye" style="font-size:24px"></i>2589  
                                        </div>
                                        
                                    <div class="col pt-3 profile-bottom hidden-xs">
                                    <div class="clearfix"></div>  
                                    </div>                     
                                    <div class="col-sm profile-bottom "> 
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalEnqiryBtn" style="border-radius: 19px; ">
                                        <i class="fa fa-envelope">&nbsp;&nbsp;</i>Get Enquiry</button>
                                        </div>   
                                        <div class="col-md col-md profile-bottom "> 
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#share-buttons-modal" style="border-radius: 19px">
                                                <i class="fa fa-share-square" style="font-size:13px"></i> Share</button>
                                            
                                        </div>
                                        
                                    </div>
                                    <hr>
                                      <!-- <div class="row pt-3">
                                        <div class="col-sm">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalEnqiryBtn"><i class="glyphicon glyphicon-envelope"></i> Get Enquiry</button>
                                        </div>
                                        <div class="col-sm">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#share-buttons-modal"><i class="glyphicon glyphicon-share"></i> Share</button>
                                        </div>
                                        <div class="col-sm">
                                            <button>Get enquiry</button>
                                        </div>
                                        </div> -->
                                </div>
                            </div>
                            <!-- <div class="d-flex mb-3">
                                <h2 class="mb-3">Cherries n Chillies International Cuisine Restaurant</h2>  
                            </div> -->
                            <!-- <h2 class="mb-3">Cherries n Chillies International Cuisine Restaurant</h2> -->
                            <!-- <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut
                                magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet
                                amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at
                                sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et
                                aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren
                                sit stet no diam kasd vero.</p>
                            <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores
                                vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit
                                nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore
                                ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et,
                                clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat
                                justo dolore sit invidunt.</p> -->
                                <div class="col">
                                    <h2 class="title">Opening Hours</h2> 
                                    <table style="margin:auto;" class="table table-bordered">
                                        <tbody><tr><td>Mon </td><td><span style="font-size:12px;">10:00am - 7:00am </span></td></tr><tr><td>Tue </td><td><span style="font-size:12px;">10:00am - 7:00am </span></td></tr><tr><td>Wed </td><td><span style="font-size:12px;">10:00am - 7:00am </span></td></tr><tr><td>Thu </td><td><span style="font-size:12px;">10:00am - 7:00am </span></td></tr><tr><td>Fri </td><td><span style="font-size:12px;">10:00am - 7:00am </span></td></tr><tr><td>Sat </td><td><span style="font-size:12px;">10:00am - 7:00am </span></td></tr><tr><td>Sun </td><td><span style="font-size:12px;">Closed - Closed </span></td></tr>		</tbody></table>
                                    
                                    <div class="clearfix"></div><br>
                                </div>

                                                   </div>
                    </div>
                    <!-- Blog Detail End -->
    
                    <!-- Comment List Start -->
                    <div class="bg-white" style="padding: 30px; margin-bottom: 30px;">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">3 Comments</h4>
                        <div class="media mb-4">
                            <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                    Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                    consetetur at sit.</p>
                                <button class="btn btn-sm btn-outline-primary">Reply</button>
                            </div>
                        </div>
                        <div class="media">
                            <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                    Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                    consetetur at sit.</p>
                                <button class="btn btn-sm btn-outline-primary">Reply</button>
                                <div class="media mt-4">
                            <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div>
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                   labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                   eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet
                                   ipsum diam tempor consetetur at sit.</p>
                                <button class="btn btn-sm btn-outline-primary">Reply</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Comment List End -->
    
                    <!-- Comment Form Start -->
                    <div class="bg-white mb-3" style="padding: 30px;">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Leave a comment</h4>
                        <form>
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>
    
                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave a comment"
                                    class="btn btn-primary font-weight-semi-bold py-2 px-3">
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <!-- <img src="img/user.jpg" class="img-fluid mx-auto mb-3" style="width: 100px;"> -->
                        <h3 class="text-danger mb-3">Description</h3>
                        <p>Abhyudaya Multispeciality Hospital - Shree Sairam apartment, Kashi Nagar, Near Rameshwari bus stop, Rameshwari, Nagpur.
                        <br>
                            Abhyudaya Multispeciality Hospital is managed by dr. pravin sahave. They Provide Best Medical Treatment on Ayurveda, Suvarna Prashan Sanskar, Piles, Fistula, Fissure, Infertility, Kidney Stone, Hydrocele, Hernia, Appendix in simple Language.
</p>
                        <div class="d-flex justify-content-center">
                            <a class="text-danger px-2" href="https://www.facebook.com/profile.php?id=100064148859759">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-danger px-2" href="https://twitter.com/LocalTradeStre2">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-danger px-2" href="https://www.linkedin.com/in/local-trade-street-34648a248/">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-danger px-2" href="https://www.instagram.com/localtradestreets/">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-danger px-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
    
                    <!-- Search Form -->
                    <div class="mb-5">
                        <div class="bg-white" style="padding: 30px;">
                            <div class="input-group">
                                <input type="text" class="form-control p-4" placeholder="Keyword">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary border-primary text-white"><i
                                            class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category List -->
                    <div class="mb-5">
                        <!-- <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Web
                                        Design</a>
                                    <span class="badge badge-primary badge-pill">150</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Web
                                        Development</a>
                                    <span class="badge badge-primary badge-pill">131</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Online Marketing</a>
                                    <span class="badge badge-primary badge-pill">78</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Keyword Research</a>
                                    <span class="badge badge-primary badge-pill">56</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Email Marketing</a>
                                    <span class="badge badge-primary badge-pill">98</span>
                                </li>
                            </ul>
                        </div> -->
                        <div class=" col">
                
                            <h2> Photo Gallery</h2>
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/div1.jpg" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="img/div2.jpg" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="img/div3.jpg" alt="Third slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="img/div4.jpg" alt="Forth slide" slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="img/div5.jpg" alt="Fifth slide">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                              </div>
                         
                    </div>
    
                    <!-- Recent Post -->
                    <!-- <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h4>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                    </div>
     -->
     <div class="col-md well well-faint">
		<h2 class="title">Video</h2>
                    <hr>
					<amp-img src="https://www.pickeronline.com/assets/theme/images/not-available.png" alt="not-available" class="img-responsive i-ampphp-element i-ampphp-layout-responsive i-ampphp-layout-size-defined i-ampphp-built i-ampphp-layout" style="margin: 0px auto; --loader-delay-offset:344ms !important;" layout="responsive" width="348" height="280" i-ampphp-layout="responsive"><i-ampphp-sizer slot="i-ampphp-svc" style="padding-top: 80.4598%;"></i-ampphp-sizer><img decoding="async" alt="not-available" src="https://www.pickeronline.com/assets/theme/images/not-available.png" class="i-ampphp-fill-content i-ampphp-replaced-content"></amp-img>
				<div class="clearfix"></div>
	
            </div>
                    <!-- Service -->
                    <div class="mb-5 pt-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Services</h4>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-light m-1">Piles</a>
                            <a href="" class="btn btn-light m-1">Fistula</a>
                            <a href="" class="btn btn-light m-1">Haemorrhoids</a>
                            <a href="" class="btn btn-light m-1">Fissures</a>
                            <a href="" class="btn btn-light m-1">Ksharsutra therapy</a>
                            <a href="" class="btn btn-light m-1">Skin treatment</a>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        
    </div>
    <div class="col-sm">
        
    </div>

   
    <!-- Footer start -->
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
                <p><i class="fa fa-map-marker-alt mr-2"></i>Old Dnyaneshwar Nagar, New Dnyaneshwar Nagar, Rameshwari, Nagpur, Maharashtra 440027</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+91 70586 90562</p>
                <p><i class="fa fa-envelope mr-2"></i>marketing@localtradestreet.com</p>
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
            <!-- <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Find US</h5>
                <img src="img/location.jpg" class="image-fluid w-100"/>
                </div> -->
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="index.php">localtradestreetnagpur.com</a>. All Rights Reserved.</a>
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