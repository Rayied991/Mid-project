<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User panel</title>
</head>
<body bgcolor="#ffe5eb">
    <form action="" method="">
        <fieldset>
            <fieldset> 
                <h1 align="center">Movie ticketing System</h1>
            </fieldset>
        </fieldset>
        <br><br>
        <fieldset>
            <legend><b><h2>User login panel</h2></b></legend>
            <br>
            <label for="user_name">User Name : </label>
            <input type="text" name="user_name" placeholder="Name">
            <br><br>
            <label for="pass">Password : </label>
            <input type="password" name="password" placeholder="Password">
            <br><br>
            <input type="submit" name="submit" value="Login">
            <br><br>
            <big><a href="pass_reset.php">Forgot password?</a></big>
            <br>
           <p>New here? <big><a href="user_reg.php">Register</a></p></big>

        </fieldset>
    </form>
    <br><br>
    <fieldset>
      <legend><h2>Officials login</h2></legend>
      <marquee behavior="" direction="left"><h2><mark>This field is only for the officials </mark></h2></marquee>
      <h3>Login as -</h3>
      <button>Admin</button><br><br>
      <button>Manager</button><br><br>
      <button>Seller</button>
    </fieldset>
</body>
</html>