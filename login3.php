<!DOCTYPE html>
<html>
<head>
    <title>loginform</title>
</head>
<body>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isername = $_POST['username'];
        $password= $_POST['password'];
        $email= $_POST['email'];

        // Save the form data to a file
        $data = "username: $username \n password: $password\n Email: $email\n";
        file_put_contents('login.txt', $data, FILE_APPEND | LOCK_EX);

        // // Display a success message
        // echo "<h2>Order Placed Successfully!</h2>";
    }
    ?>
  <div class="new">
    <center><h1>Login</h1></center>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">username</label>
        <input type="text" id="username1" name="username1" required><br><br>

        <label for="password">password</label>
        <input type="text" id="password1" name="password1" required><br><br>
        <button type="button" class="button"><a href="payment_details.php">Sign in</a></button>
        <!-- <input type="submit" value="Submit" class="button"> -->
    </form>
    <center><h1>Create Account</h1></center>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">username</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">password</label>
        <input type="text" id="password" name="password" required><br><br>

        <label for="email">email</label>
        <input type="text" id="email" name="email" required><br><br>
        <button type="button" class="button"><a href="payment_details.php">Create Account</a></button>
        <!-- <input type="submit" value="Create account" class="button"> -->
    </form>
  </div>
    <style>
        body{
            background: whitesmoke;
        }
        .end{
            margin-top: 20px;
        }
    a{
        text-decoration: none;
        color: black;
        margin-top: 5px;
    }
        .new{
    height: 500px;
  width: 400px;
  /* border: 2px solid black; */
  margin: 0 auto;
  margin-top: 20px;
  padding: 20px;
  background-color: whitesmoke;
}

h1 {
  text-align: center;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"] {
  width: 95%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}
input[type="date"] {
  width: 95%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}
input[type="number"] {
  width: 95%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.button {
  display: block;
  width: 98%;
  padding: 10px;
  background-color: #4caf50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
  color: white;
}

button:hover {
  background-color: #45a049;
}
button a{
    color: white;
    text-decoration: none;
}
    </style>
</body>
</html>
