<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Microlink Library Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100">

<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

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

<!-- <a href="{{ url('/admin') }}" class="absolute top-4 right-5 bg-red-500 text-white px-4 py-2 rounded">Go to Admin Panel</a> -->

<form method="post" action="{{ url('student/sign-up/process') }}" enctype="multipart/form-data">
    @csrf 
    <div id="wrapper" class="flex flex-col lg:flex-row items-center min-h-screen p-4 lg:p-0 bg-white-700">
        <div class="login bg-grey-700 ml-3 p-8 rounded-lg shadow-lg border border-gray-300 lg:w-1/2">
            <div class="loginBox">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="name" class="block text-gray-700 font-bold mb-2"><i class="fas fa-user"></i> Name</label>
                        <input type="text" name="name" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
                    </div>
                    <div>
                        <label for="student_id" class="block text-gray-700 font-bold mb-2"><i class="fas fa-id-badge"></i> Student ID</label>
                        <input type="text" name="student_id" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
                    </div>
                    <div>
                        <label for="session" class="block text-gray-700 font-bold mb-2"><i class="fas fa-calendar-alt"></i> Session no</label>
                        <select name="session" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="2020-2021">2020-2021</option>
                            <option value="2019-2020">2019-2020</option>
                            <option value="2018-2019">2018-2019</option>
                            <option value="2017-2018">2017-2018</option>
                            <option value="2016-2017">2016-2017</option>
                            <option value="2015-2016">2015-2016</option>
                            <option value="2014-2015">2014-2015</option>
                        </select>
                    </div>
                    <div>
                        <label for="username" class="block text-gray-700 font-bold mb-2"><i class="fas fa-user-circle"></i> Username</label>
                        <input type="text" name="username" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 font-bold mb-2"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" name="email" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
                    </div>
                    <div>
                        <label for="contact" class="block text-gray-700 font-bold mb-2"><i class="fas fa-phone-alt"></i> Contact no</label>
                        <input type="number" name="contact" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
                    </div>
                    <div class="col-span-2">
                        <label for="picture" class="block text-gray-700 font-bold mb-2"><i class="fas fa-camera"></i> Image</label>
                        <input type="file" name="picture" id="picture" class="hidden" required>
                        <label for="picture" class="cursor-pointer text-green-500 hover:text-green-600 transition duration-300 flex items-center justify-center">
                            <i class="fas fa-upload text-3xl"></i>
                        </label>
                        <span id="file-name" class="text-gray-600 ml-2"></span>
                    </div>
                    <div>
                        <label for="password" class="block text-gray-700 font-bold mb-2"><i class="fa fa-key"></i> Password</label>
                        <input type="password" name="password" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
                    </div>
                    <div>
                        <label for="confirm_password" class="block text-gray-700 font-bold mb-2"><i class="fa fa-key"></i> Confirm Password</label>
                        <input type="password" name="confirm_password" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-green-500 text-white py-2 px-40 rounded hover:bg-green-600 transition duration-300">Sign Up</button>
                </div>
            </div>
            <div class="mt-4 text-center">
                <span><a href="{{ url('/') }}" class="text-blue-500 hover:underline">Already have an account?</a></span>
            </div>
        </div>
        <div class="side text-gray-700 text-center lg:text-left lg:w-1/2 lg:pl-16 mt-8 lg:mt-0">
            <h1 class="text-4xl font-bold leading-tight mt-4 mb-10">Microlink E-library Management System</h1>
            <div class="logo mb-40 text-center">
                <img src="{{ asset('image/book.png') }}" alt="Library Logo" class="w-60 mx-auto">
            
                 <p class="text-lg mt-5 italic">Manage your library with ease and efficiency.</p>
            </div>
        </div>
    </div>
</form>

<!-- fontawesome -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>
