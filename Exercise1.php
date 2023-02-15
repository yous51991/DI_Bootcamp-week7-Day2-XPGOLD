<?php

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Validate the form data
  if (empty($name)) {
    // Set error message if name is empty
    $error_message = "Name is required";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Set error message if email is invalid
    $error_message = "Invalid email address";
  } elseif (strlen($password) < 8) {
    // Set error message if password length is less than 8 characters
    $error_message = "Password must be at least 8 characters";
  } else {
    // Set success message if all validation checks are passed
    $success_message = "Form submitted successfully!";
  }
}

?>
<!-- HTML form for user input -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <!-- Label and input for name -->
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>
  <!-- Label and input for email -->
<label for="email">Email:</label>
<input type="email" id="email" name="email" required>

  <!-- Label and input for password -->
<label for="password">Password:</label>
<input type="password" id="password" name="password" required>

  <!-- Submit button -->
  <input type="submit" value="Submit">
</form>
<!-- Display error message if any -->
<?php if (isset($error_message)): ?>
  <p style='color:red;'>Error: <?php echo $error_message; ?></p>
<?php endif; ?>
<!-- Display success message if any -->
<?php if (isset($success_message)): ?>
  <p style='color:green;'><?php echo $success_message; ?></p>
<?php endif; ?>