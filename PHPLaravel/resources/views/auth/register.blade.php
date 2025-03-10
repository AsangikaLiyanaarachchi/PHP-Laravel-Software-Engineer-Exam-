<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
        /* General styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Centering the form */
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #333;
        }

        .form-container {
            background-color: #2b2b2b;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 320px;
        }

        .form-container h2 {
            color: #fff;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .input-field {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: none;
            background-color: #444;
            color: white;
            font-size: 14px;
            outline: none;
        }

        .input-field::placeholder {
            color: #bbb;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .checkbox-container input {
            margin-right: 10px;
        }

        .checkbox-container label {
            color: white;
            font-size: 14px;
        }

        .checkbox-container a {
            color: #00bfff;
            text-decoration: none;
            font-weight: bold;
        }

        .checkbox-container a:hover {
            text-decoration: underline;
        }

        .register-btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background: linear-gradient(to right, #64dc96, #65c7f7);
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .register-btn:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>CREATE AN ACCOUNT</h2>

        <form action="{{route('register.post')}}" method="POST">
            @csrf
            <input type="text" class="input-field" name="fullname" placeholder="Your Name" required>
            <input type="email" class="input-field" name="email" placeholder="Your Email" required>
            <input type="password" class="input-field" name="password" placeholder="Password" required>
            <input type="password" class="input-field" name="confirm_password" placeholder="Repeat your password" required>



            <button type="submit" class="register-btn">REGISTER</button>
            <br><br>
            <!-- <button type="submit" class="register-btn">LogIn</button> -->
        </form>
    </div>

</body>

</html>