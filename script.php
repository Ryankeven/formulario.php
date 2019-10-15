<?php

$name = $_POST['name' ];
$email = $_POST[ 'email' ];
$ddd = $_POST[ 'ddd'];
$number = $_POST[ 'number' ];
$feedback = $_POST[ 'feedback' ];
$quality = $_POST[ 'quality' ];



?>

 <div>


Name: <?= $name ?><BR>
Feedback: <?= $feedback ?><BR>
Email: <?= $email ?><BR>
Telephone: <?= $ddd ?>
<?= $number ?> <BR>
Feedback: <?= $feedback ?><BR>
Service Quality: <?= $quality ?><BR>


 </div>