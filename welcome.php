<!doctype html>
<html>
<head>
    <title>Astrology Results</title>
</head>
<body>

    <h1>Astrosite Results</h1>
    
    <?php
    // 1. Grab the mail from the form
    $userName  = $_POST['name'];
    $userDob   = $_POST['dob'];
    $userAbout = $_POST['about'];

    // 2. Open the mail and print it on the screen
    echo "<p>Welcome, " . $userName . "!</p>";
    echo "<p>Your Date of Birth is: " . $userDob . "</p>";
    echo "<p>You want to know about: " . $userAbout . "</p>";
    ?>

</body>
</html>
