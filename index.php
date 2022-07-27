<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font-awesome  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <style type="text/css">
    .wrapper {
        width: 1200px;
        margin: 0 auto;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <!-- Nav start -->
                <nav class="navbar navbar-expand-lg navbar-light bg-info">
                    <div class="container-fluid">
                        <a class="navbar-brand fw-bold" style="color:black;" href="#">TraineeLab</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                    <a class="nav-link active text-white fw-bold" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-white fw-bold" href="create.php">Add New User</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Nav end -->
                <div class="col-md-12">
                    <div>
                        <div class="d-flex justify-content-center">
                            <div class="my-4">
                                <h3 class="text-center">Employees Information</h3>
                                <h6 class="" text-center>If any need,You can update,View or Delete your info</h6>

                            </div>
                        </div>
                        <a href="create.php" class="btn btn-primary my-4">Add New User</a>
                        <div>

                            <?php
                    // Include config file
                    require_once "config.php";

                    // select all users
                    $data = "SELECT * FROM users";
                    if($users = mysqli_query($conn, $data)){
                        if(mysqli_num_rows($users) > 0){
                            echo "<table class='table table-bordered table-striped'>
                                    <thead>
                                      <tr >
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>";
                                while($user = mysqli_fetch_array($users)) {
                                    echo "<tr>
                                            <td>" . $user['id'] . "</td>
                                            <td>" . $user['first_name'] . "</td>
                                            <td>" . $user['last_name'] . "</td>
                                            <td>" . $user['email'] . "</td>
                                            <td>" . $user['phone_number'] . "</td>
                                            <td>" . $user['address'] . "</td>
                                            <td>
                                              <a href='read.php?id=". $user['id'] ."' title='View User' data-toggle='tooltip'>Read |</span></a>
                                              <a href='edit.php?id=". $user['id'] ."' title='Edit User' data-toggle='tooltip'>Edit |</span></a>
                                              <a href='delete.php?id=". $user['id'] ."' title='Delete User' data-toggle='tooltip'>Delete</span></a>
                                            </td>
                                          </tr>";
                                }
                                echo "</tbody>
                                </table>";
                            mysqli_free_result($users);
                        } else{
                            echo "<p class='lead'><em>No records found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }

                    // Close connection
                    mysqli_close($conn);
                    ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <script src="https://kit.fontawesome.com/8d12eef74f.js" crossorigin="anonymous"></script> -->
</body>

</html>