<?php
    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message'])
    {
        $message=$_SESSION['message'];
        echo "<script type='text/javascript'> alert('$message'); </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="style.css">
    <?php include 'boostrapcdnlink.php';?>
</head>
<body>

    <?php include 'nav_bar.php';?>

    <div class="home_distance">
    <div class="section_1">
        <label class="img_label">THE FLAVOURS FOR ROYALTY</label>
        <img class="main_img" src="title_img.png" alt="">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="first_img" src="Cafeteria.png" alt="">
            </div>
            <div class="col-md-8">
                <h2 style="font-weight: bold;">WELCOME</h2 >
                <p>We're thrilled to have you join us at our cozy corner of caffeine and community. Our baristas are here to craft your favorite coffee just the way you like it, and our comfy seating and inviting atmosphere are perfect for catching up with friends, studying, or simply finding a moment of peace.

                    <br><br>Thank you for choosing us as your coffee destination. We can't wait to serve you the perfect cup of joe.</p>
            </div>

        </div>

    </div>


    <div class="container">
        <center><h3>OUR SERVICES</h3></center>
        <div class="row">
            <div class="col-md-4">
                <img class="services" src="Coffee.png" alt="">
                <p>"Sip, Savor, Elevate: Where Every Cup is a Symphony of Flavor at Cafeteria."</p>
            </div>
            <div class="col-md-4">
                <img class="services" src="Snacks.png" alt="">
                <p>"Crave. Crunch. Repeat: Unleash Flavorful Escapades at Cafeteria Snack Haven!."</p>
            </div>
            <div class="col-md-4">
                <img class="services" src="Pastry.png" alt="">
                <p>"Indulge in Blissful Bites: Cafeteria - Where Every Pastry Tells a Sweet Story!".</p>
            </div>
        </div>
    </div>
    </div>

    

    <footer >
        <h4 class="footer_text">All @copyrights reserved</h4>
    </footer>

</body>
</html>