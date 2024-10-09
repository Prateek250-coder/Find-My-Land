
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}





?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    
    <link rel="stylesheet" href="style.css">
    <!--AOS CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <title>FindMyLand</title>
</head>
<body>
    <!--Navbar-->  
    <nav class="navbar navbar-expand-sm fixed-top">
        <a href="" class="navbar-brand"><span>F</span>ind My Land</a>
        <div>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="#header" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#why container" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#sell container" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#testi" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="#header" class="nav-link">Contact</a></li>
                <!-- <li class="nav-item"><a href="login/login_form.php" class="nav-link">Login</a></li> -->
                <li class="nav-item"><p style="font-size: large ; color: white;">&emsp; <strong><span><?php echo $_SESSION['usermail']; ?></span></strong><br> </p>
            <a href="login/logout.php" class="btn">logout</a></li>

            </ul>
        </div>

    </nav>
    <!--Navbar-->  

    <!--Header-->
    <section>
        <div class="header" id="header">
            <div>
                <div class="banner-image">
                    <img src="images\i1.jpg" alt="">
                </div>
                <div class="Overlay"></div>
            </div>

            <div class="content">
                <form action="">
                    <h6>Arrange a meeting <br>With our Speacialist</h6>
                    
                    <div class="form-group">
                        <input type="text" class="font-weight-bold form-control"
                        placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="number" class="font-weight-bold form-control"
                        placeholder="Your Phone Number">
                    </div>
                    <div class="form-group">
                        <input type="email" class="font-weight-bold form-control"
                        placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <textarea class="font-weight-bold form-control" 
                        placeholder="Type Your Message..." rows="5"></textarea>
                    </div>
                    <button class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!--Why section-->
    <section>
        <div class="why container" id="why container">
            <div class="content">
                <h6>Why Choose us?</h6>
                <p>Resason you should choose our website over other.</p>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="box" data-aos="fade-down" data-aos-duration="2500">
                        <i class="fa-solid fa-house-flag"></i>
                        <h5>User-friendly interface</h5>
                        <p>A well-designed website with an intuitive user interface makes it easier for visitors to navigate and find what they're looking for.</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box" data-aos="fade-up" data-aos-duration="3000">
                        <i class="fa-solid fa-handshake"></i>
                        <h5>Customer support</h5>
                        <p>The website should offer good customer support to help visitors with any questions or issues they might have.</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box" data-aos="fade-down" data-aos-duration="2500">
                        <i class="fa-solid fa-coins"></i>
                        <h5>Additional services</h5>
                        <p>The website might offer additional services, such as mortgage calculators, home valuation tools, or property management services, that provide added value for visitors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Sell section-->
    <section>
        <div class="sell container" id="sell container">
            <div class="content">
                <h6>Properties for sale</h6>
                <p>Here on FindMyLand you will best properties for sale with best price in the market.</p>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="box" data-aos="fade-up" data-aos-duration="2500">
                        <img src="images\i2.jpg" class="img-fluid" alt="">
                        <div class="imgcontent">
                            <h5>$100000- price</h5>
                        </div>
                        <div class="boxcontent">
                            <h4> Property for sale</h4>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At consequuntur ipsa exercitationem ut fugiat voluptatibus rerum commodi praesentium laboriosam eius officia facere veritatis, cum accusamus,\
                                 consequatur accusantium nulla quia id?
                            </p> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box" data-aos="fade-down" data-aos-duration="3000">
                        <img src="images\i3.jpg" class="img-fluid" alt="">
                        <div class="imgcontent">
                            <h5>  $100000- price</h5>
                        </div>
                        <div class="boxcontent">
                            <h4> House for sale</h4>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At consequuntur ipsa exercitationem ut fugiat voluptatibus rerum commodi praesentium laboriosam eius officia facere veritatis, cum accusamus,\
                                 consequatur accusantium nulla quia id?
                            </p> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box" data-aos="fade-up" data-aos-duration="2500">
                    <a href="sale.html"> <img src="images\m1.jpg"  id="more" class="img-fluid" alt=""></a>
                        <div class="imgcontent">
                            <h5> See More</h5>
                        </div>
                        <div class="boxcontent">
                            <h4>Find more land 1/2/3 BHK Set</h4>
                            <!-- <p> 
                            &ensp;&ensp;&ensp;&ensp;&ensp;
                                &ensp;&ensp;&ensp;&ensp;&ensp;
                                &ensp;&ensp;&ensp;&ensp;&ensp;
                                &ensp;&ensp;&ensp;&ensp;&ensp;
                                &ensp;&ensp;&ensp;&ensp;&ensp;
                                &ensp;&ensp;&ensp;&ensp;&ensp;
                                &ensp;&ensp;&ensp;&ensp;&ensp;
                                &ensp;&ensp;&ensp;&ensp;&ensp;
                            </p> -->
                        </div>
                    </div>
                </div>

                

                    
                </div>
            </div>
        </div>
    </section>

    <!--Rent section-->
    <section>
        <div class="rent container">
            <div class="content">
                <h6>Properties for Rent</h6>
                <p>Discover your next dream home with our selection of stunning properties available for rent.</p>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="box" data-aos="fade-down" data-aos-duration="2500">
                        <img src="images\i5.jpg" class="img-fluid" alt="">
                        <div class="imgcontent">
                            <h5>$3000/Month</h5>
                        </div>
                        <div class="boxcontent">
                            <h4>Property for rent</h4>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At consequuntur ipsa exercitationem ut fugiat voluptatibus rerum commodi praesentium laboriosam eius officia facere veritatis, cum accusamus,\
                                 consequatur accusantium nulla quia id?
                            </p> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box" data-aos="fade-up" data-aos-duration="3000">
                        <img src="images\i6.jpg" class="img-fluid" alt="">
                        <div class="imgcontent">
                            <h5>  $4000/Month</h5>
                        </div>
                        <div class="boxcontent">
                            <h4>House for rent</h4>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At consequuntur ipsa exercitationem ut fugiat voluptatibus rerum commodi praesentium laboriosam eius officia facere veritatis, cum accusamus,\
                                 consequatur accusantium nulla quia id?
                            </p> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box" data-aos="fade-down" data-aos-duration="2500">
                        <a href="rent.html"> <img src="images\m1.jpg" id="more" class="img-fluid" alt=""></a>
                         
                        <div class="imgcontent">
                            <h5>See more</h5>
                        </div>
                        <div class="boxcontent">
                            <h4>Find more land to rent</h4>
                            <!-- <p> &ensp;&ensp;&ensp;&ensp;&ensp;
                                &ensp;&ensp;&ensp;&ensp;&ensp;
                                &ensp;&ensp;&ensp;&ensp;&ensp;
                                &ensp;&ensp;&ensp;&ensp;&ensp;
                                &ensp;&ensp;&ensp;&ensp;&ensp;
                                &ensp;&ensp;&ensp;&ensp;&ensp;
                                &ensp;&ensp;&ensp;&ensp;&ensp;
                                &ensp;&ensp;&ensp;&ensp;&ensp;
                            </p> -->
                        </div>
                    </div>
                </div>

                

                    
                </div>
            </div>
        </div>
    </section>

    <!--Popular places section-->
    <section>
        <div class="popular container">
            <div class="content">
                <h6>Popular places</h6>
                <p>Experience the best living with our properties located just minutes away from popular attractions, restaurants, and entertainment venues.</p>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="box" data-aos="zoom-in-down" data-aos-duration="3000">
                        <img src="images\i11.jpg" class="img-fluid" alt="">
                        <div class="Overlay"></div>
                        <div class="box_content">
                        <a href="https://en.wikipedia.org/wiki/Italy"><h6> Italy</h6></a>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box" data-aos="zoom-in" data-aos-duration="2500">
                        <img src="images\i9.jpg" class="img-fluid" alt="">
                        <div class="Overlay"></div>
                        <div class="box_content">
                        <a href="https://en.wikipedia.org/wiki/Venice"><h6> Venice</h6></a>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box" data-aos="zoom-in-up" data-aos-duration="3000">
                        <img src="images\i10.jpg" class="img-fluid" alt="">
                        <div class="Overlay"></div>
                        <div class="box_content">
                        <a href="https://en.wikipedia.org/wiki/Brintan"><h6> Britain</h6></a>
                             <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--second header-->
    <section>
        <div class="second_header">
            <div>
                <div class="img">
                    <img src="images/i14.jpg" alt="">
                </div>
                <div class="Overlay"></div>
            </div>
            <div class="second_content">
                <h6>"The best investment on Earth is Earth."</h6>
                <p>---From Louis Glickman</p>
            </div>
        </div>
    </section>

    <!--Testimonial-->
    <section id="testi">
        <div class="testi container" >
            <div class="content">
                <h6>Client Testimonial</h6>
                <p>See what our satisfied clients have to say about their experiences with our real estate services. From first-time buyers to seasoned investors, our team has helped countless clients achieve their real estate goals. Read on to see what they have to say about their experiences with us.</p>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="box" data-aos="zoom-in-down" data-aos-duration="2500">
                        <p>
                            I was able to find a house for my parents near temple all thanks to this website.
                        </p>

                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <h6>Ramdas<h6>
                            <img src="images/p1.jpg" class="img-fluid" alt="">

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box" data-aos="zoom-in-up" data-aos-duration="2500">
                        <p>Thanks to this real estate website, we were able to find the perfect rental property in just a few clicks. The website was easy to use, and the staff were friendly and helpful throughout the entire process.</p>

                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <h6>Angela Yu<h6>
                            <img src="images/p2.jpg" class="img-fluid" alt="">

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box" data-aos="zoom-in-down" data-aos-duration="2500">
                        <p>This real estate website had the best selection of properties in the area, and the search options made it easy to find exactly what we were looking for. We're thrilled with our new home and couldn't have done it without their help.</p>

                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <h6>Joshep Jostar<h6>
                            <img src="images/p3.jpg" class="img-fluid" alt="">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--footer-->
    <footer>
        <div class="container">
            <!-- <div class="row">
                
                <div class="col-sm-4">
                    <h6>Important Terms</h6>
                    <i class="fas fa-arrow-right"><a href="#">Lorem ipsum.</a></i>
                    <i class="fas fa-arrow-right"><a href="#">Lorem ipsum.</a></i>
                    <i class="fas fa-arrow-right"><a href="#">Lorem ipsum.</a></i>
                    <i class="fas fa-arrow-right"><a href="#">Lorem ipsum.</a></i>
                    <i class="fas fa-arrow-right"><a href="#">Lorem ipsum.</a></i>
                </div>

                <div class="col-sm-4">
                    <h6>Important Dates</h6>
                    <i class="fas fa-arrow-right"><a href="#">05 Feb, 2023</a></i>
                    <i class="fas fa-arrow-right"><a href="#">09 Feb, 2023</a></i>
                    <i class="fas fa-arrow-right"><a href="#">12 Feb, 2023</a></i>
                    <i class="fas fa-arrow-right"><a href="#">13 Feb, 2023</a></i>
                    <i class="fas fa-arrow-right"><a href="#">19 Feb, 2023</a></i>
                </div>

                <div class="col-sm-4">
                    <h6>Important Links</h6>
                    <i class="fas fa-arrow-right"><a href="#header">Home</a></i>
                    <i class="fas fa-arrow-right"><a href="#why container">About</a></i>
                    <i class="fas fa-arrow-right"><a href="#sell container">Services</a></i>
                    <i class="fas fa-arrow-right"><a href="#header">Contact</a></i>
                    <i class="fas fa-arrow-right"><a href="login.html">Login</a></i>
                </div>

            </div> -->

            <div class="custom_content">
                
                <div   class="row" >
                    <div class="col-sm-4">
                        <a href=" https://www.linkedin.com/in/abhay-pratap-875965223/"><i class="fa-brands fa-linkedin"></i> Connect with us on Linkedin</a>
                    </div>
                    <div class="col-sm-4">
                        <a href=" https://www.instagram.com/p.s.p.abhay_01/"><i class="fa-brands fa-instagram"></i>Connect with us on Instagram</a>
                    </div>
                    <div class="col-sm-4">

                <a href=" https://twitter.com/Abhay_yabai"><i class="fa-brands fa-twitter"></i>Connect with us on Twitter</a>
                    </div>
                 
                    
             
            </div>
            <p>Find My Land © Group-199</p>

        </div> 
    </footer>
    <!--Script link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!--AOS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!--Custom script-->
    <script>
        AOS.init()
        $(document).scroll(function () {
            $(".navbar").toggleClass("scroll", $(this).scrollTop() > $(".navbar").height());
        })
    </script>
</body>
</html>