<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>

<body>


                <form action="../controller/regCheck.php" method="post">
    
                    <fieldset style="width:10%; margin:  0px auto;">

                        <legend><b>REGISTRATION</b></legend>

                        <br><br>

                       
                        
                        
                        <b>Full Name</b><br><input type="text" name="full_name"><br>
                        <b>User Name</b><br><input type="text" name="full_name"><br>
                        <b>Email</b><br><input type="text" name="email"><br>
                        <b>Password</b><br><input type="text" name="password"><br>
                        <b>Confirm Password</b><br><input type="text" name="email"><br>
                        <b>Address</b><br><input type="text" name="adress"><br>

                        <b>City</b><br><input type="text" name="city"><br>
                        <b>Country</b><br><input type="text" name="country"><br>
                        <b>Company</b><br><input type="text" name="company"><br>
                        <b>Phone Number</b><br><input type="text" name="phone"><br>
                       <b>Password</b><br><input type="password" name="password"  ><br>
                       <!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least 1 number and 1 uppercase and lowercase letter, and at least 8 or more characters" --> 
                        
                        <b>Confirm Password</b><br><input type="password" name="cpassword" ><br>
                        <!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password and Confirm Password should be same" -->
                        

                         <b>User Type</b>

                        <select name="cars" id="cars">
                        <b>Phone Number</b>
                        <option value="volvo">Admin</option>
                        <option value="saab">Customer</option>
                        <option value="mercedes">Accountant</option>
                        <option value="audi">Sales and Marketing Person</option>
                        </select>

                        <input type="submit" name="submit" value="Sign Up">
                        <a  href="/login">Sign In</a>

                    </fieldset>
                </form>


</body>

</html>