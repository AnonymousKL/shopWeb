
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/form.css')}}"/>
    <title>Sign up</title>
</head>
<body>
<div class="login">
        <h2>Đăng Ký</h2>
        <form method="post" action="{{URL::to('/handle_reg')}}">
        {{ csrf_field() }}
            <div class="field">
                <label>Name</label>
                <input type="text" name="admin_name" class="inputText"required>
            </div>
            <div class="field">
                <label>Email</label>
                <input type="text" name="admin_email" class="inputText" required>
            </div>
            <div class="field">
                <label>Password</label>
                <input type="password" name="admin_password" class="inputText" required>
            </div>
            <div class="field">
                <label>Re-Password</label> 
                <input type="password" name="admin_repassword" class="inputText" required>
            </div>
            <input type="submit" value="Sign Up" name="btnSignup" class="btn">
            <p><a href="{{URL::to('login')}}">Log In</a><p>
        </form>
    </div>
</html>
