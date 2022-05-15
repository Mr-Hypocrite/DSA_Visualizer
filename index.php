<html>
    <head>
        <title>
            Sorting Visualizer
        </title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">
        <link rel="stylesheet" href="./assets/css/styles.css">
    </head>
    <body>

        <?php 
            $dir = $_SERVER['DOCUMENT_ROOT'];
        ?>

        <?php include $dir.'/assets/components/navbar/navbar.php' ?>

        <h1 >SORTING VISUALIZER</h1>
            <form class="visual_options">
                
                    <div class="left">
                        <input type="button" id="new" class="btn btn-outline-success " value="New Array">
                        <span>
                            <label>Number of bars</label><input id="number" type="range"  min=5 max=50 step="1" value="60">
                            <label>Speed</label><input id="speed" type="range"  min="20" max="900" step="20" value="20">
                        </span> 
                    </div>
                    <div class="right">
                        <input type="button" id="bubble" class="btn btn-outline-info sort-btn"  value="Bubble Sort">
                        <input type="button" id="select" class="btn btn-outline-info sort-btn"value="Selection Sort">
                        <input type="button" id="insert"class="btn btn-outline-info sort-btn" value="Insertion Sort">
                        <input type="button" id="quick" class="btn btn-outline-info sort-btn"value="Quick Sort">
                        <input type="button" id="merge"class="btn btn-outline-info sort-btn" value="Merge Sort">
                    </div>
               
            </form>

            <div class="center">
                <div id="array"></div>
            </div>

            <script src="./assets/js/index.js"></script>
            <script src="./assets/js/Sorting/bubbleSort.js"></script>
            <script src="./assets/js/Sorting/insertionSort.js"></script>
            <script src="./assets/js/Sorting/quickSort.js"></script>
            <script src="./assets/js/Sorting/selectionSort.js"></script>


    </body>
</html>
