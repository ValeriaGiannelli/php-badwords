<?php 

$text = $_POST['userText'];
$badWord = $_POST['userWord'];

$text_leng = strlen($text);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Il testo scritto è:</h2>
    <p><?php echo $text ?></p>

    <h3>La lunghezza del testo è di:</h3>
    <p><?php echo $text_leng?> caratteri.</p>
    
    la parola è <?php echo $badWord ?>
</body>
</html>