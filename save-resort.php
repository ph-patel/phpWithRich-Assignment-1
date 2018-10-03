<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Privago Resorts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php

//assign the varible to store the value from the form
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$cost = $_POST['cost'];

//connect to the database
$db = new PDO('mysql:host=localhost;dbname=learn_with_rich', 'root', 'mySQLWelcome1');

//setup and execute the insert command
$sql = "INSERT INTO demo_for_assignment1 (name, address, phone, location , cost) 
    VALUES (:name, :address, :phone, :location , :cost)";
    $cmd = $db->prepare($sql);
    $cmd->bindParam(':name', $name, PDO::PARAM_STR, 25);
    $cmd->bindParam(':address', $address, PDO::PARAM_STR, 50);
    $cmd->bindParam(':phone', $phone, PDO::PARAM_STR, 15);
    $cmd->bindParam(':location', $location, PDO::PARAM_STR, 20);
    $cmd->bindParam(':cost', $cost, PDO::PARAM_INT, 5);

    $cmd->execute();


//disconnect
$db = null ;

echo "Resort saved !!!";
 ?>

<div class="alert alert-success" role="alert">Well Done !! New Resort Successfully Added.</div>

 <a href="resorts.php">View all resorts</a>
</body>
</html>
