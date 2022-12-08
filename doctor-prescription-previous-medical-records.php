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
    <link rel="stylesheet" href="patient-prescription-details.css">
    <link rel="stylesheet" href="doctor-prescription-add.css">
    <link rel="stylesheet" href="doctor-dashboard.css">
    <link rel="stylesheet" href="doctor-prescription-previous-medical-records.css">
</head>

<body>
    <div class="contianer">
        <div class="header">
            <a href="">
                Medical Records
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
                    <h3>Dr. Abdul Wahid</h3>
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
                    <li class="active_menu"><a href=""><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
                    <li><a href=""><i class="fa-solid fa-calendar-check"></i>Appointments</a></li>
                    <li><a href=""><i class="fa-solid fa-prescription-bottle"></i>Prescription</a></li>
                    <li><a href=""><i class="fa-regular fa-clipboard"></i>Medical Records</a></li>
                    <li><a href=""><i class="fa-solid fa-money-bill-1-wave"></i>Billing</a></li>
                    <li><a href=""><i class="fa-solid fa-wrench"></i>Profile Settings</a></li>
                    <li><a href=""><i class="fa-solid fa-key"></i>Change Password</a></li>
                </ul>
            </aside>
            <div class="dashboard_items">
                <div class="appointments_container doctor-medical-records">
                    <div class="heading">

                        <a href="" class="back_btn">
                            <i class="fa-regular fa-left-long"></i>
                            <p>Back to Prescription</p>
                        </a>

                        <h1>Medical Records of Abdul Wahid</h1>
                    </div>
                    <table>
                        <tr>
                            <th>Doctor</th>
                            <th>Heart Rate</th>
                            <th>Body Temperature</th>
                            <th>Glucose Level</th>
                            <th>Blood Pressure</th>
                            <th>Weight</th>
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
                                <p>12</p>

                            </td>
                            <td>
                                <p>98</p>
                            </td>
                            <td>
                                <p>70-90</p>
                            </td>
                            <td>
                                <p>90/60</p>
                            </td>
                            <td>
                                <p>50</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <script src="doctor-prescription-add.js"></script>
</body>

</html>