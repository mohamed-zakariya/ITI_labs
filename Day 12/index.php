<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="main.php" method="get" name="formm">
        
        <span style="margin-right: 50px;">First Name</span><input name="firstName" type="text" id="firstName"><br><br>
        <span style="margin-right: 50px;">Last Name</span><input name="lastName" type="text" id="lastName"><br><br>
        <span style="margin-right: 50px;">Address</span><input name="address" type="text" id="address"><br><br>
        <span style="margin-right: 50px;">country</span>
        <select name="country" id="country"> 
            <option value="egypt">Egypt</option>
            <option value="Saudia">Saudia Arabia</option>
            <option value="Qatar">Qatar</option>
            <option value="United">United Arab Emirates</option>
        </select><br><br>
        <span style="margin-right: 50px;">Gender</span>
        Male<input name="Gender" type="radio" value="Mr">
        Female<input name="Gender" type="radio" value="Mrs"><br>
        <span style="color: red;margin-left: 50px;" hidden> please enter your Gender</span><br><br>

        <span style="margin-right: 40px;">Skills</span>
            PHP<input name="Skills[]" type="checkbox" style="margin-right: 30px;" value="PHP">
        J23E<input name="Skills[]" type="checkbox" value="J23E"><br>
        <span style="margin-left: 160px;">
            My Sql<input name="Skills[]" type="checkbox" value="My SQL">
            PostgreeSQL<input name="Skills[]" type="checkbox" value="PostgreeSQL"><br>
        </span>
        <br>
        <span style="margin-right: 50px;">Username</span><input name="Username" type="text" id="Username"><br><br>
        <span style="margin-right: 50px;">Password</span><input name="Password" type="password" id="Password"><br><br>
        <span style="margin-right: 50px;">Department</span><input name="Department" type="text" id="Department" placeholder="OpenSource"><br><br>

        <label style="background-color: rgb(0, 0, 0, 0.1);" name="same">hello</label><br>
        <span style="margin-left: 45px;">Please insert the code the below box</span><br>
        <input type="text" name="checkk"><br><br>
        <button type="submit" style="margin-right: 30px;">Submit</button>
        <button type="reset">Reset</button>
 
    </form>

    <script src="main.php"></script>
</body>
</html>