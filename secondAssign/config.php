<?php 
ob_start(); // output buffering is turned on
session_start(); // session is turned on
function redirect_to($location)
{
  header("Location: " . $location);
  exit;
}

function is_post_request()
{
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}
?>