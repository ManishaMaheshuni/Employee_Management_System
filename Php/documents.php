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
    <link rel="stylesheet" href="../CSS/Basic_details_css/documents.css">
    <title>Document</title>
</head>
<!-- JavaScript funtion for login page -->
<script>
     function redirectToLogin(){
    window.location.assign("../Php/login.php");
  }
</script>
<body>

    <div class="document-main" id="document-main">
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
                        <i class="fa-solid fa-person-walking-luggage"></i>
                        <a href="../Php/leaves.php">Leaves</a>
                    </div>
                    <div class="basic-details flex-center grey-bg-hover">
                        <i class="fa-regular fa-address-card"></i>
                        <a href="../Php/basic-details.php">Basic Details</a>
                    </div>
                    <div class="holidays flex-center grey-bg-hover">
                        <i class="fa-regular fa-calendar-xmark"></i>
                        <a href="../php/holidays.php">Holidays</a>
                    </div>
                    <div class="salary-slip flex-center grey-bg-hover">
                        <i class="fa-solid fa-toilet-paper"></i>
                        <a href="../php/salary-slips.php">Salary Slips</a>
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
                <a href="../Php/basic-details.php">Basic Details</a>
                <a class="document-href" href="../Php/documents.php">Documents</a>
                <a href="../Php/address.php">Address</a>
                <a href="../Php/education.php">Education</a>
                <a href="../Php/experiance.php">Experiance</a>
                <a href="../Php/bank-details.php">Bank Details</a>
                <a href="../Php/family-details.php">Family Details</a>
            </div>
            <!-- basic details list end -->
            <!-- documents list -->
           <div class="document-list-main">
                <div class="document-list">
                    <div class="document-list-para">
                        <div class="document-list-icon">
                            <i class="fa-solid fa-file"></i>
                        </div>
                        <div class="document-list-text">
                            <p>Documents</p>
                        </div>
                    </div>
                    <div class="add-document">
                        <button type="button" id="openBtn">Add Document <i class="fa-solid fa-file-invoice"></i></button>
                    </div>
                </div>
                <div class="document-brief">
                    <table class="document-brief-table">
                        <tr class="document-brief-head">
                            <th class="document-empid">Empid </th>
                            <th class="document-name">Document Name </th>
                            <th class="document-type">Document Type</th>
                            <th class="document-uplode-date">Uplode Date </th>
                            <th class="document-view-file">View File </th>
                        </tr>
                        <tr>
                            <td class="emp-document-empid-1">E0008</td>
                            <td class="emp-document-name-1">wrfg</td>
                            <td class="emp-document-type-1">aadhar card</td>
                            <td class="emp-document-uplode-date-1">13/02/2024</td>
                            <td class="emp-document-view-file-1">View</td>
                        </tr>
                        <tr>
                            <td class="emp-document-empid-2">E0008</td>
                            <td class="emp-document-name-2">wrfg</td>
                            <td class="emp-document-type-2">aadhar card</td>
                            <td class="emp-document-uplode-date-2">13/02/2024</td>
                            <td class="emp-document-view-file-2">View</td>
                        </tr>
                    </table>
                </div>
           </div>
            <!-- documents list -->
       </div>
    </div>
    <!-- POP UP -->
    
    <div id="popupForm" class="form-popup">
        <form action="/submit" class="form-container">
            <h2 class="form-head fs-kanit">Add Documents</h2>
            <hr>
            <div class="form-body-part">
                <div class="emp-id">
                    <p>EmployeeID : </p>
                </div>
                <div class="input-leave-duration">
                    <form action="#">
                        <label for="">Document Type :</label>
                        <select name="document-type" class="select-option">
                            <option value="options">options..</option>
                            <option value="10th-marksheet">10th_Marksheet</option>
                            <option value="12th-marksheet">12th_Marksheet</option>
                            <option value="graduation-certicate">Graduation_Certificate</option>
                            <option value="masters">Masters</option>
                        </select>
                    </form>
                </div>
                <div class="document-information">
                    <label for="">Document Information: </label>
                    <input type="text" placeholder="Marksheet, Election Card">
                </div>
                <form action="#" >
                    <label for="fileInput">Document:</label>
                    <input type="file" id="fileInput" name="fileInput" class="file-input">
                </form>
            </div>
            <div class="submit-close-btns">
                <button type="submit" class="btn">Submit</button>
                <button type="button" class="btn cancel" id="closeBtn">Close</button>
            </div>
        </form>
        
    </div>
    <script src="/JS/applyleave.js"></script>
    <!-- POP UP -->
    <script src="/JS/Basic-details-js/document.js"></script>
</body>
</html>