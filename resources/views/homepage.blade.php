<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>raph-web.com</title>
    <link href="{{ asset('css/gradients.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
</head>

<body class="">
<div class="wrapper">

    <a href="{{Request::url()}}"><h3 class="banner-text">{{ $quote }}</h3></a>

</div>
<script type="text/javascript" src="{{ asset('js/set-background.js') }}"></script>
</body>
</html>
