<?php
    
    require_once('../controller/sessionCheckAdmin.php');
    require_once('../model/userModel.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            height: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            text-align: left;
            vertical-align: top;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
        }

        header img {
            width: 50px; /* Adjust the size as needed */
            height: auto;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            margin-bottom: 10px;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <table>
        <tr height="40px">
            <td colspan="2">
                <header>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="" alt="Logo">
                            </td>
                            <td align="right">
                                Logged in
                            </td>
                        </tr>
                    </table>
                </header>
            </td>
        </tr>

        <tr>
            <td width="220px">
                <table height="100%" width="100%" border="0" cellspacing="0">
                    <tr>
                        <td height="200px">
                            <h4>Admin Account</h4>
                            <hr width="200px">
                            <nav>
                                <ul>
                                    <li><a href="dashboardAdmin.php">Dashboard</a></li>
                                    <li><a href="AdminProfile.php"> Profile</a></li>
                                    <li><a href="AdminEdit.php">Edit Profile</a></li>
                                    <li><a href="AdminPicture.php">Change Profile Picture</a></li>
                                    <li><a href="AdminChangePassword.php">Change Password</a></li>
                                    <li><a href="../controller/AdminCreateProfile.php"> Create Profile</a></li>
                                    <li><a href="AdminViewUsers.php">Manage User </a></li>
                                    <li><a href="AdminDeleteUser.php">Delete Profile</a></li>
                                    <li><a href="HostSalary.php">Salary Sheet</a></li>
                                    <li><a href="">Recent CV's</a></li>
                                    <li><a href="">Manage Host</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </nav>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </td>

            <td>
                <h2>
                    <b>
                        &nbsp;&nbsp;&nbsp;Welcome to Admin Dashboard. Our esteemed matrimonial platform, dedicated to facilitating meaningful connections.<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With a focus on compatibility and shared values, we provide a sophisticated space for individuals seeking a committed,<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long-term relationship. Embark on this journey with us, where professionalism meets matters of the heart.<br>
                    </b>
                </h2>
            </td>
        </tr>

        <tr height="40px">
            <td colspan="2" align="center">
                <footer>
                    <a href="">About Us<br></a>
                    <a href="">Helpline<br></a>
                    <a href="">FAQ<br></a>
                    <a href="">Terms and Condition<br></a>
                    Copyright &copy; 2023
                </footer>
            </td>
        </tr>
    </table>
</body>

</html>
