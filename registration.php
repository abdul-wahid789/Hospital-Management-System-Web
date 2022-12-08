<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;600;700&family=Open+Sans:wght@300;400&family=Poppins:wght@300;400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="registration.css">
</head>

<body>
    <div class="container">
        <div class="left">
            <div class="logo">
                <img src="images/icons/logo white.png" alt="">
                <div class="logo_text">
                    <h2>Elite Hospital</h2>
                </div>
            </div>
            <i class="fa-solid fa-user-doctor"></i>
            <div class="welcome_note">
                <h1>Hello Doctor</h1>
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
                        <h3>Upload Identiy</h3>
                        <p>Upload your identity for Verification</p>
                    </div>
                </li>
                <li>
                    <div class="number">
                        <p>3</p>
                    </div>
                    <div class="titles">
                        <h3>Personal Details</h3>
                        <p>Enter Your Personal Details</p>
                    </div>
                </li>
                <li>
                    <div class="number">
                        <p>4</p>
                    </div>
                    <div class="titles">
                        <h3>Doctor Verification</h3>
                        <p>Please fill up the Information</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="right">
            <div class="container_information" id="container_information_1">
                <h1>Account information<span style="color: red;">*</span></h1>
                <label for="username">Username</label>
                <input type="text" name="name" id="" required placeholder="Username">
                <label for="password">Password</label>
                <input type="password" name="password" id="" required placeholder="Password">
                <input type="submit" value="Continue" onclick="container2_visible()">
            </div>
            <div class="container_information" id="container_information_2">
                <h1>Personal Details<span style="color: red;">*</span></h1>
                <label for="full_name">Full Name</label>
                <input type="text" name="name" id="" required placeholder="Your name">

                <div class="row_wise_input">

                    <label for="gender">Gender</label>
                    <select name="gender" id="">
                        <option value="null">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="">
                </div>




                <label for="address">Address</label>
                <input type="text" name="address" id="" required placeholder="Your address">
                <div class="row_wise_input">
                    <input type="button" value="Back" onclick="container1_visible()">
                    <input type="submit" value="Register" onclick="">
                </div>
            </div>


        </div>
    </div>
    <script src="registration.js"></script>
</body>

</html>