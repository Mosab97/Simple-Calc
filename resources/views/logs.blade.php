<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href=" {{asset('css/app.css')}} ">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>




    <div class="flex-center position-ref full-height">
        <div class="title m-b-md">
            Simple calc
        </div>


        <div class="row">
            <div class="container">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">num1</th>
                            <th scope="col">num2</th>
                            <th scope="col">sum</th>
                            <th scope="col">sub</th>
                            <th scope="col">mul</th>
                            <th scope="col">div</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($logs as $log)
                        <tr>
                            <th scope="row"> {{$log->id}} </th>
                            <td> {{$log->num1}}</td>
                            <td> {{$log->num2}}</td>
                            <td> {{$log->sum}}</td>
                            <td> {{$log->sub}}</td>
                            <td> {{$log->mul}}</td>
                            <td> {{$log->div}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>

        <a href="{{route('Calc.index')}}" class="btn btn-primary">back</a>
    </div>
</body>

</html>