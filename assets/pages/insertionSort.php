<?php
    include '../../scripts/checkSession.php';
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

    <title>Insertion Sort</title>
</head>

<body>
    <!-- Navbar -->
    <?php 
        $dir = $_SERVER['DOCUMENT_ROOT'];
    ?>

    <?php include $dir.'/assets/components/navbar/navbar.php' ?>

    <!-- Information -->
    <div class="container arrayinfo" id="container">
        <h1>Insertion Sort</h1>
        <p>The sorting in an Insertion work is similar to that of the sorting we use in 'Playing Cards'.</p>
        <p>In Playing Crads, we assume that a Selected card is ALREADY sorted. Then we select and Unsorted card, if the unsorted card is 'Smaller' than the already sorted card then it placed to the Left-Hand Side of the first card, otherwise it is placed to the Righ-Hand Side</p>
        <img src="../images/insertion.jpg" class="i1" alt=""><br>

        <h2>Steps to use Insertion Sort</h2>
        <ol class="container">
            <li>If the elemenet is the 1st element,assume that is already in sorted.</li>
            <li>Select the next unsorted element and store it in a Key.</li>
            <li>Compare this Key with the elements in our Sorted array.</li>
            <li> If the element in the sorted array is smaller than the current element, then move to the next element. Else, shift Greater elements in the array towards the right side. </li>
            <li>Insert the Element in its sorted position.</li>
            <li>Repeat until the array is Sorted</li>
        </ol>        
        <img src="../images/i1.png" class="i2" alt=""><br>
        
        <h1>Time Complexity</h1>
        <div class="container"></div>
        <p>Insertion Sort performs 2 operations: It scans through the list, comparing each pair of elements, and it shifts the elements if they are out of order.</p>
        <p>Both of these will add to its Time Complexity</p>
        <div></div>
        <p><strong>Best Case : O(N)</strong> The best case for Insertion Sort would occur when the array is already sorted.</p>
        <p><strong>Average Case : O(N<sup>2</sup>)</strong>The average case is when all the elements in the given input array are in jumbled and mixed up order, i.e. neither ascending nor descending.</p>
        <p><strong>Worst Case : O(N<sup>2</sup>)</strong>The worst case is when the array is sorted but is in Reverse Order.</p>
    </div>    
</body>
</html>