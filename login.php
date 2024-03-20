<?php
    include 'connect.php';
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = 'SELECT * FROM login WHERE username == $username && password == $password';

        if($sql){
            
        }

    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .container {
            max-width: 400px;
            margin: 20px auto 0; /* Add a top margin of 20px */
            padding: 20px; /* Add some padding for better spacing */
            background-color: rgba(135, 206, 250, 0.8); /* Sky blue background color */
            border: 2px solid white; /* White border */
            border-radius: 10px; /* Add some rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a subtle shadow effect */
        }

        .custom-input {
            width: calc(100% - 100px); /* Subtract the label width from 100% to calculate the input width */
        }

    </style>
</head>
  <body>
    <div class="container text-center my-5">
        <form method="POST">
            <h1>Login Page</h1> </br></br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>

            <button type="submit" name="login" class="btn btn-success my-3">Login</button>
        </form>
    </div>
  </body>
</html>
