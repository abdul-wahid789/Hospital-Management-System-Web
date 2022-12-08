<?php
require_once("connection.php");
    $data = "";
    if(isset($_COOKIE['receptionist'])){
        $name = $_COOKIE['receptionist'];
        $query = "SELECT * FROM receptionist WHERE username='$name'";
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

    <link rel="stylesheet" href="patient-dashboard.css">
    <link rel="stylesheet" href="admin-dashboard.css">
    <link rel="stylesheet" href="admin-delete-people.css">
    <link rel="stylesheet" href="admin-search-people.css">

    <link rel="stylesheet" href="receptionist-dashboard.css">
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
                    <img src="images/pic/<?php echo $data['picture'] ?>" alt="">
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
                <li class="active_menu"><a href="receptionist-dashboard.php"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
                    <li ><a href="receptionist-add-patient.php"><i class="fa-solid fa-hospital-user"></i>Add Patient</a></li>
                    <li><a href="receptionist-bill-add.php"><i class="fa-solid fa-money-bill-1-wave"></i>Billing</a></li>
                    <li><a href="receptionist-edit-profile.php"><i class="fa-solid fa-wrench"></i>Profile Settings</a></li>
                    <li><a href="receptionist-password-change.php"><i class="fa-solid fa-key"></i>Change Password</a></li>
                </ul>
            </aside>
            <div class="dashboard_items">

                <div class="health_information">
           
                </div>
                <div class="appointments_container">
                    <h1>Search By Patient Name/Username/Email</h1>
                   
                    <div class="user_select_group">
                        <!-- <button class="doctor_show_btn" onclick="doctor_show()">Doctor</button>
                        <button class="receptionist_show_btn" onclick="recep_show()">Receptionist</button> -->
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
                    </div>
                    <h1>Patient appointment list</h1>
                    <div id="doctor_table">
                        <table class="doctor_table">
                            <tr>
                                <th>Doctor Name</th>
                                <th>Patient Name</th>
                                <th>Appointment Date</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td class="app_doctor_info">
                                    <img src="images/pic/my_pic.jpg" alt="">
                                    <div>
                                        <h3>Dr. Abdul Wahid</h3>
                                        <p>Cardiology</p>
                                    </div>
                                </td>
                                <td >
                                    <p>Abdul Wahid</p>

                                </td>
                                <td>
                                    <p>21 November 2022</p>
                                    <p>10:00 AM</p>
                                </td>
                                <td>
                                    <button class="approve">Confirm</button>
                                    <button class="reschedule">Reschedule</button>
                                    <button class="delete">Delete</button>
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
                                <td >
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