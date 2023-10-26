<?php

    session_start();

    require_once('../model/userModel.php');


    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null username/password!";   
    }else{
        
        $status = login($username, $password);
        if($status)
        {
            $_SESSION['flag'] = "true";
            
            /*if(["usertype"]=="user"|| "")
            {
                header('location: ../view/dashboardGeneralUser.php');
            }
            elseif(["usertype"]=="admin")
            {
                header('location: ../view/dashboardAdmin.php');
            }
            elseif(["usertype"]=="host")
            {
                header('location: ../view/dashboardHost.php');
            }*/
            header('location: ../view/dashboardGeneralUser.php');
            
            }
            else{
            echo "invaid user!";
            
        }
    } 


    


    //$row = mysql_fetch_array($_result);

    /*if($_row["usertype"]=="user"|| "")
    {
        header("location: view/dashboardGeneralUser.php");
    }
    elseif($_row["usertype"]=="admin")
    {
        header("location: view/dashboardAdmin.php");
    }
    elseif($_row["usertype"]=="host")
    {
        header("location: view/dashboardHost.php");
    }*/
    

?>

