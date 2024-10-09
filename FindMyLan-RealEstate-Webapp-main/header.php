<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../image/logo.jpeg" type="image/png">

    <title>PahiyaWala</title>


</head>

<body>

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="logo"> <span>Pahiya</span>Wala </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#vehicles">vehicles</a>
            <a href="#services">services</a>
            <a href="#featured">featured</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
        </nav>

        <div id="login-btn">
           <p style="font-size: larger;"> <strong><span><?php echo $_SESSION['usermail']; ?></span></strong><br> </p>
            <a href="logout.php" class="btn">logout</a>
            <i class="far fa-user"></i>

            
        </div>

    </header>

    <div class="login-form-container">

        <span id="close-login-form" class="fas fa-times"></span>

      

    </div>

    <!-- /* Home Image and Text */ -->


    <section class="home" id="home">

        <h3 >find your E-Vehicle</h3>

        <img  src="../image/Electric_cars.jpeg" alt=" ELECTRIC CARS">

        <a class="btn home-parallax" href="#services">explore vehicles</a>

    </section>

    <!-- Icons board -->

    <section class="icons-container">

        <div class="icons">
            <i class="fa-solid fa-motorcycle"></i>
            <div class="content">
                <h3>150+</h3>
                <p>Bike Sold</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>4770+</h3>
                <p>cars sold</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <div class="content">
                <h3>320+</h3>
                <p>happy clients</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>1500+</h3>
                <p>news cars</p>
            </div>
        </div>

    </section>


    <!-- Popular Vehicles -->

    <section class="vehicles" id="vehicles">

        <h1 class="heading"> popular <span>vehicles</span> </h1>

        <div class="swiper vehicles-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/CAR 1.webp" alt="Audi E-Tron GT">
                    <div class="content">
                        <h3>Audi RS E-Tron GT</h3>
                        <div class="price"> <span>price : </span> ₹ 1.94 Cr/- </div>
                        <p>
                            
                            <span class="fas fa-circle"></span> 2023
                            <span class="fas fa-circle"></span> automatic
                            <!-- <span class="fas fa-circle"></span> ELectric -->
                            <span class="fas fa-circle"></span> 245kmph
                        </p>
                        <a href="../Vehicles Info/Audi RS E-Tron GT.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/BMW i4.jpg" alt="BMW i4">
                    <div class="content">
                        <h3>BMW i4</h3>
                        <div class="price"> <span>price : </span> ₹ 69.90 Lakh/- </div>
                        <p>
                            
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> automatic
                            <!-- <span class="fas fa-circle"></span> petrol -->
                            <span class="fas fa-circle"></span> 190kmph
                        </p>
                        <a href="../Vehicles Info/BMW i4.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Ford Mustang Mach E.png" alt="Ford Mustang Mach E">
                    <div class="content">
                        <h3>Ford Mustang Mach E</h3>
                        <div class="price"> <span>price : </span> ₹70.00 Lakh/- </div>
                        <p>
                            
                            <span class="fas fa-circle"></span> 2023
                            <span class="fas fa-circle"></span> automatic
                            <!-- <span class="fas fa-circle"></span> petrol -->
                            <span class="fas fa-circle"></span> 178kmph
                        </p>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Tata EVision Electric.webp" alt="">
                    <div class="content">
                        <h3>Tata EVision Electric</h3>
                        <div class="price"> <span>price : </span> ₹25.00 Lakh/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> Coming Soon
                            <span class="fas fa-circle"></span> automatic
                            <!-- <span class="fas fa-circle"></span> petrol -->
                            <span class="fas fa-circle"></span> 183mph
                        </p>
                        <a href="../Vehicles Info/" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img  src="../image/Hero Lectro F3i.png"  alt="">
                    <div class="content">
                        <h3>Hero Lectro F3i
                        </h3>
                        <div class="price"> <span>price : </span> ₹40,999/- </div>
                        <p>
                            new
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> Manual
                            <span class="fas fa-circle"></span> 25kmph
                        </p>
                        <a href="../Vehicles Info/Hero Lectro F3i.php" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Oben Rorr.png" alt="Oben Rorr">
                    <div class="content">
                        <h3>Oben Rorr</h3>
                        <div class="price"> <span>price : </span> ₹1.02 Lakh/- </div>
                        <p>
                            
                            <span class="fas fa-circle"></span> 2023
                            <span class="fas fa-circle"></span> automatic
                            <!-- <span class="fas fa-circle"></span> petrol -->
                            <span class="fas fa-circle"></span> 100kmph
                        </p>
                        <a href="../Vehicles Info/Oben Rorr.html" class="btn">check out</a>
                    </div>
                </div>

              

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>
        <h2 class="head2">The Future Is Electric, And it's available now </h2>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-car"></i>
                <h3>car selling</h3>
                <p>Speed up your future with our electric cars, there is no time to waste with gasoline engines.</p>
                <a href="../carselling.php" class="btn">Purchase car</a>
            </div>

            <div class="box">
                <i class="fas fa-car"></i>
                <h3>bike selling</h3>
                <p>The best moments in life are on two wheels, Save money, time, and environment with our electric bikes.</p>
                <a href="../bikeselling.php" class="btn">Purchase bike</a>
            </div>

            <div class="box">
                <i class="fas fa-car"></i>
                <h3>scooter selling</h3>
                <p>You're craving for the future of driving, and we're here with our electric scooters. Tech that excites</p>
                <a href="../scooterselling.php" class="btn">Purchase scooter</a>
            </div>

            <div class="box">
                <i class="fas fa-car"></i>
                <h3>bicycle selling</h3>
                <p>Our future, powered by yours and your future powered by our E-Cycles.</p>
                <a href="../bicycleselling.php" class="btn">Purchase bicycle</a>
            </div>

            <div class="box">
                <i class="fas fa-car"></i>
                <h3>E-Rickshaw selling</h3>
                <p>Charge Up Your Daily Ride With Our Electric Rickshaws. Elevate Your Ride, Go Electric.</p>
                <a href="../e_rickshaw_selling.php" class="btn" target="_blank">Purchase E-Rickshaw</a>
            </div>

        </div>

    </section>



     <section class="featured" id="featured">

        <h1 class="heading"> <span>featured</span> Car </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Cars/Tata Nexon EV/TATA NEXON EV 1.png" alt="">
                    <div class="content">
                        <h3>Tata Nexon EV</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 18,34,000/-</div>
                        <a href="../Vehicles Info/Tata Nexon EV Max.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/MG ZS EV/featured/Cross View.png" alt="">
                    <div class="content">
                        <h3>MG ZS EV</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 28,98,000/-</div>
                        <a href="../Vehicles Info/MG ZS EV.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Hyundai Kona Electric/Side View.png" alt="">
                    <div class="content">
                        <h3>Hyundai Kona Electric</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 23,84,000/-</div>
                        <a href="../Vehicles Info/Hyundai Kona Electric.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Volvo XC40 Recharge/Onyx Black.jpg" alt="">
                    <div class="content">
                        <h3>Volvo XC40</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 56,90,000/-</div>
                        <a href="../Vehicles Info/Volvo XC40 Recharge.html" class="btn">check out</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- Featured Bike -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured</span> Bike </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Bike/Revolt RV 400/download__7_f-removebg-preview.png" alt="">
                    <div class="content">
                        <h3>Revolt RV 400</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 1,30,892/-</div>
                        <a href="../Vehicles Info/Revolt RV 400.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/Ultraviolette F77/download (6).jpg" alt="">
                    <div class="content">
                        <h3>Ultraviolette F77</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 3,80,000/-</div>
                        <a href="../Vehicles Info/Ultraviolette F77.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/Oben Rorr/download (10)f.jpg" alt="">
                    <div class="content">
                        <h3>Oben Rorr</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 1,03,000/-</div>
                        <a href="../Vehicles Info/Oben Rorr.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Bike/Tork Kratos/download__7_-removebg-preview.png" alt="">
                    <div class="content">
                        <h3>Tork Kratos</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 1,68,374/-</div>
                        <a href="../Vehicles Info/Tork Kratos.html" class="btn">check out</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- Featured Scooter -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured</span> Scooter </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Scooter/ola s1 images/Matt Black.jpg" alt="">
                    <div class="content">
                        <h3>Ola S1</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 85,000/-</div>
                        <a href="../Vehicles Info/Ola S1.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/TVS I QUBE/Pearl White.jpg" alt="">
                    <div class="content">
                        <h3>TVS iQube ELectric</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 1,05,000/-</div>
                        <a href="../Vehicles Info/TVS iQube ELectric.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/BAJAJ CHETAK/6.jpg" alt="">
                    <div class="content">
                        <h3>BAJAJ CHETAK</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 1,50,000/-</div>
                        <a href="../Vehicles Info/Bajaj Chetak.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/HERO VIDA V1/6.jpg" alt="">
                    <div class="content">
                        <h3>HERO VIDA V1</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 1,39,000/-</div>
                        <a href="../Vehicles Info/Hero Vida V1.html" class="btn">check out</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>


    </section>

    <!-- Featured Cycle -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured</span> Cycle </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Hero Lectro C5X/front.png" alt="">
                    <div class="content">
                        <h3>Hero Lectro C5X</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 38,999/-</div>
                        <a href="../Vehicles Info/Hero Lectro C5X.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Motovolt Urbn e-bike/download (4).jpg" alt="">
                    <div class="content">
                        <h3>Motovolt Urbn e-bike</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 49,999/-</div>
                        <a href="../Vehicles Info/Motovolt Urbn e-bike.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Toutche Heileo M100/sideview.jpg" alt="">
                    <div class="content">
                        <h3>Toutche Heileo M100</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 48,900/-</div>
                        <a href="../Vehicles Info/Toutche Heileo M100.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cycles/Polarity Smart Executive/download (1).jpg" alt="">
                    <div class="content">
                        <h3>Polarity Smart Executive</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 38,000/-</div>
                        <a href="#" class="btn">check out</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>


    </section>

    <!-- Featured E-Rickshaw -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>featured</span> E-Rickshaw</h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/E-Rickshaw/Mahindra Treo/Cross View.jpeg" alt="">
                    <div class="content">
                        <h3>Mahindra Treo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 1,80,000/-</div>
                        <a href="../Vehicles Info/Mahindra Treo.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/E-Rickshaw/Lohia Comfort F2F/side.jpg" alt="">
                    <div class="content">
                        <h3>Lohia Comfort F2F</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 1,80,000/-</div>
                        <a href="../Vehicles Info/Lohia Comfort F2F.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/E-Rickshaw/Kinetic Safar Smart/FRONT.webp" alt="">
                    <div class="content">
                        <h3>Kinetic Safar Smart</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 1,45,000/-</div>
                        <a href="../Vehicles Info/Kinetic Safar Smart.html" class="btn">check out</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/E-Rickshaw/Atul Elite Plus/4.jpg" alt="">
                    <div class="content">
                        <h3>Atul Elite Plus</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price">₹ 1,12,000/-</div>
                        <a href="../Vehicles Info/Atul Elite Plus.html" class="btn">check out</a>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <section class="other_services" id="other_services">

        <h1 class="heading">Other <span> Services </span></h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-tools"></i>
                <h3>parts repair</h3>
                <p>Engineered Minds For Your Vehicle Problems, Fixing Is All We Know.</p>
                <a href="" class="btn"> repair now!!</a>
            </div>

            <div class="box">
                <i class="fas fa-car-crash"></i>
                <h3>Vehicle insurance</h3>
                <p>I Have Good Brakes, Do You Have Good Insurance? If Not Then Tap Here...</p>
                <a href="" class="btn"> Buy insurance</a>
            </div>

            <div class="box">
                <i class="fas fa-car-battery"></i>
                <h3>battery Maintainence</h3>
                <p>We Charge Your Car Without Charging Your Card, High Tech Performance At Low Value.</p>
                <a href="" class="btn">Replace Battery</a>
            </div>

            <div class="box">
                <i class="fas fa-headset"></i>
                <h3>24/7 Support</h3>
                <p>Trust us and you'll be driving in no time, &nbsp;&nbsp;
                    Here every detail counts.
                </p>
                <a href="#" class="btn"> read more</a>
            </div>

        </div>

    </section>

    <!-- Newsletter -->

    <section class="newsletter">

        <h3>Never miss an update</h3>
        <p>Recieve latest alerts from Pahiya Wala</p>

        <form action="">
            <input type="email" placeholder="Enter your email">
            <input type="submit" value="subscribe">
        </form>

    </section>

    <section class="reviews" id="reviews">

        <h1 class="heading"> client's <span>review</span> </h1>

        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/pic-1.png" alt="">
                    <div class="content">
                        <p>If I can say about a car in one word is fabulous car for every middle class family. It's mileage is better than other petrol and diesel variant. I recommend to buy this car and enjoy the ride.</p>
                        <h3>Vicky Kaushal</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/pic-2.png" alt="">
                    <div class="content">
                        <p>Easy to get the test Drive, the driving experience was very easy and fun although it does feel a bit small when compared to its rivals, Looks are decent not very sporty or classy, performance is on par with its rivals never feels out of control, service cost should be considerably lesser.</p>
                        <h3>Rashmika</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/pic-3.png" alt="">
                    <div class="content">
                        <p>Buying experience is awesome and Dealer also helped us to find the correct model as per requirement. The riding experience is just freaking fantastic and ride quality is awesome as well.</p>
                        <h3>Rahul Verma</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/pic-4.png" alt="">
                    <div class="content">
                        <p>Driving an electric vehicle, or EV, can be a very enjoyable experience. Many people who have made the switch from a traditional gasoline-powered car to an EV have reported that they prefer the smooth and quiet operation of an electric drivetrain.</p>
                        <h3>Senorita</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/pic-5.png" alt="">
                    <div class="content">
                        <p>It was a smooth and efficient drive throughout.However can consider on the price range.The looks were great and the exterior rocked.There could be a mild upgrade on the price part.</p>
                        <h3>Ranchor Das</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/pic-7.jpeg" alt="">
                    <div class="content">
                        <p>The awesome bike I have no words to say about this bike.
                            Performance good
                            Mileage good
                            The look was so nice
                            Driving comfortable
                            Everything of this bike is awesome</p>
                        <h3>Pathaan</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <section class="contact" id="contact">

        <h1 class="heading"><span>contact</span> us</h1>

        <div class="row">

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.5366368065065!2d76.8491072148019!3d23.0774433849253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397ce9ceaaaaaaab%3A0xa224b6b82b421f83!2sVellore%20Institute%20of%20Technology%20-%20VIT%20Bhopal!5e0!3m2!1sen!2sin!4v1672863431119!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy"></iframe>

            <form action="">
                <h3>get in touch</h3>
                <input type="text" placeholder="your name" class="box">
                <input type="email" placeholder="your email" class="box">
                <input type="tel" placeholder="subject" class="box">
                <textarea placeholder="your message" class="box" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">
            </form>

        </div>

    </section>

    <section class="footer" id="footer">

        <div class="box-container">

          

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> pahiyawala@gmail.com </a>
                <a href="https://goo.gl/maps/adzVULcYLZRwrspG8" target="_blank"> <i class="fas fa-map-marker-alt"></i> Kotri Kalan, Bhopal, Madhya Pradesh - 466114 </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="https://www.facebook.com/profile.php?id=100089343104174" target="_blank"> <i class="fab fa-facebook-f" target="_blank"></i> facebook </a>

                <a href="https://twitter.com/Pahiyawala" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>

                <a href="https://www.instagram.com/pahiyawala/" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>

                <a href="https://www.linkedin.com/in/pahiya-wala-137073262/" target="_blank"> <i class="fab fa-linkedin" target="_blank"></i> linkedin </a>

                <a href="https://in.pinterest.com/pahiyawala/" target="_blank"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>


    </section>










    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="../js/script.js"></script>

</body>

</html>