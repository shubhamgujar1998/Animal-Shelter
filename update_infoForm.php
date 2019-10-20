<?php
  include ('connection.php');
?>

<?php
  session_start();

  $_SESSION["animal_color"] = $_POST['animal_color'];

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
    include ('titleheader.php');
    include ('header.php');
    include ('connection.php');
    
    $animal_id = $_GET['animal_id'];

    $sql = "SELECT * FROM `animal` WHERE `animal_id`= '$animal_id';";
    $result = mysqli_query($conn, $sql);

    $data = mysqli_fetch_assoc($result);
?>

<h3 style="text-align:center; padding-top: 20px;">EDIT Animal Information</h3>


<div style = "margin-left: 500px; ">

<form action="update_infoForm.php" method="post" enctype="multipart/form-data"> 

    Date Posted: <input type="date" name="date_posted" required> <br>
    <div>
    Animal Type: 

            <input type="radio" id="Cat" name="animal_type" value="Cat" checked>
            <label for="Cat">Cat </label>

            <input type="radio" id="Dog" name="animal_type" value="Dog">
            <label for="Dog">Dog </label>

            <input type="radio" id="Horse" name="animal_type" value="Horse">
            <label for="Horse">Horse </label>          

    </div>
    Color: <input type="text" name="animal_color">

   
    Breed: <input type="text" name="animal_breed"> <br>
    Is available:
    <input type="radio" id="isAvailable"
    name="animal_avail" value="yes" checked>
    <label for="isAvailable">Yes</label>

    <input type="radio" id="notAvailable"
    name="animal_avail" value="no">
    <label for="notAvailable">No</label>

    <br>
    <div style="margin-left: 180px">
    <input type="submit" value="Submit" name="submit" />
    </div>
    <br>

</form>