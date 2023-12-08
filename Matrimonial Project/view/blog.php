<?php
     require_once('../controller/sessionCheckHost.php');
    require_once('../model/blogModel.php');
    if(isset($_REQUEST['blog'])){
        
        $blog=$_REQUEST['blog'];
        $value = insertBlog($blog);
        if($value){
            header('location: blog.php');
        }
        else{
            echo 'invalid';
        }
    }
    

 ?>      
        <!-- Top Bar -->
<html>
    <head>
        <title>Blog Page</title>
    </head>
    <body>
        <table border="1" align="center" width="1080px">
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="img/logo.png" alt="" height="60" width="60">
                            </td>
                            <td align="right">
                                <h1>Matrimonial Service</h1>
                                <h5>An Application of searching pair</h5>
                            </td>
                            
                        </tr>
                    </table>
                   
                </td>
            </tr>
            <tr>
                <td align="center">
                    <a href="publicHome.php">Home</a> |
                    <a href="../controller/logout.php">Logout</a> |
                    
                    <a href="adminHome.php">Back</a>       
                </td>
            </tr> 

                <!-- Body -->
            
                <tr>
                <td height="300">
                    <table width="100%" height="100%">
                        <tr>
                            <td>
                                <h3>Post Blog</h3>
                                <h3>
                                <form action="blog.php" method="post">
                                    <textarea rows="2" cols="50" name="blog" placeholder="Post blog here.."></textarea><br>
                                    <input type="submit" value="Submit">
                                </form>
                                </h3>
                            </td>
                            <td>
                                <h2>Total Blogs</h2>
                                <?php
                                    $con=getConnection();
                                    $sql="select * from bloginfo";
                                    $result=mysqli_query($con,$sql);
                                    while($row=mysqli_fetch_array($result)){
                                        echo "<table with='100%'><tr><td width='5%'>".$row['sl']."</td><td>".$row['blog']."</td></tr></table>";
                                    }
                  
                                ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

                <!-- Footer -->

            <tr align="center">
                <td>
                    <nav>
                        <a href="t&c.html">Terms & Conditions</a> |
                        <a href="privacyPolicy.html">Privacy Policy</a> |
                        <a href="aboutUs.html">About Us</a>
                    </nav>
                <footer>Copyright &copy; 2023</footer>
                </td>
            </tr>
        </table>
    </body>
</html>