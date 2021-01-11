<?php
$usernameErr = $passwordErr = $repeatPasswordErr = $firstnameErr = $lastnameErr =
$firstAddressErr = $cityErr = $stateErr = $zipErr = $phoneNumberErr = $emailErr =
$genderErr = $maritalErr = $birthdayErr = "";

$username = $password = $repeatPassword = $firstname = $lastname =
$firstAddress = $secondAddress = $city = $state = $zip = $phoneNumber = $email =
$gender = $marital = $birthday = "";
$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $isValid = true;
    $username = clean_input($_POST["username"]);
    if (empty($username)) {
        $usernameErr = "Username is required.";
        $isValid = false;
    }
    $password = clean_input($_POST["password"]);
    if (empty($password)) {
        $passwordErr = "Password is required.";
        $isValid = false;
    } elseif (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,50}$/", $password)){
        $passwordErr = "Password is required. Password must be at least 8 characters and 
        contain 1 uppercase, 1 lowercase, 1 number & 1 special character";
        $isValid = false;
    }
    $repeatPassword = clean_input($_POST["repeatPassword"]);
    if (empty($repeatPassword) || ($password !== $repeatPassword)) {
        $repeatPasswordErr = "Password confirmation is required. Passwords must match.";
        $isValid = false;
    }
    $firstname = clean_input($_POST["firstname"]);
    if (empty($firstname)) {
        $firstnameErr = "First name is required";
        $isValid = false;
    }
    $lastname = clean_input($_POST["lastname"]);
    if (empty($lastname)) {
        $lastnameErr = "Last name is required";
        $isValid = false;
    }
    $firstAddress = clean_input($_POST["firstAddress"]);
    if (empty($firstAddress)) {
        $firstAddressErr = "Address is required";
        $isValid = false;
    }
    $secondAddress = clean_input($_POST["secondAddress"]);
    $city = clean_input($_POST["city"]);
    if (empty($city)) {
        $cityErr = "City is required";
        $isValid = false;
    }

    if (isset($_POST["state"])) {
        $state = clean_input($_POST["state"]);
        if (empty($_POST["state"])) {
            $stateErr = "State is required";
            $isValid = false;
        }
    } else {
        $stateErr = "State is required";
        $isValid = false;
    }
    $zip = clean_input($_POST["zip"]);
    if (empty($zip)) {
        $zipErr = "Zipcode is required";
        $isValid = false;
    } elseif (!preg_match("/^\d{5}$/", $zip) &&  !preg_match("/^\d{5}-\d{4}$/", $zip)){
        $zipErr = "Zipcode is required. ZipCode must be in ##### or #####-####";
    }
    $phoneNumber = clean_input($_POST["phoneNumber"]);
    if (empty($phoneNumber)) {
        $phoneNumberErr = "Phone number is required";
        $isValid = false;
    } elseif (!preg_match("/^\d{3}-\d{4}$/", $phoneNumber) && !preg_match("/^\d{3}-\d{3}-\d{4}$/", $phoneNumber)){
        $phoneNumberErr = "Phone number is required. Must be in XXX-XXX-XXXX format.";
    }
    $email = clean_input($_POST["email"]);
    if (empty($email)) {
        $emailErr = "Email is required";
        $isValid = false;
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $isValid = false;
        }


    if (isset($_POST["gender"])) {
        $gender = clean_input($_POST["gender"]);
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            $isValid = false;
        }
    } else {
        $genderErr = "Gender is required";
        $isValid = false;
    }

    if (isset($_POST["marital"])) {
        $marital = clean_input($_POST["marital"]);
        if (empty($_POST["marital"])) {
            $maritalErr = "Marital status is required";
            $isValid = false;
        }
    } else {
        $maritalErr = "Marital status is required";
        $isValid = false;
    }

    $birthday = clean_input($_POST["birthday"]);
    if (empty($birthday)) {
        $birthdayErr = "Birthday is required";
        $isValid = false;
    }
}


function clean_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

