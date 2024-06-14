<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<script>
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
            <a href="/" ><i class="fa fa-arrow-left"></i></a>
            <div class="branding">
                <img src="{{ asset('image/micro.png') }}" alt="Library Logo" class="w-60 mx-auto">
                <h1>Microlink</h1>
                <p>E-learning Management System</p>    
            </div>
        </div>
        <div class="right-panel">
            <div class="login-form">
                <h2>Forgot Password</h2>
              
                <form action="{{ url('user/forget-password/process') }}" method="POST">
                    @csrf 

                    <div class="input-group">
                        <label for="email">EMAIL</label>
                        <input type="email" id="email" name="email" placeholder="Type your Email">
                    </div>

                
                </div>
                
                <div class="input-group">
                    <input type="submit"  value="Send Email" class="login-button" />
                </div>

                </form>
            
            </div>
        </div>
    </div>
</body>
</html>
