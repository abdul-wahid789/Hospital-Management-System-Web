<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                    <img src="images/pic/my_pic.jpg" alt="">
                    <h3>Abdul Wahid</h3>
                    <p>
                        <i class="fa-solid fa-cake-candles"></i>
                        11 November 2001, 21 years
                    </p>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        Savar, Dhaka
                    </p>
                </div>
                <ul class="menu">
                <li ><a href="receptionist-dashboard.php"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
                    <li ><a href="receptionist-add-patient.php"><i class="fa-solid fa-hospital-user"></i>Add Patient</a></li>
                    <li><a href="receptionist-bill-add.php"><i class="fa-solid fa-money-bill-1-wave"></i>Billing</a></li>
                    <li><a href="receptionist-edit-profile.php"><i class="fa-solid fa-wrench"></i>Profile Settings</a></li>
                    <li class="active_menu"><a href="receptionist-password-change.php"><i class="fa-solid fa-key"></i>Change Password</a></li>
                </ul>
            </aside>
            <div class="dashboard_items">
                <div class="container_information" id="container_information_1">
                    <h1>Account information</h1>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="" required placeholder="Password">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="" required placeholder="Confirm Password">
                    <input type="submit" value="Save Changes">
                </div>
               
            </div>

        </div>
</body>

</html>