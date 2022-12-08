<?php
require_once("connection.php");
$data = "";
// $medical_data = '';
$medical_data = '';

if (isset($_COOKIE['patient'])) { //if cookie has patient
    $name = $_COOKIE['patient']; 
    $query = "SELECT * FROM patient WHERE username='$name'";
    $query_res = mysqli_query($con, $query); //query result
    $data = mysqli_fetch_assoc($query_res);
    $name = $_COOKIE['patient'];
    $pid = $data['id'];
    $query = "SELECT * FROM medical_record WHERE patient_id='$pid' order by date, time desc";
    $query_res = mysqli_query($con, $query);
    $medical_data = mysqli_fetch_assoc($query_res);

    

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="/images/icons/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="patient-dashboard.css">
</head>

<body>
    <div class="contianer">
        <div class="header">
            <a href="">
                Dashborad
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
                    <img src="<?php echo 'images/pic/' . $data['picture'] ?>" alt="">
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
                <li class="active_menu"><a href="patient-dashboard.php"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
                    <li><a href="patient-appoinment-new.php"><i class="fa-solid fa-calendar-check"></i>Appointments</a></li>
                    <li><a href="patient-prescription.php"><i class="fa-solid fa-prescription-bottle"></i>Prescription</a></li>
                    <li><a href="patient-medical-record.php"><i class="fa-regular fa-clipboard"></i>Medical Records</a></li>
                    <li><a href="patient-bill.php"><i class="fa-solid fa-money-bill-1-wave"></i>Billing</a></li>
                    <li><a href="patient-edit-profile.php"><i class="fa-solid fa-wrench"></i>Profile Settings</a></li>
                    <li><a href="patient-password-change.php"><i class="fa-solid fa-key"></i>Change Password</a></li>
                </ul>
            </aside>
            <div class="dashboard_items">

                <div class="health_information">
                    <div class="information">
                        <div class="information_container">
                            <img src="https://img.icons8.com/color/48/null/heart-with-pulse.png" />
                            <h2>Heart Rate</h2>

                            <h2><?php echo $medical_data['heart_rate'] ?><sup>bpm</sup> </h2>
                        </div>
                        <div class="information_container">
                            <img src="https://img.icons8.com/office/48/null/thermometer.png" />
                            <h2>Body Temperature</h2>
                            <h2><?php echo $medical_data['body_temp'] ?>F</h2>
                        </div>
                        <div class="information_container">
                            <img src="https://img.icons8.com/doodle/48/null/diabetes.png" />
                            <h2>Glucose Level</h2>
                            <h2><?php echo $medical_data['glue_lev'] ?>mg/dL</h2>
                        </div>
                        <div class="information_container">
                            <img src="https://img.icons8.com/color/48/null/tonometer.png" />
                            <h2>Blood Pressure</h2>
                            <h2><?php echo $medical_data['blood_p'] ?>mmHg</h2>
                        </div>
                    </div>
                    <h4>Last Update <?php echo $medical_data['date'] ?></h4>
                </div>
                <div class="appointments_container">
                    <h1>Appointments</h1>
                    <table>
                        <tr>
                            <th>Doctor</th>
                            <th>Appt Date</th>
                            <th>Booking Date</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <td class="app_doctor_info">
                                <img src="images/pic/my_pic.jpg" alt="">
                                <div>
                                    <h3>Dr. Abdul Wahid</h3>
                                    <p>Cardiology</p>
                                </div>
                            </td>
                            <td>
                                <p>19 Nov 2022</p>
                                <p>10:00 AM</p>
                            </td>
                            <td>
                                <p>12 Nov 2019</p>
                            </td>
                            <td>
                                <span>500</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>

</html>