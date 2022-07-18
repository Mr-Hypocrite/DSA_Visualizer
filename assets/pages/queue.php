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
    <title>Queue</title>
</head>

<body>
    <!-- Navbar -->
    <?php 
        $dir = $_SERVER['DOCUMENT_ROOT'];
    ?>

    <?php include $dir.'/assets/components/navbar/navbar.php' ?>

    <!-- Information -->
    <div class="container stackinfo" id="container">
        <h1>Queue Data Structure</h1>
        <p>Queue is a linear data structure that follows <b>First In First Out</b> (FIFO) principle. Queue is somewhat similar to Stack data structure but the only difference is that, in queue we can insert and delete elements from two ends. One end called the <b>rear end</b> is used to insert elements and the other end called <b>front end</b> is used to remove/delete elements.</p>
        <div class="grid">
            <div class="">
                <p><b>Real life example/application of Queue</b></p>
                <p>Consider a CPU has been allocated multiple tasks at a time. There are various requests made by the user for allocating resources for different tasks such as printing, scanning, new file creation and so on. How does the CPU manage to perform these all tasks in one go without stopping any other process? The answer is Queue. Different CPU scheduling algorithms are applied using Queue data structure. Priority is given to various requests using a type of queue called Priority queue. Queue data structure simplifies the tidious task of scheduling for the CPU. </p>
            </div>
            <div class="">
                <img src="../images/q1.png" class="q1" alt="">
            </div>
        </div>
        <h1>Types of Queue</h1>
        <ul>
            <li><h3>Circular Queue</h3>
            <p>Circular Queue is an extended version of a simple linear queue as it follows first in first out principle with a slight modification which is, it connects the last node of a queue to its first by forming a circular link. It is also called as Ring Buffer. The main advantage of using the circular queue is better memory utilization.</p>
            <img src="../images/q2.png" class="q2" alt="">
            </li>
            <li><h3>Priority Queue</h3>
            <p>As the name suggests, the elements in this type of queue are arranged according to priority. Insertion in priority queue takes place based on the arrival, while deletion in the priority queue occurs based on the priority. Priority queue is mainly used to implement the CPU scheduling algorithms.
            There are two types of Priority Queue: <br>
                    <b>Ascending Priority Queue</b>: An ascending order priority queue gives the highest priority to the lower number in that queue. For example, you have six numbers in the priority queue that are 3, 6, 15, 35, 22. Firstly, you will arrange these numbers in ascending order. The new list is as follows: 3, 6, 15, 22, 35. In this list, 3 is the smallest number. Hence, the ascending order priority queue treats number 3 as the highest priority.
                    <img src="../images/q3.png" class="q3" alt="">
                    <br>
                    <b>Descending Priority Queue</b>: A descending order priority queue gives the highest priority to the highest number in that queue. For example, you have six numbers in the priority queue that are 3, 6, 15, 35, 22. Firstly, you will arrange these numbers in ascending order. The new list is as follows: 35, 22, 15, 6, 3. In this list, 35 is the highest number. Hence, the descending order priority queue treats number 35 as the highest priority.
                    <img src="../images/q4.png" class="q4" alt="">
             </p>
            </li>
            <li><h3>Doubly Ended Queue</h3>
            <p>
                In Double Ended Queue, insertion and deletion can be done from both ends of the queue either from the front or rear. It is also called as Dequeue. It means that we can insert and delete elements from both front and rear ends of the queue. Dequeue can be used as a palindrome checker means that if we read the string from both ends, then the string would be the same.
                <img src="../images/q5.png" class="q5" alt="">
            </p></li>
        </ul>
        <h2>Standard Queue operations</h2>
        <ol class="container">
            <li><b>enqueue()</b>: To add an element at the rear end of the queue enqueue, operation is used. </li>
            <li><b>dequeue()</b>: To remove/delete an element from the front end of the queue, dnqueue operation is used.</li>
            <li><b>isempty() (Queue underflow) </b>: isempty() operation checks if the queue is empty. Underflow condition occurs when we want to access an element from the queue but it is empty. </li>
            <li><b>isfull() (Queue overflow) </b>: isfull() operation checks if the queue is full. The condition when the queue is full is called Overflow condition. </li>
            <li><b>peek()</b>: peek() operation returns the element from the front end of the queue without deleting it. </li>
        </ol>
    </div>
</body>
</html>