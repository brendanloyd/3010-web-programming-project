<?php
try {
    $last_id = $_SESSION["last_id"];
    //echo "<br/>ID: $last_id<br/>";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
        $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT userName, password, firstName, lastName,
                                                                    address1, address2, city, state, zipCode,
                                                                    phone, email, gender, maritalStatus, dateOfBirth ".
        " FROM registration WHERE id = :last_id");
    $stmt->bindParam(':last_id', $last_id);
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //var_dump($stmt->fetchAll()[0]);
    $assocArray = $stmt->fetchAll()[0];
    $username = $assocArray["userName"];
    $password = $assocArray["password"];
    $firstname = $assocArray["firstName"];
    $lastname = $assocArray["lastName"];
    $firstAddress = $assocArray["address1"];
    $secondAddress = $assocArray["address2"];
    $city = $assocArray["city"];
    $state = $assocArray["state"];
    $zip = $assocArray["zipCode"];
    $phoneNumber = $assocArray["phone"];
    $email = $assocArray["email"];
    $gender = $assocArray["gender"];
    $marital = $assocArray["maritalStatus"];
    $birthday = $assocArray["dateOfBirth"];
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
} finally {
    $conn = null;
}
?>
