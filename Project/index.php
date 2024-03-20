<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./favicon-32x32.png" type="image/x-icon">
    <title>QRcode Generator</title>
</head>

<body>

    <!-- Navbar -->
    <?php require './nav.php' ?>

    <!-- Hero Section -->
    <div class="page">

        <div class="hero d-flex justify-content-between">

            <div class="content pt-5">
                <h1 class="text-dark me-5 mb-5">Generate <span class="highlight text-danger fw-bold text-decoration-underline">QRcode</span> in very easy and
                    few
                    steps.
                </h1>
                <ul style="list-style-type: disc;">
                    <li>
                        <p class="fs-4 fw-bold">Welcome to the Website!</p>
                    </li>
                    <li>
                        <p class="fs-4"> <span><a class="text-danger text-decoration-none" href="./signup.php">Sign up
                                </a></span>for free on this platform.</p>
                    </li>
                    <li>
                        <p class="fs-4">After successfully signing up, <span><a class="text-danger text-decoration-none" href="./login.php">Log in </a></span>to your account.</p>
                    </li>
                    <li>
                        <p class="fs-4">Upon logging in, you'll receive a link that will redirect you to the QR Code
                            Generator.</p>
                    </li>
                    <li>
                        <p class="fs-4">Generate your QR code based on your specific requirements.</p>
                    </li>
                    <li>
                        <p class="fs-4">Enjoy exploring this website!❤️❤️</p>
                    </li>
                </ul>
            </div>
            <div>
                <img src="./pointing1.png" alt="#" class="ms-5">
                <a class="nav-link fs-3 ps-5 pt-4 fw-4 text-dark text-decoration-underline text-end fw-normal" href="./signup.php">Get Started<i class="fa-solid fa-arrow-right ms-3" style="color: #000000;"></i></a>
            </div>
        </div>

        <!-- About us -->
        <div id="about">
            <h2 class="fs-3 mt-5 ps-4 text-decoration-underline">About us</h2>
            <p class="fs-5 mt-3 ps-4">This project is part of the final year project for the Bachelor of Computer
                Applications (BCA) program under the guidance of ____________. The project is developed by students of
                <a href="https://smtmaherbanu.edu.in/" class="text-dark fs-4" target="_blank">Smt. Maherbanu College of
                    Science and Commerce, Akola.</a>
            </p>
            <p class="fs-5 mt-1 ps-4">Our QR Code Generator allows users to generate QR codes for various purposes,
                including URLs, text, contact information, and more. It's designed to be user-friendly and efficient,
                providing a seamless experience for generating QR codes.</p>
            <p class="fs-5 mt-1 ps-4">Feel free to explore our QR Code Generator and utilize it for your needs!</p>
            <p class="fs-5 mt-1 ps-4">If you have any questions or feedback, please don't hesitate to <span class="highlight"><a class="text-dark fs-4" href="#contact_us">contact us</a></span>.</p>
        </div>

        <!-- line -->
        <div class="horizontal_line"></div>

        <!-- Contact us -->

        <h2 class="fs-3 mt-5 ps-4 text-decoration-underline">Contact us</h2>
        <div id="contact_us" class=" d-flex justify-content-start mt-4 ms-3">
            <div class="logo d-flex justify-content-center me-2">
                <a href="https://www.linkedin.com/in/ashish-khadge-441000253/" target="_blank"><i class="fa-brands fa-linkedin" style="color: #ffffff; "></i></a>
            </div>
            <div class="logo d-flex justify-content-center me-2">
                <a href="https://www.instagram.com/rinku_ghatge/" target="_blank"><i class="fa-brands fa-instagram" style="color: #ffffff; "></i></a>
            </div>
            <!-- <div class="logo d-flex justify-content-center me-2">
                <a href=""><i class="fa-brands fa-facebook" style="color: #ffffff; "></i></a>
            </div> -->
            <div class="logo d-flex justify-content-center me-2">
                <a href="https://twitter.com/AshishKhadge" target="_blank"><i class="fa-brands fa-x-twitter" style="color: #ffffff; "></i></a>
            </div>
            <div class="logo d-flex justify-content-center me-2">
                <a href="mailto:ashish.hypercosmos@gmail.com" target="_blank"><i class="fa-brands fa-at" style="color: #ffffff; "></i></a>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ad5ab2e101.js" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>

</html>