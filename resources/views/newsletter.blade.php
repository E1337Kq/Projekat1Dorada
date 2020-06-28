<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>E1337Kq Newsletter</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        html, body {
            background: #660066;  /* za zastarjele pretrazivace */
            background: -webkit-linear-gradient(to right, #ff0000, #660066);
            background: linear-gradient(to right, #ff0000, #660066);
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
            justify-content: center;
            margin-top: 0px;
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
            color: white;
            margin-right: 100px;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: white;
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
        .alert-success{
            margin-top: 0px;
            text-align: center;
        }

        .alert-danger{
            margin-top: 0px;
            text-align: center;
        }
    </style>
</head>
<body>

    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    @if (\Session::has('failure'))
        <div class="alert alert-danger">
            <p>{{ \Session::get('failure') }}</p>
        </div>
    @endif
    <div class="flex-center position-ref full-height">
        <div class="content">
    <h2>Prijavite se na našu newsletter listu</h2>
        <h6>Mail sa aktuelnim informacijama šaljemo jednom mesečno.</h6>
        </div>

        <form method="post" action="{{url('newsletter')}}">
    @csrf

    <div class="content">
        <label for="Email">Email:</label>
        <input type="text" class="form-control" name="email">
    </div>

<div>
    <div></div>
    <br/><div class="content">
        <button type="submit" class="btn btn-info">Prijavi se</button>
    </div>
</div>
</form>
</div>
</body>
</html>
