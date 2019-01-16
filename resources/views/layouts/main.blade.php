<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>

        <title>Laravel</title>

    </head>
    <body>

    <form  method="GET" action="{{route('productsCat')}}">
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
        <th>#</th>
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script>

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </body>
</html>

