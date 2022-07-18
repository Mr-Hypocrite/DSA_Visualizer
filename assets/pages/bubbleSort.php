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

    <title>Bubble Sort</title>
</head>

<body>
    <!-- Navbar -->
    <?php 
        $dir = $_SERVER['DOCUMENT_ROOT'];
    ?>

    <?php include $dir.'/assets/components/navbar/navbar.php' ?>

    <!-- Information -->
    <div class="container" id="container">
        <h1>Bubble Sorting</h1>
        <p>Bubble Sort is the simplest sorting algorithm that works by repeatedly swapping adjacent elements in an array when a condition is met.</p>
        <p>The Bubble Sort gets its name because elements tend to move up into the correct order like bubbles rising to the surface.</p>
        <img src="../images/bubble.gif" class="img1" alt="">

        <h2>Working of Bubble Sort</h2>
        <ol class="container">
            <li>Start with the first element.</li>
            <li>Compare the current element with the next element.</li>
            <li>If the current element is greater than the next element, then swap both the elements. If not, move to the next element.</li>
            <li>Repeat steps 1 to 3 until we get the sorted list.</li>
        </ol>        
        <img src="../images/bubble.png" class="img1" alt="">
        <h1>Optimization of Bubble Sort</h1>
        <p>In the above algorithm, the loop would still run to compare all the elements (even if the remaining elements ARE already in a sorted manner). It might cause complexity issues like longer execution time.</p>
        <p>To optimize the algorithm for the same, we can use the following steps : </p>
        <ol type="1" class="container">
            <li>Create a flag variable, called swapped.</li>
            <li>The value of swapped is set to true if, during any iteration, swapping was done.</li>
            <li>Else, the value of swapped is set to false.</li>
            <li>After an iteration, if the value of swapped is found to be false, it means the array is sorted, and no more comparisons are required.</li>
            <li>Stop the Execution</li>
        </ol>
        <p>This optimization helps us to reduce the No. of Comparisons in the algorithm & hence reducing the execution time of the Algorithm</p>
        <p>By the way, Bubble Sort is one of the most widely discussed algorithms, simply because of its lack of efficiency for sorting arrays.</p>
        <img src="../images/time_complexity.png" class="img1" alt="">
        
        <h1>Time Complexity</h1>
        <div class="container">
        <p>The function of Bubble Sort can be divided in 2 parts as follows :</p>
        <p>In part 1, each iteration of the loop would take constant time to iterate over the Entire list of elements.</p>
        <p>Part 2 is nested inside the loop that is run in part 1. Under this part, n comparisons are made that take constant time for execution. In other words, for each time part 1 is executed, part 2 will be executed n times. And if part 1 is executed for n number of times, part 2 would be executed for n * n number of times.</p>
        <p>Both of these will add to its Time Complexity</p>
        </div>
        <p><strong>Best Case : O(N)</strong>The best-case occurs when the list is already arranged in the desired order.</p>
        <p><strong>Average Case : O(N<sup>2</sup>)</strong>The average case is when the list is arranged in a jumbled order.</p>
        <p><strong>Worst Case : O(N<sup>2</sup>)</strong>The worst-case occurs when we want to sort a list in ascending order, but it is arranged in descending order.</p>
    </div>    
</body>
</html>