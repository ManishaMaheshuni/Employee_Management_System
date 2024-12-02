<?php
// Include the database connection
include('connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture and sanitize input data
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $contact_number = mysqli_real_escape_string($con, $_POST['contact_number']);
    $blood_group = mysqli_real_escape_string($con, $_POST['blood_group']);
    $emergency_contact_name = mysqli_real_escape_string($con, $_POST['emergency_contact_name']);
    $office_email = mysqli_real_escape_string($con, $_POST['office_email']);
    $check_in_time = mysqli_real_escape_string($con, $_POST['check_in_time']);
    $designation = mysqli_real_escape_string($con, $_POST['designation']);
    $pan_number = mysqli_real_escape_string($con, $_POST['pan_number']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $relation_with_employee = mysqli_real_escape_string($con, $_POST['relation_with_employee']);
    $joining_date = mysqli_real_escape_string($con, $_POST['joining_date']);
    $check_out_time = mysqli_real_escape_string($con, $_POST['check_out_time']);
    $probation_period = mysqli_real_escape_string($con, $_POST['probation_period']);
    $personal_email = mysqli_real_escape_string($con, $_POST['personal_email']);
    $aadhar_number = mysqli_real_escape_string($con, $_POST['aadhar_number']);
    $birth_date = mysqli_real_escape_string($con, $_POST['birth_date']);
    $emergency_contact_no = mysqli_real_escape_string($con, $_POST['emergency_contact_no']);
    $reporting_manager = mysqli_real_escape_string($con, $_POST['reporting_manager']);
    $department = mysqli_real_escape_string($con, $_POST['department']);
    $notice_period = mysqli_real_escape_string($con, $_POST['notice_period']);

    // Insert query to add data to the database
    $sql = "INSERT INTO employees (first_name, last_name, contact_number, blood_group, emergency_contact_name, office_email, check_in_time, designation, pan_number, gender, relation_with_employee, joining_date, check_out_time, probation_period, personal_email, aadhar_number, birth_date, emergency_contact_no, reporting_manager, department, notice_period)
            VALUES ('$first_name', '$last_name', '$contact_number', '$blood_group', '$emergency_contact_name', '$office_email', '$check_in_time', '$designation', '$pan_number', '$gender', '$relation_with_employee', '$joining_date', '$check_out_time', '$probation_period', '$personal_email', '$aadhar_number', '$birth_date', '$emergency_contact_no', '$reporting_manager', '$department', '$notice_period')";

    // Execute query and check for success
    if (mysqli_query($con, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . mysqli_error($con);
    }
}

// Close the connection
mysqli_close($con);
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
    <link rel="stylesheet" href="../CSS/Basic_details_css/basic-details.css">
    <title>Basic Details</title>
</head>
<script>
     function redirectToLogin(){
    window.location.assign("../Php/login.php");
  }
</script>
<body>
    
    <div class="main">
        <div class="sidebar" style="position: fixed;">
            <div class="sidebar-ofcname">
                <h3 class="sidebar-ofcname-head">TechieBears</h3>
            </div>
            <hr>
            <div class="sidebar-profile">
                <div class="sidebar-profile-img">
                    <img src="../img/profile.jpg" alt="Profile Image">
                </div>
                <div class="sidebar-profile-name">
                    <!-- Display the employee name dynamically -->
                    <h6 id="employeeName" name="employeeName">
                        <?php
                        //  echo htmlspecialchars($employeeName); 
                        ?>
                        manisha
                    </h6>
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
                        <i class="fa-solid fa-toilet-paper"></i>
                        <a href="../Php/salary-slips.php">Salary Slips</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="basic-details-main" style="position: relative; left: 13rem;">
            <!-- basic details text start -->
            <div class="basic-details-page">
                <div class="basic-details-header">
                    <div class="basic-details-user">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="basic-details-text">
                        <p>Basic Details</p>
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
                <!-- basic details text end -->
                <!-- basic details list start -->
                <div class="basic-details-list">
                    <a class="basic-details-href" href="../Php/basic-details.php">Basic Details</a>
                    <a href="../Php/documents.php">Documents</a>
                    <a href="../Php/address.php">Address</a>
                    <a href="../Php/education.php">Education</a>
                    <a href="../Php/experiance.php">Experiance</a>
                    <a href="../Php/bank-details.php">Bank Details</a>
                    <a href="../Php/family-details.php">Family Details</a>
                </div>
                <!-- basic details list end -->
                <!-- basic details brief start -->
                <div class="basic-details-brief">
                    <div class="profile-details">
                        <div class="user-profile">
                            <div class="user-profile-img">
                                <img src="../img/profile.jpg" alt="">
                            </div>
                            <div class="user-profile-text">
                                <div class="employee-name">
                                    <h6>Alexdar noel</h6>
                                </div>
                                <div class="employee-id">
                                    <p>EMP ID:-E0008</p>
                                </div>
                                <div class="employee-mail">
                                    <p>alexdar@gmail.com</p>
                                </div>
                                <div class="employee-contact">
                                    <p>1234567890</p>
                                </div>
                            </div>
                        </div>
                        <div class="edit-profile">
                            <button onclick="openEditPopup()">Edit <i class="fa-solid fa-pen-to-square"></i></button>
                        </div>
                    </div>
                    <div class="user-details-brief">
                        <div class="employee-details">
                            <div class="user-first-name">
                                <div class="user-first-name-1">
                                    <h6>First Name</h6>
                                </div>
                                <div class="user-first-name-2">
                                    <p>Alxedar</p>
                                </div>
                            </div>
                            <div class="user-contact-number">
                                <div class="user-contact-number-1">
                                    <h6>Contact Number</h6>
                                </div>
                                <div class="user-contact-number-2">
                                    <p>1234567890</p>
                                </div>
                            </div>
                            <div class="user-blood-group">
                                <div class="user-blood-group-1">
                                    <h6>Blood Group</h6>
                                </div>
                                <div class="user-blood-group-2">
                                    <p>B+</p>
                                </div>
                            </div>
                            <div class="user-emergency-contact-name">
                                <div class="user-emergency-contact-name-1">
                                    <h6>Emergency Contact Name</h6>
                                </div>
                                <div class="user-emergency-contact-name-2">
                                    <p>Mark Noel</p>
                                </div>
                            </div>
                            <div class="user-ofc-mail">
                                <div class="user-ofc-mail-1">
                                    <h6>Office Email</h6>
                                </div>
                                <div class="user-ofc-mail-2">
                                    <p>Alxedar.noel@techiebers.com</p>
                                </div>
                            </div>
                            <div class="user-checkin-time">
                                <div class="user-checkin-time-1">
                                    <h6>Check-In Time</h6>
                                </div>
                                <div class="user-checkin-time-2">
                                    <p>- - -</p>
                                </div>
                            </div><div class="user-designation">
                                <div class="user-designation-1">
                                    <h6>Designation</h6>
                                </div>
                                <div class="user-designation-2">
                                    <p>- - -</p>
                                </div>
                            </div>
                        </div>
                        <div class="employee-details">
                            <div class="user-last-name">
                                <div class="user-last-name-1">
                                    <h6>Last Name</h6>
                                </div>
                                <div class="user-last-name-2">
                                    <p>Noel</p>
                                </div>
                            </div>
                            <div class="user-pan-number">
                                <div class="user-pan-number-1">
                                    <h6>Pan Number</h6>
                                </div>
                                <div class="user-pan-number-2">
                                    <p>JQTPM5722Q</p>
                                </div>
                            </div>
                            <div class="user-gender">
                                <div class="user-gender-1">
                                    <h6>Gender</h6>
                                </div>
                                <div class="user-gender-2">
                                    <p>Male</p>
                                </div>
                            </div>
                            <div class="user-relation-with-employe">
                                <div class="user-relation-with-employe-1">
                                    <h6>Relation With Employee</h6>
                                </div>
                                <div class="user-relation-with-employe-2">
                                    <p>Noel</p>
                                </div>
                            </div>
                            <div class="user-joining-date">
                                <div class="user-joining-date-1">
                                    <h6>Date Of Joining</h6>
                                </div>
                                <div class="user-joining-date-2">
                                    <p>- - -</p>
                                </div>
                            </div>
                            <div class="user-checkout-time">
                                <div class="user-checkout-time-1">
                                    <h6>Check-Out Time</h6>
                                </div>
                                <div class="user-checkout-time-2">
                                    <p>- - -</p>
                                </div>
                            </div>
                            <div class="user-probation">
                                <div class="user-probation-1">
                                    <h6>Probation Period</h6>
                                </div>
                                <div class="user-probation-2">
                                    <p>- - -</p>
                                </div>
                            </div>
                        </div>
                        <div class="employee-details">
                            <div class="user-personal-mail">
                                <div class="user-personal-mail-1">
                                    <h6>Personal Email</h6>
                                </div>
                                <div class="user-personal-mail-2">
                                    <p>alxedar@gmail.com</p>
                                </div>
                            </div>
                            <div class="user-aadhar-number">
                                <div class="user-aadhar-number-1">
                                    <h6>Aadhar Number</h6>
                                </div>
                                <div class="user-aadhar-number-2">
                                    <p>123456789012</p>
                                </div>
                            </div>
                            <div class="user-birth-date">
                                <div class="user-birth-date-1">
                                    <h6>Date of Birth</h6>
                                </div>
                                <div class="user-birth-date-2">
                                    <p>1999-05-22</p>
                                </div>
                            </div>
                            <div class="user-emergency-contact-no">
                                <div class="user-emergency-contact-no-1">
                                    <h6>Emergency Contact Number</h6>
                                </div>
                                <div class="user-emergency-contact-no-2">
                                    <p>9942762934</p>
                                </div>
                            </div>
                            <div class="user-reporting-manager">
                                <div class="user-reporting-manager-1">
                                    <h6>Reporting Manager</h6>
                                </div>
                                <div class="user-reporting-manager-2">
                                    <p>- - -</p>
                                </div>
                            </div>
                            <div class="user-department">
                                <div class="user-department-1">
                                    <h6>Department</h6>
                                </div>
                                <div class="user-department-2">
                                    <p>- - -</p>
                                </div>
                            </div>
                            <div class="user-notice-period">
                                <div class="user-notice-period-1">
                                    <h6>Notice Period</h6>
                                </div>
                                <div class="user-notice-period-2">
                                    <p>- - -</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- basic details brief end -->
            </div>
        </div>
        <!-- Edit popup -->
        <div id="editPopup" class="edit-overlay">
            <div class="edit-content-main">
                <div class="edit-popup-header">
                    <div class="user-profile">
                        <div class="user-profile-img">
                            <img src="../img/profile.jpg" alt="">
                        </div>
                        <div class="user-profile-text">
                            <div class="employee-name">
                                <h6>Alexdar noel</h6>
                            </div>
                            <div class="employee-id">
                                <p>EMP ID:-E0008</p>
                            </div>
                            <div class="employee-mail">
                                <p>alexdar@gmail.com</p>
                            </div>
                            <div class="employee-contact">
                                <p>1234567890</p>
                            </div>
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
                <div class="edit-content">
                    <div class="edit-popup-1">
                        <div class="user-first-name">
                            <h6>First Name</h6>
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="user-contact-number">
                            <h6>Contact Number</h6>
                            <input type="tel" placeholder="Contact Number">
                        </div>
                        <div class="user-blood-group">
                            <h6>Blood Group</h6>
                            <input type="text" placeholder="Blood Group">
                        </div>
                        <div class="user-emergency-contact-name">
                            <h6>Emergency Contact Name</h6>
                            <input type="text" placeholder="Emergency Contact Name">
                        </div>
                        <div class="user-ofc-mail">
                            <h6>Office Email</h6>
                            <input type="email" placeholder="Office Email">
                        </div>
                        <div class="user-checkin-time">
                            <h6>Check-In Time</h6>
                            <input type="time" placeholder="Check-In Time">
                        </div>
                        <div class="user-designation">
                            <h6>Designation</h6>
                            <input type="text" placeholder="Designation">
                        </div>
                    </div>
                    <div class="edit-popup-2">
                        <div class="user-last-name">
                            <h6>Last Name</h6>
                            <input type="text" placeholder="Last Name">
                        </div>
                        <div class="user-pan-number">
                            <h6>Pan Number</h6>
                            <input type="text" placeholder="Pan Number">
                        </div>
                        <div >
                            <h6>Gender</h6>
                            <div class="user-gender">
                                <label for="male">Male</label>
                                <input type="radio" id="male" name="gender" value="male">
                                <label for="female">Female</label>
                                <input type="radio" id="female" name="gender" value="female">
                            </div>
                        </div>
                        <div class="user-relation-with-employe">
                            <h6>Relation With Employee</h6>
                            <input type="text" placeholder="Relation With Employee">
                        </div>
                        <div class="user-joining-date">
                            <h6>Date Of Joining</h6>
                            <input type="date" placeholder="Date Of Joining">
                        </div>
                        <div class="user-checkout-time">
                            <h6>Check-Out Time</h6>
                            <input type="time" placeholder="Check-Out Time">
                        </div>
                        <div class="user-probation">
                            <h6>Probation Period</h6>
                            <input type="text" placeholder="Probation Period">
                        </div>
                    </div>
                    <div class="edit-popup-3">
                        <div class="user-personal-mail">
                            <h6>Personal Email</h6>
                            <input type="email" placeholder="Personal Email">
                        </div>
                        <div class="user-aadhar-number">
                            <h6>Aadhar Number</h6>
                            <input type="number" placeholder="Aadhar Number">
                        </div>
                        <div class="user-birth-date">
                            <h6>Date of Birth</h6>
                            <input type="date" placeholder="Date of Birth">
                        </div>
                        <div class="user-emergency-contact-no">
                            <h6>Emergency Contact Number</h6>
                            <input type="tel" placeholder="Emergency Contact Number">
                        </div>
                        <div class="user-reporting-manager">
                            <h6>Reporting Manager</h6>
                            <input type="text" placeholder="Reporting Manager">
                        </div>
                        <div class="user-department">
                            <h6>Department</h6>
                            <input type="text" placeholder="Department">
                        </div>
                        <div class="user-notice-period">
                            <h6>Notice Period</h6>
                            <input type="text" placeholder="Notice Period">
                        </div>
                    </div>
                </div>
                <div class="submit-close-btns">
                    <button type="submit" class="btn upload" onclick="uploadFile()">Upload <i class="fa-solid fa-upload"></i></button>
                    <button type="button" class="btn cancel" id="closeBtn" onclick="closePopup()">Cancel <i class="fa-solid fa-trash"></i></button>
                </div>
            </div>
        </div>

        <script src="../JS/Basic-details-js/basic-detail.js"></script>
</body>