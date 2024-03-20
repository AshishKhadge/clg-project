<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $err = "";
    include './dbconnect.php';
    $Username = $_POST["Username"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $ConfirmPassword = $_POST["ConPassword"];
    $exists = false;

    if (($Password == $ConfirmPassword) && $exists == false) {
        $sql = "INSERT INTO `users` (`Username`, `Email`, `Password`) VALUES ('$Username', '$Email', '$Password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = true;
        }
    } else {
        $showError = "Password do not match.";
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
    <title>Sign-up</title>
</head>

<body>

    <!-- Navbar -->
    <?php require './nav.php' ?>

    <?php
    if ($showAlert) {
        echo ' <div class="alerts fs-5">
        <div class=" mx-5 alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success !</strong> Your account is now created and You can Login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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

        <!-- Signup form -->
        <div class="form-container sign-up">
            <form action="./signup.php" method="post">
                <h2>sign up</h2>
                <div class="form-group">
                    <input type="text" name="Username" required>
                    <i class="fas fa-user"></i>
                    <label for="">username</label>
                </div>
                <div class="form-group">
                    <input type="email" name="Email" required>
                    <i class="fas fa-at"></i>
                    <label for="">email</label>
                </div>
                <div class="form-group">
                    <input type="password" name="Password" required>
                    <i class="fas fa-lock"></i>
                    <label for="">password</label>
                </div>
                <div class="form-group">
                    <input type="password" name="ConPassword" required>
                    <i class="fas fa-lock"></i>
                    <label for="">confirm password</label>
                </div>
                <button type="submit" class="btn">sign up</button>
                <div class="link">
                    <p>You already have an account?<a href="./login.php" class="signin-link"> Login</a></p>
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