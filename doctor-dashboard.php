<?php
require_once("connection.php");
$data = "";
// $medical_data = '';
$appoint = '';

if (isset($_COOKIE['doctor'])) {
    $name = $_COOKIE['doctor'];
    $query = "SELECT * FROM doctor WHERE username='$name'";
    $query_res = mysqli_query($con, $query);
    $data = mysqli_fetch_assoc($query_res);
    $name = $_COOKIE['doctor'];
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="patient-dashboard.css">
    <link rel="stylesheet" href="doctor-dashboard.css">
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
                    <img src="images/pic/<?php echo $data['picture'] ?> " alt="">
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
                    <li class="active_menu"><a href="doctor-dashboard.php"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
                    <li><a href="doctor-payment.php"><i class="fa-solid fa-money-bill-1-wave"></i>Payemnt</a></li>
                    <li><a href="doctor-edit-profile.php"><i class="fa-solid fa-wrench"></i>Profile Settings</a></li>
                    <li><a href="doctor-password-change.php"><i class="fa-solid fa-key"></i>Change Password</a></li>
                </ul>
            </aside>
            <div class="dashboard_items">

                <!-- <div class="health_information">
                    <div class="information">
                        <div class="information_container">
                            
                            <h2>Total Patient</h2>
                            <h1>1500</h1>
                            <p>Till Today</p>
                        </div>
                        <div class="information_container">
                            
                            <h2>Today's Patient</h2>
                            <h1>15</h1>
                            <p>20 Nov 2022</p>
                        </div>
                       
                    </div>
                    
                </div>
                -->
                <div class="appointments_container">
                    <h1 style="margin-top: 3vh;">Today's Patient</h1>
                    <table>
                        <tr>
                            <th>Patient Name</th>
                            <th>Appt Date</th>


                        </tr>
                        <?php
                        if (true) {
                            $doctor_info = '';
                            $doc_id = $data['id'];
                            $query = "SELECT * FROM appointment 
                            INNER JOIN patient ON appointment.patient_id=patient.id 
                            WHERE doc_id='$doc_id'";
                            $query_res = mysqli_query($con, $query);
                            if (mysqli_num_rows($query_res) == 0) {
                            } else { //two brack
                        ?>
                        
                                <tr>
                                    <?php
                                    while ($appoint = mysqli_fetch_assoc($query_res)) {
                                    ?>
                                        <td class="app_doctor_info app_patient_info">
                                            <img src="images/pic/<?php echo $appoint['picture'] ?>" alt="">
                                            <div>
                                                <h3><?php echo $appoint['full_name'] ?></h3>
                                            </div>
                                        </td>
                                        <td>
                                            <p><?php echo $appoint['date'] ?></p>
                                            <p><?php echo $appoint['time'] ?></p>
                                        </td>

                                </tr>

                    <?php }
                                }
                            } ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>

</html>