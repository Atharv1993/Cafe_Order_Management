<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #home {
            color: goldenrod;
            padding: 5px;
        }

        .home_distance {
            margin-left: 150px;
        }

        .main_img {
            width: 100%;
            height: 200px;
        }

        .section_1 {
            padding-top: 70px;
            background-color: #C69B7B;
            text-align: center;
            position: relative;
        }

        .img_label {
            color: goldenrod;
            background-color: white;
            padding: 20px;
            font-size: 2em;
            font-style: italic;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .first_img {
            width: 100%;
            height: 250px;
        }

        .container {
            padding-top: 70px;
            text-align: center;
        }

        .services {
            width: 100%;
            height: 200px;
        }

        footer {
            background-color: black;
            height: 50px;
            width: 100%;
            color: white;
            text-align: center;
            padding-top: 15px;
        }

        .welcome_img{
            width: 100%;
            height: 250px;
        }
    </style>
</head>

<body>
<?php include 'nav_bar.php';?>

    <div class="home_distance">
        <div class="section_1">
            <label class="img_label">THE FLAVORS FOR ROYALTY</label>
            <img class="main_img" src="Roasted_coffee_beans.jpg" alt="">
        </div>

        <div class="container">
            <table>
                <tr>
                    <td ><img class="first_img" src="Almond-Milk-Coffee-001.webp" id="welcome_img"></td>
                    <td><h2 style="font-weight: bold;">WELCOME</h2 >
                <p>We're thrilled to have you join us at our cozy corner of caffeine and community. Our baristas are here to craft your favorite coffee just the way you like it, and our comfy seating and inviting atmosphere are perfect for catching up with friends, studying, or simply finding a moment of peace.

                    <br><br>Thank you for choosing us as your coffee destination. We can't wait to serve you the perfect cup of joe.</p>
            </td>
                </tr>
            </table>
        </div>

        <div class="container">
            <h3>OUR SERVICES</h3>
            <div>
                <img class="services" src="images.jpeg" alt="">
                <p>This is the first image in the coffee services section of the page that is available.</p>
            </div>
            <div>
                <img class="services" src="download1.jpeg" alt="">
                <p>This is the second image in the coffee services section of the page that is available.</p>
            </div>
            <div>
                <img class="services" src="download2.jpeg" alt="">
                <p>This is the third image in the coffee services section of the page that is available.</p>
            </div>
        </div>
    </div>

    <footer>
        <h4>All @copyrights reserved</h4>
    </footer>

</body>

</html>
