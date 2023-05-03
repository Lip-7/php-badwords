<?php
if ((!empty(trim($_POST['badWord']))) && (!empty(trim($_POST['wallText'])))){
    $badWord = trim($_POST['badWord']);
    $wallText = trim($_POST['wallText']);
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
    <div class="wrap">
        <h1 class="text-white">Ciao <?php echo $badWord ?></h1>
    </div>
    <script src="./js/utility.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>