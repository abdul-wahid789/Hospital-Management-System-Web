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

                <a href="">
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
                <li class="active_menu"><a href="receptionist-dashboard.php"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
                    <li ><a href="receptionist-add-patient.php"><i class="fa-solid fa-hospital-user"></i>Add Patient</a></li>
                    <li><a href="receptionist-bill-add.php"><i class="fa-solid fa-money-bill-1-wave"></i>Billing</a></li>
                    <li><a href="receptionist-edit-profile.php"><i class="fa-solid fa-wrench"></i>Profile Settings</a></li>
                    <li><a href="receptionist-password-change.php"><i class="fa-solid fa-key"></i>Change Password</a></li>
                </ul>
            </aside>
            <div class="dashboard_items">
                <div class="appointments_container">

                    <!-- 88888888888888888888888888888888 -->


                    <div class="doctor_container">
                        <img src="images/pic/my_pic.jpg" alt="">
                        <div class="doctor_info">
                            <h2>Dr Abdul Wahid</h2>
                            <p>
                                <strong>Speciality - </strong>Senior Consultant, Cardiac Surgery
                            </p>
                            <p>
                                <strong>Degree - </strong>MBBS, MS
                            </p>
                        </div>
                        <table class="appointment_time">
                            <tr>
                                <th>Choose Appointment Date</th>
                                <th>Choose Appointment Time</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="date" id="">
                                    20 November 2022
                                </td>
                                <td>
                                    <input type="radio" name="time" id="">
                                    10:00AM - 10:30AM
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="date" id="">
                                    20 November 2022
                                </td>
                                <td>
                                    <input type="radio" name="time" id="">
                                    10:30AM - 11:00AM
                                </td>
                            </tr>
                        </table>
                        <a href="" class="get_appoint">Confirm Appointment</a>
                    </div>




                </div>
            </div>
        </div>

    </div>
</body>

</html>