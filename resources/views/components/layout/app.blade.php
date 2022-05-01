@props(['pageTitle'])

<!doctype html>
<html class="h-full bg-gray-50">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg">
  <title>Brunofy - {{ $pageTitle }}</title>
</head>

<body class="h-full">
  {{ $slot }}
</body>

</html>
