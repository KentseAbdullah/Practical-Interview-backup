<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="styles.css">
    <title>User Panel</title>
</head>

<body>
    <div class="container">
        <div class="topbar">
            <div class="logo">
                <img src="images/icon/Capture.JPG" alt="">
            </div>
            <div class="search">
                <input type="text" name="search" placeholder="search here">
                <label for="search"><i class="fas fa-search"></i></label>
            </div>

            <a href="index.php" class="fas fa-sign-out-alt"></a>
            <div>Logout</div>
            
        </div>
        <div class="sidebar">
            <ul>
                <li>
                    <a href="userdashboard.php">
                        <i class="fas fa-th-large"></i>
                        <div>Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="userappointment.php">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <div>Make Appointment</div>
                    </a>
                </li>
                <li>
                    <a href=" ">
                        <i class="fas fa-chart-bar"></i>
                        <div>Company History</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-phone-alt"></i>
                        <div>Log-Call</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <div>Settings</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        <div>Help</div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number">1</div>
                        <div class="card-name">Chat Message</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">0</div>
                        <div class="card-name">Appointments</div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="number">0</div>
                        <div class="card-name">Calls you logged </div>
                    </div>
                    <div class="icon-box">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                </div>
            </div>
    
</body>

</html>