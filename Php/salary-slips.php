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
    <link rel="stylesheet" href="../CSS/salary-slip.css">
    <title>Salary Slips</title>
</head>
 <!-- JavaScript funtion for login page -->
<script>
     function redirectToLogin(){
    window.location.assign("../Php/login.php");
  }
</script>
<body>
    <div class="salary-slips-main">
        <div class="sidebar" style="position:fixed;">
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
                        <i class="fa-solid fa-toilet-paper active-desgin"></i>
                        <a class="active-desgin" href="../Php/salary-slips.php">Salary Slips</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="salary-slips-body" style="position: relative; left: 13rem;">
            <div class="salary-slip-heading-part">
                <div class="salary-heading">
                    <i class="fa-solid fa-toilet-paper"></i>
                    <a href="#">Salary Slip</a>
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
            <div class="salary-slip-main-div">
                <table>
                    <tr>
                        <th colspan="2">Employee Information</th>
                    </tr>
                    <tr>
                        <td>Employee Name:</td>
                        <td><input type="text" id="employeeName" value="Alexdar noel"></td>
                    </tr>
                    <tr>
                        <td>Employee ID:</td>
                        <td><input type="text" id="employeeID" value="E0008"></td>
                    </tr>
                    <tr>
                        <td>Department:</td>
                        <td><input type="text" id="department" value="Engineering"></td>
                    </tr>
                    <tr>
                        <td>Month:</td>
                        <td><input type="text" id="month" value="January 2024"></td>
                    </tr>
                    <tr>
                        <th colspan="2">Earnings</th>
                    </tr>
                    <tr>
                        <td>Basic Salary:</td>
                        <td><input type="number" id="basicSalary" value="5000"></td>
                    </tr>
                    <tr>
                        <td>Bonus:</td>
                        <td><input type="number" id="bonus" value="1000"></td>
                    </tr>
                    <tr>
                        <th colspan="2">Deductions</th>
                    </tr>
                    <tr>
                        <td>Taxes:</td>
                        <td><input type="number" id="taxes" value="500"></td>
                    </tr>
                    <tr>
                        <td>Insurance:</td>
                        <td><input type="number" id="insurance" value="200"></td>
                    </tr>
                    <tr>
                        <th>Total Salary:</th>
                        <td class="total" id="totalSalary"></td>
                    </tr>
                </table>
                <div class="buttons">
                    <div class="calculate-total">
                        <button onclick="calculateTotal()">Calculate Total</button>
                    </div>
                    <div class="preview-btn">
                        <button onclick=""><a href="../Html/preview.php">Preview</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../JS/salary-slip.js"></script>
</body>

</html>

   