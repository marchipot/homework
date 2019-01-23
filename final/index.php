<?php require_once('./config.php') ?>

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
    <div class="ui cards">
  <div class="card">
    <form id="form-register" action="" method="post" name='registration' class="ui form">
  <div class="field">
    <label>First Name</label>
    <input type="text" name="firstName" placeholder="First Name" required>
  </div>
  <div class="field">
    <label>Last Name</label>
    <input type="text" name="lastName" placeholder="Last Name" required>
  </div>
  <div class="field">
    <label>email</label>
    <input type="email" name="email" placeholder="email" required>
  </div>
  <div class="field">
    <label>telephone number</label>
    <input type="tel" name="telephone" placeholder="telephone" required>
  </div>
  <div class="field">
    <label>password</label>
    <input type="password" id="password" name="password" placeholder="password" required>
  </div>
  <div class="field">
    <label>confirm password</label>
    <input type="password" id="pass-confirm"  name="pass-confirm" placeholder="confirm password">
    <div id='message-pass'><?php
if(is_post_request()){
  if ($_POST['password']!= $_POST['pass-confirm'])
 {
     echo("Oops! Password did not match! Try again. ");
 }else{
   echo "הפרטים עברו ולידציה";
 }
}
?></div>
  </div>
  <button class="ui button"  type="submit">Submit</button>
</form>
        <br>
        </div>
        </div>

    <script src="main.js"></script>
</body>

</html>