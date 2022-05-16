<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="types.css">
    <title>Stack</title>
</head>

<body>
    <!-- Navbar -->
    <?php 
        $dir = $_SERVER['DOCUMENT_ROOT'];
    ?>

    <?php include $dir.'/assets/components/navbar/navbar.php' ?>

    <!-- Information -->
    <div class="container stackinfo" id="container">
        <h1>Stack Data Structure</h1>
        <p>Stack is a linear data structure that follows <b>Last In First Out</b> principle. Stack has only one end through which we can insert and delete the elements. Stack is like a container of elements which can be accessed only from top.</p>
        <div class="grid">
            <div class="">
                <p><b>Real life example/application of Stack</b></p>
                <p>Suppose you are creating a digital art/drawing in any application. The <b>undo</b>, <b>redo</b> operations that you perform when you wanna remove or add the changes you've made, the steps are saved into a stack. As stack permits insertion/deletion from only one end you can get back the changes you've made by simply clicking the undo, redo buttons. <br>
                Similarly in browser as we navigate from one page to another a stack is maintained so that we can go back and forth and view the particular webpage. </p>
            </div>
            <div class="">
                <img src="../images/s1.png" class="s1" alt="">
            </div>
        </div>
        <h2>Standard Stack operations</h2>
        <ol class="container">
            <li><b>push()</b>: To insert an element in the stack push() operation is used. Since stack has only one opening, the elements are inserted just on the top</li>
            <li><b>pop()</b>: To remove or delete an element from the stack pop() operation is used. The last inserted element or we can say the topmost element is the one which is removed when this operation is performed.</li>
            <li><b>isempty()</b>: isempty() operation checks if the stack is empty. </li>
            <li><b>isfull()</b>: isfull() operation checks if the stack is full.</li>
            <li><b>peek()</b>: peek() operation that returns the value of the top most element of the stack without deleting that element from the stack.</li>
        </ol>
    </div>
</body>
</html>