<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sum Number</title>
</head>

<body>
  <!-- Create a form with a post method to submit the values of the two input fields -->
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <!-- Label and input field for first number -->
    <label for="num1">Number 1:</label>
    <input type="text" id="num1" name="num1">

    <!-- Label and input field for second number -->
    <label for="num2">Number 2:</label>
    <input type="text" id="num2" name="num2">

    <!-- Submit button -->
    <input type="submit" value="Submit">
  </form>

  <!-- PHP code to add the two numbers -->
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Get the values of the two numbers from the form
      $nb1 = $_POST["num1"];
      $nb2 = $_POST["num2"];

      // Addition the two numbers
      $result = $nb1 + $nb2;

      if (isset($result)) {
        echo "<h3> Result : $result </h3>";
      }
    }
  ?>
  
</body>

</html>