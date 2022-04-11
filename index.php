<?php 
include 'include/inc.header.php'; 
include 'php/meal.php';
$meal = new Meal;
?>


 <!--
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300;1,400&family=Roboto&display=swap');
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
    <div id="header">
        <div class="container">
            <div class="inside">
                <nav class="navbar navbar-expand-lg navbar-dark fixed-top bar">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#"></a>
                                </li>
                                <div class="menu collapse navbar-collapse">
                                    <img class="logo" src="projectImages/logo-White.svg" alt="logo">
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="index.html"> Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#menu1">Menu</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#gallery1"> Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#Testimonial"> Testimonails</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#ContactUs"> Contact Us</a></li>
                                    </ul>
                                    <ul class="menu2">
                                        <li class="nav-item"><a class="nav-link" href="/Search.html"> Search</a></li>
                                        <li class="nav-item"><a class="nav-link" href="/Profile.html"> Profile</a></li>
                                        <div class="cart">
                                            <li class="inside-menu"><a class="nav-link btn1-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" href="">Cart</li>
                                            <p id="cartcounter" type="number">0</p></a>
                                        </div>
                                    </ul>
                                </div>
                </nav>
                </div>

                </nav>
-->
                <article id="Menu">

                    <div class="Offer">

                        <h1 class="title">Party Time</h1>

                        <div class="shape1">
                            <h4 class="offer">Buy any 2 burgers and get 1.5L Pepsi Free</h4>
                        </div>
                        <a href="" class="btn">Order Now</a>
                    </div>
                    </div>
            </div>






<!--
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">cart content</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="prc">Price</p>
                            <p class="it">Item</p>

                            <p>Total</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn1 btn-secondary b1" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn1 btn-primary b2">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>


