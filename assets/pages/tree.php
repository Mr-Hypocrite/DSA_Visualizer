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
    <link rel="stylesheet" href="types.css">
    <title>Tree</title>
</head>

<body>
    <!-- Navbar -->
    <?php 
        $dir = $_SERVER['DOCUMENT_ROOT'];
    ?>

    <?php include $dir.'/assets/components/navbar/navbar.php' ?>

    <!-- Information -->
    <div class="container treeinfo" id="container">
        <h1>Tree Data Structure</h1>
        <p>A tree is a non-linear type of data structure that organizes data hierarchically. It consists of nodes connected by edges. The first node is called <b>root</b>. Each node contains a value and may or may not have a <b>child node</b>child node.</p>
        <div class="grid">
            <div class="">
                <p><b>Real life example/application of Tree</b></p>
                <p>A file structure is always represented in a hierarchical manner. Tree data structure can be used to represent this. Imagine the root directory as the root node of the tree and the bin, user, tmp, src directories which are one level below the root directory are the child nodes of the tree. This is an simple way to use tree data structure.  </p>
            </div>
            <div class="">
                <img src="../images/t1.png" class="t1" alt="">
            </div>
        </div>
        <h1>Types of Tree</h1>
        <p>There are various types of tree data structure</p>
        <img src="../images/t2.png" class="t2" alt="">
        <ul>
            <li><h3>General Tree</h3>
            <p>General Tree has a root node and one or more child nodes. It is the most basic type of tree. The top-level node i.e. the root node is present at level 1 and all the other nodes may be present at various levels.</p>
            <img src="../images/t3.png" class="t3" alt="">
            </li>
            <li><h3>Forest </h3>
                <p>When the root node is deleted with the edges joining it to the child nodes of next level we get a forest. </p>
                <img src="../images/t4.png" class="t4" alt="">
            </li>
            <li><h3>Binary Tree</h3>
            <p>A tree data structure in which each node has at most two child nodes is called a binary tree. A binary tree is the most popular tree data structure and is used in a range of applications like expression evaluation, databases, etc.<br>
                <b>Types of Binary Tree</b><br>
                <b>Perfect binary tree</b>: Every internal node has two child nodes. All the leaf nodes are at the same level.<br>
                <b>Full binary tree</b>: Every parent node or an internal node has either exactly two children or no child nodes.<br>
                <b>Complete binary tree</b>: All levels except the last one are full with nodes.<br>
                <b>Degenerate binary tree</b>: All the internal nodes have only one child.<br>
                <b>Balanced binary tree</b>: The left and right trees differ by either 0 or 1.
            </p>
            <img src="../images/t5.png" class="t5" alt="">
            </li>
            <li><h3>Binary Search Tree</h3>
                <p>The binary tree that is ordered is called the binary search tree. In a binary search tree, the nodes to the left are less than the root node while the nodes to the right are greater than or equal to the root node.</p>
                <img src="../images/t5.png" class="t5" alt="">
            </li>
            <li><h3>Expression Tree</h3>
                <p>A binary tree that is used to evaluate simple arithmetic expressions is called an expression tree.</p>
                <img src="../images/t6.png" class="t6" alt="">
            </li>
            <li><h2>Heap</h2>
                <p>A Heap is a special Tree-based data structure in which the tree is a complete binary tree. Generally, Heaps can be of two types:</p>
                <li><b>Min-Heap</b>: In a Min-Heap the key present at the root node must be minimum among the keys present at all of its children. The same property must be recursively true for all sub-trees in that Binary Tree.
                <img src="../images/t7.png" class="t7" alt=""></li>   
                <li><b>Max-Heap</b>: In a Max-Heap the key present at the root node must be greatest among the keys present at all of its children. The same property must be recursively true for all sub-trees in that Binary Tree.
                    <img src="../images/t8.png" class="t8" alt=""></li>  
            </li>
        </ul>
        <h2>Standard Tree operations</h2>
        <ol class="container">
            <li><b>Insert</b>: Inserts an element in a tree/create a tree. </li>
            <li><b>Search</b>: Searches an element in a tree.</li>
            <li><b>Tree Traversal Techniques</b>: <br>
                <p>1. <b>In order</b>: In this traversal technique, we traverse the left subtree first till there are no more nodes in the left subtree. After this, we visit the root node and then proceed to traverse the right subtree until there are no more nodes to traverse in the right subtree. Thus the order of inOrder traversal is left->root->right.</p>
                <p>2. <b>Pre-order</b> : For preorder traversal technique, we process the root node first, then we traverse the entire left subtree and finally, we traverse the right subtree. Hence the order of preorder traversal is root->left->right.</p>
                <p>3. <b>Post-order</b>: In the post-order traversal technique, we traverse the left subtree, then the right subtree and finally the root node. The order of traversal for the postorder technique is left->right->root.</p>
             </li>
        </ol>
    </div>
</body>
</html>