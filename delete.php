<?php
if (isset($_POST["id"]) && !empty($_POST["id"])) {
    require_once "config.php";
    $id = $_POST["id"];

    $query = "DELETE FROM users WHERE id = '$id'";

    if (mysqli_query($conn, $query)) {
        header("location: index.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }

    mysqli_close($conn);
} else {
    if (empty(trim($_GET["id"]))) {
        echo "Something went wrong. Please try again later.";
        header("location: index.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
    .wrapper {
        width: 500px;
        margin: 0 auto;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="my-4">
                        <h1 class="text-center">Delete Employee Data</h1>
                    </div>
                    <form class="shadow p-5 mb-5 bg-body rounded" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger" role="alert">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>" />
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="index.php" class="btn btn-default">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>