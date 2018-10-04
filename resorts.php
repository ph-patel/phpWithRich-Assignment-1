<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Privago Resorts</title>
<!-- Bootstrap 3-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>



<div class="page-header">
    <h1>  Privago Resorts <small>Pick from the World Class Resorts</small></h1>
</div>
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
 echo'<table class="table table-striped table-bordered table-responsive"><thead><th>Id.</th><th>Name</th><th>Address</th><th>Phone</th> <th>Location</th><th>Cost(in CAD per night)</th><th>Swimming pool</th><th>Actions</th></thead> <tbody>';

//loop through the data
foreach ($resort as $r) {
 echo "<tr class=\"success\"><td>".$r['resortId']."</td><td>".$r['name']."</td><td>".$r['address']."</td><td>".$r['phone']."</td><td>".$r['location']."</td><td>".$r['cost']."</td><td>".$r['swimming']."</td><td>" . '<a  class="btn btn-danger" href="#">Book</a>'."</td></tr>";
}

//close the table
 echo '</tbody></table>';

//disconnect
$db = null;
 ?>

<a class="btn btn-warning" href="resort-form.php">Add Resort</a>

<a class="btn btn-warning" href="landing.php">Go to Homepage</a>






 <script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
 </script>

</body>
</html>
