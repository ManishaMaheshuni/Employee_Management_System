<!DOCTYPE Php>
<Php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="stylesheet" href="../CSS/sidebar.css">
    <link rel="stylesheet" href="/Basic_details_css/basic-details.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- sidebar profile name font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- sidebar profile name font -->
    <!-- font awesome 6.5.0 cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awesome 6.5.0 cdn -->
    <title>Dashboard</title>
</head>
<!-- JavaScript funtion for login page -->
<script>
     function redirectToLogin(){
    window.location.assign("../Php/login.php");
  }
</script>
<body>
    <div class="main">
        <div class="sidebar" style="position: fixed;">
            <div class="sidebar-ofcname">
                <h3 class="sidebar-ofcname-head"> Techiebears</h3>

            </div>
            <hr>
            <div class="sidebar-profile">
                <div class="sidebar-profile-img ">
                    <img src="../img/profile.jpg" alt="">
                </div>
                <div class="sidebar-profile-name">
                    <h6>Alexdar noel</h6>
                    <p>Employee</p>
                    <hr>
                </div>
                <div class="sidebar-menus">
                    <div class="dashboard flex-center grey-bg-hover">
                        <i class="fa-sharp fa-solid fa-table-columns active-desgin"></i>
                        <a class="active-desgin" href="/Php/dashboard.php">Dashboard</a>
                    </div>
                    <div class="attendance flex-center grey-bg-hover">
                        <i class="fa-regular fa-calendar"></i>
                        <a href="../Php/attendance.php">Attendance</a>
                    </div>
                    <div class="leaves flex-center grey-bg-hover">
                        <i class="fa-solid fa-person-walking-luggage"></i>
                        <a href="../Php/leaves.php">Leaves</a>
                    </div>
                    <div class="basic-details flex-center grey-bg-hover">
                        <i class="fa-regular fa-address-card"></i>
                        <a href="../Php/basic-details.php">Basic Details</a>
                    </div>
                    <div class="holidays flex-center grey-bg-hover">
                        <i class="fa-regular fa-calendar-xmark"></i>
                        <a href="../Php/holidays.php">Holidays</a>
                    </div>
                    <div class="salary-slip flex-center grey-bg-hover">
                        <i class="fa-solid fa-toilet-paper"></i>
                        <a href="../Php/salary-slips.php">Salary Slips</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-page" style="position: relative; left: 13rem;"> 
            <div class="dashboard-head">
                <div class="head-part1">
                    <div class="date">
                        <h3>Tuesday, 20 Feburuary 2023</h3>
                    </div>
                    <div class="thought">
                        <h1>Good Morning, <span>Alexdar Noel.</span></h1>
                    </div>
                </div>
                <div class="buttons-div">
                    <!-- warning popup button/icon -->
                    <div class="logout">
                        <button onclick="showPopup()"><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
                    </div>
                    <!-- warning popup button/icon -->
                    <!-- toggle button/icon -->
                    <div class="toggle-on">
                        <i class="fa-solid fa-toggle-on" onclick="showLogoutConfirmation()"></i>
                    </div>
                    <!-- toggle button/icon -->
                </div>
            </div>
            <!-- warning popup -->
            <div class="overlay" onclick="hidePopup()"></div>
            <div class="popup" id="warningPopup">
                <h2>Warning!</h2>
                <p>Would you like to log out</p>
                <button onclick="hidePopup()">No</button>
                <button onclick="redirectToLogin()">Yes</button>
            </div>
            <!-- warning popup -->
            <!-- logout popup -->
            <div class="logout-overlay" onclick="hideLogoutConfirmation()"></div>
            <div class="logout-popup" id="logoutConfirmation">
                <h6>LOGOUT</h6>
                <hr>
                <p>Type :</p>
                <div class="logout-options">
                    <select name="logout-type">
                        <option value="Options">Options...</option>
                        <option value="lunch-break">Lunch Break</option>
                        <option value="tea-break">Tea Break</option>
                        <option value="other">Other Break</option>
                        <option value="other">Session Logout</option>
                    </select>
                </div>
                <div class="logout-button">
                    <div class="logout-button-yes">
                        <button onclick="showPopup()">Yes</button>
                    </div>
                    <div class="logout-button-no">
                        <button onclick="hideLogoutConfirmation()">No</button>
                    </div>
                </div>
            </div>
            <!-- logout popup -->
            <!-- remarks -->
            <div class="remarks">
                <div class="latemarks">
                    <div class="latemarks-count">
                        <h3>Late Marks</h3>
                        <h2 class="latemarks-count-number">24</h2>
                    </div>
                    <div class="latemarks-symbol">
                        <i class="fa-regular fa-calendar-check"></i>
                    </div>
                </div>
                <div class="early-leave">
                    <div class="early-leave-count">
                        <h3>Early Leaves</h3>
                        <h2 class="early-leave-count-number">31</h2>
                    </div>
                    <div class="early-leave-symbol">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </div>
                </div>
                <div class="overtime">
                    <div class="overtime-count">
                        <h3>Overtime</h3>
                        <h2 class="overtime-count-number">0 Hrs 0 Mins</h2>
                    </div>
                    <div class="overtime-symbol">
                        <i class="fa-regular fa-clock"></i>
                    </div>
                </div>
                <div class="total-rewards">
                    <div class="total-rewards-count">
                        <h3>Rewards</h3>
                        <h2 class="total-rewards-counts">500</h2>
                    </div>
                    <div class="total-rewards-symbol">
                        <i class="fa-solid fa-trophy"></i>
                    </div>
                </div>
            </div>
            <!-- remarks -->
            <!-- statistics -->
            <div class="statistics-main">
                <div class="statistics-count">
                    <i class="fa-solid fa-chart-pie"></i>
                    <h2>Statistics</h2>
                    <h3>Your statistics for <span>1 Year</span> Period</h3>

                </div>
                <div class="privilage-leaves">
                    <div class="privilage-leaves-symbol">
                        <i class="fa-regular fa-calendar-check"></i>
                    </div>
                    <div class="privilage-leaves-count">
                        <h2 class="privilage-leaves-count-number">12/12</h2>
                    </div>
                    <div class="privilage-leaves-head">
                        <h3>Privilage Leaves</h3>
                    </div>
                </div>
                <div class="comp-off">
                    <div class="comp-off-symbol">
                        <i class="fa-solid fa-circle-notch"></i>
                    </div>
                    <div class="comp-off-count">
                        <h2 class="comp-off-count-number">0</h2>
                    </div>
                    <div class="comp-off-head">
                        <h3>Comp Off</h3>
                    </div>
                </div>
                <div class="sick-leaves">
                    <div class="sick-leaves-symbol">
                        <i class="fa-solid fa-house-medical"></i>
                    </div>
                    <div class="sick-leaves-count">
                        <h2 class="sick-leaves-count-number">5/5</h2>
                    </div>
                    <div class="sick-leaves-head">
                        <h3>Sick Leaves</h3>
                    </div>
                </div>
            </div>
            <!-- statistics -->
            <!-- today -->
            <div class="today">
                <div class="today-head">
                    <h2>Today </h2>
                    <i class="fa-regular fa-clipboard"></i>
                </div>
                <div class="today-body">
                    <div class="date flex-coloum-center">
                        <h6>2024-02-20</h6>
                    </div>
                    <div class="week flex-coloum-center">
                        <h6>Tuesday</h6>
                    </div>
                    <div class="time flex-coloum-center">
                        <h6>10:23 am </h6>
                    </div>
                    <div class="in-out flex-coloum-center">
                        <h6>Please Log out</h6>
                    </div>
                    <div class="comment flex-coloum-center">
                        <h6><i class="fa-regular fa-message"></i></h6>
                    </div>
                    <div class="process flex-coloum-center">
                        <button>Working...</button>
                    </div>
                </div>
            </div>
            <!-- today -->
        </div>
    </div>
    <script src="../JS/dashboard.js"></script>
</body>

</Php>