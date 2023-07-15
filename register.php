<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Login page CSS. */
        body {
            font-family: sans-serif;
            background-image: url("back.jpeg");
           background-repeat: no-repeat;
           background-size: cover;
        }

        .main {
            width: 400px;
            height: 550px;
            /* border: 2px solid /black; */
            text-align: center;
            margin: auto;
            margin-top: 80px;
           background-repeat: no-repeat;
           background-size: cover;
            background-image: url("inside.jpg");

            border-radius: 30px;
        }

        #name {
            margin-top: 40px;
        }

        #error {
            color: red;
            margin: 0;
            font-size: small;
        }

        #Confirm_password {
            display: inline-block;
        }

        #toggle {
            width: 75%;
            border-radius: 7px;
            background-color: grey;
            margin: auto;
            padding: 5px;
            cursor: pointer;
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

        .main input {
            border-radius: 6px;
        }
        #h1{
            padding-top: 10%;
        }
    </style>
</head>

<body>
    <div class="main">
        <h1 id="h1">SIGN UP</h1>
        <h3 id="name">Username</h3>
        <input type="text" name="name" /><br>
        <h3>Password</h3>
        <input type="password" name="password" id="password" /><br>
        <h3>Confirm Password </h3>
        <input type="password" name="Confirm password" id="Confirm_password" onkeyup="get(this)" />
        <p id="error"></p><br>
        <button id="toggle" onclick="toggle(this)">Show password</button><br><br>
        <button id="login" onclick="hello()">Register</button>
        <h6>Have an account ?<a href="login.php"> Sign in</a></h6>
    </div>
</body>
<script>
    function get(elem) {
        let password = document.getElementById("password").value;
        let Confirm_password = document.getElementById("Confirm_password").value;
        if (elem.value.length > 0) {
            if (password != Confirm_password) {
                document.getElementById("error").innerText = "Confirm password does not match !";
            }
            else {
                document.getElementById("error").innerText = "";
            }
        }
        else {
            document.getElementById("error").innerText = "";
        }
    }
    function hello(){
        window.location.href="payment_details.php";
    }
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
</script>

</html>