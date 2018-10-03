<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Privago Resorts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<h1> List of the Resorts !!</h1>
 <?php
//connect to the database
$db = new PDO('mysql:host=localhost;dbname=learn_with_rich', 'root', 'mySQLWelcome1');

//setup and execute the query
$sql = "SELECT * FROM demo_for_assignment1";
$cmd = $db->prepare($sql);

//store the data
$cmd->execute();
$resort = $cmd->fetchAll();

//create table
 echo'<table class="table table-striped table-bordered table-responsive"><thead><th>Name</th><th>Address</th><th>Phone</th> <th>Location</th><th>Cost</th></thead> <tbody>';

//loop through the data
foreach ($resort as $r) {
 echo "<tr class=\"success\"><td>".$r['name']."</td><td>".$r['address']."</td><td>".$r['phone']."</td><td>".$r['location']."</td><td>".$r['cost']."</td>";
}

//close the table
 echo '</tbody><table>';

//disconnect
 ?>
</body>
</html>
