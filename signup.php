


<?php
if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $username = stripcslashes($_POST['username']);
    $password = stripcslashes($_POST['password']);
    $email = stripcslashes($_POST['email']);
    $prof_type = stripcslashes($_POST['prof_type']);


    if ($password !== $password) {
        echo "<b> style='color: red;'>The passwords don't match. Please try again.</b>";
    }
    $user = 'root';
    $password = 'root';
    $db = 'ANIMAL_SHELTER';
    $host = 'localhost';



    $link = mysqli_init();

    $success = mysqli_connect(
        "localhost",
        $user,
        $password,
        $db



    );


    if (!$success) {
        die("Connection Error");
    }
    mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX | MYSQLI_REPORT_STRICT);

    $sql= "SELECT count(prof_id) AS total FROM profile";
    $result= mysqli_query($success,$sql);
    $values= mysqli_fetch_assoc($result);
    $num_rows= $values['total'];
    $usc_id= $num_rows+1;


    mysqli_query($success, "INSERT INTO profile (prof_type, email, firstName, lastName, password, dob) VALUES ('" . $_POST['prof_type'] . "',  '" . $_POST['email'] . "', '" . $_POST['firstName'] . "','" . $_POST['lastName'] . "','" . $_POST['password'] . "','" . $_POST['dob'] . "')");


    if($prof_type === "user"){
        //$usc_id += $usc_id*3/3;
        $type_sql = "INSERT INTO user (user_id) VALUES ('$usc_id');";
    }
    else{
        //$usc_id += $usc_id*3/3;
        $type_sql = "INSERT INTO admin (admin_id) VALUES ('$usc_id');";
      }


    mysqli_commit($success);
    echo "User Created";
}

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
        DOB:<input type="date" name="dob" required />
        <input type="email" placeholder="Email" name="email" required />
        <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
        <div>
          <input type="radio" id="User" name="prof_type" value="user" checked>
          <label for="User">User </label>
        </div>

        <div>
          <input type="radio" id="Admin" name="prof_type" value="admin">
          <label for="Admin">Admin </label>
        </div>
        <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />


      </form>
    </div>
  </div>

  <footer>
    <h1> <a name="changethis" href='/index.php'>Home Page </a> <br> </h1>
  </footer>
</body>
</html>

