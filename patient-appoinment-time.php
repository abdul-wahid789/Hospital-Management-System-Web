<?php
require_once("connection.php");
date_default_timezone_set("Asia/Dhaka");
$data = "";
$medical_data = '';
$doctor_info = '';
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
    <link rel="stylesheet" href="patient-appoinment-time.css">
</head>

<body>
    <div class="contianer">
        <div class="header">
            <a href="">
                Appointment Time
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
                <?php
                if (isset($_REQUEST['doctor_id'])) {
                    $doctor_id = $_REQUEST['doctor_id'];

                    $query = "SELECT * FROM doctor WHERE id='$doctor_id'";
                    $query_res = mysqli_query($con, $query);
                    $doctor_info = mysqli_fetch_assoc($query_res);
                }
                ?>
                <div class="appointments_container">

                    <!-- 88888888888888888888888888888888 -->


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
                        </div>
                        <table class="appointment_time">
                            <tr>
                                <th>Choose Appointment Date</th>
                                <th>Choose Appointment Time</th>
                            </tr>
                            <tr>
                                <form action="appointment-add.php" method="post">
                                    <td>
                                        <input type="radio" name="date" id="" value="<?php echo date("Y-m-d") ?>">
                                        <?php echo date("Y-m-d") ?>
                                    </td>
                                    <td>
                                        <input type="radio" name="time" value="10:00AM - 10:30AM" id="">
                                        10:00AM - 10:30AM
                                    </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="date" value="<?php echo date("Y-m-d") ?>" id="">
                                    <?php echo date("Y-m-d") ?>
                                </td>
                                <td>
                                    <input type="radio" name="time" value="10:30AM - 11:00AM" id="">
                                    10:30AM - 11:00AM
                                </td>
                            </tr>

                            
                        </table>
                        <input type="hidden" name="doctor_id" value="<?php echo $doctor_info['id'] ?>" id="">
                        <input type="hidden" name="table_name" value="appointment" id="">
                        <input type="hidden" name="patient_id" value="<?php echo $data['id'] ?>" id="">
                        <input type="submit" value="Submit" style="padding: .80em;
    background-color: rgb(48, 193, 87);
    color: white;
    border-radius: 3px;
    border: none;
    margin-top: 2em;">
                        </form>

                    </div>




                </div>
            </div>
        </div>

    </div>
</body>

</html>