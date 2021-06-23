<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
                <form method="post">
				
				@csrf
                    <fieldset style="width:10%; margin:  0px auto;"  >
                        
                        <legend align= "left"><b>LOGIN</b></legend>
                        
                        Email&nbsp;:&nbsp;<input type="text" name="email" value="{{old('username')}}" ><br><br>
                        
                        
                        Password&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="password" name="password" value="{{old('password')}}" >
                        <hr>
                        <input type="submit" name="submit" value="Login">
                        <h6>
                            <a href="/register" class="link footer-link">{{ __('Create Account') }}</a>
                        </h6>
                    </fieldset>
                </form>
                {{session('msg')}}
		<br>

		@foreach ($errors->all() as $err)
			{{$err}} <br>
		@endforeach
                   
    
</body>
</html>