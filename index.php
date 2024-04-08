<?php 
  // creating the database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "note";
$conn = mysqli_connect($servername, $username, $password, $database);

// check  if connection is successfull or not
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}



?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inotes - making note taking easy </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="bg-dark">

  <navgig class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PHP CRUD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
    </nav>
  </div>
<hr>
  <div class="mt-5 ms-5">
    <h1>Add a note </h1>
  <!-- <label for="exampleFormControlInput1" class="form-label">Email address</label> -->
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
</div>
<br><br>
<div class="mb-3 ms-5 mt-1">
  <h3 mb-0>
    Note descrption
  </h3>
 
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>

  <button  class=" btn btn-primary my-3">Add note</button>
</div>

<div class="container">
  <?php 
    $sql = "SELECT * FROM `notes`";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
      echo $row['Srno']."$row['Title']."of".$row['description'].$row['time'];
    }
  ?>
</div>

</body>

</html>