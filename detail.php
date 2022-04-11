<!DOCTYPE html>
<html>

<head></head>'
<link rel="stylesheet" href="styledetail.css"> '
<title>
    MOHANNED ALYAHYA 201857860 MOHAMMED ASERI 201631280
</title>

<head>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300;1,400&family=Roboto&display=swap');
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>






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
                                <li class="nav-item"><a class="nav-link" href="index.php"> Home</a></li>
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
                        <button type="button" class="btn1 btn-secondary bb1" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn1 btn-primary bb2">Order Now</button>
                    </div>
                </div>
            </div>
        </div>




        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img1" src="projectImages/meal1.png">
                </div>
                <div class="col-lg-6">
                    <h2>Best sandwich</h2>
                    <p>23.9 SAR<br /><br />&#11088 4.5 rating<br /> <br>
                        <p class="text1"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi labore eos delectus, porro eveniet maiores repellendus! Iusto eos illo, nisi fugiat delectus nostrum harum aliquid rerum nobis tempora nulla sit.</p>

                        <div class="button-cont">
                            <button class="button button1" onclick="decreaseValue()" value="Decrease Value">-</button>
                            <button class="button button2" id="number" type="number">1</button>
                            <button class="button button3" onclick="increaseValue()" value="Increase Value">+</button>
                            <button class="button button4" onclick="addCart()">add to cart</button>
                        </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <button class="btn btn-lg" type="button" id="descbtn" onclick="displaydescription()">
                    description
                  </button>
                    <button class="btn btn-lg" type="button" id="revwbtn" onclick="displayReview()">
                    Review
                  </button></div>
            </div>
        </div>
        <div class="desc" id="derscription">
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias dolore hic quaerat deserunt eum iusto architecto, officia impedit consequuntur earum voluptatum totam quo minima molestiae velit nesciunt voluptas praesentium est. Nam nesciunt ex earum inventore
                corrupti consequuntur molestias accusamus eaque, dignissimos exercitationem explicabo expedita adipisci dolor nisi! Blanditiis omnis, nobis earum non architecto sapiente tempora asperiores minus, hic,
            </p>
        </div>
        <div class="review-cont" id="reviewd" style="display: none; ">
            <div class="reviews">
                <img class="img2" src="projectImages/man-eating-burger.png">
                <div class="reivew-cont">
                    <br>
                    <h4 class="rev-cont1">reviewer name</h4>
                    <h5 class="rev-cont2">Dhahran - Feb 08, 2020 &#11088 &#11088 &#11088 &#11088 &#11088</h5>
                    <p class="rev-cont3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deserunt minima nemo! Accusantium doloremque ducimus ea eligendi facere inventore minima neque numquam officiis quam, repudiandae tempore temporibus? Dolore, itaque,
                        reprehenderit?
                    </p>
                </div>
            </div>
            <div class="from-cont">
                <form method="GET">
                    <button class="button button5">Add Your Review</button>
                    <div class="from-cont1">
                        <div class="hide_review" id="show_review">
                            <p class="form-txt">Image</p> <input type="file" id="Image" name="picture">
                            <div class="rating">
                                <p>Rate the Food</p> <input type="range" id=data name="volume" min="0" max="100" step="20" value="20" list="list">

                                <p class="form-txt">Image</p> <input type="file" id="Image" name="picture">


                                <div class="rating">
                                    <datalist id="list">
                        <option value="20"></option>
                        <option value="40"></option>
                        <option value="60"></option>
                        <option value="80"></option>
                        <option value="100"></option>


                    </div>

                    <div class="place-holder">


                        <p class="form-txt">Name</p> <input type="text" name="name" id="name_textbox" placeholder="First and Last name">

                        <p class="form-txt">Review</p>
                        <p id="ErrorMessage">Please type your review</p>
                        <textarea id="review_textbox" name="review" cols="30" rows="10" placeholder="Type your review here max 500 characters"></textarea>
                        <p><a id="LittersNum">0</a><a>/500</a></p>
                    </div>
                    <button type="button" class="button button6" onclick="revbtn()">Submit</button>

                </datalist>

                </form>
                </div>
                </div>
                </div>
                </div>
            </div>
            <div class='facts'>
                <h4>nutrition facts</h4>
            </div>
            <table class="content-table ">

                <tr>
                    <td colspan="3 "> Supplemnt Facts</td>

                </tr>
                <tr>
                    <td colspan="3 ">Serving Size:1 Cookie (57 g)</td>
                </tr>
                <tr>
                    <td colspan="3 ">Serving Per Container:12</td>
                </tr>
                <tr>
                    <td></td>
                    <td> Amount Per ser Serving</td>
                    <td>%Daily Value* </td>
                </tr>
                <tr>
                    <td>Calories</td>
                    <td>200</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Calories from Fat</td>
                    <td>70</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Total Fat</td>
                    <td>7 g</td>
                    <td>11%</td>
                </tr>
                <tr>
                    <td>Saturated Fat</td>
                    <td>4 g</td>
                    <td>20%</td>
                </tr>
                <tr>
                    <td>Trans Fat</td>
                    <td>0 g</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Cholesterol</td>
                    <td>0 mg</td>
                    <td>0%</td>
                </tr>
                <tr>
                    <td>Sodium</td>
                    <td>220 mg</td>
                    <td>9%</td>
                </tr>
                <tr>
                    <td>Total Carbohydrate</td>
                    <td>31 g</td>
                    <td>10%</td>
                </tr>
                <tr>
                    <td>Dietary Fiber</td>
                    <td>5 g</td>
                    <td>20%</td>
                </tr>
                <tr>
                    <td>Sugars</td>
                    <td>12 g</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sugar Alcohol</td>
                    <td>0 g</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Protein</td>
                    <td>8 g</td>
                    <td>8%</td>
                </tr>
                <tr>
                    <td>vitamin A</td>
                    <td></td>
                    <td>0%</td>
                </tr>
                <tr>
                    <td>Vitamin C</td>
                    <td></td>
                    <td>0%</td>
                </tr>
                <tr>
                    <td>Calcium</td>
                    <td></td>
                    <td>2%</td>
                </tr>
                <tr>
                    <td>Iron</td>
                    <td></td>
                    <td>10%</td>
                </tr>
                <tr>
                    <td class="last " colspan="3 ">* Percent Daily Values are based on a 2,00 calorie diet. Your daily values may be higher or lower depends on your calorie needs</td>
                </tr>
            </table>
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