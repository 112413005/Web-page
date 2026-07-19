<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$role = $_POST['role'];
$qualification = $_POST['qualification'];
$gender = $_POST['gender'] ?? "";
$about = $_POST['about'];

$skills = "";

if(isset($_POST['skills']))
{
    $skills = implode(", ", $_POST['skills']);
}

if($name!="" && $email!="" && $phone!="" && $gender!="" && $skills!="")
{
    echo "<h2 style='color:green;'>Application Submitted Successfully!</h2>";

    echo "<b>Name:</b> $name <br>";
    echo "<b>Email:</b> $email <br>";
    echo "<b>Phone:</b> $phone <br>";
    echo "<b>Job Role:</b> $role <br>";
    echo "<b>Qualification:</b> $qualification <br>";
    echo "<b>Gender:</b> $gender <br>";
    echo "<b>Skills:</b> $skills <br>";
    echo "<b>About You:</b> $about";
}
else
{
    echo "<h2 style='color:red;'>Application Rejected!</h2>";
    echo "Please fill all the required fields.<br>";
    echo "Select at least one skill and choose your gender.";
}

?>
