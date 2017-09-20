<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
   <div class="header">

    <div class="container">

        <div class="logo">
        <h1>Josh Lucas</h1>
        </div>
        
        <div class="nav">
        <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="contact.php">Contact</a></li>
        </ul>
        </div>
    </div>
</div>

    </div>
	<div class="container">
	<?php
	$ip = "";
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
	 echo'<h1>'.$ip.'</h1>'; ?>
	</div>
    <footer>

    </footer>
</body>

</html>
