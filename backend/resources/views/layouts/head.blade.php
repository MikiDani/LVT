<link rel="apple-touch-icon" sizes="180x180" href="/backend/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/backend/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/backend/favicon/favicon-16x16.png">
<link rel="manifest" href="/backend/favicon/site.webmanifest">
<link rel="shortcut icon" href="/backend/favicon/favicon.ico">
<meta name="application-name" content="{{ config('add.sitename') }} {{ config('add.siteversion') }}">

@vite(['resources/css/backend.css','resources/js/app.js'])

@yield('css')