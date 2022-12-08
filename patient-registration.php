<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;600;700&family=Open+Sans:wght@300;400&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="patient-edit-profile.css">
    <link rel="stylesheet" href="patient-registration.css">

</head>

<body>
    <div class="container">
        <div class="left">
            <div class="logo">
                <a href="index.php">
                    <img src="images/icons/logo white.png" alt="">
                </a>
                <div class="logo_text">
                    <h2>Elite Hospital</h2>
                </div>
            </div>
            <i class="fa-solid fa-person"></i>
            <div class="welcome_note">
                <h1>Patient</h1>
                <p>Please fill up all the information for registration</p>
            </div>
        </div>
        <div class="middle">
            <ul>
                <li>
                    <div class="number">
                        <p>1</p>
                    </div>
                    <div class="titles">
                        <h3>Account Information</h3>
                        <p>Enter Details for Register</p>
                    </div>
                </li>

                <li>
                    <div class="number">
                        <p>2</p>
                    </div>
                    <div class="titles">
                        <h3>Personal Details</h3>
                        <p>Enter Your Personal Details</p>
                    </div>
                </li>

            </ul>
        </div>
        <div class="right">
            <form action="user-add.php" method="POST" enctype="multipart/form-data">

                <div class="container_information" id="container_information_1">
                    <h1>Account information<span style="color: red;">*</span></h1>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="" required placeholder="Username">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="" required placeholder="Password">
                    <input type="submit" value="Continue" onclick="container2_visible()">
                </div>
                <div class="container_information" id="container_information_2">
                    <h1>Personal Details<span style="color: red;">*</span></h1>
                    <div class="image_change">
                        <img src="images/pic/my_pic.jpg" alt="" id="image_preview">
                        <input type="file" class="change_photo_btn" name="image" id="" accept="image/png, image/jpg, imgage/jpeg" required>

                    </div>
                    <label for="full_name">Full Name</label>
                    <input type="text" name="full_name" id="" required placeholder="Your name">

                    <div class="row_wise_input">
                        <div>
                            <label for="gender">Gender</label>
                            <select name="gender" id="" required>
                                <option value="null">Select</option>
                                <option value="Male">Male</option>
                                <option value="Male">Female</option>
                            </select>
                        </div>
                        <div>
                            <label for="dob">Date of Birth</label>
                            <input type="date" name="dob" id="">
                        </div>
                        <div>
                            <label for="blood_group">Blood Group</label>
                            <select name="blood_group" id="" required>
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
                    <input type="hidden" value="patient" name="table_name" hidden>
                    <div class="row_wise_input">
                        <input type="button" value="Back" onclick="container1_visible()">
                        <input type="submit" value="Register">
                    </div>
                </div>
            </form>

        </div>
    </div>

    <style>
        .parent-alert {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, .3);
            display: none;

        }

        .alert-box {
            width: 400px;
            height: 300px;
            background-color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 2em;
        }

        .fa-circle-check {
            font-size: 100px;
            color: #71C342;
        }

        .fa-triangle-exclamation {
            color: #e80e0e;
            font-size: 100px;
        }

        .alert-box h1 {
            font-weight: 300;
            margin-top: .50em;
        }

        .alert-box button {
            width: 80%;
            background-color: #0C4F8A;
            padding: 10px;
            border: none;
            color: white;
            font-size: 15px;
            font-weight: 900;
            border-radius: 2em;
            margin-top: 1em;
            letter-spacing: 2px;
            cursor: pointer;
        }

        .alert-box button:hover {
            background-color: #083761;
        }
    </style>

    <?php
    if (isset($_REQUEST['failed']) or isset($_REQUEST['successfull'])) {
    ?>
        <style>
            .parent-alert {
                display: block;
            }
        </style>
        <div class="parent-alert">
            <div class="alert-box">
                <p style="color: red;">
                    <?php
                    if (isset($_REQUEST['failed'])) {
                    ?>
                        <i class="fa-solid fa-triangle-exclamation"></i>
                <h1>ERROR</h1>

            <?php
                    } else if (isset($_REQUEST['successfull'])) {
            ?>

                <i class="fa-solid fa-circle-check"></i>
                <h1>Success</h1>
                <?php echo '<script>window.location.href="login.html"</script>';?>
            <?php
                        
                    }
            ?>
            </p>
            <button onclick="hiddenError()">OK</button>
  
            </div>
        </div>
    <?php
    }

    ?>


    <script>
        function hiddenError() {
            let selector = document.querySelector(".parent-alert")
            selector.style.display = "none"
            // window.location.href="login.html"
        }
    </script>

    <!-- <script src="patient-edit-profile.js"></script> -->
    <script src="patient-registration.js"></script>
</body>

</html>