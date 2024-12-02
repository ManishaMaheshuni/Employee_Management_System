<?php
include('connect.php');

// Check if the form is submitted
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the username and password exist in the database
    $checkUserSql = "SELECT * FROM `employee_db`.`login` WHERE username='$username' AND password='$password'";
    $checkResult = $con->query($checkUserSql);

    if ($checkResult && $checkResult->num_rows > 0) {
        // User authenticated, redirect to dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // User not found, insert new user into the database
        $insertUserSql = "INSERT INTO `employee_db`.`login` (username, password) VALUES ('$username', '$password')";
        $insertResult = $con->query($insertUserSql);

        if ($insertResult) {
            // Registration successful, redirect to dashboard or login success message
            echo "<script>alert('New user registered successfully');</script>";
            header("Location: dashboard.php");
            exit();
        } else {
            // Insert failed
            echo "<script>alert('Error registering new user');</script>";
        }
    }

    // Close the database connection
    $con->close();
}
?>

 
<?php
// include('connect.php');

// Check if the form is submitted
// if (isset($_POST['login'])) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

    // Query to check if the username and password exist in the database
    // $checkUserSql = "SELECT * FROM `employee_db`.`login` WHERE username='$username' AND password='$password'";
    // $checkResult = $con->query($checkUserSql);

    // if ($checkResult && $checkResult->num_rows > 0) {
        // User authenticated, redirect to dashboard
        // header("Location: dashboard.php");
        // exit();
    // } else {
        // User not found, insert new user into the database
        // $insertUserSql = "INSERT INTO `employee_db`.`login` (username, password) VALUES ('$username', '$password')";
        // $insertResult = $con->query($insertUserSql);

        // if ($insertResult) {
            // Registration successful, redirect to dashboard or login success message
            // echo "<script>alert('New user registered successfully');</script>";
            // header("Location: dashboard.php");
            // exit();
        // } else {
            // Insert failed
            // echo "<script>alert('Error registering new user');</script>";
        // }
    // }

    // Close the database connection
    // $con->close();
// }
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Log In</title>
</head>

<body>
    <div class="main">
        <div class="bg-img">
            <img src="../img/login-background-image.jpg" alt="">
        </div>
        <div class="imgcontainer">
            <form action="" method="post">
                <div class="container">
                    <div class="head">
                        <h1>Sign In</h1>
                    </div>
                    <label for="username"><b>Employee Name</b></label>
                    <input type="text" placeholder="Employee Name"id="username" name="username" required>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" id="password" name="password" required>

                    <button type="submit" name="login">Login</button>
                    <!-- <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label> -->
                </div>
                <div class="container">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <!-- <span class="psw">New Employee <a href="./sign-up.php">sign-up?</a></span> -->
                </div>
            </form>
        </div>
    </div>

</body>

</html>



