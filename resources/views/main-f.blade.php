<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{!! URL::asset('custom-f6/css/foundation.css') !!}">
</head>
<body>



@yield('content')

<script src="{!! URL::asset('custom-f6/js/vendor/what-input.min.js') !!}"></script>
<script src="{!! URL::asset('custom-f6/js/vendor/jquery.min.js') !!}"></script>
<script src="{!! URL::asset('custom-f6/js/foundation.min.js') !!}"></script>
<script>
    $(document).foundation();
</script>
@yield('scripts')
</body>
</html>