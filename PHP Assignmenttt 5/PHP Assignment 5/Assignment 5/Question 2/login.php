<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <div style="text-align: center; margin: auto; width: 600px; border: 1px solid grey">

        <h1 style="text-align: center; background-color: blue; color: white; margin-top: 0">LOGIN</h1>
        <form action="authenticate.php" method="post">

            <div style="width: 50%; margin: auto">
                <label for="username" style="width: 30%">Username: </label>
                <input type="text" name="username" style="width: 70%" required>
            </div>
            <br><br>

            <div style="width: 50%; margin: auto">
                <label for="password" style="width: 30%">Password: </label>
                <input type="password" name="password" style="width: 70%" required>
            </div>
            <br><br>

            <input type="submit" name="submit" value="Login" style="width: 50%">
        </form>
        <br><br>
    </div>

</body>
</html>