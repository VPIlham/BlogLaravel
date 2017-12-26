<!DOCTYPE html>
<html lang="en">

<head>
    @include('blog/layouts/head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

   @include('blog/layouts/header')
        @section('main-content')
            @show

   @include('blog/layouts/footer')

</body>

</html>
