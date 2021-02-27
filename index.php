<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<div class="form-container">
    <header>
        <img src="./logo.png" alt="logo" class="logo">
        <h1>Sign in to <span class="we">Side</span><span class="japa">Hustle</span></h1>
    </header>
<form method="post" action="index.php">
    <label for="name">Enter Your Full Name</label>
    <input type="text" id="name" name="name" placeholder="Full name" required>
    <label for="number">Contact Number</label>
    <input type="tel" name="number" id="phone" placeholder="Phone number" required>
    <label for="email">Email Address</label>
    <input type="email" name="email" id="email" placeholder="Email Address" required>
    

    <input type="submit" value="Log in">
<?php


if(!empty($_POST['name'])) {
    $name = $_POST['name'];
    echo "your Full name is " . $name. "<br />";
}
if(!empty($_POST['number'])) {
    $number = $_POST['number'];
    echo "your Contact number is " . $number. "<br />";
}
if(!empty($_POST['email'])) {
    $email = $_POST['email'];
    echo "Your Email Address is " . $email. "<br />";
}


?>
</form>


</div>
    
</body>
</html>