<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="script.js" defer></script>
    <style>
        body {
            font-family: 'poppins', sans-serif;
           
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .main {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            border: 2px solid #4E8B3F;
            box-sizing: border-box;
        }

        input {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border-radius: 30px;
            border: 2px solid #4E8B3F;
            font-size: 16px;
            text-align: center;
        }

        button {
            margin-top: 20px;
            border-radius: 50px;
            border: 1px solid #1A7703;
            background: #07BEFA;
            width: 100%;
            padding: 10px;
            color: #FFF;
            font-family: Inter;
            font-size: 18px;
            font-weight: bold;
            box-sizing: border-box;
            cursor: pointer;
        }

        .error-message {
            color: red;
            margin-left: 20px;
            display: block;
            text-align: left;
        }

        @media screen and (max-width: 600px) {
            .main {
                margin: 20px;
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <form method="post" onsubmit="return validateForm()" target="_self" action="signup.php">
        <div class="main">
            <h1 style="font-weight: 700; font-size: 40px; text-align: center;">
                SIGN UP
            </h1>
            <table>
                <tbody>
                    <tr>
                        <td>Enter Username:</td>
                        <td><input type="text" name="username" required autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td>Enter Email :</td>
                        <td><input type="email" name="email" required autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td>Enter Contact No:</td>
                        <td><input type="tel" name="contact" minlength="10" maxlength="10" required autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td>Enter Password:</td>
                        <td><input type="password" name="password" required id="password" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td>Re-enter Password:</td>
                        <td><input type="password" name="password1" required id="password1" autocomplete="off"></td>
                    </tr>
                </tbody>
            </table>
            <span id="error-message" class="error-message"></span>
            <br>
            <button type="submit" value="SIGNUP">SIGN UP</button>
        </div>
    </form>
    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("password1").value;
            var errorMessage = document.getElementById("error-message");

            if (password !== confirmPassword) {
                errorMessage.innerHTML = "The entered passwords do not match.";
                return false;
            }
        }
    </script>
</body>

</html>
