<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $err = "";
    include './dbconnect.php';
    $Username = $_POST["Username"];
    $Password = $_POST["Password"];

    $sql = "Select * from users where Username='$Username' AND Password='$Password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
    } else {
        $showError = "Invalid Credentials";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./favicon-32x32.png" type="image/x-icon">
    <title>Log-in</title>
</head>


<body>
    <!-- <a href="../QR_Code_Generator/index.php"></a> -->
    <!-- Navbar -->
    <?php require './nav.php' ?>

    <!-- Alerts -->
    <?php
    if ($login) {
        echo '<div class="alerts fs-5">
        <div class=" mx-5 alert alert-success" role="alert">
        Login Successfull ! Here is your link <a href="../QR_Code_Generator/index.php" class="alert-link">QR Code Generator</a>. Give it a click and Explore the website.
        </div>
        </div>';
    }
    if ($showError) {
        echo ' <div class="alerts fs-5">
        <div class=" mx-5 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error !</strong> ' . $showError . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>';
    }

    ?>

    <!-- Hero Section -->
    <div class="wrapper" style="height: 55rem !important;">

        <!-- Login form -->
        <div class="form-container sign-in">
            <form action="./login.php" method="post">
                <h2>login</h2>
                <div class="form-group">
                    <input type="text" name="Username" required>
                    <i class="fas fa-user"></i>
                    <label for="">username</label>
                </div>
                <div class="form-group">
                    <input type="password" name="Password" required>
                    <i class="fas fa-lock"></i>
                    <label for="">password</label>
                </div>
                <button type="submit" class="btn">login</button>
                <div class="link">
                    <p>Don't have an account?<a href="./signup.php" class="signup-link"> sign up</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ad5ab2e101.js" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>

</html>