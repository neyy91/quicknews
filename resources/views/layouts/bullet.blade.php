<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet">
        <title>Laravel</title>

    </head>
    <body>
        <h2>Title: {{$bullet->title}}</h2>
        <span>{{$bullet->text}}</span>
        <div>
            <a href="javascript:history.back()" class="btn btn-primary">Back</a>
        </div>
    </body>
</html>

