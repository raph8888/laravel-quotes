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

    <table class="styled-table">
        <thead>
        <tr>
            <th>Crypto FX</th>
            <th>Buy Fee %</th>
            <th>Sell Fee %</th>
        </tr>
        </thead>
        <tbody>

        @foreach($brokers as $broker)
            <tr>
                <td>{{ $broker->name }}</td>
                <td>{{ $broker->fee_m }}</td>
                <td>{{ $broker->fee_m }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>

</div>
<script type="text/javascript" src="{{ asset('js/set-background.js') }}"></script>
</body>
</html>
