<!DOCTYPE html>
<html>
<head>
	<title>
        @yield('title', 'Bill Splitter')
    </title>

	<meta charset='utf-8'>

    @stack('head')

</head>
<body>

	<header>
		<h1 class="title">bill splitter</h1>
	</header>

	<section>
		@yield('content')
	</section>

	<footer>
		&copy; {{ date('Y') }}
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    @stack('body')

</body>
</html>