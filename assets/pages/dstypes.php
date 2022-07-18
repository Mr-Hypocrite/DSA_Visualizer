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
    <link rel="stylesheet" href="dstypes.css">
    <title>Data Structure Types</title>
</head>

<body>
    <!-- Navbar -->
    <?php 
        $dir = $_SERVER['DOCUMENT_ROOT'];
    ?>

    <?php include $dir.'/assets/components/navbar/navbar.php' ?>

    <!-- Information -->
    <section class="container info" id="container">
        <div class="types">
            <h1>Types of Data Structures</h1>
            <p>Data Structures an be classified into <b>Primitive data structures</b> and <b>Non-Primitive data
                    structures</b> <br>
                <b>Primitive Data Types</b>: A primitive data type is pre-defined by the programming language. The size
                and type of variable values are specified, and it has no additional methods. <br>
                <b>Non-Primitive Data Types</b>: These data types are not actually defined by the programming language
                but are created by the programmer.
            </p>
            <img src="..\images\DS_Types.png" class="diagram" alt="">
            <h2>Primitive Data Structures</h2>
            <p>
                Primitive data structures consist of the numbers and the characters which are
                built in programs. These can be manipulated or operated directly by the
                machine level instructions. Basic data types such as Integer, Real, Character,
                and Boolean come under primitive data structures. These data types are also
                known as simple data types because they consist of characters that cannot be
                divided.
            </p>
            <h2> Non-primitive Data Structures</h2>
            <p>
                Non-primitive data structures are those that are derived from primitive data structures.
                These data structures cannot be operated or manipulated directly by the machine level
                instructions. They focus on formation of a set of data elements that is either
                homogeneous (same data type) or heterogeneous (different data type).
                These are further divided into linear and non-linear data structure based on the structure
                and arrangement of data.
            </p>
            <h2>Linear Data Structure</h2>
            <p>
                A data structure that maintains a linear relationship among its elements is called a linear
                data structure. Here, the data is arranged in a linear fashion. But in the memory, the
                arrangement may not be sequential.
            </p>
            <ul class="">
                <li>
                    <h2>Array</h2>
                    <p>Array, in general, refers to an orderly arrangement of data elements. Array is a type of
                        data structure that stores data elements in adjacent locations. Array is considered as linear data structure that stores elements of same data types. Hence, it is also called as a linear homogenous data structure.</p>
                        <img src="../images/a1.png" class="array" alt="">
                        <p>Array index value always starts from <b>0</b><br>
                        To know more about Array and it's types visit, <a href="../pages/array.html" target="_blank">Array</a></p>
                </li>
                <li>
                    <h2>Linked List</h2>
                    <p>Linked List can be defined as collection of objects called <b>nodes</b> that are randomly stored in the memory. A node contains two fields i.e. <b>data stored at that particular address</b> and the <b>pointer which contains the address of the next node</b> in the memory. The last node of the list contains pointer to the null.</p>
                    <img src="../images/linked_list.png" class="linkedl" alt="">
                    <p>The <b>head</b> holds address (pointer) to the first node. The last node doesn't point to further node hence it contains <b>NULL</b> in the address part</p>
                    To know more about Linked List and it's types visit, <a href="../pages/linkedList.html" target="_blank">Linked List</a></p>
                </li>
                <li>
                    <h2>Stack</h2>
                    <p>A stack is a linear data structure that follows the principle of Last In First Out (LIFO). This means the last element inserted inside the stack is removed first. Imagine stack data structure as the pile of plates on top of another.</p>
                    <img src="../images/stack.png" class="stack" alt="">
                    <p>To add an element in a stack <b>push</b> operation is used and to remove element <b>pop</b> operation is used.</p>
                    To know more about Stack and it's types visit, <a href="../pages/stack.html" target="_blank">Stack</a></p>
                </li>
                <li>
                    <h2>Queue</h2>
                    <p>The queue data structure works in the FIFO principle where first element stored in the queue will be removed first. A good example of a queue is any queue of consumers for a resource where the consumer that came first is served first.</p>
                    <img src="../images/queue.png" class="queue" alt="">
                    <p>To add element in Queue <b>enqueue</b> operation is used and to remove element <b>dequeue</b> operation is used. </p>
                    To know more about Queue and it's types visit, <a href="../pages/queue.html" target="_blank">Queue</a></p>
                </li>
            </ul>
            <h2>Non-Linear Data Structures</h2>
            <p>Elements in non-linear data structures are not in any sequence. Instead they are arranged in a hierarchical manner where one element will be connected to one or more elements. <br>
            <ul class="">
                <li>
                    <h2>Tree</h2>
                    <p>As the name suggests Tree data structure stores the data in kind of hierarchal arrangement.
                        Like a actual Tree, this data structure consist of root, leaves, branches connected to one another.
                        A tree is non-linear and a hierarchical data structure consisting of a collection of nodes such that each node of the tree stores a value, a list of references to nodes (the “children”).
                        <img src="../images/tree.png" class="tree" alt="">
                        <p>Tree data structure is mostly used to store hierarchical data, like folder structure, organization structure, XML/HTML data.</p>
                        To know more about Tree and it's types visit, <a href="../pages/tree.html" target="_blank" >Tree</a></p>
                    </p>
                </li>
                <li>
                    <h2>Graph</h2>
                    <p>A graph can be defined as group of vertices and edges. Edges are used to connect these vertices(nodes).
                    Graph is a pictorial representation of a set of objects where some pairs of objects are connected by links(edges)
                    </p>
                    <img src="../images/graph.png" class="graph" alt="">
                    <p>Graphs are awesome data structures that you use every day through Google Search, Google Maps, GPS, and social media. They are used to represent elements that share connections.</p>
                    To know more about Graphs and it's types visit, <a href="../pages/graph.html" target="_blank">Graph</a></p>
                </li>
            </ul>
            <h2>Static and Dynamic Data Structures</h2>
            <p>In <b>Static data structure</b> the size of the structure is fixed. The content of the data
                structure can be modified but without changing the memory space allocated to it.<br>
                Example of Static Data Structures: <b>Array</b></p>
            <p>In <b>Dynamic data structure</b> the size of the structure in not fixed and can be modified
                during the operations performed on it. Dynamic data structures are designed to facilitate
                change of data structures in the run time.<br>
                Example of Dynamic Data Structures: <b>Linked List</b></p>
            
        </div>

    </section>
</body>
</html>