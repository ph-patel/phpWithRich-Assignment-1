<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Privago Resorts</title>
<!--  Bootstrap 3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>  Privago Resorts <small>Add a Wonderfull Resort Here !!</small></h1>
    </div>
</div>


<div class="container">
        <form method="post" action="save-resort.php">
            <div class="form-group">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="name" type="text" class="form-control input-lg" name="name" placeholder="Name" required>
                    </div>



                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                    <input id="address" type="text" class="form-control input-lg" name="address" placeholder="Address" required>
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input id="phone" type="tel" class="form-control input-lg" name="phone" placeholder="Phone" required>
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-screenshot"></i></span>
                    <input id="location" type="text" class="form-control input-lg" name="location" placeholder="Province" required>
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                    <input id="cost" type="number" class="form-control input-lg" name="cost" placeholder="Cost( per night in CAD)" required>
                </div>

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
                <button class="btn btn-warning btn-lg">Add Resort</button>
                <button class="btn btn-warning btn-lg">Go Back</button>
            </div>
        </form>
</div>


</body>
</html>
