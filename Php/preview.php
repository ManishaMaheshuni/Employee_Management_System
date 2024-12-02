<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/preview.css">
    <title>Salary Slip preview</title>
</head>
<body>
    <div class="salary-slip-page">
        <div class="salary-slips-body">
            <div class="salary-slip-main-div">
                <table>
                    <tr>
                        <th colspan="2">Employee Information</th>
                    </tr>
                    <tr>
                        <td>Employee Name:</td>
                        <td><p>Alexdar noel</p></td>
                    </tr>
                    <tr>
                        <td>Employee ID:</td>
                        <td><p>E0008</p></td>
                    </tr>
                    <tr>
                        <td>Department:</td>
                        <td><p>Engineering</p></td>
                    </tr>
                    <tr>
                        <td>Month:</td>
                        <td><p>January 2024</p></td>
                    </tr>
                    <tr>
                        <th colspan="2">Earnings</th>
                    </tr>
                    <tr>
                        <td>Basic Salary:</td>
                        <td><p>5000</p></td>
                    </tr>
                    <tr>
                        <td>Bonus:</td>
                        <td><p>1000</p></td>
                    </tr>
                    <tr>
                        <th colspan="2">Deductions</th>
                    </tr>
                    <tr>
                        <td>Taxes:</td>
                        <td><p>500</p></td>
                    </tr>
                    <tr>
                        <td>Insurance:</td>
                        <td><p>200</p></td>
                    </tr>
                    <tr>
                        <th>Total Salary:</th>
                        <td class="total" id="totalSalary"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="btns">
            <div class="salary-page-print">
                <button type="button" onclick="printSalarySlip()">Print</button>
            </div>
            <div class="back-btn">
                <button type="button"><a href="../Html/salary-slips.php">Back</a></button>
            </div>
        </div>
    </div>
    <script>
        // Function to calculate total salary (Your existing JavaScript code)
        function calculateTotal() {
            // Your existing calculation logic
        }

        // Function to print the salary slip
        function printSalarySlip() {
            window.print();
        }
    </script>
</body>
</html>
