<?php
require_once("connection.php");
$data = "";
$medical_data = '';

if (isset($_COOKIE['patient'])) {
    $name = $_COOKIE['patient'];
    $query = "SELECT * FROM patient WHERE username='$name'";
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
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link rel="stylesheet" href="patient-dashboard.css">
    <link rel="stylesheet" href="patient-appoinment.css">
    <link rel="stylesheet" href="patient-appoinment-new.css">
</head>

<body>
    <div class="contianer">
        <div class="header">
            <a href="">
                New Appointment
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
                    <li><a href="patient-dashboard.php"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
                    <li><a href="patient-appoinment-new.php" class="active_menu"><i class="fa-solid fa-calendar-check"></i>Appointments</a></li>
                    <li><a href="patient-prescription.php"><i class="fa-solid fa-prescription-bottle"></i>Prescription</a></li>
                    <li><a href="patient-medical-record.php"><i class="fa-regular fa-clipboard"></i>Medical Records</a></li>
                    <li><a href="patient-bill.php"><i class="fa-solid fa-money-bill-1-wave"></i>Billing</a></li>
                    <li><a href="patient-edit-profile.php"><i class="fa-solid fa-wrench"></i>Profile Settings</a></li>
                    <li><a href="patient-password-change.php"><i class="fa-solid fa-key"></i>Change Password</a></li>
                </ul>
            </aside>
            <div class="dashboard_items">
                <div class="appointments_container">
                    <h1>New Appointment</h1>
                    <!-- 88888888888888888888888888888888 -->

                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="serach_container">
                            <div class="row_wise">
                                <label for="department">Department</label>
                                <select name="department" id="">
                                    <option value="null">Select</option>
                                    <option value="cardiology">Cardiology</option>
                                    <option value="allergist ">Allergist </option>
                                    <option value="immunologist ">Immunologist </option>
                                </select>
                            </div>

                            <input type="submit" value="Search" name="serach" onclick="">
                        </div>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $doctor_info = '';
                        $search_value = $_POST['department'];
                        $query = "SELECT * FROM doctor WHERE department='$search_value'";
                        $query_res = mysqli_query($con, $query);
                        if (mysqli_num_rows($query_res) == 0) {
                        } else { ?>
                            <div class="doctor_suggestion_container">
                                
                                <?php while ($doctor_info = mysqli_fetch_assoc($query_res)) { ?>
                                    <div class="doctor_container">
                                        <img src="images/pic/<?php echo $doctor_info['picture'] ?>" alt="">
                                        <div class="doctor_info">
                                            <h2><?php echo $doctor_info['full_name'] ?></h2>
                                            <p>
                                                <strong>Speciality - </strong><?php echo $doctor_info['speciality'] ?>
                                            </p>
                                            <p>
                                                <strong>Degree - </strong><?php echo $doctor_info['degree'] ?>
                                            </p>
                                            <p class="payment">
                                                <strong>
                                                    <i class="fa-solid fa-dollar-sign"></i>
                                                </strong>
                                                500
                                            </p>
                                        </div>
                                        <a href="patient-appoinment-time.php?doctor_id=<?php echo $doctor_info['id']?>" class="get_appoint">Get Appointment</a>
                                    </div>
                                <?php } ?>

                            </div>

                        <?php } ?>

                    <?php } ?>


                </div>
            </div>
        </div>

    </div>
</body>

</html>