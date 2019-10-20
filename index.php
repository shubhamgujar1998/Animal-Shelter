<!DOCTYPE html>
<html>
  
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">


<title>Animal Shelter</title>
    <link rel="stylesheet" type="text/css" href="animal_fp.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">

    <!-- ICON LIBRARY used -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  
</head>
  
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default navbar-fixed-top">
  <div class="container">
  <a class="navbar-brand" href="index.php">Animal Shelter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign Up <i class="fa fa-user-plus"></i></a>
      </li>
       </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login <i class="fa fa-user"></i></a>
      </li>
    </ul>
    
  </div>
  </div>
</nav>  

  
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      
      <div id="content">
        <h1>Animal Shelter</h1>
      <h3>Adopt Animals</h3>
        <hr>

        <div class="dropdown">
          <button class="dropbtn">Functionalities</button>
          <div class="dropdown-content">
            <a href="/animalForm.php">Add animal</a>
            <a href="/animal_update.php">Update/delete Animal information</a>
            <a href="#">Adopt animal</a>
            <a href="#">View donations and adoption</a>
            <a href="#">Search Donation detail</a>
            <a href="#">Search Animal details</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div>
    <img id="dog" src="img.jpg">
</div>

        
 
</body>
</html>