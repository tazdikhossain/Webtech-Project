<?php

?>

<html lang="en">

<head>
    <title>Registration</title>
</head>

<body>
    <table width="100%" height="100%">
        <tr height="40px">
            <header>
                <td>
                    <img src="" alt="">
                </td>
                <td align="right">
                    <a href="index.php">Home</a>|
                    <a href="login.php">Login</a>|
                    <a href="registration.php">Registration</a>
                </td>

                </td>
            </header>
        </tr>
        <tr>
            <td colspan="2" height="2px">

                <hr>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <main>
                    <table width="600px" height="100%">
                        <tr>
                            <td>
                                <form action="../controller/registrationCheck.php" method="post" enctype="">
                                    <fieldset>
                                        <legend>
                                            Registration
                                        </legend>
                                        <table width="100%">
                                            <tr>
                                                <td>Name</td>
                                                <td>:
                                                    <input type="text" name="name" value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:
                                                    <input type="email" name="email" value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>User Name</td>
                                                <td>:
                                                    <input type="text" name="username" value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>:
                                                    <input type="password" name="password" value="">
                                                
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Confirm Password</td>
                                                <td>:
                                                    <input type="password" name="confirmPassword" value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <fieldset>
                                                        <legend>Gender</legend>
                                                        <input type="radio" name="gender" value="male">Male
                                                        <input type="radio" name="gender" value="female">Female
                                                        <input type="radio" name="gender" value="others">Others
                                                    </fieldset>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <fieldset>
                                                        <legend>Date of Birth</legend>
                                                        <input type="number" name="dateofBirth" value="" size=2>/
                                                        <input type="number" name="dateofBirth" value="" size=2 >/
                                                        <input type="number" name="dateofBirth" value="" size=4 >
                                                        <i>
                                                            (dd/mm/yyyy)
                                                        </i>
                                                    </fieldset>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" value="Submit" name="submit">
                                                    <input type="reset" value="Reset">

                                                    
                                                </td>
                                            </tr>

                                        </table>
                                    </fieldset>
                                </form>
                            </td>
                        </tr>
                    </table>
                </main>
            </td>
        </tr>
        <tr height="40px">
            <td colspan="2">


                <hr>
                <footer align="center">
                    Copyright &copy; 2017
                </footer>
            </td>
        </tr>
    </table>

</body>

</html>