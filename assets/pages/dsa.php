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
    <link rel="stylesheet" href="dsa.css">
    <title>DSA</title>
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
            <h1>Data Structures and Algorithms</h1>
            <p>Data Structures and Algorithms are two different concepts. Before diving deep into DSA let's understand what exactly are Data Structures and Algorithms.</p>
            <h1>Data Structures</h1>
            <p>Data Structures are used to organize the data or data items efficiently in the main memory. 
                Now you might say we do have basic data types for that purpose don't we?
                Yes, but to solve large complex problems these basic data types aren't enough. This is where the need for additional <b>Data Structures</b>  arises. Data Structures are concerned with the efficient representation and manipulation of data. Data structure and data types are slightly different. Data structure is the collection of data types (defined by the user) arranged in a specific order. Data manipulation requires <b>Algorithms</b>. Hence, data structures are like ingredients we require to build algorithms.
            </p>
        </div>
        <div class="container algo">
            <div class="grid">
                <div>
                    <h1>Algorithms</h1>
                    <p>Sequence of steps performed on the data using efficient data structures to solve a given problem, be it a basic or real-life-based one. Example: Sorting an array</p>
                </div>
                <div>
                    <img src="..\images\DS.png" alt="" >
                </div>
            </div>
        </div>

        <div  class="container need">            
            <h1>Need for Data Structure</h1>
            <p>Modern day computing problems are complex and large, they need to handle data in large volumes. There is a need to store and process information of a variety of types such as character, numeric, audio, video, graphics et cetera. Data has to be stored such that the logical relationship between the data elements is retained and to do all implement all this we need Data Structures.</p>
            <img src="..\images\Basic_DataTypes.png" alt="">
        </div>

        <div  class="container adv">
            <h2>Advantages of Data Structures over Basic Data Types</h2>
                <li>Structured data makes it easier to access, manipulate the information as compared to raw or unstructured data.</li>
                <li>A variety of operations can be performed on structured data.</li>
                <li>Related data can be stored together and in required format.</li>
                <li>Data Structures provide means to store, organize and retrieve data in efficient manner.</li>
            <img src="..\images\drakeMeme.png" alt="">
        </div>
        <div class="container">
            <h1>Abstract Data Type</h1>
            <p>In order to implement a data structure ADT is used.</p>
            <p>Abstract Data Type or ADT is a way of classifying data structures, the behaviour they provide (functionality) and how they are used (operations). For example, consider a blueprint for building a House, so here the blueprint for building a data structure will be ADT. 
            A data structure can be defined as a set of Domains (D), a set of Functions (F) and a set of Axioms (A).<br>
            <b>D</b> - set of elements<br>
            <b>F</b>  - set of operations that can be carried out on the elements<br>
            <b>A</b> - properties, rules of operations<br>
            Example of ADT
            Consider integer as an abstract type. Its ADT can be written as: <br>
            <b>D</b> - { 0, ±1, ±2, ±3....} <br>
            <b>F</b> - { +, -, *, /, %, <, >.....} <br>
            <b>A</b> - { arithmetic rules which apply to the operations } <br>
            </p>
        </div>

    </section>
</body>
</html>