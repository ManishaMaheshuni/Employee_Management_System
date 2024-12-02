<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/sidebar.css">
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
    <link rel="stylesheet" href="../CSS/leaves.css">

    <title>Leaves</title>
</head>
<!-- JavaScript funtion for login page -->
<script>
     function redirectToLogin(){
    window.location.assign("../Php/login.php");
  }
</script>
<body>
    <div class="leaves-main" id="leaves-main">
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
                        <i class="fa-sharp fa-solid fa-table-columns"></i>
                        <a href="../Php/dashboard.php">Dashboard</a>
                    </div>
                    <div class="attendance flex-center grey-bg-hover">
                        <i class="fa-regular fa-calendar"></i>
                        <a href="../Php/attendance.php">Attendance</a>
                    </div>
                    <div class="leaves flex-center grey-bg-hover">
                        <i class="fa-solid fa-person-walking-luggage active-desgin"></i>
                        <a class="active-desgin" href="../Php/leaves.php">Leaves</a>
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
        <div class="leaves-body" style="position: relative; left: 13rem;">
            <div class="leaves-heading-part">
                <div class="leaves-heading">
                    <i class="fa-solid fa-person-walking-luggage"></i>
                    <a href="#">Leaves</a>
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
            <div class="table-div">
                <div class="apply-button">
                    <button type="button" id="openBtn">Apply Leaves <i
                            class="fa-solid fa-person-walking-luggage"></i>
                    </button>
                </div>
                <div class="table-mainn-div">
                    <table class="main-table">
                        <tr class="table-head">
                            <th class="applydate">Apply Date</th>
                            <th class="startdate">Start Date</th>
                            <th class="end-date">End Date</th>
                            <th class="leave-duration">Leave Durations</th>
                            <th class="leave-type">Leave Type</th>
                            <th class="leave-reason">Leave Reason</th>
                            <th class="leave-status">Leave status</th>
                        </tr>
                        <tr>
                            <td class="applydate1">1-02-2023</td>
                            <td class="startdate1">4-02-2024</td>
                            <td class="end-date1">6-02-2024</td>
                            <td class="leave-duration1">3 days pm</td>
                            <td class="leave-type1">Sick leave</i></td>
                            <td class="leave-reason">fever</td>
                            <td class="leave-status1"><button>Approved...</button></td>
                        </tr>
                        <tr>
                            <td class="applydate2">1-02-2023</td>
                            <td class="startdate2">4-02-2024</td>
                            <td class="end-date2">6-02-2024</td>
                            <td class="leave-duration2">3 days pm</td>
                            <td class="leave-type2">Sick leave</i></td>
                            <td class="leave-reason">Sick leave</td>
                            <td class="leave-status2"><button>Approved...</button></td>
                        </tr>
                        <tr>
                            <td class="applydate3">1-02-2023</td>
                            <td class="startdate3">4-02-2024</td>
                            <td class="end-date3">6-02-2024</td>
                            <td class="leave-duration3">3 days pm</td>
                            <td class="leave-type3">Privilage leave</i></td>
                            <td class="leave-reason">travel</td>
                            <td class="leave-status3"><button>Approved...</button></td>
                        </tr>
                        <tr>
                            <td class="applydate4">1-02-2023</td>
                            <td class="startdate4">4-02-2024</td>
                            <td class="end-date4">6-02-2024</td>
                            <td class="leave-duration4">3 days pm</td>
                            <td class="leave-type4">Privilage leave</i></td>
                            <td class="leave-reason">travel</td>
                            <td class="leave-status4"><button>Approved...</button></td>
                        </tr>
                        <tr>
                            <td class="applydate5">1-02-2023</td>
                            <td class="startdate5">4-02-2024</td>
                            <td class="end-date5">6-02-2024</td>
                            <td class="leave-duration5">3 days pm</td>
                            <td class="leave-type5">Privilage leave</i></td>
                            <td class="leave-reason">travel</td>
                            <td class="leave-status5"><button>Approved...</button></td>
                        </tr>
                        <tr>
                            <td class="applydate6">1-02-2023</td>
                            <td class="startdate6">4-02-2024</td>
                            <td class="end-date6">6-02-2024</td>
                            <td class="leave-duration6">3 days pm</td>
                            <td class="leave-type6">Privilage leave</i></td>
                            <td class="leave-reason">travel</td>
                            <td class="leave-status6"><button>Approved...</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- POP UP -->

    <div id="popupForm" class="form-popup">
        <form action="/submit" class="form-container">
            <h2 class="form-head fs-kanit">Apply for Leave</h2>
            <hr>
            <div class="form-body-part">
                <div class="emp-id">
                    <p>Employee : </p>
                    <p>E0008</p>
                </div>
                <div class="input-leave-duration">
                    <label for="">Leave Duration : </label>
                    <input type="radio" id="half-day" name="gender" value="half-day">
                    <label for="half-day">Half Day</label>
                    <input type="radio" id="full-day" name="gender" value="full-day">
                    <label for="full-day">Full day</label>
                    <input type="radio" id="aboveaday" name="gender" value="aboveaday">
                    <label for="aboveaday">Above a day</label>
                </div>
                <div class="input-date">
                    <label for="">Date :</label>
                    <input type="date" name="" id="">
                </div>
                <div class="leave-type">
                    <label for="">Leave Type: </label>
                    <input type="text" placeholder="Enter type">
                </div>
                <div class="input-reason-of-leave">
                    <label for="">Reason of leave: </label>
                    <input type="text" placeholder="Enter Reason for leave">
                </div>
            </div>
            <div class="submit-close-btns">
                <button type="submit" class="btn">Submit</button>
                <button type="button" class="btn cancel" id="closeBtn">Close</button>
            </div>
        </form>
    </div>
    <script src="/JS/applyleave.js"></script>
    <script src="../JS/leaves.js"></script>
    <!-- POP UP -->

</body>

</html>