<!-- Game Page -->

<?php
//Import the shared functions and output the head, heading, logo and navigation bar
include('common.php');

outputHeading('Home');
outputNavBar();
?>

<!--Placeholder Div for embedding game-->
<div id=gameholder>
    <div id=comphand>
        <canvas id=compcard0></canvas>
        <canvas id=compcard1></canvas>
        <canvas id=compcard2></canvas>
        <canvas id=compcard3></canvas>
        <canvas id=compcard4></canvas>
    </div>
    <div id=middle>
        <div id=info>
            <p id=gamestate>waiting for start</p>
            <p id=playerinfo></p>
        </div>
        <p id=score></p>
    </div>
    <div id=playerhand>
        <canvas id=playercard0></canvas>
        <canvas id=playercard1></canvas>
        <canvas id=playercard2></canvas>
        <canvas id=playercard3></canvas>
        <canvas id=playercard4></canvas>
    </div>
    <div id=buttonbar>
        <button type="button" onclick="twist()">Twist</button>
        <button type="button" onclick="stick()">Stick</button>
    </div>
</div>

<?php
//Output the footer and closing HTML tags
outputFooter();
?>