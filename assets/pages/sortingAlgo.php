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
    <link rel="stylesheet" href="dsa.css">
    <link rel="stylesheet" href="algo.css">
    <title>Sorting Algo</title>
</head>
<body>
    <!-- Navbar -->
    <?php 
        $dir = $_SERVER['DOCUMENT_ROOT'];
    ?>

    <?php include $dir.'/assets/components/navbar/navbar.php' ?>

    <!-- Information -->
    <section class="container info"  id="container">
        <div class=" main">
            <h1>What is a Sorting Algorithm ?</h1>
            <p>Sorting algorithms are a set of instructions that take an array or list as an input and arrange the items into a particular order.
                Sorts are most commonly in numerical or a form of alphabetical (or lexicographical) order, and can be in ascending (A-Z, 0-9) or descending (Z-A, 9-0) order.</p>
        </div>

        <div  class="container need">            
            <h1>But WHY use Sorting Algorithms ?</h1>
            <p>Since they can often reduce the complexity of a problem, sorting algorithms are very important in computer science. These algorithms have direct applications in searching algorithms, database algorithms, divide and conquer methods, data structure algorithms, and many more.</p>
            <img src="..\images\sort.jpg" alt="" >
        </div>

        <div  class="container adv">
            <h2>More About Sorting Algorithms</h2>
                <li>Performing operations on a Set on data which is in a Sorted manner is easier to implement than that on an Unsorted one.</li>
                <li>There are various types of Sorting Algorithms out there, we need to choose the one we need according to our data and needs.</li>
                <li>They are classified on the basis of various properties like 'Amount of Time needed to sort','The no. of comparisons they use','are they stable?','amount of storage they require'.</li>
                <li>So when studying about them,you might hear "Which is the Best Algorithm?".</li>
            <img src="..\images\best_sort.jpeg" alt="">
        </div>
        <div class="container">
            <h1>Some of the Commonly used Sorting Algorithms</h1>
            <ul class="container">
            <li>Bubble Sort</li>
            <li>Selection Sort</li>
            <li>Insert Sort</li>
            <li>Quick Sort</li>
            <li>Merge Sort</li>            
            </ul>
        </div>
        <div class="container">
            <h1>Time Complexity</h1>
            <ul class="container">
            <li>Time Complexity of an Algorithm is NOT equal to the actual time required to execute a particular code, but the number of times a statement executes.</li>
            <li>So the less time an Algorithm takes to complete its task, better is that Algorithm.</li>
            <li>To express the time complexity of an algorithm, we use something called the “Big O notation”. The Big O notation is a language we use to describe the time complexity of an algorithm. It’s how we compare the efficiency of different approaches to a problem, and helps us to make decisions.</li>
            </ul>
            <p>Usually, the time required by an algorithm falls under three types :</p>
            <ul class="container">
            <li>Best Case => Minimum time required for program execution.</li>    
            <li>Average Case => Average time required for program execution.</li>    
            <li>Worst Case => Maximum time required for program execution.</li>
            </ul>
        </div>
        <div class="container">
            <h1>Asymptotic Notations</h1>
            <p>Asymptotic analysis of an algorithm refers to defining the mathematical boundation/framing of its run-time performance.</p>
            <p>The most commonly used 3 Asymptotic Notations are : Ο Notation,Ω Notation,θ Notation</p>
            <h2>Big Oh Notation (Ο)</h2>
            <p>This is used to express the 'Upper Bound' of an algorithm's runnig time.</p>
            <p>Eg.: For a Function f(n),</p>
            <img src="..\images\big_o_notation.jpg" alt="" class="info1">
            <p> Ο(f(n)) = { g(n) : there exists c > 0 and n0 such that f(n) ≤ c.g(n) for all n > n0. }</p>

            <h2>Omega Notation (Ω)</h2>
            <p>The notation Ω(n) is used to express the lower bound of an algorithm's running time.</p>
            <p>Eg.: For a Function f(n),</p>
            <img src="..\images\omega_notation.jpg" alt="" class="info1">
            <p>Ω(f(n)) ≥ { g(n) : there exists c > 0 and n0 such that g(n) ≤ c.f(n) for all n > n0. }</p>

            <h2>Theta Notation (θ)</h2>
            <p>The notation θ(n) is used to express BOTH the lower bound and the upper bound of an algorithm's running time.</p>
            <img src="..\images\theta_notation.jpg" alt="" class="info1">
            <p>θ(f(n)) = { g(n) if and only if g(n) =  Ο(f(n)) and g(n) = Ω(f(n)) for all n > n0. }</p>

            </div>
    </section>
</body>
</html>