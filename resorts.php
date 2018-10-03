<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Privago Resorts</title>
<!-- Bootstrap 3-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<a href="resort-form.php">Add resort</a>

<h1> List of the Resorts !!</h1>
 <?php
//connect to the database
 $db = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200397594', 'gc200397594','i0Pntn7CEF');

//setup and execute the query
$sql = "SELECT * FROM demo_for_assignment1";
$cmd = $db->prepare($sql);

//store the data
$cmd->execute();
$resort = $cmd->fetchAll();

//create table
 echo'<table class="table table-striped table-bordered table-responsive"><thead><th>Name</th><th>Address</th><th>Phone</th> <th>Location</th><th>Cost</th><th>Swimming pool</th></thead> <tbody>';

//loop through the data
foreach ($resort as $r) {
 echo "<tr class=\"success\"><td>".$r['name']."</td><td>".$r['address']."</td><td>".$r['phone']."</td><td>".$r['location']."</td><td>".$r['cost']."</td><td>".$r['swimming']."</td></tr>";
}

//close the table
 echo '</tbody></table>';

//disconnect
$db = null;
 ?>
</body>
</html>
