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
    <link rel="stylesheet" href="patient-prescription.css">
    <link rel="stylesheet" href="patient-dashboard.css">
    <link rel="stylesheet" href="admin-dashboard.css">

    <link rel="stylesheet" href="patient-dashboard.css">
    <link rel="stylesheet" href="admin-dashboard.css">
    <link rel="stylesheet" href="admin-delete-people.css">
    <link rel="stylesheet" href="admin-search-people.css">

    <link rel="stylesheet" href="receptionist-dashboard.css">
    <link rel="stylesheet" href="pharmacist-dashboard.css">
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
                    <img src="images/pic/my_pic.jpg" alt="">
                    <h3>Abdul Wahid Recep</h3>
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
                    <li class="active_menu"><a href="pharmacist-dashbord.php"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
                    <li><a href="pharmacist-edit-profile.php"><i class="fa-solid fa-wrench"></i>Profile Settings</a></li>
                    <li><a href="pharmacist-password-change.php"><i class="fa-solid fa-key"></i>Change Password</a></li>
                </ul>
            </aside>
            <div class="dashboard_items">

                <div class="health_information">

                </div>
                <div class="appointments_container">
                    <h1>Search By Patient Username</h1>

                    <div class="user_select_group">
                        <!-- <button class="doctor_show_btn" onclick="doctor_show()">Doctor</button>
                        <button class="receptionist_show_btn" onclick="recep_show()">Receptionist</button> -->
                        <div class="search_module">
                            <!-- <label for="serach">Search by username</label> -->


                            <div class="text_field">
                                <input type="text" name="serach" placeholder="Username">
                                <input type="submit" value="Search">
                            </div>

                        </div>
                    </div>
                    <h1>Patient Prescription list</h1>


                    <div class="appointments_container">
                        <table>
                            <tr>
                                <th>Doctor</th>
                                <th>Date</th>
                                <th>View</th>
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
                                    <a href="pharmacist-prescription-details.php"><button class="view_pres">View</button></a>
                                </td>

                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="admin-dashboard.js"></script>
</body>

</html>