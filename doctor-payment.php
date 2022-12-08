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
    <link rel="stylesheet" href="doctor-dashboard.css">
</head>

<body>
    <div class="contianer">
        <div class="header">
            <a href="">
                Payment
            </a>
            <div class="logout">
                
                <a href=""><h3> <i class="fa-solid fa-right-from-bracket"></i>Logout</h3></a>
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
                <li ><a href="doctor-dashboard.php"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
                    <li class="active_menu"><a href="doctor-payment.php"><i class="fa-solid fa-money-bill-1-wave"></i>Payemnt</a></li>
                    <li><a href="doctor-edit-profile.php"><i class="fa-solid fa-wrench"></i>Profile Settings</a></li>
                    <li><a href="doctor-password-change.php"><i class="fa-solid fa-key"></i>Change Password</a></li>
                </ul>
            </aside>
            <div class="dashboard_items">

                <div class="health_information">
                    <div class="information">
                        <div class="information_container">
                            
                            <h2>Total Withdraw</h2>
                            <h1>1500</h1>
                        </div>
                        <div class="information_container">
                            
                            <h2>Balance</h2>
                            <h1>12000</h1>
                        </div>
                       
                    </div>
                    
                </div>
                <div class="appointments_container ">
                    <h1>Salary Withdraw Information</h1>
                    <table >
                        <tr>
                            <th>Date</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                    
                            <td>
                                <p>19 Nov 2022</p>
                                <p>10:00 AM</p>
                            </td>
                            <td>
                                <p>500</p>
                            </td>
                                                   
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>

</html>