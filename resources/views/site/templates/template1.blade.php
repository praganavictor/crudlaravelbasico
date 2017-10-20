<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>{{$title or 'Laravel'}}</title>
</head>
<body>
	@yield('content')

	@stack('scripts')
</body>
</html>