<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('user.partials.style')

</head>

<body>



    <div class="container">

        @include('admin.partials.navbar')
        @include('admin.pages.message')

        @yield('content')

    </div>






    @include('user.partials.scripts')


</body>

</html>