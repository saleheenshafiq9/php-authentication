<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Login Successful!</h4>
</div>
<div class="container">
<?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <button type="button" class="btn"><a href="logout.php">Logout</a></button>
</div>

</body>
</html>