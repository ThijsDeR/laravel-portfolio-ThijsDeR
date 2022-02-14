<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title; }}</title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/navStyles.css">
    <script src="js/navScript.js" defer></script>
    @yield('head-content')
</head>

<body>
    @extends('navigation')
    @yield('content')
</body>

</html>