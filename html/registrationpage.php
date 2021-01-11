<!DOCTYPE html>
<?php
include "connectioninfo.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <meta name="viewport" content ="width=device-width, initial-scale=1">
    <link href="../css/makeitpretty.css" rel="stylesheet" type="text/css"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/jquery-input-mask-phone-number@1.0.14/dist/jquery-input-mask-phone-number.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script src="../js/formvalidation.js"></script>
</head>
<body class="overflow-x-hidden registration-body">
<?php
    include "inputValidate.php";
    include 'insertValidData.php';
    ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./homepage.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link " href="https://dota2.gamepedia.com/Dota_2_Wiki"
                   target="_blank">About Dota 2<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.dota2.com/international/battlepass"
                   target="_blank">BattlePass</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./registrationpage.php"
                   target="_blank">Registration</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./animationspage.html"
                   target="_blank">Animations</a>
            </li>
        </ul>
    </div>
</nav>

<form class="needs-validation p-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-row">
        <div id="username-wrapper" class="col-md-4 mb-3">
            <label for="username">Username </label><span class="error">* <?php echo $usernameErr;?></span>
            <input name="username" type="text" class="form-control" id="username" value="<?php echo $username;?>" minlength="6" maxlength="50" placeholder="muffin.man" onblur="validate('username')" onkeyup="validate('username')" required>
            <div id="username-success" class="valid-feedback">
                Looks good!
            </div>
            <div id="username-error" class="invalid-feedback">
                Username must be between 6 - 50 characters
            </div>
        </div>
        <div id="password-wrapper" class="col-md-4 mb-3">
            <label for="password">Password </label><span class="error">* <?php echo $passwordErr;?></span>
            <input name="password" type="password" class="form-control" id="password" value="<?php echo $password;?>" placeholder="Make it good" maxlength="50" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,50}$" onblur="validatePassword()" onkeyup="validatePassword()" required/>
            <div id="password-success" class="valid-feedback">
                Looks good!
            </div>
            <div id="password-error" class="invalid-feedback">
                Password must be at least 8 characters and contain 1 uppercase, 1 lowercase, 1 number & 1 special character
            </div>
        </div>
        <div id="repeatPassword-wrapper" class="col-md-4 mb-3">
            <label for="repeatPassword">Repeat password </label><span class="error">* <?php echo $repeatPasswordErr;?></span>
            <input name="repeatPassword" type="password" class="form-control" id="repeatPassword" value="<?php echo $repeatPassword;?>" placeholder="Make it match" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,50}$" onblur="validatePasswordMatch()" onkeyup="validatePasswordMatch()" required/>
            <div id="repeatPassword-success" class="valid-feedback">
                Looks good!
            </div>
            <div id="repeatPassword-error" class="invalid-feedback">
                Passwords do not match
            </div>
        </div>
        <div id="firstName-wrapper" class="col-md-4 mb-3">
            <label for="firstName">First name </label><span class="error">* <?php echo $firstnameErr;?></span>
            <input name="firstname" type="text" class="form-control" id="firstName" value="<?php echo $firstname;?>" placeholder="Muffin" maxlength="50" onblur="validate('firstName')" onkeyup="validate('firstName')" required/>
            <div id="firstName-success" class="valid-feedback">
                Looks good!
            </div>
            <div id="firstName-error" class="invalid-feedback">
                Looks bad!
            </div>
        </div>
        <div id="lastName-wrapper" class="col-md-4 mb-3">
            <label for="lastName">Last name </label><span class="error">* <?php echo $lastnameErr;?></span>
            <input name="lastname"type="text" class="form-control" id="lastName" value="<?php echo $lastname;?>"placeholder="Man" maxlength="50" onblur="validate('lastName')" onkeyup="validate('lastName')"required>
            <div id="lastName-success" class="valid-feedback">
                Looks good!
            </div>
            <div id="lastName-error" class="invalid-feedback">
                Looks bad!
            </div>
        </div>
        <div id="address-wrapper" class="col-md-4 mb-3">
            <label for="address">Address line 1 </label><span class="error">* <?php echo $firstAddressErr;?></span>
            <input name="firstAddress" type="text" class="form-control" id="address" value="<?php echo $firstAddress;?>"placeholder="1 Drury Lane" maxlength="100" onblur="validate('address')" onkeyup="validate('address')" required/>
            <div id="address-success" class="valid-feedback">
                Looks good!
            </div>
            <div id="address-error" class="invalid-feedback">
                Looks bad!
            </div>
        </div>
        <div id="secondAddress-wrapper" class="col-md-4 mb-3">
            <label for="secondAddress">Address line 2 </label>
            <input name="secondAddress" type="text" class="form-control" id="secondAddress" value="<?php echo $secondAddress;?>" maxlength="100" placeholder=""/>
        </div>
    </div>
    <div class="form-row">
        <div id="city-wrapper" class="col-md-4 mb-3">
            <label for="city">City </label><span class="error">* <?php echo $cityErr;?></span>
            <input name="city" type="text" class="form-control" value="<?php echo $city;?>" id="city" placeholder="City" maxlength="50" onblur="validate('city')" onkeyup="validate('city')" required>
            <div id="city-success" class="valid-feedback">
                Looks good!
            </div>
            <div id="city-error" class="invalid-feedback">
                Looks bad!
            </div>
        </div>
        <div id="state-wrapper" class="col-md-4 mb-3">
            <label for="state">State </label><span class="error">* <?php echo $stateErr;?></span>
            <select name="state" class="form-control" id="state" value="<?php echo $state;?>" onblur="validate('state')" onchange="validate('state')" required>
                <option disabled value="" <?php if ($state == "") {echo "selected";}?>> -- State -- </option>
                <option <?php if ($state == "Alabama") {echo "selected";}?>>Alabama</option>
                <option <?php if ($state == "Alaska") {echo "selected";}?>>Alaska</option>
                <option <?php if ($state == "Arizona") {echo "selected";}?>>Arizona</option>
                <option <?php if ($state == "Arkansas") {echo "selected";}?>>Arkansas</option>
                <option <?php if ($state == "California") {echo "selected";}?>>California</option>
                <option <?php if ($state == "Colorado") {echo "selected";}?>>Colorado</option>
                <option <?php if ($state == "Connecticut") {echo "selected";}?>>Connecticut</option>
                <option <?php if ($state == "Delaware") {echo "selected";}?>>Delaware</option>
                <option <?php if ($state == "Florida") {echo "selected";}?>>Florida</option>
                <option <?php if ($state == "Georgia") {echo "selected";}?>>Georgia</option>
                <option <?php if ($state == "Hawaii") {echo "selected";}?>>Hawaii</option>
                <option <?php if ($state == "Idaho") {echo "selected";}?>>Idaho</option>
                <option <?php if ($state == "Illinois") {echo "selected";}?>>Illinois</option>
                <option <?php if ($state == "Indiana") {echo "selected";}?>>Indiana</option>
                <option <?php if ($state == "Iowa") {echo "selected";}?>>Iowa</option>
                <option <?php if ($state == "Kansas") {echo "selected";}?>>Kansas</option>
                <option <?php if ($state == "Kentucky") {echo "selected";}?>>Kentucky</option>
                <option <?php if ($state == "Louisiana") {echo "selected";}?>>Louisiana</option>
                <option <?php if ($state == "Maine") {echo "selected";}?>>Maine</option>
                <option <?php if ($state == "Maryland") {echo "selected";}?>>Maryland</option>
                <option <?php if ($state == "Massachusetts") {echo "selected";}?>>Massachusetts</option>
                <option <?php if ($state == "Michigan") {echo "selected";}?>>Michigan</option>
                <option <?php if ($state == "Minnesota") {echo "selected";}?>>Minnesota</option>
                <option <?php if ($state == "Mississippi") {echo "selected";}?>>Mississippi</option>
                <option <?php if ($state == "Missouri") {echo "selected";}?>>Missouri</option>
                <option <?php if ($state == "Montana") {echo "selected";}?>>Montana</option>
                <option <?php if ($state == "Nebraska") {echo "selected";}?>>Nebraska</option>
                <option <?php if ($state == "Nevada") {echo "selected";}?>>Nevada</option>
                <option <?php if ($state == "New Hampshire") {echo "selected";}?>>New Hampshire</option>
                <option <?php if ($state == "New Jersey") {echo "selected";}?>>New Jersey</option>
                <option <?php if ($state == "New Mexico") {echo "selected";}?>>New Mexico</option>
                <option <?php if ($state == "New York") {echo "selected";}?>>New York</option>
                <option <?php if ($state == "North Carolina") {echo "selected";}?>>North Carolina</option>
                <option <?php if ($state == "North Dakota") {echo "selected";}?>>North Dakota</option>
                <option <?php if ($state == "Ohio") {echo "selected";}?>>Ohio</option>
                <option <?php if ($state == "Oklahoma") {echo "selected";}?>>Oklahoma</option>
                <option <?php if ($state == "Oregon") {echo "selected";}?>>Oregon</option>
                <option <?php if ($state == "Pennsylvania") {echo "selected";}?>>Pennsylvania</option>
                <option <?php if ($state == "Rhode Island") {echo "selected";}?>>Rhode Island</option>
                <option <?php if ($state == "South Carolina") {echo "selected";}?>>South Carolina</option>
                <option <?php if ($state == "South Dakota") {echo "selected";}?>>South Dakota</option>
                <option <?php if ($state == "Tennessee") {echo "selected";}?>>Tennessee</option>
                <option <?php if ($state == "Texas") {echo "selected";}?>>Texas</option>
                <option <?php if ($state == "Utah") {echo "selected";}?>>Utah</option>
                <option <?php if ($state == "Vermont") {echo "selected";}?>>Vermont</option>
                <option <?php if ($state == "Virginia") {echo "selected";}?>>Virginia</option>
                <option <?php if ($state == "Washington") {echo "selected";}?>>Washington</option>
                <option <?php if ($state == "West Virginia") {echo "selected";}?>>West Virginia</option>
                <option <?php if ($state == "Wisconsin") {echo "selected";}?>>Wisconsin</option>
                <option <?php if ($state == "Wyoming") {echo "selected";}?>>Wyoming</option>
            </select>
            <div id="state-success" class="valid-feedback">
                Looks good!
            </div>
            <div id="state-error" class="invalid-feedback">
                Looks bad!
            </div>
        </div>
        <div id="zip-wrapper" class="col-md-4 mb-3">
            <label for="zip">Zip </label><span class="error">* <?php echo $zipErr;?></span>
            <input name="zip" type="text" class="form-control" id="zip" value="<?php echo $zip;?>"minlength="5" maxlength="10" placeholder="Zip" pattern="^\d{5}(?:-\d{4})?$"  onblur="validate('zip')" onkeyup="validate('zip')" required>
            <div id="zip-success" class="valid-feedback">
                Looks good!
            </div>
            <div id="zip-error" class="invalid-feedback">
                ZipCode must be in ##### or #####-####
            </div>
        </div>
        <div id="phoneNumber-wrapper" class="col-md-4 mb-3">
            <label for="phoneNumber">Phone Number </label><span class="error">* <?php echo $phoneNumberErr;?></span>
            <input name="phoneNumber" type="tel" class="form-control" id="phoneNumber" value="<?php echo $phoneNumber;?>"maxlength="12" placeholder="XXX-XXX-XXXX" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" onblur="validate('phoneNumber')" onkeyup="validate('phoneNumber')" required>
            <div id="phoneNumber-success" class="valid-feedback">
                I'll call ya sometime!
            </div>
            <div id="phoneNUmber-error" class="invalid-feedback">
                Must be in XXX-XXX-XXXX format.
            </div>
        </div>
        <div id="email-wrapper" class="col-md-4 mb-3">
            <label for="email">Email address </label><span class="error">* <?php echo $emailErr;?></span>
            <input name="email" type="email" class="form-control" id="email" value="<?php echo $email;?>"placeholder="Email" onblur="validate('email')" onkeyup="validate('email')" required/>
            <div id="email-success" class="valid-feedback">
                Looks good!
            </div>
            <div id="email-error" class="invalid-feedback">
                Looks bad!
            </div>
        </div>
        <div id="gender-wrapper" class="col-md-4 mb-3">
            <p>Gender: <span class="error">* <?php echo $genderErr;?></span></p>
            <label for="male">Male</label>
            <input type="radio" id="male" name="gender" value="Male" <?php if ($gender=="Male"){echo "checked";}?>/>
            <label for="female">Female</label>
            <input type="radio" id="female" name="gender" value="Female" <?php if ($gender=="Female"){echo "checked";}?> />
            <div id="gender-success" class="valid-feedback">
                Looks good!
            </div>
            <div id="gender-error" class="invalid-feedback">
                Looks bad!
            </div>
        </div>

        <div id="marital-wrapper" class="col-md-4 mb-3">
            <p>Marital Status:<span class="error">* <?php echo $maritalErr;?></span></p>
            <label for="married">Married </label>
            <input type="radio" id="married" name="marital" value="Married"  <?php if ($marital=="Married"){echo "checked";}?>/>
            <label for="single">Single</label>
            <input type="radio" id="No" name="marital" value="No" <?php if ($marital=="No"){echo "checked";}?> />
            <label for="definitelyNot">Divorced and ready to party</label>
            <input type="radio" id="definitelyNot" name="marital" value="DefinitelyNot" <?php if ($marital=="DefinitelyNot"){echo "checked";}?> />
            <div id="marital-success" class="valid-feedback">
                Looks good!
            </div>
            <div id="marital-error" class="invalid-feedback">
                Looks bad!
            </div>
        </div>
            <div id="birthday-wrapper" class="col-md-4 mb-3">
            <label for="birthday">Birthday </label><span class="error">* <?php echo $birthdayErr;?></span>
            <input name="birthday" type="date" class="form-control" id="birthday" value="<?php echo $birthday;?>" onblur="validate('birthday')" onkeyup="validate('birthday')" required>
            <div id="birthday-success" class="valid-feedback">
                Looks good!
            </div>
            <div id="birthday-error" class="invalid-feedback">
                Looks bad!
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
        </div>
    </div>
    <button class="btn btn-primary" type="submit" >Submit</button>
    <button class="btn btn-primary" type="Reset" onclick="resetErrors()">Reset</button>
</form>

<footer>
    <p>Author: Brendan Loyd<br>
        <a href="https://en.wikipedia.org/wiki/The_International_2017" target="_blank">TI17 Information</a>
        <a href="https://en.wikipedia.org/wiki/The_International_2018" target="_blank">TI18 Information</a>
        <a href="https://en.wikipedia.org/wiki/The_International_2019" target="_blank">TI19 Information</a>
        <a href="https://dota2.gamepedia.com/The_International_2020" target="_blank">TI20 Information</a>
    </p>
</footer>

</body>
</html>