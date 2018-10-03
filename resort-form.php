<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Privago Resorts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<h1>Welcome to the Privago Resorts !!</h1>
<h2>Add a new Resort here !!</h2>

<form method="post" action="save-resort.php">
    <div class="form=group">

            <label for="name">Name :</label>
            <input type="text" class="form-control" name="name" id="name">



            <label for="address">Address :</label>
            <input type="text" class="form-control" name="address" id="address">



            <label for="phone">Phone :</label>
            <input type="tel" class="form-control" name="phone" id="phone">



            <label for="location">Location :</label>
            <input type="text" class="form-control" name="location" id="location">



            <label for="cost">Cost</label>
            <input type="num" class="form-control" name="cost" id="cost">



        <button>Submit</button>
    </div>


</body>
</html>
