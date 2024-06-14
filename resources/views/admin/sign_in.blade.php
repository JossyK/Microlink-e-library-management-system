<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorials Login</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <div class="branding">
                <h1>Microlink</h1>
                <p>E-learning Management System</p>    
            </div>
        </div>
        <div class="right-panel">
            <div class="login-form">
                <h2>Sign In</h2>
              
                <form action="{{ url('/user/sign-in/process') }}" method="POST">
                    <div class="input-group">
                        <label for="email">EMAIL</label>
                        <input type="email" id="email" name="email" placeholder="Type your Email">
                    </div>
                    <div class="input-group">
                        <label for="password">PASSWORD</label>
                        <input type="password" id="password" name="password" placeholder="Type your password">
                    </div>

                    <a href="{{ url('/admin/forget-password') }}" class="forgot-password" style="margin-bottom: 1em;">Forgot your password? <i class="fas fa-arrow-right"></i></a>

                
                </div>
                
                <div class="input-group">
                    <input type="submit"  value="Login as admin" class="login-button" />
                </div>

                <a href="/" class="text-grey-700">Login as student</a>

                </form>
            
            </div>
        </div>
    </div>
</body>
</html>
