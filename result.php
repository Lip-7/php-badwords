<?php
$wallText = "ERROR";
$wallTextCensored = "ERROR";

if ((!empty(trim($_POST['badWord']))) && (!empty(trim($_POST['wallText'])))){
    $error = false;
    $badWord = trim($_POST['badWord']);
    $wallText = trim($_POST['wallText']);
    $wallTextCensored = str_replace($badWord, '***', $wallText);
} else {
    $error = true;
}
$error = false;
if ((empty(trim($_POST['badWord']))) && (empty(trim($_POST['wallText'])))){
    $wallText = "The 'bad Word' and the Text are missing";
    $wallTextCensored = "The 'bad Word' and the Text are missing";
} elseif ((empty(trim($_POST['badWord'])))){
    $wallText = "The 'bad Word' is missing";
    $wallTextCensored = "The 'bad Word' is missing";
} elseif ((empty(trim($_POST['wallText'])))){
    $wallText = "The Text is missing";
    $wallTextCensored = "The Text is missing";
}
?>


<!DOCTYPE html>
<!-- <?php ?> -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css" />
    <script src="https://cdn.tailwindcss.com"></script> 
    <script>
        tailwind.config = {

        };
    </script>
</head>

<body>
    <div class="container mx-auto pt-5">
        <h2 class="text-white text-3xl">Below there is the original text you submit (Length: <?php echo strlen($wallText) ?>): <!-- <?php echo $badWord ?> --></h2>
        <div class="initalWallText mx-auto mt-10 overflow-y-auto" id="text">
            <p><?php echo $wallText?></p>
        </div>
        <h2 class="text-white text-3xl mt-20">Below there is the text you submit but censored (Length: <?php echo strlen($wallTextCensored) ?>): <!-- <?php echo $badWord ?> --></h2>
        <div class="initalWallText mx-auto mt-10 overflow-y-auto" id="text">
            <p><?php echo $wallTextCensored?></p>
        </div>
    </div>
</body>

</html>