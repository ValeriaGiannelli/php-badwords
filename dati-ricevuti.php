<?php 

$text = $_POST['userText'];
$badWord = $_POST['userWord'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    il testo scritto è: <?php echo $text ?>.
    la parola è <?php echo $badWord ?>
</body>
</html>