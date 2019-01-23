<?php require_once('./config.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>firstAssignment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
        crossorigin="anonymous"></script>

</head>
<body>

<div class="ui card">
  <div class="image">
    <img src='<?php
                if ($_SESSION["season"] == "summer") {
                    echo "https://images.pexels.com/photos/46710/pexels-photo-46710.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260";
                }
                if ($_SESSION["season"] == "winter") {
                    echo "https://images.pexels.com/photos/302743/pexels-photo-302743.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260";
                }
                if ($_SESSION["season"] == "spring") {
                    echo "https://images.pexels.com/photos/290604/pexels-photo-290604.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260";
                }
                if ($_SESSION["season"] == "fall") {
                    echo "https://images.pexels.com/photos/1114896/pexels-photo-1114896.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260";
                }

                ?>'>
  </div>
  <div class="content">
    <a class="header"><?php require_once('./config.php');
                        echo $_SESSION["season"];


                        ?></a>

</div>


</body>
</html>