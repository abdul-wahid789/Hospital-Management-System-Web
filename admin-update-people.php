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
    <link rel="stylesheet" href="doctor-edit-profile.css">
    <link rel="stylesheet" href="doctor-registration">



    <link rel="stylesheet" href="patient-dashboard.css">
    <link rel="stylesheet" href="doctor-dashboard.css">
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="patient-edit-profile.css">
    <link rel="stylesheet" href="patient-registration.css">
    <link rel="stylesheet" href="doctor-registration.css">
    <link rel="stylesheet" href="doctor-edit-profile.css">


    <link rel="stylesheet" href="patient-dashboard.css">
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="paitent-edit-profile.css">

    <link rel="stylesheet" href="admin-add-people.css">
    <link rel="stylesheet" href="admin-delete-people.css">



</head>

<body>
    <div class="contianer">
        <div class="header">
            <a href="">
                Update People
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
                    <li><a href="admin-update-people.php" class="active_menu"><i class="fa-solid fa-pen-to-square"></i>Update People</a></li>
                    <li><a href="admin-delete-people.php" ><i class="fa-solid fa-trash"></i>Delete People</a></li>
                    <li><a href="admin-search-people.php"><i class="fa-solid fa-magnifying-glass"></i>Search</a></li>
                    <li><a href="admin-edit-profile.php"><i class="fa-solid fa-wrench"></i>Profile Settings</a></li>
                    <li><a href="admin-password-change.php"><i class="fa-solid fa-key"></i>Change Password</a></li>
                </ul>
            </aside>
            <div class="dashboard_items">

                <div class="health_information">
                    <div class="information">
                        <div class="information_container" onclick="show_doctor()">
                            <img src="https://img.icons8.com/color/48/null/doctor-male--v1.png" />
                            <h2>Update Doctor</h2>
                        </div>

                        <div class="information_container" onclick="show_patient()">
                            <img
                                src="https://img.icons8.com/external-smashingstocks-circular-smashing-stocks/48/null/external-patient-cancer-survivors-day-smashingstocks-circular-smashing-stocks-6.png" />
                            <h2>Update Patient</h2>

                        </div>
                        <div class="information_container" onclick="show_receptionist()">
                            <img src="https://img.icons8.com/officel/48/null/front-desk.png" />
                            <h2>Update Receptionist</h2>

                        </div>
                    </div>
                </div>
                <div class="appointments_container">

                    <div id="add_doctor">
                        <div class="search_module">
                            <label for="serach">Search by username</label>
                            <div class="text_field">
                                <input type="text" name="serach" placeholder="Enter Doctor username">
                                <input type="submit" value="Search">
                            </div>
                        </div>
                        <div class="dashboard_items right">

                            <div class="container_information" id="container_information_1">
                                <h1>Account information</h1>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="" required placeholder="Password">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" name="confirm_password" id="" required
                                    placeholder="Confirm Password">
                            </div>

                            <!-- 222222 -->
                            <div class="container_information" id="container_information_2">
                                <h1>Professional Details<span style="color: red;">*</span></h1>


                                <div>
                                    <label for="department">Department</label>
                                    <select name="gender" id="">
                                        <option value="null">Select</option>
                                        <option value="cardiology">Cardiology</option>
                                        <option value="nurology">Neurology</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="speciality ">Speciality</label>
                                    <input type="text" name="speciality" id="" placeholder="Speciality">
                                </div>
                                <div>
                                    <label for="degree">Degree</label>
                                    <input type="text" name="degree" id="" required placeholder="degrees">
                                </div>



                            </div>

                            <!-- 3333333 -->
                            <div class="container_information" id="container_information_3">
                                <h1>Personal Details<span style="color: red;">*</span></h1>
                                <div class="image_change">
                                    <img src="images/pic/my_pic.jpg" alt="" id="image_preview_doc">
                                    <input type="file" class="change_photo_btn change_photo_btn_doc" name="" id=""
                                        accept=".png,.jpg,.jpeg">

                                </div>
                                <label for="full_name">Full Name</label>
                                <input type="text" name="name" id="" required placeholder="Your name">

                                <div class="row_wise_input">
                                    <div>
                                        <label for="gender">Gender</label>
                                        <select name="gender" id="">
                                            <option value="null">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" name="dob" id="">
                                    </div>
                                    <div>
                                        <label for="blood_group">Blood Group</label>
                                        <select name="blood_group" id="">
                                            <option value="null">Select</option>
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
                                        <input type="email" name="email" id="" required placeholder="Your Email">
                                    </div>
                                    <div>
                                        <label for="phone">Phone number</label>
                                        <input type="tel" name="phone" id="" required placeholder="Phone number">
                                    </div>

                                </div>


                                <label for="address">Address</label>
                                <input type="text" name="address" id="" required placeholder="Your address">

                                <div class="row_wise_input">
                                    <input type="submit" value="Delete" onclick="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="right" id="add_patient">
                        <div class="search_module">
                            <label for="serach">Search by username</label>
                            <div class="text_field">
                                <input type="text" name="serach" placeholder="Enter Patient username">
                                <input type="submit" value="Search">
                            </div>
                        </div>
                        <div class="container_information" id="container_information_1">


                            <h1>Account information</h1>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="" required placeholder="Password">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="confirm_password" id="" required
                                placeholder="Confirm Password">
                        </div>
                        <div class="container_information" id="container_information_2">

                            <h1>Personal Details<span style="color: red;">*</span></h1>
                            <div class="image_change">
                                <img src="images/pic/my_pic.jpg" alt="" id="image_preview_patient">
                                <input type="file" class="change_photo_btn change_photo_btn_patient" name="" id=""
                                    accept=".png,.jpg,.jpeg">

                            </div>
                            <label for="full_name">Full Name</label>
                            <input type="text" name="name" id="" required placeholder="Your name">

                            <div class="row_wise_input">
                                <div>
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="">
                                        <option value="null">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" name="dob" id="">
                                </div>
                                <div>
                                    <label for="blood_group">Blood Group</label>
                                    <select name="blood_group" id="">
                                        <option value="null">Select</option>
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
                                    <input type="email" name="email" id="" required placeholder="Your Email">
                                </div>
                                <div>
                                    <label for="phone">Phone number</label>
                                    <input type="tel" name="phone" id="" required placeholder="Phone number">
                                </div>

                            </div>


                            <label for="address">Address</label>
                            <input type="text" name="address" id="" required placeholder="Your address">


                            <div class="row_wise_input">
                                <input type="submit" value="Delete" onclick="">
                            </div>

                        </div>
                    </div>

                    <div class="right" id="add_receptionist">
                        <div class="search_module">
                            <label for="serach">Search by username</label>
                            <div class="text_field">
                                <input type="text" name="serach" placeholder="Enter Receptionist username">
                                <input type="submit" value="Search">
                            </div>
                        </div>
                        <div class="container_information" id="container_information_1">

                            <h1>Account information</h1>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="" required placeholder="Password">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="confirm_password" id="" required
                                placeholder="Confirm Password">
                        </div>
                        <div class="container_information" id="container_information_2">

                            <h1>Personal Details<span style="color: red;">*</span></h1>
                            <div class="image_change">
                                <img src="images/pic/my_pic.jpg" alt="" id="image_preview_receptionist">
                                <input type="file" class="change_photo_btn change_photo_btn_receptionist" name="" id=""
                                    accept=".png,.jpg,.jpeg">

                            </div>
                            <label for="full_name">Full Name</label>
                            <input type="text" name="name" id="" required placeholder="Your name">

                            <div class="row_wise_input">
                                <div>
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="">
                                        <option value="null">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" name="dob" id="">
                                </div>
                                <div>
                                    <label for="blood_group">Blood Group</label>
                                    <select name="blood_group" id="">
                                        <option value="null">Select</option>
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
                                    <input type="email" name="email" id="" required placeholder="Your Email">
                                </div>
                                <div>
                                    <label for="phone">Phone number</label>
                                    <input type="tel" name="phone" id="" required placeholder="Phone number">
                                </div>

                            </div>


                            <label for="address">Address</label>
                            <input type="text" name="address" id="" required placeholder="Your address">


                            <div class="row_wise_input">
                                <input type="submit" value="Delete" onclick="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="admin-add-people.js"></script>
</body>

</html>