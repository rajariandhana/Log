<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOG</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
	@livewireStyles
</head>
<body class="bg-gray-100">
	@livewireScripts
	<x-navbar></x-navbar>
	<div class="flex flex-col w-full px-4 my-4 gap-y-4">
		{{$slot}}
	</div>
</body>
</html>
