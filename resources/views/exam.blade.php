<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-4">
<h3>

  # {{\Illuminate\Support\Facades\Session::get('nextq')}} {{$question->question}}</h3>
            <form method="post" action="{{url('submit')}}">
                @csrf
            <input name="ans" value="a" type="radio">{{$question->a}}<br>
            <input name="ans" value="b" type="radio">{{$question->b}}<br>
            <input name="ans"value="c" type="radio">{{$question->c}}<br>
            <input name="ans" value="d" type="radio">{{$question->d}}<br>

            <input name="correct" value="{{ $question->ans}}" hidden >

        <div class="col-md-5"></div>

    </div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-4">

       <button type="submit">next</button></a>
    </div>
</div>
    </form>


</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script
    src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
</body>
</html>
