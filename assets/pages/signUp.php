<?php
    $showAlert = false;
    $showError = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../../config/dbConnect.php';
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $sa = $_POST["sa"];
        $exists = false;
        $existsSql = "select * from users where email = '$email'";
        $result = pg_query($con, $existsSql);
        $numExistsRow = pg_num_rows($result);
        if ($numExistsRow > 0) {
            $exists = true;
            $showError = "Account Already Exists";
        }

        $number = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if (strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
            $showError = "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
        } else if($password == $cpassword && $exists == false) {
            $hashp = password_hash($password, PASSWORD_DEFAULT);
            $sql = "insert into users values ('$email', '$hashp', '$sa')";
            $result = pg_query($con, $sql);
            if ($result) {
                $showAlert = "Account Created Successfully";
                echo "<h1>Success</h1>";
                header("location: /");
            } else {
                $showError = "Password doesn't Match";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="./signUp.css">
    <title>Sign Up</title>
</head>
<body>

    <?php
        if ($showError) {
            echo "<div class='msgBox'> $showError </div>";
        }
        if ($showAlert) {
            echo "<div class='msgBox green'> $showAlert </div>";
        }
    ?>
    
    <form action="signUp.php" method="POST" class="signUp__div">

        <img src="/assets/images/logo.png" alt="DSA_logo" class="dsa_logo">

        <h1 class="title">DSA Visualizer</h1>

        <div>
            <h2>Email</h2>
            <input type="email" name="email" id="email" max<input type="password" name="sa" id="sa" maxlength="255">
        </div>
        
        <div>
            <h2>CreatePassword</h2>
            <input type="password" name="password" id="password" max<input type="password" name="sa" id="sa" maxlength="255">
        </div>

        <div>
            <h2>Confirm Password</h2>
            <input type="password" name="cpassword" id="cpassword" max<input type="password" name="sa" id="sa" maxlength="255">
        </div>

        <h2 class="form_subtitle">Security Question (In case you forget your password, which you will.)</h2>
        <div class="sq_div">
            <h2>Your childhood nickname</h2>
            <input type="password" name="sa" id="sa" maxlength="255">
        </div>

        <div class="form_btns">
            <button type="submit" class="c_btn">Sign Up</button>
        </div>

        <p>
            Back to Sign In? <a href="/assets/pages/signIn.php">Sign In</a>
        </p>

    </form>

</body>
</html>