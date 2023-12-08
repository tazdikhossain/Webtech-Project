<?php
require_once ('../model/db.php');

// Create connection
$conn = getConnection();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data
$sql = "SELECT id, role, gender FROM users";
$result = $conn->query($sql);

// Initialize variables for the total of each column
$totalId = 0;
$totalRole = 0;
$totalGender = 0;

// Loop through the rows and calculate totals
while ($row = $result->fetch_assoc()) {
    $totalId += $row["id"];
    // Assuming "role" and "gender" are string values
    $totalRole += strlen($row["role"]);
    $totalGender += strlen($row["gender"]);
}

// Close connection
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <table>

        <tr height="60px">
            <header>
                <td>
                    <img src="" alt="">
                </td>
                <td align="right">
                    <a href="index.php">Home</a>|
                    <a href="login.php">Login</a>|
                    <a href="registration.php">Registration</a>|        
                </td> 
            </header>
        </tr>

        <tr>
            <td colspan="2" height="2px">
                <hr>
            </td>
        </tr>

        
            <td colspan="2" align="center">
            <h2>
                    <b>
                        Welcome to our esteemed matrimonial platform, dedicated to facilitating meaningful connections.<br>
                        With a focus on compatibility and shared values, we provide a sophisticated space for individuals seeking a committed,
                        long-term relationship. Embark on this journey with us, where professionalism meets matters of the heart.
                    </b>
                </h2>       
            </td>
        

        <tr height="350px">
            <td colspan="2">
                <main>
                    <div style="display: flex; justify-content: space-around; margin-top: 0px;"> <!-- Adjusted margin-top -->
                        <div class="total-box" id="total-member-box">
                            <h3>Total Member</h3>
                            <p><?php echo $totalId; ?></p>
                        </div>
                        <div class="total-box" id="total-biodata-box">
                            <h3>Total Biodata Download</h3>
                            <p><?php echo $totalRole; ?></p>
                        </div>
                        <div class="total-box" id="total-success-box">
                            <h3>Total Success</h3>
                            <p><?php echo $totalGender; ?></p>
                        </div>
                    </div>
                </main>
            </td>
        </tr>

        <tr height="60px">
            <td colspan="2">
                <hr>
                <footer align="center">    
                    <a href="viewabout.php">About Us</a>
                    <a href="">Helpline</a>
                    <a href="">FAQ</a>
                    <a href="viewT&C.php">Terms and Condition<br></a>
                    Copyright &copy; 2023
                </footer>
            </td>
        </tr>
    </table>

</body>

</html>
