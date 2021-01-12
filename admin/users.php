<?php
    session_start();
    $user = $_SESSION['logged_in'];

    include("../includes/db_connection.php");
    include("../includes/functions.php");

    if (isset($_POST['btnUpdate'])){
        $phoneno = sanitize_data($_POST['phoneno']);
        $address = sanitize_data($_POST['address']);
        $spec = sanitize_data($_POST['spec']);
        $file_name = $_FILES['image']['name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $temp_location = $_FILES['image']['tmp_name'];
        $error= $_FILES['image']['error'];
        $upload_path="uploads/";

        if(empty( $file_name)){
            $img = "no-image-e.png";
        }elseif ($file_size > 1000000000) {
            exit("File too, large please upload only file lower than 1MB");
        }
        else{
            $file_extension = explode(".",$file_name );

            $permited_extentions = ["jpg","png","gif","jpeg"];


            if (!in_array(strtolower($file_extension[1]), $permited_extentions)) {
                exit("Unsupported File type");
            }else{
                $new_file_name = uniqid();

                $new_file_name = $upload_path.$new_file_name.".".strtolower($file_extension [1]);

                // exit($new_file_name);
                move_uploaded_file($temp_location, $new_file_name);
                // echo "Image uploaded successfully!";
            }
            $sql = "UPDATE users SET
                    image = '$new_file_name',
                    phone_num = '$phoneno',
                    address = '$address',
                    specialty = '$spec'
                    WHERE id = '$user'
            ";

            $result = mysqli_query ($conn, $sql);
    
            if(!$result){
                die("ERROR OCCURED" . mysqli_error($conn));
            }else{
                // while($row = mysqli_fetch_assoc($result)){
    
                // }
            }
    
    
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../bs4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../vendors/chartist/chartist.min.css">
</head>
<body>

    <?php
// print_r($_SESSION);
// exit();
        $query = "SELECT * FROM users WHERE user_type = 1 AND id = '$user'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            echo "Error: " .mysqli_error($conn);
        }
        while ($row = mysqli_fetch_assoc($result)){

            $userid = $row['id'];
            $image = $row['image'];
            $firstname = $row['first_name'];
            $lastname = $row['last_name'];
            $email = $row['email'];
            $phone = $row['phone_num'];
            $address = $row['address'];
            $spec = $row['specialty'];

        echo "
        <table class='table'>
        <thead>
            <tr>
                <th>Image</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Specialty</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <form class='form-horizontal' action='users.php' method='post' enctype='multipart/form-data'>
                    <td scope='row'>
                        <img style='border-radius: 20px;' src='$image' width='100' height='100' >
                        <input class='form-control' type='file' name='image' />
                    </td>
                    <td>$firstname
                        <a href='edit.php?action=$userid'>edit</a>
                    </td>
                    <td>$lastname
                        <a href='edit.php?action=$userid'>edit</a>
                    </td>
                    <td>$email
                        <a href='edit.php?action=$userid'>edit</a>
                    </td>
                    <td>$phone
                        <a href='edit.php?action=$userid'>edit</a>
                    </td>
                    <td>$address
                        <a href='edit.php?action=$userid'>edit</a>
                    </td>
                    <td>$spec
                        <a href='edit.php?action=$userid'>edit</a>
                    </td>
                    <td>
                        <a class='btn btn-primary btn-lg' href='users.php?action=$userid'>Edit</a>
                    </td>
                </form>
            </tr>
        </tbody>
    </table>
                ";

        }

    ?>



<!-- <form action="users.php" method="POST" enctype = "multipart/form-data" class="form-horizontal col-md-6">
        <div class="form-group">
            <img src="<?=$image ?>" alt="" class="img-fluid rounded" />
        </div>
        <div class="form-group">
            <p><?=$firstname ?>&nbsp;<?=$lastname ?></p>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" />
        </div>
        <div class="form-group">
            <label for="firstname">Phone Number</label>
            <input value="<?=$phone ?>" type="text" name="phoneno" class="form-control" required />
        </div>
        <div class="form-group">
            <textarea name="address" id="" cols="3" rows="10" class="form-control" placeholder="Enter your addresss" required><?=$address ?></textarea>
        </div>
        <div class="form-group">
            <label for="spec">Specification</label>
            <input type="text" name="spec" class="form-control" value="<?=$spec ?>" />
        </div>
        <div class="form-group">
            <input type="submit" name="btnUpdate" value="Update" class="btn btn-success" />
        </div>
    </form> -->
    <script src="../bs4/J_query/jquery-3.5.1.js"></script>
    <script src="../bs4/js/bootstrap.min.js"></script>

</body>
</html>
