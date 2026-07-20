<?php

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$role = $_POST["role"];
$qualification = $_POST["qualification"];
$gender = $_POST["gender"] ?? "";
$about = trim($_POST["about"]);
$skills = $_POST["skills"] ?? [];

$errors = [];

// Name validation
if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
    $errors[] = "❌ Name should contain only letters.";
}

// Email validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "❌ Enter a valid email address.";
}

// Phone validation
if (!preg_match("/^[0-9]{10}$/", $phone)) {
    $errors[] = "❌ Phone number must contain exactly 10 digits.";
}

// Gender validation
if (empty($gender)) {
    $errors[] = "❌ Please select your gender.";
}

// Skills validation
if (count($skills) == 0) {
    $errors[] = "❌ Please select at least one skill.";
}

// About validation
if (strlen($about) < 10) {
    $errors[] = "❌ Please write at least 10 characters about yourself.";
}

if (count($errors) > 0) {

    echo "<h2 style='color:red;'>Application Rejected!</h2>";

    foreach ($errors as $error) {
        echo $error . "<br>";
    }

    echo "<br><b>Please correct the above errors and submit again.</b>";

} else {

    echo "<h2 style='color:green;'>Application Submitted Successfully!</h2>";

    echo "<b>Name:</b> $name <br>";
    echo "<b>Email:</b> $email <br>";
    echo "<b>Phone:</b> $phone <br>";
    echo "<b>Job Role:</b> $role <br>";
    echo "<b>Qualification:</b> $qualification <br>";
    echo "<b>Gender:</b> $gender <br>";
    echo "<b>Skills:</b> " . implode(", ", $skills) . "<br>";
    echo "<b>About:</b> $about";
}
?>
