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

                </nav>

               






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

