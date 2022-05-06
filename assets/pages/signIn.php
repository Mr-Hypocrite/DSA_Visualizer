<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./signIn.css">
        <link rel="stylesheet" href="../utilities.css">
        <title>Sign In</title>
    </head>
    <body>
        
        <?php 
            $dir = $_SERVER['DOCUMENT_ROOT']
        ?>

        <?php include $dir.'/assets/components/navbar/navbar.php' ?>
        
        
        <div class="signIn__div">

            <form action="">

                <h1 class="title">DSA Visualizer</h1>

                <div>
                    <h2>Email:</h2>
                    <input type="email" name="email_id" id="">
                </div>

                <div>
                    <h2>Password:</h2>
                    <input type="password" name="password" id="">
                </div>

                <div class="form_btns">
                    <button class="c_btn">Sign In</button>
                </div>

            </form>

            <p>Don't have an account yet? <a href="./signUp.php">Sign Up</a></p>
        </div>
        <script src="./signIn.js"></script>
    </body>
</html>