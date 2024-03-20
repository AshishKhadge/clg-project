
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./code.css">
    <link rel="shortcut icon" href="../Project/favicon-32x32.png" type="image/x-icon">
    <title>QRcode Generator</title>
</head>

<body>

    <!-- Navbar -->
    <?php require '../Project/nav.php' ?>

    <!-- Main Content -->
    <div class="container">
        <p class="fs-2 mt-3">Enter Your Text or URL</p>
        <input type="text" placeholder="Text or URL" id="qrText" class="fs-4"><br>
        <div id="imgBox">
            <img src="" id="qrImage">
        </div>
        <button onclick="generateQR()" class="fs-5">Generate QR Code</button>
        <div class="d-flex justify-content-between my-3">
            <div class="d-flex justify-content-start pb-2">
                <i class="fa-solid fa-download fs-2 me-3" style="color: #000000;" onclick="downloadQR()"></i>
                <i class="fa-solid fa-circle-xmark fs-2" style="color: #ff0000;" onclick="resetQR()"></i>
                <a href="./link.php"><i class="fa-solid fa-link fs-2 ms-3" style="color: black;"></i></a>
            </div>
            <a href="../Project/logout.php"><i class="fa-solid fa-power-off fs-2 me-3" style="color: #000000;" name="logout"></i></a>
        </div>
    </div>

    <div class="instructions my-2">
        <h2 class="fs-2 my-3 text-decoration-underline">Instructions</h2>
        <p class="fs-3 fw-bold">Follow these steps to generate a QR code for a PDF, document, or any other file:</p>
        <ul style="list-style-type: square;" class="fs-5">
            <li>Upload the respected file to your Google Drive account.</li>
            <li>Get the shareable link of the file from Google Drive.</li>
            <li>Paste the shareable link into the input box above.</li>
            <li>If the link is too long, you can use the link shortener provided on the website to generate a shortened version.</li>
            <li>Click on the "Generate QR Code" button.</li>
            <li>The QR code will be generated for the provided link.</li>
        </ul>
        <p class="fs-4"><span class="text-decoration-underline text-danger fs-3 fw-bold">Note:</span> The QR code generator only supports generating QR codes for links or text formats. Make sure to provide a valid link.</p>
    </div>


    <script src="./code.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ad5ab2e101.js" crossorigin="anonymous"></script>
    

    <script src="./script.js"></script>
</body>

</html>