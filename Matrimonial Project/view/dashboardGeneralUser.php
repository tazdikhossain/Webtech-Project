<?php
    require_once('../controller/sessionCheck.php');
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
                                Logged in as
                                <a href="index.php"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ""  ?></a>|
                                <a href="logout.php">Logout</a>
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
                            <h4> General User Account</h4>
                            <hr width="200px">
                            <ul>
                                <li><a href="view/dashboardGeneralUser.php">Dashboard</a></li>
                                <li><a href="profile.php">View Profile</a></li>
                                <li><a href="edit.php">Edit Profile</a></li>
                                <li><a href="delete.php">Delete Profile</a></li> 
                                <li><a href="picture.php">Change Profile Picture</a></li>
                                <li><a href="changePassword.php">Change Password</a></li>
                                <li><a href="Number of CV Downloads">Number of CV Downloads</a></li> 
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
                <b>Welcome <?php if (isset($_SESSION['username'])) {
                                echo $_SESSION['username'];
                            } else {
                                echo "";
                            } ?></b>

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