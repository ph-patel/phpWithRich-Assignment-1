<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Privago Resorts</title>
<!--  Bootstrap 3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<h1>Welcome to the Privago Resorts !!</h1>
<h2>Add a new Resort here !!</h2>

<form method="post" action="save-resort.php">
    <div class="form-group">
            <fieldset>
                <label for="name">Name :</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </fieldset>

            <fieldset>
                <label for="address">Address :</label>
                <input type="text" class="form-control" name="address" id="address" required>
             </fieldset>

            <fieldset>
                <label for="phone">Phone :</label>
                <input type="tel" class="form-control" name="phone" id="phone" required>
            </fieldset>

            <fieldset>
                <label for="location">Location :</label>
                <input type="text" class="form-control" name="location" id="location" required>
            </fieldset>

            <fieldset>
                <label for="cost">Cost</label>
                <input type="number" class="form-control" name="cost" id="cost" required>
            </fieldset>

            <!--  Dropdown menu-->
            <fieldset >
                <label for="swimming" class="col-md-2">Is Swimming poll available : </label>
                <select name="swimming" id="swimming">
                    <?php
                    //connect to DB
                    $db = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200397594', 'gc200397594','i0Pntn7CEF');

                    //set up query
                    $sql = "SELECT * FROM swimming";

                    //execute and store in variable
                    $cmd = $db->prepare($sql);
                    $cmd->execute();
                    $swimming = $cmd->fetchAll();

                    //loop and print data
                    foreach($swimming as $s){
                        echo'<option>'. $s['swimmingpool'] .'</option>';
                    }
                    ?>
                </select>
            </fieldset>
        <button class="btn btn-primary btn-lg">Submit</button>
    </div>


</body>
</html>
