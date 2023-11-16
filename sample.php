<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <script>
    function validateForm() {
      // Basic validation using JavaScript
      let name = document.getElementById('name').value;
      let email = document.getElementById('email').value;
      let phone = document.getElementById('phone').value;
      let address = document.getElementById('address').value;
      let password = document.getElementById('password').value;
      let confirmPassword = document.getElementById('confirmPassword').value;

      // Validation rules
      if (name.length < 10) {
        alert('Name should be at least 10 characters long.');
        return false;
      }
      if (!email.match(/@(gmail\.com|yahoo\.com)$/)) {
        alert('Invalid email domain. Use "@gmail.com" or "@yahoo.com".');
        return false;
      }
      if (!phone.match(/^(0|6|9)/)) {
        alert('Phone should start with 0, 6, or 9.');
        return false;
      }
      if (password.length < 4) {
        alert('Password should be at least 4 characters long.');
        return false;
      }
      // You can add more specific password constraints here

      if (password !== confirmPassword) {
        alert('Passwords do not match.');
        return false;
      }

      return true;
    }
  </script>
</head>

<body>

  <form action="process2.php" method="POST" onsubmit="return validateForm()">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required><br><br>

    <label for="class">Class:</label>
    <select id="class" name="class" required>
      <option value="silver">Silver</option>
      <option value="golden">Golden</option>
      <option value="platinum">Platinum</option>
    </select><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="confirmPassword">Confirm Password:</label>
    <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>

    <input type="submit" value="Submit">
  </form>

</body>

</html>