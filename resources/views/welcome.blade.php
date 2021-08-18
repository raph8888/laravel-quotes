<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>PHP Laravel web application</title>
      <link href="{{ asset('css/gradients.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    </head>

    <body class="">
        <div class="wrapper">

            <h3>Crypto FX</h3>

            @foreach ($brokers as $broker)
                <li>{{ $broker->name }}</li>
            @endforeach

        </div>
        <script type="text/javascript" src="{{ asset('js/set-background.js') }}"></script>
    </body>
</html>
