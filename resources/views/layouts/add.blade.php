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
        <h2>Add bullet</h2>
       
        <div>
            <a href="{{ route('main')}}" class="btn btn-primary">Back</a>
        </div>

        <form class="" method="GET" action="{{route('addBullet')}}">
                    {!! csrf_field() !!}
            <h3>Title</h3>
            <input class="modal-enter-input modal-reg-input" 
                type="text" id="email" name="title"  placeholder="Title" required>
            <h3>Text</h3>     
            <input class="modal-enter-input modal-reg-input rigth" 
                type="text" name="text" id="subj" placeholder="Subject news" required>
            
            <h3>Category</h3>          
            <input class="modal-enter-input modal-reg-input" 
                type="text" name="category" id="category" placeholder="Category" maxlength="10" required>
            <a href="{{ route('addBullet') }}"><button type="submit" class="btn btn-success">Add</button></a>
        </form>

    </body>
</html>