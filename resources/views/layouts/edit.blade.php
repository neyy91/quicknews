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
        <h2>Edit</h2>

        <form class="" method="GET" action="{{route('edit', ['edit_id' => $bullet->id])}}">
                    {!! csrf_field() !!}
            <h3>Title</h3>
            <input class="modal-enter-input modal-reg-input" 
                type="text" id="title2" name="title"  placeholder="Title"  value="{{$bullet->title}}" required>
            <h3>Text</h3>                   
            <input class="modal-enter-input modal-reg-input rigth" 
                type="text" name="text" id="subj2" placeholder="Subject news"  value="{{$bullet->title}}" required>     
            <h3>Category</h3>                      
            <input class="modal-enter-input modal-reg-input" 
                type="text" name="category" id="category2" placeholder="Category" maxlength="10"  value="{{$bullet->category}}" required>
            <a href="{{ route('edit', ['edit_id' => $bullet->id]) }}"><button type="submit" class="btn btn-warning">Edit</button></a>
        </form>
       
        <div>
            <a href="{{ route('manager')}}" class="btn btn-primary">Back</a>
        </div>
    </body>
</html>