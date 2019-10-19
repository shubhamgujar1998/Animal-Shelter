<?php
if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
  $username = stripcslashes($_POST['username']);
  $password = stripcslashes($_POST['password']);
  $confirmpassword = stripcslashes($_POST['confirmpassword']);
  $email = stripcslashes($_POST['email']);
  if ($password !== $password) {
    echo "<b style='color: red;'>The passwords don't match. Please try again.</b>";
  }
  $connection = mysqli_connect('localhost', 'root', '', 'ANIMAL_SHELTER');
  $connection->mysql_query('INSERT INTO PROFILE ()');
}
$date = new DateTime(time(), new DateTimeZone(date_default_timezone_get()));
$dateFormatted = $date->format('m/d/Y');
?>


<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
</head>
<body>
  <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="signup.css" type="text/css">
  <div class="body-content">
    <div class="module">
      <h1>Create an account</h1>
      <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="alert alert-error"></div>
        <input type="text" placeholder="User Name" name="username" required />
        <input type="text" placeholder="First Name" name="firstName" />
        <input type="text" placeholder="Last Name" name="lastName" required />
        <input type="date" name="dateOfBirth" value="<?php echo $dateFormatted; ?>" required />
        <input type="email" placeholder="Email" name="email" required />
        <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
        <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
        <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
      </form>
    </div>
  </div>
</body>
</html>

