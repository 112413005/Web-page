<!doctype html>
<html>
<head>
    <title>Astrology Results</title>
</head>
<body>

    <h1>Astrosite Results</h1>
    
    <?php
    // 1. Grab the form data safely using $_POST
    $userName  = isset($_POST['name']) ? $_POST['name'] : 'Guest';
    $userDob   = isset($_POST['dob']) ? $_POST['dob'] : 'Not provided';
    $userAbout = isset($_POST['about']) ? $_POST['about'] : 'Not specified';

    // 2. Output the results safely
    echo "<p>Welcome, " . htmlspecialchars($userName) . "!</p>";
    echo "<p>Your Date of Birth is: " . htmlspecialchars($userDob) . "</p>";
    echo "<p>You want to know about: " . htmlspecialchars($userAbout) . "</p>";
    ?>

</body>
</html>
