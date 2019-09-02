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


<div class="row">
    <div class="container">

        <div class="col-md-12">
          @if(session('error'))
          <div class="alert alert-danger">
            <p> {{session('error')}} </p>
          </div>
          @endif


          @if(session('success'))
          <div class="alert alert-success">
            <p> {{session('success')}} </p>
              @endif
            </div>
          </div>
          </div>
          </div>
          


    <div class="flex-center position-ref full-height">
    <div class="title m-b-md">
                   Simple calc
                </div>

        <form class="needs-validation" action="{{route('Calc.res')}}" method="post">
            @csrf
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">num1</label>
                    <input type="number" value="{{isset($num1)? $num1:'num1'}}" class="form-control" id="validationCustom03" name="num1" placeholder="num1" required>
                    <div class="invalid-feedback">
                        Please provide a valid num1.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04">num2</label>
                    <input type="number" class="form-control" value="{{isset($num2)? $num2:'num2'}}" id="validationCustom04" name="num2" placeholder="num2" required>
                    <div class="invalid-feedback">
                        Please provide a valid num2.
                    </div>
                </div>
             
            </div>


            <div class="form-row">
            <div class="col-md-3 mb-3">
                    <label for="validationCustom03">sum</label>
                    <input type="text" class="form-control" disabled id="validationCustom03" name="sum"placeholder="sum" required value="{{isset($res->sum)? $res->sum:'sum'}}">
                    <div class="invalid-feedback">
                        Please provide a valid sum.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom04">sub</label>
                    <input type="text" class="form-control" disabled id="validationCustom04" name="sub" placeholder="sub" required value="{{isset($res->sub)? $res->sub:'sub'}}" >
                    <div class="invalid-feedback">
                        Please provide a valid sub.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom05">mul</label>
                    <input type="text" class="form-control" disabled id="validationCustom05" name="mul" placeholder="mul" required value="{{isset($res->mul)? $res->mul:'mul'}}" >
                    <div class="invalid-feedback">
                        Please provide a valid mul.
                    </div>
                </div>
               
                <div class="col-md-3 mb-3">
                    <label for="validationCustom05">div</label>
                    <input type="text" class="form-control" disabled id="validationCustom05" name="div" placeholder="div" required value="{{isset($res->div)? $res->div:'div'}}" >
                    <div class="invalid-feedback">
                        Please provide a valid div.
                    </div>
                </div>
            </div>

            <button class="btn btn-primary mr-3" type="submit">Calc</button>
           <input type="reset" value="Cancel" class="btn btn-defualt">
           <a  class="btn btn-warning"href="{{route('Calc.logs')}}" style="float:right;">Logs</a>

        </form>
    </div>
</body>

</html>