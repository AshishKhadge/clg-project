
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./code.css">
    <link rel="shortcut icon" href="../Project/favicon-32x32.png" type="image/x-icon">
    <title>Link Shortner</title>
</head>

<body>

    <!-- Navbar -->
    <?php require '../Project/nav.php' ?>

    <!-- Main Content -->
    <div class="container">
        <p class="fs-2 mt-3">Enter Your Link</p>
        <input type="text" placeholder="https://www.example.com" id="url" class="fs-4" style="margin: 10px 0 5px;"><br>
        <button onclick="shortenURL()" id="result" class="fs-5">Shorten URL</button>
        <div id="shortLinkContainer"></div>
        <div class="d-flex justify-content-between my-3">
            <div class="d-flex justify-content-start icons pb-2">
                <i class="fa-solid fa-circle-xmark fs-2" style="color: #ff0000;" onclick="resetURL()"></i>
                <i class="fa-solid fa-clipboard ms-3 fs-2" style="color: #000000;" id="copyShortLinkIcon" style="color: #007bff;" onclick="copyShortLink()"></i>
                <i class="fa-solid fa-backward fs-2 ms-3" style="color: #000000;" onclick="goBack()"></i>
            </div>
            <a href="../Project/logout.php"><i class="fa-solid fa-power-off fs-2 me-3" style="color: #000000;"></i></a>
        </div>
    </div>

    <div class="instructions my-2" style="width: 600px;">
        <h2 class="fs-2 my-3 text-decoration-underline">Instructions</h2>
        <ul style="list-style-type: square;" class="fs-4">
            <li>Enter Your Link: In the input field provided, enter the URL that you want to shorten. Make sure to
                include the full URL, including "https://" or "http://".</li>
            <li>Generate Short Link: Click on the "Generate Short Link" button to shorten the entered URL. A shortened
                version of your link will be displayed below.</li>
            <li>Copy Shortened Link: Once the shortened link is generated, you can click on the "Copy" icon next to it
                to copy the shortened URL to your clipboard.</li>
            <li>Paste and Share: You can now paste the shortened link anywhere you want to share it, such as in emails,
                messages, or social media posts.</li>
            <li>Back Button: If you need to go back to the previous page, you can click on the "Back" button provided.
            </li>
        </ul>
    </div>

    <script src="./code.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ad5ab2e101.js" crossorigin="anonymous"></script>
    <script src="./code.js"></script>
</body>

</html>