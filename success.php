<?php
session_start();

if (isset($_SESSION['userDetails'])) {
    $userDetails = $_SESSION['userDetails'];
    // Display user details
} else {
    // If the user directly accesses this page without submitting the form
    header("Location: index.php"); // Redirect to the form page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
</head>

<body>

    <h1>Registration Successful!</h1>

    <h2>User Details:</h2>
    <ul>
        <li><strong>Name:</strong> <?php echo $userDetails['Name']; ?></li>
        <li><strong>Email:</strong> <?php echo $userDetails['Email']; ?></li>
        <li><strong>Phone:</strong> <?php echo $userDetails['Phone']; ?></li>
        <li><strong>Address:</strong> <?php echo $userDetails['Address']; ?></li>
        <li><strong>Class:</strong> <?php echo $userDetails['Class']; ?></li>
    </ul>

</body>

</html>