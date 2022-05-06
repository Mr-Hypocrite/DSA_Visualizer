<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./signUp.css">
    <link rel="stylesheet" href="../utilities.css">
    <title>Sign Up</title>
</head>
<body>

    <?php include './assets/components/navbar/navbar.php' ?>
    
    <form action="" class="signUp__div">

        <h1 class="title">DSA Visualizer</h1>

        <div>
            <h2>Email:</h2>
            <input type="email" name="email_id" id="">
        </div>
        
        <div>
            <h2>CreatePassword:</h2>
            <input type="password" name="password" id="">
        </div>

        <div>
            <h2>Confirm Password:</h2>
            <input type="password" name="password" id="">
        </div>

        <h2 class="form_subtitle">Security Questions (In case you forget your password, which you will.)</h2>
        <div class="sq_div">
            <h2>Your childhood nickname:</h2>
            <input type="password" name="password" id="">

            <h2>Name of your first pet:</h2>
            <input type="password" name="password" id="">
        </div>

        <div class="form_btns">
            <button class="c_btn">Sign Up</button>
        </div>

    </form>

</body>
</html>