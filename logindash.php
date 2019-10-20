

<?php
  include_once ('connection.php');
?>


<?php
  session_start();

  if(isset($_SESSION['uid']))
  {
    echo "";
  }

  else
  {
    header('location:login.php');
  }
  
?>

<?php
  include ('header.php');
?>

<div>
  <h4><a href="logout.php" style="float:right; margin-right:30px; color:white; font-size: 20px;">Logout</a></h4>
</div>


<div class="thistag">
  <h1>Welcome to Admin Dashboard</h1>
</div>

<div class="dash">
  <table>
    <tr>
      <td>1.</td><td><a href="update_info.php">Update Animal Information</a></td>
    </tr>

    <tr>
      <td>2.</td><td><a href="delete_info.php">Delete Animal Information</a></td>
    </tr>
  </table>

</div>

</body>
</html>


<?php
 

?>
    

      


    