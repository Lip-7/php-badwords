<?php
if ((!empty(trim($_POST['badWord']))) && (!empty(trim($_POST['wallText'])))){
    $badWord = trim($_POST['badWord']);
    $wallText = trim($_POST['wallText']);
    $wallTextCensored = str_replace($badWord, '***', $wallText);
} else {
    $error = true;
}
$error = false;
if ($error) {
    $badWord = "ERROR";
    $wallText = "ERROR";
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
        <h2 class="text-white text-3xl">Below there is the original text you submit: <!-- <?php echo $badWord ?> --></h2>
        <div class="initalWallText mx-auto mt-10" id="text">
            <p><?php echo $wallText?></p>
        </div>
        <h2 class="text-white text-3xl mt-20">Below there is the text you submit but censored: <!-- <?php echo $badWord ?> --></h2>
        <div class="initalWallText mx-auto mt-10" id="text">
            <p><?php echo $wallTextCensored?></p>
        </div>
    </div>
    <script src="./js/utility.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>