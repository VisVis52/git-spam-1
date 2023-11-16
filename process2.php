<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $class = $_POST['class'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validation
    $errors = [];
    if (strlen($name) < 10) {
        $errors[] = "Name should be at least 10 characters long.";
    }
    if (!preg_match('/@(gmail\.com|yahoo\.com)$/', $email)) {
        $errors[] = "Invalid email domain. Use '@gmail.com' or '@yahoo.com'.";
    }
    if (!preg_match('/^(0|6|9)/', $phone)) {
        $errors[] = "Phone should start with 0, 6, or 9.";
    }
    if (strlen($password) < 4 || !preg_match('/^(?=.*[A-Z].*[A-Z])(?=.*[0-9])(?=.*[_@$])[A-Za-z\d_@$]{4,}$/', $password)) {
        $errors[] = "Password should have 2 uppercase characters, 1 digit, 1 special character, and minimum length of 4.";
    }
    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }

    // If there are no errors, store values in an associative array
    if (empty($errors)) {
        $userDetails = [
            'Name' => $name,
            'Email' => $email,
            'Phone' => $phone,
            'Address' => $address,
            'Class' => $class,
            'Password' => $password
        ];

        $_SESSION['userDetails'] = $userDetails;
        header("Location: success.php");
        exit();
    } else {
        $_SESSION['errors'] = $errors;
        header("Location: sample.php"); // Redirect back to the form page to display errors
        exit();
    }
}
