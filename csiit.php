<?php
$user = $_POST['name'];
$mail = $_POST['email'];
$subj = $_POST['subject'];
$msg = $_POST['message'];

$to = "abhinav4437@yahoo.com";
$body = "";
$body .= "Name:" .$user. "\r\n";
$body .= "Email" .$mail. "\r\n";
$body .= "Subject" .$subj. "\r\n";
$body .= "Msg: " .$msg. "\r\n";
mail($to,$subj,$body);
?>
<html>
    <head>
        <title>
            Done
        </title>
        <style>
            h1{
                text-align:center;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }

        </style>
    </head>
    <body>
        <h1>Doesn't it feel nice to let your feelings out once in a while!!<br>Thanks Alott for sharing</h1>
    </body>
</html>
