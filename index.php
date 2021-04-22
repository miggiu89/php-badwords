<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BADWORDS</title>
</head>
<body>

<?php 

$paragraph = 'La morte non conta un cazzo quando ti serve un posto per dormire C.B.';
$lenghtString = strlen($paragraph);

$word = $_GET['badword'];
$replace = str_replace($word,'***',$paragraph);
$newLenghtString = strlen($replace);

?>

<h2>Il paragrafo è lungo: <?php echo $lenghtString ?> caratteri</h2>
<p><?php echo $paragraph ?></p>

<h2>Il nuovo paragrafo è lungo: <?php echo $newLenghtString ?> caratteri </h2>
<p><?php echo $replace ?></p>

 


    
</body>
</html>