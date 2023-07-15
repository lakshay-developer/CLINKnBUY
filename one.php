<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
</head>
<body>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $amount = $_POST['amount'];
        $UpINumber = $_POST['UpINumber'];
        // $currency = $_POST['currency'];

        // Generate QR code URL
        $qrCodeUrl = generateQRCodeUrl($amount);

        // Display the generated QR code
        echo "<h2>Payment QR Code</h2>";
        echo "<img src='$qrCodeUrl' alt='QR Code'>";
    

        $data = "UpINumber: $UpINumber\n amount: $amount\n";
        file_put_contents('qr.txt', $data, FILE_APPEND | LOCK_EX);
    } 
    // Function to generate QR code URL
    function generateQRCodeUrl($amount) {
        // Generate the payment URL based on your payment gateway
        // Replace this example URL with your payment gateway's API endpoint
        $paymentUrl = "powder.jpg=$amount";
        
        // Generate QR code using Google Chart API
        $qrCodeUrl = "https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=" . urlencode($paymentUrl);

        return $qrCodeUrl;
    }
    ?>

<div class="new">
<h2>Payment Details</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<label for="paywith">Pay With:</label>
<select id="paywith" name="paywith ">
  <option value="Phone Pe">Phone Pe</option>
  <option value="googlepay">Google Pay</option>
  <option value="paytm">Paytm</option>
</select> <br><br>
        
<label for="UpI Number">UpINumber:</label>
        <input type="text" id="UpINumber" name="UpINumber" required><br><br> 

        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" required><br><br>

        <input type="submit" value="Generate QR Code" class="button">
    </form>
</div>
</body>
<style>
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
/* body{
  background-image: url("back.jpeg");
           background-repeat: no-repeat;
           background-size: cover;
} */
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
select {
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
</html>
