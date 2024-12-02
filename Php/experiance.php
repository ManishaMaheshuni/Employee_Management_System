<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/sidebar.css">
    <link rel="stylesheet" href="../CSS/Basic_details_css/experiance.css">
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
    <title>Experiance</title>
</head>
<!-- JavaScript funtion for login page -->
<script>
     function redirectToLogin(){
    window.location.assign("../Php/login.php");
  }
</script>
<body>
    <div class="experiance-main">
        <div class="sidebar" style="position: fixed; ">
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
                <a href="../Php/basic-details.php">Basic Details</a>
                <a href="../Php/documents.php">Documents</a>
                <a href="../Php/address.php">Address</a>
                <a href="../Php/education.php">Education</a>
                <a class="experiance-href" href="../Php/experiance.php">Experiance</a>
                <a href="../Php/bank-details.php">Bank Details</a>
                <a href="../Php/family-details.php">Family Details</a>
            </div>
            <!-- basic details list end -->
            <!-- experiance list -->
            <div class="experiance-list-main">
                <div class="experiance-list">
                    <div class="experiance-list-para">
                        <div class="experiance-list-icon">
                            <i class="fa-solid fa-calendar-week"></i>
                        </div>
                        <div class="experiance-list-text">
                            <p>Experiance Letter</p>
                        </div>
                    </div>
                </div>
                <div id="popupForm" class="form-popup" >
                    <form action="/submit" class="form-container" >
                        <div class="form-body-part" >
                            <div class="form-body-part-1">
                                <div class="company-name">
                                    <label for="">Company Name</label>
                                    <input type="text" name="" id="" placeholder="Company Name">
                                </div>
                                <div class="input-leave-duration">
                                    <label for="">Joining Date </label>
                                    <input type="date" name="" id="">
                                </div>
                            </div>
                            <div class="form-body-part-2">
                                <div class="emp-position">
                                    <label for="">Position</label>
                                    <input type="text" placeholder="Position">
                                </div>
                                <div class="input-leave-duration">
                                    <label for="">Leaving Date</label>
                                    <input type="date" name="" id="">
                                </div>
                            </div>
                        </div>
                        <div class="upload-document">
                            <label for="fileInput">Upload Document</label>
                            <input type="file" id="fileInput" name="fileInput" class="file-input">
                        </div>
                        <div class="submit-close-btns">
                            <button type="submit" class="btn">Upload <i class="fa-solid fa-upload"></i></button>
                            <button type="button" class="btn cancel" id="closeBtn">Cancel <i class="fa-solid fa-trash"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- experiance list -->
        </div>
    </div>
    <script src="../JS/applyleave.js"></script>
    <script src="../JS/Basic-details-js/experiance.js"></script>
</body>

</html>