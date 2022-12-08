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
    <link rel="stylesheet" href="admin-dashboard.css">
    <link rel="stylesheet" href="admin-delete-people.css">
    <link rel="stylesheet" href="admin-search-people.css">
</head>

<body>
    <div class="contianer">
        <div class="header">
            <a href="">
                Search People
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
                    <h3>Abdul Wahid Admin</h3>
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
                <li><a href="admin-dashboard.php"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
                    <li><a href="admin-add-people.php"><i class="fa-solid fa-plus"></i>Add People</a></li>
                    <li><a href="admin-update-people.php"><i class="fa-solid fa-pen-to-square"></i>Update People</a></li>
                    <li><a href="admin-delete-people.php" ><i class="fa-solid fa-trash"></i>Delete People</a></li>
                    <li><a href="admin-search-people.php" class="active_menu"><i class="fa-solid fa-magnifying-glass"></i>Search</a></li>
                    <li><a href="admin-edit-profile.php"><i class="fa-solid fa-wrench"></i>Profile Settings</a></li>
                    <li><a href="admin-password-change.php"><i class="fa-solid fa-key"></i>Change Password</a></li>
                </ul>
            </aside>
            <div class="dashboard_items">

                <div class="health_information">
                    <div class="information">
                        <div class="information_container">
                            <img src="https://img.icons8.com/color/48/null/doctor-male--v1.png" />
                            <h2>Total Doctor</h2>
                            <h2>15</h2>
                        </div>
                        <div class="information_container">
                            <img
                                src="https://img.icons8.com/external-smashingstocks-circular-smashing-stocks/48/null/external-patient-cancer-survivors-day-smashingstocks-circular-smashing-stocks-6.png" />
                            <h2>Total Patient</h2>
                            <h2>15</h2>
                        </div>
                        <div class="information_container">
                            <img src="https://img.icons8.com/officel/48/null/front-desk.png" />
                            <h2>Total Receptionist</h2>
                            <h2>15</h2>
                        </div>
                    </div>
                </div>
                <div class="appointments_container">
                    <h1>Search By Name/Username/Email</h1>
                    <div class="search_module">
                        <!-- <label for="serach">Search by username</label> -->
                        <div class="method_container">
                            <div class="name">
                                <input type="radio" name="search_method">
                                <label for="name">Name</label>
                            </div>
                            <div class="username">

                                <input type="radio" name="search_method">
                                <label for="username">Username</label>
                            </div>

                            <div class="email">

                                <input type="radio" name="search_method">
                                <label for="Email">Email</label>
                            </div>
                        </div>

                        <div class="text_field">
                            <input type="text" name="serach" placeholder="">
                            <input type="submit" value="Search">
                        </div>

                    </div>
                    <div id="doctor_table">
                        <table class="doctor_table">
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>Address</th>
                            </tr>
                            <tr>
                                <td class="app_doctor_info">
                                    <img src="images/pic/my_pic.jpg" alt="">
                                    <h3>Dr. Abdul Wahid</h3>

                                </td>
                                <td>
                                    <p>abdul_wahid</p>

                                </td>
                                <td>
                                    <p>12345</p>
                                </td>
                                <td>
                                    <p>wahid@gmail.com</p>
                                </td>
                                <td>
                                    <p>Savar, Dhaka</p>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="receptionist_table">
                        <table class="receptionist_table">
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td class="app_doctor_info receptionist_info">
                                    <img src="images/pic/my_pic.jpg" alt="">

                                    <h3>Abdul Wahid Recep</h3>


                                </td>
                                <td>
                                    <p>abdul_wahid</p>

                                </td>
                                <td>
                                    <p>wahid@gmail.com</p>
                                </td>
                                <td>
                                    <button class="approve">Approve</button>
                                    <button class="delete">Delete</button>
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