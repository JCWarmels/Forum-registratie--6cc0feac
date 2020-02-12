<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$data = unserialize($_COOKIE['cookie'], ["allowed_classes" => false]);
echo'<h1>Your username is '.$data[0].'</h1>';
echo'<h1>Your email is '.$data[1].'</h1>';
echo'<h1>Your age is '.$data[2].'</h1>';
?>
</body>
</html>