<?php
    include '../../scripts/checkSession.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.ico" type="image/x-icon">
    <title>DSA Visualizer</title>
    <link rel="shortcut icon" href="/assets/images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="./DataStructuresVisualizer.css">
</head>
<body>

    <?php 
        $dir = $_SERVER['DOCUMENT_ROOT'];
    ?>

    <?php include $dir.'/assets/components/navbar/navbar.php' ?>

    <h1 class='title'>Data Structures Visualizer</h1>

    <div class="optionPane">

        <button id="op1" class="btn">New DataSet</button>

        <div class='dataSizeInput'>
            <h4>Data Set Size: </h4>
            <input type="range" min="1" max="25" value="10" class="slider" id="Size">
        </div>

        <select name="dataStructures" id="ds" class="dsSelector">
            <option value="Array">Array</option>
            <option value="LinkedList">LinkedList</option>
            <option value="Stack">Stack</option>
            <option value="Queue">Queue</option>
        </select>

    </div>

    <div class="DsOptionPane">
            <div class="flex stackQOperations">
                <button class='btn pushFunc'>Push</button>
                <input class='newData' type="text" placeholder="Data">
                <button class='btn popFunc'>Pop</button>
            </div>

            <div class="arrOperations">
                <div class="flex">
                    <input class='data' type="text" value="" placeholder="Element">
                    <input class='index' type="text" value="" placeholder="Index">
                    <button class='btn insert'>Insert</button>
                </div>

                <div class="flex">
                    <input class='rmvData' type="text" placeholder="Index">
                    <button class='btn remove'>Remove</button>    
                </div>

                <div class="flex">
                    <input class='srchData' type="text" value="" placeholder="Element">
                    <button class='btn search'>Search</button>                    
                </div>
                
            </div>
            
    </div>  

    <div class="canvas">  

        <div id="DSContainer">

        </div>
        
    </div>

    <div class="info">
        <h1>Info</h1>
        <h3 class="currentDs"></h3>
        <h3 class="insertionInfo"></h3>
        <h3 class="removeInfo"></h3>
        <a href="" class="moreInfo"><h3>Click for More Info...</h3></a>
    </div>

    <script src="./DSVisualizer.js"></script>
    
</body>
</html>