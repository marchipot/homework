<?php 
$books = [
    "book1" => [
        "name" => "Pixel Perfect",
        "author" => "Tal Shachar",
        "pages" => "99"
    ],

    "book2" => [
        "name" => "linux revolting",
        "author" => "Moshe",
        "pages" => "111"
    ],

    "book3" => [
        "name" => "upfront of the front-end",
        "author" => "Ruth",
        "pages" => "333"
    ],

    "book4" => [
        "name" => "GoLocal",
        "author" => "Emi",
        "pages" => "99"
    ],


];
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

    <div id="root">
    <p>
        <?php 

            foreach ($books as $key => $value) {
              if($value["pages"] > 100){
                  foreach ($value as $k => $v) {
                      echo $k . " : " . $v  . " \n";
                  }
              }
            }

        ?>
        </p>
    </div>
    <script src="main.js"></script>
</body>

</html>