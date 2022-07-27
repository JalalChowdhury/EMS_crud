<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
    .wrapper {
        width: 1200px;
        margin: 0 auto;
    }
    </style>
</head>

<body>
    <?php
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        require_once "config.php";

        $id = trim($_GET["id"]);
        $query = mysqli_query($conn, "SELECT * FROM users WHERE ID = '$id'");

        if ($user = mysqli_fetch_assoc($query)) {
            $firstName   = $user["first_name"];
            $lastName    = $user["last_name"];
            $email       = $user["email"];
            $phoneNumber = $user["phone_number"];
            $address     = $user["address"];
        } else {
            header("location: read.php");
            exit();
        }

        mysqli_close($conn);
    } else {
        header("location: read.php");
        exit();
    }
  ?>
    <div class="wrapper">
        <div class="container-fluid">
            <!-- Nav start -->
            <nav class="navbar navbar-expand-lg navbar-light bg-info">
                <div class="container-fluid">
                    <a class="navbar-brand fw-bold" style="color:black;" href="#">TraineeLab</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a class="nav-link active text-white fw-bold" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-white fw-bold" href="create.php">Add User</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Nav end -->
            <div class="row mx-1 mt-2 shadow p-5 mb-5 bg-body rounded">
                <div class="col-md-12">
                    <div class="d-flex justify-content-left fw-bold mt-4 mb-3 text-info">
                        <h3> Employee Information</h3>
                    </div>

                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-md-2 fs-5">First Name</label>
                        <div class="col-sm-10 col-md-10">
                            <p class="fs-5"><?php echo ":  ".$firstName ?></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-md-2 fs-5">Last Name</label>
                        <div class="col-sm-10 col-md-10">
                            <p class="fs-5"><?php echo ":  ".$lastName ?></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-md-2 fs-5">Email</label>
                        <div class="col-sm-10 col-md-10">
                            <p class="fs-5"><?php echo ":  ".$email ?></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-md-2 fs-5">Phone Number</label>
                        <div class="col-sm-10 col-md-10">
                            <p class="fs-5"><?php echo ":  ".$phoneNumber ?></p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-md-2 fs-5">Address</label>
                        <div class="col-sm-10 col-md-10">
                            <p class="fs-5"><?php echo ":  ".$address ?></p>
                        </div>
                    </div>
                 
                    
                  
                </div>
            </div>
        </div>
    </div>
</body>

</html>