-->
<section id="recent">
    <div class="container">

      <h2 class="text-center">Your Recent Bought Products</h2>
      
      <div class="grid">
        <?php
        $recent = explode(",", $_COOKIE['recent-bought']);
        foreach ($recent as $key => $value) {
        $data = $meal->getMealById($value);
        echo '<div class="card">
            <div class="card-img card-img-seating" style="background: url(projectImages/'.$data["image"].') no-repeat center center / cover;">
              <a href="detail.php?id='.$data["id"].'">
              </a>
            </div>

            <div class="card-content">
              <div class="con1"><a href="detail.php?id='.$data["id"].'">
                  <p>⭐'.$data["rating"].' rating</p>
                  <p>'.$data["title"].'</p>
                  <p class="description">'.$data["description"].'</p>
                </a>
              </div>
              <button class="btn" id="'.$data["id"].'" onclick="card(this.id)"><a>Buy Again</button>
              <p class="price">'.$data["price"].' SAR</p>
            </div>
          </div>';
        }
        ?>

      </div>
    </div>
  </section>




            <section id="menu1">
                <div class="container">
                    <h2 class="want">Want to Eat</h2>
                    <p>Try our most delicious food and usually take minutes to deliver</p>
                    <ul class="meals">
                        <a href="/burger.html">burger</a>
                        <a href="/pizza.html">pizza</a>
                        <a href="fastfood.html">fast food</a>
                        <a href="cupcake.html">cupcacke</a>
                        <a href="sandwich.html">sandwich</a>
                        <a href="spaghetti.html">spaghetti</a>
                    </ul>
                </div>
                <div class="markinig">
                    <div class="shape2">
                        <img class="img-fluid" src="projectImages/delivery.png">
                        <div class="shape3-seating">
                            <div class="shape3">
                                <p>We garuntee 30min delivery</p>
                            </div>
                            <p class="parg">if your are working late, having a meeting and you need extra push</p>
                        </div>
                    </div>

                </div>

            </section>

            </section>



            <section id="gallery1">
                <div class="container">

                    <h2>Our Most Popular Recipes</h2>
                    <p>Try our most delicious food and usually take minutes to deliver</p>
                    <div class="grid">
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-1">
                            <div class="col">
                                <div class="Gallery1">
                                    <div class="Gallery1-img Gallery1-img-seating">
                                        <a href="detail.php">
                                        </a>
                                    </div>

                                    <div class="Gallery1-content">
                                        <div class="con1">
                                            <a href="detail.php">
                                                <p>&#11088 4.5 rating</p>
                                                <p>best sandwich</p>
                                                <p></p>some description</p>

                                            </a>
                                        </div>

                                        <button class="button button4" onclick="addCartIndex()">add to cart</button>
                                        <p class="price">23.9 SAR</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="Gallery1">
                                    <div class="Gallery1-img2 Gallery1-img-seating">
                                        <a href="detail.php">
                                        </a>
                                    </div>

                                    <div class="Gallery1-content">
                                        <div class="con1">
                                            <a href="detail.php">
                                                <p>&#11088 4.5 rating</p>
                                                <p>best sandwich</p>
                                                <p></p>some description</p>

                                            </a>
                                        </div>

                                        <button class="button button4" onclick="addCartIndex()">add to cart</button>
                                        <p class="price">25.9 SAR</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="Gallery1">
                                    <div class="Gallery1-img3 Gallery1-img-seating">
                                        <a href="detail.php">
                                        </a>
                                    </div>

                                    <div class="Gallery1-content">
                                        <div class="con1">
                                            <a href="detail.php">
                                                <p>&#11088 4.5 rating</p>
                                                <p>best sandwich</p>
                                                <p></p>some description</p>

                                            </a>
                                        </div>

                                        <button class="button button4" onclick="addCartIndex()">add to cart</button>
                                        <p class="price">27.5 SAR</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">

                                <div class="Gallery1">
                                    <div class="Gallery1-img4 Gallery1-img-seating">
                                        <a href="detail.php">
                                        </a>
                                    </div>

                                    <div class="Gallery1-content">
                                        <div class="con1">
                                            <a href="detail.php">
                                                <p>&#11088 4.5 rating</p>
                                                <p>best sandwich</p>
                                                <p></p>some description</p>

                                            </a>
                                        </div>

                                        <button class="button button4" onclick="addCartIndex()">add to cart</button>
                                        <p class="price">32.9 SAR</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">

                                <div class="Gallery1">
                                    <div class="Gallery1-img5 Gallery1-img-seating">
                                        <a href="detail.php">
                                        </a>
                                    </div>

                                    <div class="Gallery1-content">
                                        <div class="con1">
                                            <a href="detail.php">
                                                <p>&#11088 4.5 rating</p>
                                                <p>best sandwich</p>
                                                <p></p>some description</p>

                                            </a>
                                        </div>

                                        <button class="button button4" onclick="addCartIndex()">add to cart</button>
                                        <p class="price">19.4 SAR</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">

                                <div class="Gallery1">
                                    <div class="Gallery1-img6 Gallery1-img-seating">
                                        <a href="detail.php">
                                        </a>
                                    </div>

                                    <div class="Gallery1-content">
                                        <div class="con1">
                                            <a href="detail.php">
                                                <p>&#11088 4.5 rating</p>
                                                <p>best sandwich</p>
                                                <p></p>some description</p>

                                            </a>
                                        </div>

                                        <button class="button button4" onclick="addCartIndex()">add to cart</button>
                                        <p class="price">28.5 SAR</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>

            <section class="container" id="testimonial">
                <h2 class="Testimonial-heading">Clients Testimonials</h2>
                <div class="con">
                    <div class="testimonial-left">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators whitebutoon">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active ">
                                    <div class="row">
                                        <img src="projectImages/man-eating-burger.png" class="img-fluid col-lg-6" alt="...">

                                        <p class="col-lg-6">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum voluptatibus sapiente quisquam vel tempora voluptates saepe provident corrupti. Earum, eaque! Tempore, fugit libero. Quasi corrupti dolor itaque! Nisi, maxime quisquam? Nemo hic magnam vitae!
                                            Quo, est. Velit qui numquam corporis.</p>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <img src="projectImages/man-eating-burger.png" class="img-fluid col-lg-6" alt="...">

                                        <p class="col-lg-6">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum voluptatibus sapiente quisquam vel tempora voluptates saepe provident corrupti. Earum, eaque! Tempore, fugit libero. Quasi corrupti dolor itaque! Nisi, maxime quisquam? Nemo hic magnam vitae!
                                            Quo, est. Velit qui numquam corporis.</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row">
                                        <img src="projectImages/man-eating-burger.png" class="img-fluid col-lg-6" alt="...">

                                        <p class="col-lg-6">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum voluptatibus sapiente quisquam vel tempora voluptates saepe provident corrupti. Earum, eaque! Tempore, fugit libero. Quasi corrupti dolor itaque! Nisi, maxime quisquam? Nemo hic magnam vitae!
                                            Quo, est. Velit qui numquam corporis.</p>
                                    </div>
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
                        </div>
                    </div>
                </div>
            </section>

            <section id="ContactUs">
                <div class="contact-info">
                    <p class="phone"><strong>phone: +966-13-860-0000 </strong></p>
                    <div class="work-hours">
                        <img src="projectImages/clock.svg" alt="time">
                        <div>
                            <p>sun-thr 11:00 - 23:00</p>
                            <p>fri-sat 12:00 - 23:00</p>
                        </div>
                    </div>
                    <div class="location">
                        <img src="projectImages/placeholder.svg" alt="location">
                        <div>
                            <p>123 KFUPM Students Mall</p>
                            <p>Dhahran 34464</p>
                            <br> <br> <br> <br> <br>
                            <div class="links">
                                <li><a href="https://www.facebook.com/campaign/landing.php?campaign_id=1661689889&extra_1=s%7Cc%7C320280751357%7Ce%7Cfacebook%7C&placement=&creative=320280751357&keyword=facebook&partner_id=googlesem&extra_2=campaignid%3D1661689889%26adgroupid%3D65800001964%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-541132862%26loc_physical_ms%3D1012092%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=CjwKCAjw4qCKBhAVEiwAkTYsPNJtuxr-THoi2Bw11GD9mHGKgTWpvVhRm89ketX_YINfjfP-uQxgYRoCVEMQAvD_BwE"> facebook</a>
                                    <a href="https://twitter.com/explore">
                    Twitter</a> <a href="https://www.instagram.com/">
                Instagram</a>
                                </li>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="map">

                </div>

            </section>

            <footer id="footer">
                <div class="container">
                    <div class="about">
                        <img src="projectImages/logo-red.svg" alt="logo">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure aliquam, recusandae deleniti est blanditiis, voluptatibus porro iste quo voluptatum quibusdam perspiciatis nam laudantium adipisci ut sed?</p>
                    </div>
                    <div class="Usfullinks">
                        <h2>useful links</h2>
                        <ul>
                            <li><a href="#about">About</a></li>
                            <li><a href="#menu1">Menu</a></li>
                            <li><a href="#Testimonial">Testimonials</a></li>
                            <li><a href="#ContactUs">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="feeds">
                        <h2>instagram feeds</h2>
                        <div class="feed-img">
                            <li class="ml1">
                                <a href=""><img src="projectImages/meal1.png" alt="meal"></a>
                            </li>
                            <li class="ml2">
                                <a href=""><img src="projectImages/meal2.png" alt="meal"></a>
                            </li>
                            <li class="ml3">
                                <a href=""><img src="projectImages/meal3.png" alt="meal"></a>
                            </li>
                            <li class="ml4">
                                <a href=""><img src="projectImages/meal4.png" alt="meal"></a>
                            </li>
                            <li class="ml5">
                                <a href=""><img src="projectImages/meal5.png" alt="meal"></a>
                            </li>
                            <li class="ml6">
                                <a href=""><img src="projectImages/meal6.png" alt="meal"></a>
                            </li>

                        </div>
                    </div>
                </div>
            </footer>
            <script src="app.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>