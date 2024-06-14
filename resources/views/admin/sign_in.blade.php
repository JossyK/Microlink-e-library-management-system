<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    @if(Session::has('mess'))

        swal("Sucessfully create an account!", "Please wait for Admin Approval !", "success");

    @endif
    @if(Session::has('mess2'))

        swal("Congrats!", "Successfully Change Password !", "success");

    @endif
    @if(Session::has('mess3'))

        swal("Opps!", "Still , Your Account is not approve by Admin !", "info");

    @endif
    @if(Session::has('message'))
		var type="{{Session::get('alert-type','info')}}"

		switch(type){
			case 'info':
		         toastr.info("{{ Session::get('message') }}");
		         break;
	        case 'success':
	            toastr.success("{{ Session::get('message') }}");
	            break;
         	case 'warning':
	            toastr.warning("{{ Session::get('message') }}");
	            break;
	        case 'error':
		        toastr.error("{{ Session::get('message') }}");
		        break;
		}
	@endif
	$('.datepicker').datepicker({ 

    startDate: new Date()

    });
</script>

    <div class="container">
        <div class="left-panel">
            <div class="branding">
                <img src="{{ asset('image/micro.png') }}" alt="Library Logo" class="w-60 mx-auto">
                <h1>Microlink</h1>
                <p>E-learning Management System</p>    
            </div>
        </div>
        <div class="right-panel">
            <div class="login-form">
                <h2>Sign In</h2>
              
                <form action="{{ url('/admin/sign-in/process') }}" method="POST">
                    <div class="input-group">
                        <label for="email">EMAIL</label>
                        <input type="email" id="email" name="email" placeholder="Type your Email">
                    </div>
                    <div class="input-group">
                        <label for="password">PASSWORD</label>
                        <input type="password" id="password" name="password" placeholder="Type your password">
                    </div>

                    <a href="{{ url('/admin/forget-password') }}" class="forgot-password" style="margin-bottom: 1em;">Forgot your password?</a>

                
                </div>
                
                <div class="input-group">
                    <input type="submit"  value="Login as admin" class="login-button" />
                </div>

                <a href="/" class="text-grey-700">Login as student</a>

                </form>
            
            </div>
        </div>
    </div>

     <!-- fontawesome -->
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>
