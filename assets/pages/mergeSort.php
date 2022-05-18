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

    <title>Merge Sort</title>
</head>

<body>
    <!-- Navbar -->
    <?php 
        $dir = $_SERVER['DOCUMENT_ROOT'];
    ?>

    <?php include $dir.'/assets/components/navbar/navbar.php' ?>

    <!-- Information -->
    <div class="container arrayinfo" id="container">
        <h1>Merge Sort</h1>
        <p>The concept of Merge Sort involves breaking down an array of n elements into n individual elements. As each element can be considered as a sorted array consisting of one element. Then we start to combine these individual single array elements into one final sorted array.</p>
        <p>Merge Sort also uses the Divide-and-Conquer Startegy to divide the no of elements and then perform sort on each of them.</p>
        <img src="../images/divide_conq.jpg" class="i1" alt=""><br>
        
        <h2>Steps to use Quick Sort</h2>
        <ol class="container">
            <li>Divide : In this step, we find the midpoint of the given array by using the formula mid=start+(end-start)/2 </li>
            <li>Conquer : In this step, we divide the array into subarrays using the midpoint calculated. We recursively keep dividing the array and keep calculating the midpoint for doing the same. It is important to note that a single array element is always sorted. So, our aim is to continuously divide until all elements in the array are single array elements. Once that is done, the array elements are combined back to form a sorted array.</li>
                <p>(Our goal is to keep dividing till all elements in the array are single array elements hence, this is the base case i.e., when there are n subarrays of the original array that consisted of n integers. It is now turn to sort them and combine them.)</p>
            <li>Combine : Now that all our subarrays are formed, it is now time to combine them in a sorted order.</li>
        </ol>        
        <img src="../images/merge_sort.PNG" class="i2" alt=""><br>
        
        <h1>Time Complexity</h1>
        <div class="container">
        <p><strong>Best Case : O(nlogn)</strong> The Best case will be when the elements are already Sorted.</p>
        <p><strong>Average Case : O(nlogn)</strong>The average case is when 2 or more elements are jumbled, i.e., neither in the ascending order nor in the descending order.</p>
        <p><strong>Worst Case : O(nlogn</strong>The worst case occurs when we sort the descending order of an array into the ascending order.</p>
        </div>        
    </div>    
</body>
</html>