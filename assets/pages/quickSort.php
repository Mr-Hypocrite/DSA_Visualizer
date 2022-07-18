<?php
    // include '../../scripts/checkSession.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="types.css">
    <link rel="stylesheet" href="algo.css">

    <title>Quick Sort</title>
</head>

<body>
    <!-- Navbar -->
    <?php 
        $dir = $_SERVER['DOCUMENT_ROOT'];
    ?>

    <?php include $dir.'/assets/components/navbar/navbar.php' ?>

    <!-- Information -->
    <div class="container arrayinfo" id="container">
        <h1>Quick Sort</h1>
        <p>Quick Sort is also known as partition-exchanged sort. It is an in-place sorting algorithm.</p>
        <p>It uses the Divide-and-Conquer Startegy to divide the no of elements and then perform sort on each of them, and finally join them again.</p>
        <img src="../images/divide_conq.jpg" class="i1" alt=""><br>
        
        <h2>Steps to use Quick Sort</h2>
        <ol class="container">
            <li>Make any element as pivot.</li>
            <li>Partition the array on the basis of pivot.</li>
            <li>Apply quick sort on left partition recursively.</li>
            <li>Apply quick sort on right partition recursively.</li>
        </ol>        
        <img src="../images/quick_sort.PNG" class="i2" alt=""><br>
        
        <h1>Time Complexity</h1>
        <div class="container">
        
        <p><strong>Best Case : O(nlogn)</strong> The best-case occurs when the pivot is almost in the middle of the array, and the partitioning is done in the middle.</p>
        <p><strong>Average Case : O(nlogn)</strong>When either of the two partitions is unbalanced. This generally happens when the greatest or smallest element is selected as the pivot.</p>
        <p><strong>Worst Case : O(N<sup>2</sup>)</strong>The worst case occurs when we want to sort a list in ascending order, but it is arranged in descending order.</p>
    </div>    
</body>
</html>