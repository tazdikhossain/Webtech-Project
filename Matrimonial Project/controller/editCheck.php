<?php
require_once("../model/userModel.php");
require_once('../controller/sessionCheckUser.php');

if (
    isset($_REQUEST['username']) &&
    isset($_REQUEST['email']) &&
    isset($_REQUEST['gender']) &&
    isset($_REQUEST['phoneNumber']) &&
    isset($_SESSION['id'])
) {

    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $id = $_SESSION['id'];
    $gender = $_REQUEST['gender'];
    $phoneNumber = $_REQUEST['phoneNumber'];

    // Validate username
    if (empty($username) || strlen($username) < 2 || !isValidUsername($username)) {
        header("location: ../view/edit.php?error=Invalid Username. Please check the requirements.");
        exit;
    }

    // Validate email and other fields
    if (empty($email) || empty($phoneNumber) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location: ../view/edit.php");
        exit;
    }

    // Validate phone number
    if (!isValidPhoneNumber($phoneNumber)) {
        header("location: ../view/edit.php?error=Invalid phone number. Please try again");
        exit;
    }

    $user = ['username' => $username, 'email' => $email, 'gender' => $gender, 'phoneNumber' => $phoneNumber, "id" => $id];
    updateUser($user);
    header("location: ../view/dashboardGeneralUser.php");
    exit;
} else {
    header("location: ../view/edit.php");
    exit;
}

function isValidUsername($username) {
    // Username must contain at least two characters
    if (strlen($username) < 2) {
        return false;
    }

    // Username can contain alphanumeric characters, period, dash, or underscore only
    for ($i = 0; $i < strlen($username); $i++) {
        $char = $username[$i];
        if (!((ctype_alnum($char) || $char === '.' || $char === '-' || $char === '_'))) {
            return false;
        }
    }

    return true;
}

function isValidPhoneNumber($phoneNumber) {
    // Specific phone number validation
    return strlen($phoneNumber) === 11 && $phoneNumber[0] === '0' && $phoneNumber[1] === '1';
}
?>
