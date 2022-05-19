<?php
    $dir = $_SERVER['DOCUMENT_ROOT'];
    $login = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include '../../config/dbConnect.php';
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "Select * from users where email='$email'";
        $result = pg_query($con, $sql);
        $num = pg_num_rows($result);
        if ($num == 1) {
            while($row = pg_fetch_row($result)){
                if (password_verify($password, $row[1])) { 
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    echo "In side if";
                    header("location: ../../assets/pages/SortingVisualizer.php");
                } 
                else{
                    $showError = "Invalid Credentials";
                }
            }
            
        } 
        else{
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
        <link rel="shortcut icon" href="/assets/images/logo.ico" type="image/x-icon">
        <link rel="stylesheet" href="../../assets/pages/signIn.css">
        <title>Sign In</title>
    </head>
    <body>

        <?php
            if ($showError) {
                echo "<div class='msgBox'> $showError </div>";
            }
        ?>
        
        <div class="signIn__div">

            <img src="/assets/images/logo.png" alt="DSA_logo" class="dsa_logo">

            <form action="" method="POST">

                <h1 class="title">DSA Visualizer</h1>

                <div>
                    <h2>Email</h2>
                    <input type="email" name="email" id="email">
                </div>

                <div>
                    <h2>Password</h2>
                    <input type="password" name="password" id="password">
                </div>

                <div class="form_btns">
                    <button type="submit" class="c_btn">Sign In</button>
                </div>

            </form>

            <p>Don't have an account yet? <a href="../../assets/pages/signUp.php">Sign Up</a></p>
        </div>
    </body>
</html>