<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
    $user_id=$_COOKIE['user_id'];
}
else {
    $user_id='';
}

include 'components/save_send.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRN Real Estate</title>
    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css?v=1">
</head>
<body>
    
    <!-- header section starts  -->
    <?php include 'components/user_header.php'; ?>
    <!-- header section ends  -->

    <!-- about us section starts  -->
    <section class="about">
        <div class="row">
            <div class="image">
                <img src="images/about.jpg" alt="">
            </div>
            <div class="content">
                <h3>Why Choose Us?</h3>
                <p>Providing you professional advice free of cost</p>
                <a href="contact.html" class="inline-btn">Contact Us</a>
            </div>
        </div>
    </section>
    <!-- about us section ends  -->

    <!--steps section starts-->
    <section class="steps">
        <h1 class="heading">3 Simple Steps</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/step-1.png" alt="">
                <h3>Search Property</h3>
                <p>Search property you want as per your requirement.</p>
            </div>
            <div class="box">
                <img src="images/step-2.png" alt="">
                <h3>Contact Agent/Owner</h3>
                <p>Once you finalize the property you can directly call the owner or agents for property.</p>
            </div>
            <div class="box">
                <img src="images/step-3.png" alt="">
                <h3>Enjoy Property</h3>
                <p>After finalize the property you can Enjoy your property.</p>
            </div>
        </div>
    </section>
    <!--steps section ends-->

    <!--review section starts-->
    <section class="reviews">
        <h1 class="heading">Client's Reviews</h1>
        <div class="box-container">
            <div class="box">
                <div class="user">
                    <img src="images/nikhil.png" alt="">
                    <div>
                        <h3>CA Nikhil Kamble</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p>They website really help out to find our property as soon as quick.</p>
            </div>
            <div class="box">
                <div class="user">
                    <img src="images/ravi.png" alt="">
                    <div>
                        <h3>Mr Ravi Panchal</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>This website can be improve more then it look.</p>
            </div>
            <div class="box">
                <div class="user">
                    <img src="images/saqlain.png" alt="">
                    <div>
                        <h3>Dr Saqlain Khan</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>My Property got rented out within 10 days.</p>
            </div>
            <div class="box">
                <div class="user">
                    <img src="images/gayatri.png" alt="">
                    <div>
                        <h3>Miss Gayatri Kulkarni</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p>This website have an 24/7 services which help me alot.</p>
            </div>
            <div class="box">
                <div class="user">
                    <img src="images/aaswat.png" alt="">
                    <div>
                        <h3>Mr Chunky Pandey</h3>
                        <div class="stars">
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Rather user Magic Bricks or any real estate website than this.</p>
            </div>
            <div class="box">
                <div class="user">
                    <img src="images/saif.jpeg" alt="">
                    <div>
                        <h3>Mr Saif Shaikh</h3>
                        <div class="stars">
                        <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p>Perfect real estate website.</p>
            </div>
            <div class="box">
                <div class="user">
                    <img src="images/mohan.jpeg" alt="">
                    <div>
                        <h3>Mr Mohan Bhagat</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Hindi mai hota tho better hota!</p>
            </div>
            <div class="box">
                <div class="user">
                    <img src="images/antra.jpeg" alt="">
                    <div>
                        <h3>Miss Antra Sharma</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p>There are so many great option where i get confused!</p>
            </div>
        </div>
    </section>
    <!--review section ends-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- footer section starts  -->
    <?php include 'components/footer.php'; ?>
    <!-- footer section ends  -->

    <!-- custom js file link  -->
    <script src="js/script.js?v=1"></script>

    <?php include 'components/message.php'; ?>
        
</body>
</html>