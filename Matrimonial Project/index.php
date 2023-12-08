

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

table {
    width: 100%;
    height: 100%;
    border-collapse: collapse;
}

header {
    height: 60px;
    background-color: #000;
    color: white;
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
    align-items: center;
}

header a {
    color: white;
    text-decoration: none;
    margin-left: 10px;
}

header img {
    height: 40px;
}

main {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
}

.total-box {
    height: 150px;
    width: 300px;
    border: 1px solid #000;
    padding: 10px;
    text-align: center;
    margin: 10px;
    background-color: #fff;
    color: #000;
}

footer {
    height: 100px;
    background-color: #000;
    color: white;
    text-align: center;
    line-height: 60px;
}

    </style>
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
                    <a href="view/login.php">Login</a>|
                    <a href="view/registration.php">Registration</a>|        
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

        <tr height="40px">
            <td colspan="2">
                <hr>
                <footer align="center">    
                    <a href="view/viewabout.php">About Us</a>
                    <a href="">Helpline</a>
                    <a href="">FAQ</a>
                    <a href="view/viewT&C.php">Terms and Condition<br></a>
                    Copyright &copy; 2023
                </footer>
            </td>
        </tr>
    </table>

</body>

</html>
