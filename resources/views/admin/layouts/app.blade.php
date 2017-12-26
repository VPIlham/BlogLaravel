<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.layouts.head')
</head>
<body class="page-header-fixed">
	
		@include('admin.layouts.header')
		@include('admin.layouts.sidebar')
		@section('main-content')
		@show
		@include('admin.layouts.footer')

</body>
</html>