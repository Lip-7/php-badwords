<?php

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
</head>

<body>
  <div id="wrapper" class="pt-3">

    <form id="paper" method="POST" action="result.php">

      <div id="margin">Bad Word: <input id="title" type="text" name="badWord"></div>
      <textarea placeholder="Lorem ipsum docet mammt..." id="text" name="wallText" rows="5" class="overflow-hidden"></textarea>
      <input id="button" type="submit" value="Send">
      <span id="wallTextTpl" class=" text-sm underline-offset-1 cursor-pointer">give me a walltext to try</span>
    </form>

  </div>
  <script src="./js/utility.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>