<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>

<body>


                <form method="post">
    
                    <fieldset style="width:10%; margin:  0px auto;">

                        <legend><b>REGISTRATION</b></legend>

                        <br><br>

                       
                        
                        
                        <b>Full Name</b><br><input type="text" name="full_name"><br>
                        <b>User Name</b><br><input type="text" name="user_name"><br>
                        <b>Email</b><br><input type="text" name="email"><br>
                        <b>Password</b><br><input type="text" name="password"><br>
                        <b>Confirm Password</b><br><input type="text" name="confirm_password"><br>
                        <b>Address</b><br><input type="text" name="address"><br>

                        <b>City</b><br><input type="text" name="city"><br>
                        <b>Country</b><br><input type="text" name="country"><br>
                        <b>Company</b><br><input type="text" name="company"><br>
                        <b>Phone Number</b><br><input type="text" name="phone"><br>
                       
                         <b>User Type</b>

                        <select name="user_type">
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
                {{session('msg')}}
		<br>

		@foreach ($errors->all() as $err)
			{{$err}} <br>
		@endforeach


</body>

</html>