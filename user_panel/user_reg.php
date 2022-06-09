<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body bgcolor="#ffe5eb">
    <form action="" method="">
    <fieldset>
        <fieldset> 
            <h1 align="center">Movie ticketing System</h1>
        </fieldset>
    </fieldset>
    <fieldset>
        <legend align="center"><h2>Personal Information</h2></legend>
        <label for="f_name">First name : </label>
        <input type="text" name="f_name" placeholder="First name"><br><br>
        <label for="l_name">Last name : </label>
        <input type="text" name="l_name" placeholder="Last name"><br><br>
        <label for="gender">Gender : </label><br><br>
        <input type="radio" name="male"><label for="male">Male</label>
        <input type="radio" name="female"><label for="male">Female</label>
        <input type="radio" name="others"><label for="others">Others</label>
        <br><br>
        <label for="religion">Religion : </label>
        <select name="religion">
            <option>Islam</option>
            <option>Hindu</option>
            <option>Buddhist</option>
            <option>Christian</option>
            <option>Other</option>
        </select>
        <br><br>
        <label for="dob">Date of birth : </label>
        <input type="date" name="dob"><br><br>
    </fieldset>

    <fieldset>
        <legend align="center"><h2>Contact information</h2></legend>
        <label for="mobile">Mobile number : </label>
        <input type="text" name="mobile" placeholder="Contact number">
        <br><br>
        <label for="email">Email : </label>
        <input type="email" name="email" placeholder="Email"><br><br>
        <label for="address">Address : </label>
        <textarea name="address" rows="4" cols="40" placeholder="house no./road no./block no./section no./district/Bangladesh."></textarea>
        <br><br>
        <label for="office">Office contact : </label>
        <input type="text" name="office" placeholder="(Optional)"><br><br>
    </fieldset>
<br><br>
    <fieldset>
        <legend align="center"><h2>Login information</h2></legend>
        <label for="set_user">User name : </label>
        <input type="text" name="set_user" placeholder="User name"><br><br>
        <label for="set_pass">Password : </label>
        <input type="password" name="set_pass" placeholder="Password"><br><br>
        <label for="confirm_pass">Confirm password : </label>
        <input type="password" name="confirm_pass" placeholder="Confirm password"><br><br>
        <input type="submit" name="submit" value="Register">
        <br><br>
    </fieldset>
    <big><p><a href="user_login.php">Login page</a></p></big>
    <br><br>
</form>
</body>
</html>