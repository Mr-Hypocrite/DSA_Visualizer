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
        <a href="/" class="nav-logo" >
            <img src="../../assets/images/logo.png" alt="logo" class="nav-logo">
        </a>
        <a href="/assets/pages/DataStructuresVisualizer.php">
            <h3 class="nav-ele">DS Visualizer</h3>
        </a>
        <a href="/index.php">
            <h3 class="nav-ele">Algo Visualizer</h3>
        </a>

        <h3 class="dropdown">
            DS Info
            <div class="drop-ele">
                <a href="/assets/pages/dsa.php">Data Structures and Algo Overview</a>
                <a href="/assets/pages/dstypes.php">Data Structure Types</a>
                <a href="/assets/pages/array.php">Array</a>
                <a href="/assets/pages/linkedList.php">Linked List</a>
                <a href="/assets/pages/stack.php">Stack</a>
                <a href="/assets/pages/queue.php">Queue</a>
                <a href="/assets/pages/tree.php">Tree</a>
                <a href="/assets/pages/graph.php">Graph</a>
            </div>
        </h3>
        <h3 class="dropdown">
            Algo Info
            <div class="drop-ele">
                <a href="/assets/pages/sortingAlgo.php">Sorting Algorithms</a>
                <a href="/assets/pages/bubbleSort.php">Bubble Sort</a>
                <a href="/assets/pages/insertionSort.php">Insertion Sort</a>
                <a href="/assets/pages/quickSort.php">Quick Sort</a>
                <a href="/assets/pages/selectionSort.php">Selection Sort</a>
                <a href="/assets/pages/mergeSort.php">MergeSort</a>
            </div>
        </h3>

        <!-- <a href="/assets/pages/logout.php"><h3 class="nav-ele">Log Out</h3></a> -->
    </div>
</body>
</html>