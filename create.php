<?php
require_once "config.php";

$first_name = $last_name = $email = $phone_number = $address = "";
$first_name_error = $last_name_error = $email_error = $phone_number_error = $address_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = trim($_POST["first_name"]);
    if (empty($firstName)) {
        $first_name_error = "First Name is required.";
    } elseif (!filter_var($firstName, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $first_name_error = "First Name is invalid.";
    } else {
        $firstName = $firstName;
    }

    $lastName = trim($_POST["last_name"]);

    if (empty($lastName)) {
        $last_name_error = "Last Name is required.";
    } elseif (!filter_var($firstName, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $last_name_error = "Last Name is invalid.";
    } else {
        $lastName = $lastName;
    }

    $email = trim($_POST["email"]);
    if (empty($email)) {
        $email_error = "Email is required.";
    } elseif (!filter_var($firstName, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $email_error = "Please enter a valid email.";
    } else {
        $email = $email;
    }

    $phoneNumber = trim($_POST["phone_number"]);
    if(empty($phoneNumber)){
        $phone_number_error = "Phone Number is required.";
    } else {
        $phoneNumber = $phoneNumber;
    }

    $address = trim($_POST["address"]);
    if(empty($address)){
        $address_error = "Address is required.";
    } else {
        $address = $address;
    }

    if (empty($first_name_error_err) && empty($last_name_error) && empty($email_error) && empty($phone_number_error) && empty($address_error) ) {
          $sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `phone_number`, `address`) VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$address')";

          if (mysqli_query($conn, $sql)) {
              header("location: index.php");
          } else {
               echo "Something went wrong. Please try again later.";
          }
      }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add employee info</title>
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
                                <a class="nav-link active text-white fw-bold" aria-current="page"
                                    href="index.php">Home</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Nav end -->
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-3 shadow-sm py-4 mb-2 bg-body rounded">
                        <h3 class="text-center text-info">Add New Employee Information</h3>
                    </div>
                    <form class="shadow p-5 mb-5 bg-body rounded" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group my-2 <?php echo (!empty($first_name_error)) ? 'has-error' : ''; ?>">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control" value="">
                            <span  ><?php echo $first_name_error;?></span>
                        </div>

                        <div class="form-group my-2 <?php echo (!empty($last_name_error)) ? 'has-error' : ''; ?>">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="">
                            <span  ><?php echo $last_name_error;?></span>
                        </div>

                        <div class="form-group my-2 <?php echo (!empty($email_error)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="">
                            <span  ><?php echo $email_error;?></span>
                        </div>

                        <div class="form-group my-2 <?php echo (!empty($phone_number_error)) ? 'has-error' : ''; ?>">
                            <label>Phone Number</label>
                            <input type="number" name="phone_number" class="form-control" value="">
                            <span  ><?php echo $phone_number_error;?></span>
                        </div>

                        <div class="form-group mb-4 mt-2 <?php echo (!empty($address_error)) ? 'has-error' : ''; ?>">
                            <label>Address</label>
                            <textarea name="address" class="form-control"></textarea>
                            <span  ><?php echo $address_error;?></span>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-info">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>