@props(['pageTitle'])

<!doctype html>
<html class="h-full bg-gray-50">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
    [x-cloak] {
      display: none !important;
    }

  </style>
  <title>Brunofy - {{ $pageTitle }}</title>
  <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
        '(prefers-color-scheme: dark)').matches)) {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark')
    }
  </script>
</head>

<body class="h-full bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
  {{ $slot }}
</body>

</html>
