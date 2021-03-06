<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
       @include('inc.navbar')
		<div class="container">
		@include('inc.messages')
        @yield('content')
		</div>
    </div>

    <!-- Scripts -->
	<script
	  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
	  crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
	if(window.location.href.indexOf("edit") > -1){ 
        CKEDITOR.replace( 'article-ckeditor' );
	}
    </script>
	<script type="text/javascript">
        @yield('inline-scripts')
    </script>
</body>
</html>
