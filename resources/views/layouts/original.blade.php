<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
/*         * { outline: 1px solid red; } */
        .msg1 {
            margin: 20px
        }
        .input-table {
            margin: 0 0 0 38px;
        }
        .list {
            margin: 38px;
        }
    </style>
</head>
<body>
@yield('title1')
	
	<div class="msg1">
		@yield('msg1')
	</div>
@yield('form')
	
	<div class="list">
		@yield('list')	
	</div>
</body>