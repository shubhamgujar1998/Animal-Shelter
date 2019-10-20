<?php
  include ('connection.php');
?>

<?php
  session_start();

  //$_SESSION["animal_color"] = $_POST['animal_color'];

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
    
?>

<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Update Animal Information</h2>
      </header>
      <div class="w3-container">
            <form action="update_info.php" method="post" enctype="multipart/form-data"> 

                Date Posted: <input type="date" value="<?php  //echo date("m/d/Y"); ?>" name="date_posted" required> <br>
            <div>
                    Animal Type: 

                    <input type="radio" id="Cat" name="animal_type" value="Cat">
                    <label for="Cat">Cat </label>

                    <input type="radio" id="Dog" name="animal_type" value="Dog">
                    <label for="Dog">Dog </label>

                    <input type="radio" id="Horse" name="animal_type" value="Horse">
                    <label for="Horse">Horse </label>          

            </div>
            Color: <input type="text"  value="<?php echo $_SESSION["animal_color"]; ?>" name="animal_color">


            Breed: <input type="text" name="animal_breed"> <br>
            Is available:
            <input type="radio" id="isAvailable"
            name="animal_avail" value="yes" checked>
            <label for="isAvailable">Yes</label>

            <input type="radio" id="notAvailable"
            name="animal_avail" value="no">
            <label for="notAvailable">No</label>

            <br>
            
            <br>

            </form>
      </div>  
      <footer class="w3-container w3-teal">
          <input type="submit" name="update" value="Update" id="update">
      </footer>
    </div>
  </div>

<table align="center">
  <form action="update_info.php" method="post">
    <tr>
      <th>Animal Type: <td> <input type="text" placeholder="Enter Animal Type" name="animal_type" required> </td></th>
    </tr>
  
    <tr>
      <th>Animal Color: <td> <input type="text" placeholder="Enter Animal Color" name="animal_color" required> </td></th>
    </tr>
    
    <tr>
      <th>Animal Breed: <td> <input type="text" placeholder="Enter Animal Breed" name="animal_breed" required>   </td></th>
    </tr>
  
  <div style="font-size:10px;">
    <tr> <td colspan="2"><input type="submit" value="Search" name="submit"></td></tr>
  </div>  
  <br>
  </form>
</table>

<!-- <table align="center" width="80%" border="1" style="margin-top:10px;">
  <tr style="background-color:black; color:white">
    <th>No</th>
    <th>Animal Type</th>
    <th>Animal Color</th>
    <th>Animal Breed</th>
    <th>Animal Availibility</th>
    <th>Edit</th>
  </tr> -->

  <?php

  if(isset($_POST['submit']))
  {
    include('connection.php');

    $animal_type = $_POST['animal_type'];
    $animal_color = $_POST['animal_color'];
    $animal_breed = $_POST['animal_breed'];

    $sql = "SELECT * FROM `animal` WHERE UPPER(`animal_type`) = '$animal_type' AND UPPER(`animal_color`)= '$animal_color' AND UPPER(`animal_breed`) LIKE '%$animal_breed%';";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) < 1)
    {
      echo "<tr><td colspan='6'>No results found.</td></tr>";
    }

    else 
    {
      echo '<table align="center" width="80%" border="1" style="margin-top:10px;">
  <tr style="background-color:black; color:white">
    <th>No</th>
    <th>Animal Type</th>
    <th>Animal Color</th>
    <th>Animal Breed</th>
    <th>Animal Availibility</th>
    <th>Edit</th>
  </tr>';

      $count = 0;
      while($data = mysqli_fetch_assoc($result))
      {
        $count++;
    ?>
        <tr style="text-align:center;" id="table_info"> 
          <td> <?php echo $count; ?> </td>
          <td> <?php echo $data['animal_type']; ?></td>
          <td> <?php echo $data['animal_color']; ?></td>
          <td> <?php echo $data['animal_breed']; ?></td>
          <td> <?php echo $data['animal_avail']; ?></td>
          <td>
            <!-- <a href="update_infoForm.php?animal_id=<?php //echo $data['animal_id'];   ?> ">Edit</a> -->
            <button onclick="modal(this.parentElement.parentElement);" class="w3-button w3-black">Edit</button>
          </td>
        </tr>

        


      <?php


      }

    }

  }


      ?>


<script type="text/javascript">
function modal(tr)
{
  // var tr = document.getElementById("table_info");
  document.getElementById('id01').style.display='block';
  
  var childs = tr.children;
  var animalType = childs[1].innerHTML;
  var animalClr = childs[2].innerHTML;
  var animalBreed = childs[3].innerHTML;
  var animalAvail = childs[4].innerHTML;
  
  if(animalType === 'Dog')
  {
    document.getElementById('Dog').checked = true;
    // document.getElementById('Cat').checked = false;
    // document.getElementById('Horse').checked = false;

  }

  if(animalType == 'Cat')
  {
    //document.getElementById('Dog').checked = false;
    document.getElementById('Cat').checked = true;
    // document.getElementById('Horse').checked = false;
  }

  if(animalType == "Horse")
  {
    // document.getElementById('Dog').checked = false;
    // document.getElementById('Cat').checked = false;
    document.getElementById('Horse').checked = true;
  }

}

</script>


</table>
<?php

  if(isset($_POST['update']))
  {
    $date_posted =  $_POST['date_posted'];
    $animal_type =  $_POST['animal_type'];
    $animal_color = $_POST['animal_color'];   
    $animal_breed = $_POST['animal_breed'];     
    $animal_avail = $_POST['animal_avail'];

    $sql = "UPDATE `animal` SET `animal_type`= '$animal_type' ,`animal_color`= '$animal_color' ,`animal_breed`= '$animal_breed' ,`animal_avail`= '$animal_avail';";

    echo $sql;
    $result = mysqli_query($conn, $sql);

    if($result)
    {
      echo "<script> alert('Update Successful!')</script>";
    }
    
  }

?>

</body>

</html>