

<?php

  include_once 'connection.php';

  session_start();

  if(isset($_SESSION['uid']))
  {
    header('location:/logindash.php');
  }
?>


<?php

?> 



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body bgcolor="#cce6ff">

<?php 
if(!$conn){
  echo "Connection error.";
}
?>

<h1 style="text-align:center; ">Admin Login</h1>



  <form action="login.php" method="post">
    <div style = "margin-left: 600px; ">
      <table style="">
        <tr>
            <td>Username: </td>   <td><input placeholder="Email-id" type="email" name="username" ></td>
        </tr>

        <tr>
            <td>Password: </td>   <td><input placeholder="Password" type="password" name="password" required></td>
        </tr>

        <tr>
          <td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
        </tr>

      </table>
    </div>
  </form>
<br>
<br>
  <footer style="text-align:center;">
    <a href='/index.php'>Home page </a>
</footer>

</body>
</html>


<?php
    if(isset($_POST['login']))
    {
      $user = $_POST['username'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM profile ;";

      $result = mysqli_query($conn, $sql);  // RUNS THE SQL query
      $row = mysqli_num_rows($result);       // checks the number of ROWS of the query

      if($row < 1)
      {
        ?>
        <script>
          alert("Either email-id or password does not match.")
          window.open('login.php', '_self')
        </script>
        <?php
      }
      else {
        $data = mysqli_fetch_assoc($result);

        $id = $data['prof_id'];

        $_SESSION['uid'] = $id;

        header('location:logindash.php'); 

        
      }
    }

?>
    

      


    