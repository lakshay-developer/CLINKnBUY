<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_page</title>
    <style>
        /* Login page CSS. */
        body {
            font-family: sans-serif;
            background-image: url("back.jpeg");
           background-repeat: no-repeat;
           background-size: cover;
        }

        .sign_in_main {
            width: 400px;
            height: 450px;
            /* border: 2px solid black; */
            text-align: center;
            margin: auto;
            margin-top: 170px;
            background-image: url("inside.jpg");
            border-radius: 30px;
            background-repeat: no-repeat;
           background-size: cover;
        }

        #Username {
            margin-top: 40px;
        }

        #error {
            color: red;
            margin: 0;
            font-size: small;
        }

        #toggle {
            width: 75%;
            border-radius: 7px;
            background-color: grey;
            margin: auto;
            cursor: pointer;
            padding: 5px;
        }
        input[type="text"] {
  width: 75%;
  padding: 8px;
  border: 1px solid black;
  border-radius: 4px;
}
input[type="password"] {
  width: 75%;
  padding: 8px;
  border: 1px solid black;
  border-radius: 4px;
}
        #login {
            width: 75%;
            border-radius: 7px;
            color: white;
            background-color: rgb(9, 9, 60);
            margin: auto;
            padding: 5px;
            cursor: pointer;
        }

        #login_error {
            color: red;
            margin: 0;
            font-size: small;
        }
        .sign_in_main input{
            border-radius: 6px;
        }
        #h1{
            padding-top: 10%;
        }
    </style>
</head>

<body>
    <div class="sign_in_main">
        <h1 id="h1">SIGN IN</h1>
        <h3 id="Username">Username</h3>
        <input type="text" name="name" id="name" placeholder="Username" /><br>
        <h3>Password</h3>
        <input type="password" name="password" id="password" placeholder="Password" /><br>
        <p id="error"></p><br>
        <button id="toggle" onclick="toggle(this)">Show password</button><br><br>
        <button id="login" onclick="login_confirm(this)">Sign in</button>

        <p id="login_error"></p>
        <h6>Don't have an account ?<a href="register.php">Register</a></h6>
    </div>
    <script>
        function toggle(elem) {
            var password = document.getElementById("password");
            var store = password.getAttribute('type');
            var Confirm_password = document.getElementById("Confirm_password");
            var store2 = password.getAttribute('type');
            if (store === 'password' && store2 === 'password') {
                password.setAttribute('type', 'text');
                Confirm_password.setAttribute('type', 'text');
                elem.innerText = "Hide password";
            }
            else {
                password.setAttribute('type', 'password');
                Confirm_password.setAttribute('type', 'password');
                elem.innerText = "Show password";
            }
        }
        function login_confirm(elem) {
            let Username = document.getElementById("name").value;
            let password = document.getElementById("password").value;
            if (Username == 'Bhanu' && password == 'Bhanugupta') {
                window.location.href="payment_details.php";

            }
            else if (Username == 'Mayank' && password == 'Ghatewal') {
                window.location.href="payment_details.php";
            }
            else if (Username == 'Kartikey' && password == 'Kartikeysharma') {
                window.location.href="payment_details.php";
            }
            else {
                document.getElementById("login_error").innerHTML = "Login failed";
            }
        }
    </script>
</body>

</html>