<?php
/*$to = "vincent.depalma+to@vungle.com";
$subject = "New Application from" . $_POST['first_name'];
$message = $_POST['resume'];
$from = "vincent.depalma+greenhouse@vungle.com";
$headers = "From:" . $_POST['email'];
mail($to,$subject,$message,$headers);*/
//die(print_r($_POST));
die(print_r($_FILES));

//http://stackoverflow.com/questions/18492572/post-form-values-using-jquery-and-php

$data = $_POST['first_name'];
$url = 'https://16c7366a3f525bf30232066ddeb99477@api.greenhouse.io/v1/applications/'; //greenhouse api url

function sendApplication() {
    http_post_data($url, $data);
}

?>