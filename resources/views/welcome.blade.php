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


            <table class="table table-sm">
                <thead>
                <tr>
                    <th>Crypto FX</th>
                    <th>Fee</th>
                </tr>
                </thead>
                <tbody>

                @foreach($brokers as $broker)
                    <tr>
                        <td>{{ $broker->name }}</td>
                        @foreach($fees as $fee)
                            @if($broker->id == $fee->broker_id)
                                <td>{{ $fee->fee_m }}</td>
                            @endif
                        @endforeach
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
        <script type="text/javascript" src="{{ asset('js/set-background.js') }}"></script>
    </body>
</html>
