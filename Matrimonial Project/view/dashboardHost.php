<?php
       require_once('../controller/sessionCheckHost.php');
       require_once('../model/db.php');
       require_once('../model/userModel.php');
?>

<html lang="en">

<head>
    <title>Dashboard</title>
</head>

<body>
    <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="1">
        <tr height="40px">
            <td colspan="2">
                <header>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="" alt="">
                            </td>
                            <td align="right">
                                Logged
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
                            <h4> Host Account</h4>
                            <hr width="200px">
                            <ul>
                                <li><a href="dashboarHost.php">Dashboard</a></li>
                                <li><a href="">User Profile</a></li>
                                <li><a href="HostProfile.php"> Profile</a></li>
                                <li><a href="HostEdit.php">Edit Profile</a></li>
                                <li><a href="HostPicture.php">Change Profile Picture</a></li>
                                <li><a href="HostChangePassword.php">Change Password</a></li>
                                <li><a href="">Write Blog and Advices</a></li>
                                <li><a href="">Write Event Management</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>


                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>

            </td>
            <td>
                <b>Welcome 

            </td>

        </tr>

        <tr height="40px">
            <td colspan="2" align="center">

                <footer>
                    Copyright &copy; 2017
                </footer>
            </td>
        </tr>
    </table>

</body>

</html>