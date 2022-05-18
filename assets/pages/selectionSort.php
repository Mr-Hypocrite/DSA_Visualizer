<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="types.css">
    <link rel="stylesheet" href="algo.css">

    <title>Selection Sort</title>
</head>

<body>
    <!-- Navbar -->
    <?php 
        $dir = $_SERVER['DOCUMENT_ROOT'];
    ?>

    <?php include $dir.'/assets/components/navbar/navbar.php' ?>

    <!-- Information -->
    <div class="container arrayinfo" id="container">
        <h1>Selection Sort</h1>
        <p>Selection sort, also known as in-place comparison sort, is a simple sorting algorithm. It works on the idea of repeatedly finding the smallest element and placing it at its correct sorted position.</p>
        <p>Selection sort works by dividing the list into two sublists:</p>
        <ol class="container">
            <li>Sorted sublist : that is built on the left end of the list from left to right.</li>
            <li>Unsorted sublist : that is the rest of the unsorted list, on the right end.</li>
        </ol>
        <img src="../images/selection_sort.PNG" class="i1" alt=""><br>

        <h2>Steps to use Selection Sort</h2>
        <ol class="container">
            <li>Divide the queue of students into two parts : arranged and unarranged.</li>
            <li>To begin with, place all the students in the unarranged queue.</li>
            <li>From this unarranged queue, search for the shortest student and place him/her in the list of arranged students.</li>
            <li>Again, from the unarranged queue, select the second-shortest student. Place this student in the arranged queue, just after the smallest student.</li>
            <li>Repeat the above-given steps until all the students are placed into the arranged queue.</li>           
        </ol>        
        <img src="../images/selection_sort1.PNG" class="i2" alt=""><br>
        
        <h1>Time Complexity</h1>
        <div class="container">
        <p>The function of Selection Sort can be divided in 2 parts: 1] Loop to iterate over the entire list and 2] Loopto iterate over the Unsorted sublist.</p>
        <ol class="container">
            <li>The number of times the swapping occurs will be equal to n, and each swapping will take constant time.</li>
            <li>The nested inside the loop that is run in part 1. This loop helps in searching for the smallest number. Under this part, n comparisons are made that take constant time for execution. </li>
        </ol>
        <p>Both of these will add to its Time Complexity</p>
        </div>
        <p><strong>Best Case : O(N)</strong> The best-case occurs when the list is already arranged in the desired order.</p>
        <p><strong>Average Case : O(N<sup>2</sup>)</strong>The average case is when the list is arranged in a jumbled order.</p>
        <p><strong>Worst Case : O(N<sup>2</sup>)</strong>The worst case occurs when we want to sort a list in ascending order, but it is arranged in descending order.</p>
    </div>
    
</body>
</html>