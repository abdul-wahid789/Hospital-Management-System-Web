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
</head>

<body>
    <div class="contianer">
        <div class="header">
            <a href="">
                Prescription
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

                <div class="health_information">
                    <div class="health_information">
                        <div class="information">
                            <div class="information_container">
                                <img src="https://img.icons8.com/color/48/null/heart-with-pulse.png" />
                                <h2>Heart Rate</h2>
                                <h2>12<sup>bpm</sup> </h2>
                            </div>
                            <div class="information_container">
                                <img src="https://img.icons8.com/office/48/null/thermometer.png" />
                                <h2>Body Temperature</h2>
                                <h2>98F</h2>
                            </div>
                            <div class="information_container">
                                <img src="https://img.icons8.com/doodle/48/null/diabetes.png" />
                                <h2>Glucose Level</h2>
                                <h2>70-90mg/dL</h2>
                            </div>
                            <div class="information_container">
                                <img src="https://img.icons8.com/color/48/null/tonometer.png" />
                                <h2>Blood Pressure</h2>
                                <h2>90/60mmHg</h2>
                            </div>
                        </div>
                        <div class="previous_records_group">
                            <a href="" class="previous_records">Previous Mediacal Records</a>
                            <a href="" class="previous_records">Previous Prescriptions</a>
                        </div>

                    </div>
                    <div class="appointments_container prescription_container">
                        <h1>Prescription</h1>
                        <table class="hospital_patient_info">
                            <tr>
                                <td rowspan="5">
                                    <div class="hospital_info">

                                        <div class="hospital_image">
                                            <img src="images/icons/blue logo.png" alt="">

                                        </div>
                                        <div class="hospital_name">
                                            <h2>Elite Hospital</h2>
                                            <p>Health Is Wealth</p>
                                            <p class="location">18/F, Bir Uttam <br>
                                                Qazi Nuruzzaman Sarak, <br>
                                                West Panthapath, Dhaka 1205</p>
                                        </div>

                                    </div>
                                    <div class="hospital_info">
                                        <img src="https://img.icons8.com/material-rounded/24/FFFFFF/marker.png" />

                                    </div>

                                </td>
                                <td>Prescription ID</td>
                                <td>PR0001</td>

                            </tr>
                            <tr>
                                <td>Patient Name</td>
                                <td>Abdul Wahid</td>
                            </tr>
                            <tr>
                                <td>Age</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>ID number</td>
                                <td>54664646</td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td>20 November 2022</td>
                            </tr>
                        </table>
                        <table class="prescription_table" id="doctor-prescription-table">
                            <tr>
                                <th>SL</th>
                                <th>Medicine Name</th>
                                <th>Frequency</th>
                                <th>Relation with Meal</th>
                            </tr>
                            <tr>
                                <td class="sl">
                                    1
                                </td>
                                <td>
                                    <input type="text" name="" id="medicine_1">
                                </td>
                                <td>
                                    <input type="text" name="" id="frequency_1">
                                </td>
                                <td>
                                    <input type="text" name="" id="relation_meal_1">
                                </td>
                            </tr>
                        </table>
                        <button onclick="prescrption_new_med()">Add New</button>
                        <button onclick="" class="prescription_save">Save</button>
                    </div>
                </div>
            </div>

        </div>
        <script src="doctor-prescription-add.js"></script>
</body>

</html>