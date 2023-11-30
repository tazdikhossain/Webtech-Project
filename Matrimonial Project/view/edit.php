<?php

require_once('../controller/sessionCheckUser.php'); 
require_once('../model/userModel.php'); 

$user = getUser($_SESSION['id']); 


?>


<html>

<head>
    <title>Edit Profile</title>
</head>

<body>
    <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="1">

        <tr height="40px">
            <td colspan="2">
                <header>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="" alt=""> Logged in
                            </td>
                            <td align="right">
                                <a href="searchBar.php">Search Bar</a>|    
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
                                <li><a href="dashboardGeneralUser.php">Dashboard</a></li>
                                <li><a href="profile.php">View Profile</a></li>
                                <li><a href="edit.php">Edit Profile</a></li> 
                                <li><a href="picture.php">Change Profile Picture</a></li>
                                <li><a href="changePassword.php">Change Password</a></li>
                                <!-- <li><a href="Number of CV Downloads">Number of CV Downloads</a></li>  -->
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
                <form id="editForm" method="post" action="../controller/editCheck.php" enctype="">
                    <fieldset>
                        <legend>
                            <b>Edit Profile</b>
                        </legend>
                        <table width="100%">
                            <input type="hidden" name="id" value="<?= $user['id']  ?>" 
            
                            
                            <tr>
                                <td>Name</td>
                                <td>:<input type="name" id="username" name="username" value="<?=$user['username']  ?>" />
                                </td>

                            </tr>


                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:<input type="email" id="email" name="email" value="<?=$user['email']  ?>" />
                                    
                                </td>

                            </tr>


                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td>Gender</td>
                                <td>:<input type="text" name="gender" value="" />
                                    
                                    
                                </td>

                            </tr>
                    

                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr> -->
                            <tr>
                                <td>Phone Number</td>
                                <td>:<input type="text" id="phoneNumber" name="phoneNumber" value="<?=$user['phoneNumber']  ?>" />
                                
                                    
                                </td>


                            </tr>



                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <input type="submit" value="submit" name="submit" onclick=" validateForm()" />

                                </td>
                                <td>

                            </tr>

                            <script>

                                function validateForm() {
                                    let username = document.getElementById('username').value;
                                    let email = document.getElementById('email').value;
                                    let phoneNumber = document.getElementById('phoneNumber').value;

                                    if (isEmpty(username)) {
                                        alert('Username cannot be empty');
                                        return false;
                                    }

                                    if (isEmpty(email)) {
                                        alert('Email cannot be empty');
                                        return false;
                                    }

                                    if (isEmpty(phoneNumber)) {
                                        alert('Phone Number cannot be empty');
                                        return false;
                                    }

                                    // Validate username
                                    if (!isValidUsername(username)) {
                                        alert('Invalid Username. Please check the requirements.');
                                        return false;
                                    }

                                    // Validate phone number
                                    if (!isValidPhoneNumber(phoneNumber)) {
                                        alert('Invalid Phone Number. Please try again.');
                                        return false;
                                    }

                                    submitForm();
                                    return false;
                                }

                                function isEmpty(value) {
                                    return value === '';
                                }

                                function isValidUsername(username) {
                                    // Username must contain at least two characters
                                    if (username.length < 2) {
                                        return false;
                                    }

                                    // Username can contain alphanumeric characters, period, dash, or underscore only
                                    for (let i = 0; i < username.length; i++) {
                                        let char = username[i];
                                        if (!((char >= 'a' && char <= 'z') || (char >= 'A' && char <= 'Z') || (char >= '0' && char <= '9') || char === '.' || char === '-' || char === '_')) {
                                            return false;
                                        }
                                    }

                                    return true;
                                }

                                function isValidPhoneNumber(phoneNumber) {
                                    // Specific phone number validation
                                    return phoneNumber.length === 11 && phoneNumber[0] === '0' && phoneNumber[1] === '1';
                                }

                                function submitForm() {
                                    let xhttp = new XMLHttpRequest();
                                    let formData = new FormData(document.getElementById('editForm'));

                                    xhttp.open('POST', '../controller/editCheck.php', true);
                                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                    xhttp.send('username=' + username)
                                    xhttp.send('email=' + email)
                                    xhttp.send('phoneNumber=' + phoneNumber)
                                    xhttp.onreadystatechange = function () {
                                        if (this.readyState == 4 && this.status == 200) {
                                            document.getElementById('head').innerHTML = this.responseText;
                                        }
                                    };
                                }

                            </script>




                        </table>
                    </fieldset>
                </form>
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
