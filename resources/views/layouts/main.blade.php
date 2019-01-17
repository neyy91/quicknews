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
    <h2>Main</h2>
    <form  method="GET" action="{{route('productsCat')}}">
    {!! csrf_field() !!}
        @if($categorys != null && count($categorys) > 0)
        <div class="form-group">
            <label> Select filter</label>
            <select class="form-control" name="cat_id" id="catID">
            <option>no filter</option>
            @foreach ($categorys as $category)
                <option value="{{ $category }}">{{ $category }}</option>
            @endforeach
            </select>
        </div>
    
        @endif
        <button id="findBtn" type="submit" class="btn btn-info" >Filter by</button>
        <a href="{{ route('manager') }}" class="btn btn-success">Manage news</a>
    </form>
    

    <table class="table table-hover" id="table_data">
        <thead>
        <tr>
        <th>#id</th>
        <th>Title</th>
        <th>Text</th>
        <th>Сategory</th>

        <th>News create</th>
        <th>News update</th>
        
        </tr>
    </thead>
    <tbody>
        @foreach ($bullets as $bullet)
            <tr>
                <td>{{ $bullet->id }}</td>
                <td>
                <a href="{{ route('bullet', ['id' => $bullet->id]) }}">{{ $bullet->title }}</a>
                </td>
                <td>{{ $bullet->text }}</td>
                <td>{{ $bullet->category }}</td>
                <td>{{ $bullet->created_at }}</td>
                <td>{{ $bullet->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>

    </body>
</html>

