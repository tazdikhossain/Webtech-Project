<?php

    require_once('../model/termsModel.php');
    require_once('../controller/sessionCheckHost.php');
    if(isset($_REQUEST['terms'])){
       
        $terms=$_REQUEST['terms'];
        $value = insertterms($terms);
        if($value){
            header('location: tc.php');
        }
        else{
            echo 'invalid';
        }
    }
   
 
 ?>

<html lang="en">
<head>
    <title>TERMS AND CONDITIONS</title>
</head>
<body>
    <form>
      <table border="1" align="center" width="1080px">
            

      <!-- top bar -->

            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="wed.png" alt="" height="60" width="60">
                            </td>

                            <td align="center">
                                <h2>Bibah.com</h2>
                            </td>

                            <td align="right">
                                <h4><a href="index.php">Home</a> |
                                <a href="view/login.php">login</a>|
                                <a href="view/registration.php">Registration</a></h4>
                            </td>
                           
                        </tr>
                    </table>
                   
                </td>
            </tr>




            <!-- body -->

            <tr>
                <td height="300">
                    <table width="100%" height="100%">
                        <tr>
                            <td>
                                <h3>Post term</h3>
                                <h3>
                                <form action="tc.php" method="post">
                                    <textarea rows="2" cols="50" name="terms" placeholder="Post T@C here.."></textarea><br>
                                    <input type="submit" value="Submit">
                                </form>
                                </h3>
                            </td>
                            <td>
                                <h2>TERMS AND CONDITIONS</h2>
                                <?php
                                  //require_once('../model/userModel.php');
                                    $con=getconnection();
                                    $sql="select * from terms";
                                    $result=mysqli_query($con,$sql);
                                    while($row=mysqli_fetch_array($result)){
                                        echo "<table with='100%'><tr><td>".$row['term']."</td></tr></table>";
                                    }
                 
                                ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
           





            <!-- bottom bar -->

            <tr align="center">
                <td>
                        <a href="viewT&C.php">Terms & Conditions</a> |
                        <a href="privacyPolicy.html">Privacy Policy</a> |
                        <a href="aboutUs.html">About Us</a><br>
                        Copyright &copy; 2023
            </tr>


       </table>
    </form>
   </body>
</html>