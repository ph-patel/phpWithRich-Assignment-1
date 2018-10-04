<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Privago Resorts</title>
<!-- Bootstrap 3-->
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
$swimming = $_POST['swimming'];

//Serverside validation
$OK = true;

//validation from server side
if(empty($name)) {
    echo "Name is required. <br />";
    $OK = false;
}
if(empty($address)) {
    echo "Address is required <br />";
    $OK = false;
}
if(empty($phone)) {
    echo "Phone is required <br />";
    $OK = false;
}
if(empty($location)) {
    echo "Location is required <br />";
    $OK = false;
}
if(empty($cost)) {
    echo "cost is required <br />";
    $OK = false;
}

if(OK == true) {

    //connect to the database
    $db = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200397594', 'gc200397594', 'i0Pntn7CEF');

    //setup and execute the insert command
    $sql = "INSERT INTO demo_for_assignment1 (name, address, phone, location , cost, swimming) 
        VALUES (:name, :address, :phone, :location , :cost, :swimming)";
    $cmd = $db->prepare($sql);
    $cmd->bindParam(':name', $name, PDO::PARAM_STR, 25);
    $cmd->bindParam(':address', $address, PDO::PARAM_STR, 50);
    $cmd->bindParam(':phone', $phone, PDO::PARAM_STR, 15);
    $cmd->bindParam(':location', $location, PDO::PARAM_STR, 20);
    $cmd->bindParam(':cost', $cost, PDO::PARAM_INT, 5);
    $cmd->bindParam(':swimming', $swimming, PDO::PARAM_STR, 20);

    $cmd->execute();


    //disconnect
    $db = null;

    echo "Resort saved !!! <div class=\"alert alert-success\" role=\"alert\">Well Done !! New Resort Successfully Added.</div>";
}
    ?>




 <a href="resorts.php">View all resorts</a>
</body>
</html>
