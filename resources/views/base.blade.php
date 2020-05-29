<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ trans('message.employee_manage') }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}">
    <script type="text/javascript" src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
</head>
<body>
@section('lang')
    <div class="d-flex justify-content-center">
        <a class="btn btn-success active" href="{{ route('lang',['lang' => 'vi']) }}">{{ trans('message.vn') }}</a>
        <a class="btn btn-success active" href="{{ route('lang',['lang' => 'en' ]) }}">{{ trans('message.en') }}</a>
    </div>
@show
<div class="container">
    @yield('main')
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
