<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/form.css')}}"/>
    <title>Login</title>
</head>
<body>
    <div class="login">
        <h2>Đăng Nhập</h2>
        <form action="{{ URL::to('/handle_log') }}" method="post">
        {{ csrf_field() }}
            <?php
                $message = Session::get('message');
                if($message){
                    echo '<div class="field" style="color:red">'.$message.'</div>';
                    Session::put('message',null);
                }
             
            ?>
            <div class="field">
                <label>Email</label> 
                <input type="text" name="admin_email" class="inputText">
            </div>
            <div class="field">
                <label>Password</label> 
                <input type="password" name="admin_password" class="inputText">
            </div>
            <input type="submit" value="Login" name="btnLogin" class="btn">
            <p>Don't have an account? <a href="{{URL::to('/register')}}">Sign Up</a></p>

        </form>
        
    </div>
</body>
</html>