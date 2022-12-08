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
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                Edit Profile
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
                    <li class="active_menu"><a href="nurse-edit-profile.php"><i class="fa-solid fa-wrench"></i>Profile Settings</a></li>
                    <li><a href="nurse-password-change.php"><i class="fa-solid fa-key"></i>Change Password</a></li>
                </ul>
            </aside>
            <div class="dashboard_items">
                <div class="container_information" id="container_information_2">
                    <form action="data-update.php" method="post">
                        <h1>Personal Details<span style="color: red;">*</span></h1>
                        <div class="image_change">
                            <img src="images/pic/<?php echo $data['picture'] ?>" alt="" id="image_preview">
                            <!-- <input type="file" class="change_photo_btn" name="" id="" accept=".png,.jpg,.jpeg"> -->

                        </div>
                        <label for="full_name">Full Name</label>
                        <input type="text" name="name" id="" value="<?php echo $data['full_name'] ?>" required placeholder="Your name">

                        <div class="row_wise_input">
                            <div>
                                <label for="gender">Gender</label>
                                <select name="gender" id="">
                                    <option value="<?php echo $data['gender'] ?>"><?php echo $data['gender'] ?></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>

                            </div>
                            <div>
                                <label for="dob">Date of Birth</label>
                                <input type="date" name="dob" id="" value="<?php echo $data['dob'] ?>">
                            </div>
                            <div>
                                <label for="blood_group">Blood Group</label>
                                <select name="blood_group" id="">
                                    <option value="<?php echo $data['blood_group'] ?>"><?php echo $data['blood_group'] ?></option>
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="O+">O+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="O-">O-</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                        </div>
                        <div class="row_wise_input">

                            <div>
                                <label for="email">Email</label>
                                <input type="email" name="email" id="" required placeholder="Your Email" value="<?php echo $data['email'] ?>">
                            </div>
                            <div>
                                <label for="phone">Phone number</label>
                                <input type="tel" name="phone" id="" required placeholder="Phone number" value="<?php echo $data['phone'] ?>">
                            </div>

                        </div>


                        <label for="address">Address</label>
                        <input type="text" name="address" id="" required placeholder="Your address" value="<?php echo $data['address'] ?>">
                        <input type="hidden" value="nurse" name="table_name">
                        <input type="hidden" value="<?php echo $data['username'] ?>" name="username">

                        <div class="row_wise_input">
                            <input type="submit" value="Save Changes" onclick="">
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <script src="paitent-edit-profile.js"></script>
</body>

</html>