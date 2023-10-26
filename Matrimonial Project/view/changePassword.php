<?php

?>

<html lang="en">

<head>
    <title>Change Password</title>
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
                                <a href="index.php"><?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ""  ?></a>|
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
                            <h4>General User Account</h4>
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
                <form action="../controller/changePasswordCheck.php" method="post" >
                    <fieldset>
                        <legend>
                            <b>Change Password</b>
                        </legend>
                        <table width="100%">

                            <tr>
                                <td>Current Password</td>
                                <td>:<input type="password" name="password" value="">
                                </td>

                            </tr>
                            <tr>
                                <td>New Password</td>
                                <td>:<input type="password" name="newPassword" value="">
                                </td>

                            </tr>
                            <tr>
                                <td>Retype New Password</td>
                                <td>:<input type="password" name="retypePassword" value="">
                                </td>

                            </tr>
                            <tr>
                                <td>

                                    <?php
                                    /*if (isset($_REQUEST['password']) && isset($_REQUEST['newPassword']) && isset($_REQUEST['retypePassword'])) {
                                        if ($_REQUEST['password'] != $_COOKIE['password']) {
                                            echo "Invalid Old Password";
                                        } else if ($_REQUEST['newPassword'] != $_REQUEST['newPassword']) {
                                            echo "Passwords do not match";
                                        }
                                    } else {
                                        echo "Fill all the fields";
                                    }*/
                                    
                                    ?>
                                </td>
                            </tr>






                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <input type="submit" value="submit" name="submit" />

                                </td>
                                <td>

                            </tr>



                        </table>
                    </fieldset>
                </form>
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