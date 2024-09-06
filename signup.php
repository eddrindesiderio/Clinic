<?php
session_start(); // Start the session at the very beginning

$_SESSION["user"] = "";
$_SESSION["usertype"] = "";
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
$_SESSION["date"] = $date;

if ($_POST) {
    $_SESSION["personal"] = array(
        'fname' => $_POST['fname'],
        'lname' => $_POST['lname'],
        'address' => $_POST['address'],
        'nic' => $_POST['nic'],
        'dob' => $_POST['dob']
    );
    print_r($_SESSION["personal"]);
    header("Location: create-account.php"); // Redirect to another page
    exit(); // Ensure no further code is executed
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/signup.css">
    <title>Sign Up</title>
    <style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(to right, #ffffff, #2575fc);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh; /* Changed from height: 100vh to min-height: 100vh */
    overflow-y: auto; /* Ensure vertical scrolling is enabled */
}

.main-container {
    background: rgba(255, 255, 255, 0.9);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    display: flex;
    flex-direction: column; /* Keeps form content in a column layout */
    width: 90%;
    max-width: 900px;
    text-align: center;
    box-sizing: border-box;
    overflow: hidden;
}

.section-container {
    flex: 1;
    padding: 20px;
    box-sizing: border-box;
}

.info-container {
    background-color: #f0f0f0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.header-text {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
}

.sub-text {
    font-size: 14px;
    color: #555;
    margin-bottom: 20px;
}

.form-body {
    margin-top: 20px;
}

.label-td {
    text-align: left;
    padding-bottom: 10px;
    width: 100%;
}

.form-label {
    font-size: 12px;
    color: #333;
}

.input-text {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

.login-btn {
    background-color: #6a11cb;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-size: 14px;
    transition: background-color 0.3s ease;
}

.login-btn:hover {
    background-color: #2575fc;
}

.hover-link1 {
    color: #6a11cb;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

.hover-link1:hover {
    color: #2575fc;
}

.info-content {
    font-size: 14px;
    color: #333;
    margin-bottom: 15px;
    text-align: center;
}

.info-image {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
}

@media (max-width: 600px) {
    .header-text {
        font-size: 20px;
    }

    .sub-text {
        font-size: 12px;
    }

    .input-text {
        font-size: 12px;
    }

    .login-btn {
        font-size: 12px;
    }

    .info-image {
        max-width: 90%;
    }
}

    </style>
</head>
<body>
    <div class="main-container">
        <div class="section-container info-container">
            <a href="index.html" class="hover-link1" style="float: left;">Back</a>
            <p class="header-text">Welcome to Our Clinic</p>
            <p class="sub-text">We're excited to have you on board!</p>
            <div class="info-content">
                <p>Our clinic offers the best dental services with experienced professionals.</p>
                <p>Join us to experience top-notch dental care.</p>
            </div>
            <img src="img/smilelogo.png" alt="Dental Care" class="info-image">
        </div>
        <div class="section-container form-container">
            <p class="header-text">Let's Get Started</p>
            <p class="sub-text">Add Your Personal Details to Continue</p>
            <div class="form-body">
                <form action="" method="POST">
                    <div class="label-td">
                        <label for="fname" class="form-label">First Name:</label>
                        <input type="text" name="fname" class="input-text" placeholder="First Name" required>
                    </div>
                    <div class="label-td">
                        <label for="lname" class="form-label">Last Name:</label>
                        <input type="text" name="lname" class="input-text" placeholder="Last Name" required>
                    </div>
                    <div class="label-td">
                        <label for="address" class="form-label">Address:</label>
                        <input type="text" name="address" class="input-text" placeholder="Address" required>
                    </div>
                </form>
            </div>
        </div>
        <div class="section-container extra-info-container">
            <p class="header-text">Complete Your Details</p>
            <p class="sub-text">Add Your Date of Birth</p>
            <div class="form-body">
                <form action="" method="POST">
                    <div class="label-td">
                        <label for="dob" class="form-label">Date of Birth:</label>
                        <input type="date" name="dob" class="input-text" required>
                    </div>
                    <div>
                        <input type="reset" value="Reset" class="login-btn">
                    </div>
                    <div>
                        <input type="submit" value="Next" class="login-btn">
                    </div>
                </form>
                <div>
                    <br>
                    <label for="" class="sub-text">Already have an account? </label>
                    <a href="login.php" class="hover-link1">Login</a>
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
