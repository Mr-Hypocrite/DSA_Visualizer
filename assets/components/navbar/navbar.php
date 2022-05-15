<?php 
    $dir = $_SERVER['DOCUMENT_ROOT']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
    <style>
        <?php include $dir.'/assets/components/navbar/navbar.css' ?>
    </style>
</head>

<body>

    <?php 
        $dir = $_SERVER['DOCUMENT_ROOT'];
        $dsPage = $dir.'./assets/pages/DataStructuresVisualizer.php'
    ?>

    <div class='nav__bar'>
        <a href="../../index.php" class="nav-logo" >
            <img src="../../assets/images/logo.png" alt="logo" width="40rem">
        </a>
        <a href="../../assets/pages/DataStructuresVisualizer.php">
            <h3 class="nav-ele">DS Visualizer</h3>
        </a>
        <a href="../../index.php">
            <h3 class="nav-ele">Algo Visualizer</h3>
        </a>
    </div>
</body>
</html>