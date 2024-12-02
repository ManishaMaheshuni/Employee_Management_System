
<?php
include('connect.php'); // Adjust this path as needed

// Fetch attendance data from the database
$attendanceRecords = [];

if (isset($_POST['attendance'])) {
    // Fetch attendance data from the database
    $date = $_POST['date'];
    $day = $_POST['day'];
    $time_in = $_POST['time_in'];
    $time_out = $_POST['time_out'];
    $comments = $_POST['comments'];
    $remarks = $_POST['remarks'];

    $sql = "SELECT * FROM attendance";
    $result = $con->query($sql);    

    if ($result->num_rows > 0) {
        // Store each row into an array
        while ($row = $result->fetch_assoc()) {
            $attendanceRecords[] = $row;
        }
    } else {
        
        // SQL query to insert sample data
        $sql = "INSERT INTO attendance (date, day, time_in, time_out, comments, remarks) VALUES 
        ('$date', '$day', '$time_in', '$time_out', '$comments', '$remarks')";

        // Execute the query and check for errors
        if ($con->query($sql) === TRUE) {
        $insert = true;
        } else {
        echo "<script>alert('No attendance records found');</script>". $con->error;
        }
    }

    // Close the database connection
    $con->close();
}
?>

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
    <link rel="stylesheet" href="../CSS/attendance.css">
    <title>Attendance</title>
</head>
<!-- JavaScript funtion for login page -->
<script>
     function redirectToLogin(){
    window.location.assign("../Php/login.php");
  }
</script>
<body>

    <div class="main">
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
                        <i class="fa-regular fa-calendar active-desgin"></i>
                        <a class="active-desgin" href="../Php/attendance.php">Attendance</a>
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
        <div class="attendance-list-main" style="position: relative; left: 13rem;">
            <div class="attendance-list-head">
                <div class="head-part1">
                    <div class="attendance-icon">
                        <i class="fa-regular fa-calendar"></i>
                    </div>
                    <div class="attendance-head">
                        <p>Attendance</p>
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
            
           <div class="table-div">
            <table class="main-table">
            <tbody>
<?php foreach ($attendanceRecords as $record): ?>
<tr>
    <td class="date"><?= $record['date'] ?></td>
    <td class="day"><?= $record['day'] ?></td>
    <td class="time-in"><?= $record['time_in'] ?></td>
    <td class="time-out"><?= $record['time_out'] ?></td>
    <td class="comments"><i class="fa-regular fa-message"></i> <?= $record['comments'] ?? '' ?></td>
    <td class="remarks"><button><?= $record['remarks'] ?? 'Working...' ?></button></td>
</tr>
<?php endforeach; ?>
</tbody>

            </table>
           </div>
        </div>
    </div>
    <script src="../JS/attendance.js"></script>
</body>

</html>