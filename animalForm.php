

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body bgcolor="#cce6ff">



<h3 style="text-align:center; padding-top: 20px;">Add Animal Information</h3>


<div style = "margin-left: 500px; ">

<form action="animalForm.php" method="post" enctype="multipart/form-data"> 

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



</div>
<footer style="text-align:center;">
    <a href='/index.php'>Home page </a>
</footer>





<?php

if (isset($_POST['submit'])) 
{
    include ("connection.php");

    $date_posted =  $_POST['date_posted'];
    $animal_type =  $_POST['animal_type'];
    $animal_color = $_POST['animal_color'];   
    $animal_breed = $_POST['animal_breed'];     
    $animal_avail = $_POST['animal_avail'];


    $sql = "INSERT INTO `animal`(`date_posted`, `animal_type`, `animal_color`, `animal_breed`, `animal_avail`) VALUES ('$date_posted', '$animal_type', '$animal_color', '$animal_breed', '$animal_avail')";

    $result = mysqli_query($conn, $sql);


    if($result == true)
    {
        echo "Data inserted successfully.";
    }

    else {
        header('location: animalForm.php');
    }

    

}
?>
</body>
</html>
