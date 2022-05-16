<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="types.css">
    <title>Graph</title>
</head>

<body>
    <!-- Navbar -->
    <?php 
        $dir = $_SERVER['DOCUMENT_ROOT'];
    ?>

    <?php include $dir.'/assets/components/navbar/navbar.php' ?>

    <!-- Information -->
    <div class="container graphinfo" id="container">
        <h1>Graph Data Structure</h1>
        <p>Graphs in data structures are non-linear data structures made up of a finite number of nodes or vertices and the edges that connect them. Graphs in data structures are used to address real-world problems in which it represents the problem area as a network like telephone networks, circuit networks, and social networks.</p>
        <div class="grid">
            <div class="">
                <p><b>Real life example/application of Graph</b></p>
                <p>API of any social media platform is perhaps the best example of application of graphs. On The Graph API, everything is a vertice or node. This are entities such as Users, Pages, Places, Groups, Comments, Photos, Photo Albums, Stories, Videos, Notes, Events and so forth. Anything that has properties that store data is a vertice. And every connection or relationship is an edge. This will be something like a User posting a Photo, Video or Comment etc., a User updating their profile with a their Place of birth, a relationship status Users, a User liking a Friend's Photo etc.
                     </p>
            </div>
            <div class="">
                <img src="../images/g1.png" class="g1" alt="">
            </div>
        </div>
        <h1>Types of Graph</h1>
        <p>There are various types of tree data structure</p>
        <ul>
            <li><h3>Finite Graph and Infinite Graph</h3>
            <p>The graph G=(V, E) is called a <b>finite graph</b> if the number of vertices and edges in the graph is limited in number. <br>
            The graph G=(V, E) is called a <b>infinite graph</b> if the number of vertices and edges in the graph is interminable.</p>
            <img src="../images/g2.png" class="g2" alt="">
            </li>
            <li><h3>Simple Graph and Multi Graph </h3>
                <p>If each pair of nodes or vertices in a graph G=(V, E) has only one edge, it is a <b>simple graph</b> . As a result, there is just one edge linking two vertices, depicting one-to-one interactions between two elements.<br>
                If there are numerous edges between a pair of vertices in a graph G= (V, E), the graph is referred to as a <b>multigraph</b>. There are no self-loops in a Multigraph.
                </p>
                <img src="../images/g3.png" class="g3" alt="">
            </li>
            <li><h3>Null Graph and Complete Graph</h3>
            <p>If several vertices but no edges connect them, a graph G= (V, E) is a <b>null graph</b>. <br>
            If a graph G= (V, E) is also a simple graph, it is <b>complete</b>. Using the edges, with n number of vertices must be connected. It's also known as a full graph because each vertex's degree must be n-1.
            </p>
            <img src="../images/g4.png" class="g4" alt="">
            </li>
            <li><h3>Weighted Graph and Unweighted Graph</h3>
                <p>If edges in your graph have weights then your graph is said to be a <b>weighted graph</b>, if the edges do not have weights, the graph is said to be <b>unweighted</b>. A weight is a numerical value attached to each individual edge.</p>
                <img src="../images/g5.png" class="g5" alt="">
            </li>
            <li><h3>Directed Graph and Undirected Graph</h3>
                <p>A <b>directed graph</b> is a type of graph that contains ordered pairs of vertices while an <b>undirected graph</b> is a type of graph that contains unordered pairs of vertices. Thus, this is the main difference between directed and undirected graph.</p>
                <img src="../images/g6.png" class="g6" alt="">
        </ul>
        <h2>Standard Graph operations</h2>
        <ol class="container">
            <li><b>Add/Remove Vertex</b>: Add or remove a vertex in a graph.</li>
            <li><b>Add/Remove Edge</b>: Add or remove an edge between two vertices.</li>
            <li>Check if the graph contains a given value.</li>
            <li>Find the path from one vertex to another vertex.
</li>

        </ol>
    </div>
</body>
</html>