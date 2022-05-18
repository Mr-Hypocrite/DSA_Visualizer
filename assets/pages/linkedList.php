<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="types.css">
    <title>Linked List</title>
</head>

<body>
    <!-- Navbar -->
    <?php 
        $dir = $_SERVER['DOCUMENT_ROOT'];
    ?>

    <?php include $dir.'/assets/components/navbar/navbar.php' ?>

    <!-- Information -->
    <div class="container linkinfo" id="container">
        <h1>Linked List Data Structure</h1>
        <p>Linked List a Linear type of Data Structure as the elements or nodes in linked list are arranged in linear order. One node is connected to the next node making a link and this is implemented using pointers.
        </p>
        <div class="grid">
            <div class="">
                <p><b>Real life example/application of Linked List</b></p>
                <p>One simple application is a Song Playlist. We can play song and traverse back and forth to play whichever song we want. Imagine the songs to be nodes of a link list which are pointing to the next/previous songs and are connected to each other hence forming a link. If you can only go forward then its a Singly Linked List. But in the case of a playlist we can also go backward, this is an application of Doubly Linked List specifically which is one of the types of linked list.</p>
            </div>
            <div class="">
                <img src="../images/ll2.png" class="l1" alt="">
            </div>
        </div>
        <h1>Types of Linked List</h1>
        <div class="grid">
            <div class="">
                <p>Basic structure of a node contains two parts(blocks), <b>data</b> and the <b>address</b> of the next node. </p>
            </div>
            <div class=""><img src="../images/l3.png" class="l3" alt="">
            </div>
        </div>
        <p>There are mainly three types of linked list and one is further divided into two more. The logic behid all these types remains the same but the way these different linked lists are connected to each other makes them different.</p>
        <img src="../images/ll1.png" class="l2" alt="">
        <ul>       
        <li>
            <h3>Singly Linked List</h3>
            <p>A singly linked list is the most common type of linked list. Each node has data and an address field that contains a reference to the next node.</p>
            <img src="../images/ll3.png" class="l4" alt="">
        </li>
        <li>
            <h3>Doubly Linked List</h3>
            <p>There are two blocks to store the address in the doubly linked list. The first block will store the address of the previous node and then there id data in middle block and the last block will store the address of the next node. With the help if doubly linked list we can thus traverse forward as well as backwards.
            </p>
            <img src="../images/ll4.png" class="l5" alt="">
        </li>
        <li>
            <h3>Circular Linked List</h3>
            <p>It is same as a singly linked list just with a additional feature that the last node's address block contains the pointer to the first node of the list. Hence, the last node is linked to the first node making it a Circular Linked List.This type of list is further divided into:<br>
            <b>Singly Circular Linked List</b>: same as singly linked list just the address block contains the pointer to the first node of the list <br>
            <img src="../images/ll5.png" class="l6" alt="">
            <b>Doubly Circular Linked List</b>: same as doubly linked list, it cointains two storage blocks for previous and next node address and as it is circular the address of first node is stored in last and the address of last node is stored in the first address block of the very first node. 
            <img src="../images/ll6.png" class="l7" alt="">
            </p>
        </li>
        </ul>
        <h2>Standard Linked List operations</h2>
        <p>The operations that can be performed of Linked List are</p>
        <ol class="container">
            <li><b>Traversing</b>: To traverse all nodes one by one.</li>
            <li><b>Insertion</b>: To insert new nodes at specific positions.</li>
            <li><b>Deletion</b>: To delete nodes from specific positions.</li>
            <li><b>Searching</b>: To search for an element from the linked list.</li>
        </ol>
    </div>
</body>
</html>