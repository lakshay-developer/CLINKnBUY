<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
</head>
<body>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $item = $_POST['item'];

        // Save the form data to a file
        $data = "Name: $name\n address: $address\n city: $city\n state: $state\n pincode: $pincode\n item: $item\n";
        file_put_contents('payment_details.txt', $data, FILE_APPEND | LOCK_EX);

        // Display a success message
        echo "<h2> Details Saved Successfully!</h2>";
    }
    ?>
  <div class="new">
    <center><h1>Payment Details</h1></center>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="address">address:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="city">city:</label>
        <input type="text" id="city" name="city" required><br><br>

        <label for="state">state:</label>
        <input type="text" id="state" name="state" required><br><br>

        <label for="pincode">pincode:</label>
        <input type="text" id="pincode" name="pincode" required><br><br>

        <label for="item">Enter your Item:</label>
        <input type="text" id="item" name="item" required><br><br>

         <input type="submit" value="Submit" class="button"> 
        <!-- <button type="button" class="button" value="submit" type="button"> <a href="card_details.php">Submit</a></button> -->
        <button type="button" class="but"> <a href="card_details.php">Procced To Pay</a></button>
    </form>
  </div>
    <style>
        body{
          background-image: url("back.jpeg");
           background-repeat: no-repeat;
           background-size: cover;
        }
        .end{
            margin-top: 20px;
        }
    a{
        text-decoration: none;
        color: white;
        margin-top: 5px;
    }
        .new{
    height: 600px;
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
.but{
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
  margin-top: 5px;
}

button:hover {
  background-color: #45a049;
}
.button a{
    text-decoration: none;
    color: white;
}
    </style>
</body>
</html>
