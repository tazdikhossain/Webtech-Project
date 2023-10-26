<?php
    session_start();
    require_once('../controller/loginCheck.php');
    require_once('../model/userModel.php');
    require_once('../model/db.php');
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
                            <h4>Admin Account</h4>
                            <hr width="200px">
                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="">Manage General User </a></li>
                                <li><a href="">Number of CV's</a></li>
                                <li><a href="">Recent CV's</a></li>
                                <li><a href="">Manage Host</a></li>
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