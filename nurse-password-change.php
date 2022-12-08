
<?php
require_once("connection.php");
$data = "";
if (isset($_COOKIE['nurse'])) {
    $name = $_COOKIE['nurse'];
    $query = "SELECT * FROM nurse WHERE username='$name'";
    $query_res = mysqli_query($con, $query);
    $data = mysqli_fetch_assoc($query_res);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Change</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="patient-dashboard.css">
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="paitent-edit-profile.css">
</head>

<body>
    <div class="contianer">
        <div class="header">
            <a href="">
                Password Change
            </a>
            <div class="logout">

                <a href="logout.php">
                    <h3> <i class="fa-solid fa-right-from-bracket"></i>Logout</h3>
                </a>
            </div>
        </div>
        <div class="container_2">
            <aside>
                <div class="profile">
                    <img src="images/pic/<?php echo $data['picture'] ?>" alt="">
                    <h3><?php echo $data['full_name'] ?></h3>
                    <p>
                        <i class="fa-solid fa-cake-candles"></i>
                        <?php echo $data['dob'] ?>
                    </p>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        <?php echo $data['address'] ?>
                    </p>
                </div>
                <ul class="menu">
                <li ><a href="nurse-dashboard.php"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
                    <li ><a href="nurse-edit-profile.php"><i class="fa-solid fa-wrench"></i>Profile Settings</a></li>
                    <li class="active_menu"><a href="nurse-password-change.php"><i class="fa-solid fa-key"></i>Change Password</a></li>
                </ul>
            </aside>
            <div class="dashboard_items">
                <div class="container_information" id="container_information_1">
                    <h1>Account information</h1>
                    <form action="change-password.php" method="post">
                    <label for="password">New Password</label>
                    <input type="password" name="password" id="" required placeholder="Password">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="" required placeholder="Confirm Password">
                    <input type="hidden" value="nurse" name="table_name">
                    <input type="hidden" value="<?php echo $data['username'] ?>" name="username">
                    <input type="submit" value="Save Changes">
                    </form>
                </div>
               
            </div>

        </div>
</body>

</html>