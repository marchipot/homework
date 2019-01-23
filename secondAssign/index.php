<?php require_once('./config.php');
$months = [
    "january" => "winter",
    "february" => "winter",
    "march" => "spring",
    "april" => "spring",
    "may" => "spring",
    "june" => "summer",
    "july" => "summer",
    "august" => "summer",
    "september" => "fall",
    "october" => "fall",
    "november" => "winter",
    "december" => "winter",

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
        <h1>Hello User</h1><br>
        <h3>please pick a mouth</h3><br>
        <form method="post" action="">
        <select name="months">
            <?php
            foreach ($months as $key => $value) :
                echo '<option value="' . $value . '">' . $key . '</option>'; //close your tags!!
            endforeach;
            ?>
        </select>
        <button  type="submit"  class="ui secondary button">send</button>
        </form>
    </div>
    
</body>
<?php 
if(is_post_request()){
$selectOption = $_POST['months'];
$_SESSION['season'] = $selectOption;
if(isset($_SESSION['season'])){
redirect_to('./image.php');
}
 } ?>
</html>