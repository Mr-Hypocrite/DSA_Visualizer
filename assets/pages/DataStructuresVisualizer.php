<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSA Visualizer</title>
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
            <option value="Tree">Tree</option>
            <option value="Graph">Graph</option>
        </select>

    </div>

    <div class="DsOptionPane">
            <div class='flex'>
                <h3>Data:</h3>
                <input class='newData' type="text">
            </div>

            <button class='btn pushFunc'>Push</button>

            <button class='btn popFunc'>Pop</button>
            
        </div>  

    <div class="canvas">  

        <div id="DSContainer">

        </div>
        
    </div>

    <script src="./DSVisualizer.js"></script>
    
</body>
</html>