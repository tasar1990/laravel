<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
	        <title>AdminLTE | Dashboard</title>
	        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	        <!-- bootstrap 3.0.2 -->
	        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	        <!-- font Awesome -->
	        <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	        <!-- Ionicons -->
	        <link href="{{ URL::asset('css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
	        <!-- fullCalendar -->
	        <link href="{{ URL::asset('css/fullcalendar/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
	        <link href="{{ URL::asset('css/fullcalendar/fullcalendar.print.css') }}" rel="stylesheet" type="text/css" media='print' />
	        <!-- Theme style -->
	        <link href="{{ URL::asset('css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
	        	        
	        <link href="http://cdn.datatables.net/1.10.5/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

	        <style type="text/css">
				.error{
					color: red;
				}
			
			</style>
	</head>
<body class="skin-black">

  <header class="header"> @include('layout.header') </header>
  @include('layout.left')
  <div class="contents"> @yield('content') </div>
   @include('layout.footer') 

</body>
</html>