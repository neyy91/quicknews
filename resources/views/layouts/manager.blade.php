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
    <h2>Manager</h2>
    <div>
        <a href="{{ route('main')}}" class="btn btn-primary">Back</a>
        <a href="{{ route('addBullet') }}"><button type="submit" class="btn btn-success">Add</button></a>
    </div>

    

    <table class="table table-hover" id="table_data">
        <thead>
        <tr>
        <th>#</th>
        <th>Title</th>
        <th>Text</th>
        <th>Сategory</th>

        <th>News create</th>
        <th>News update</th>
        
        <th>Edit</th>
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
                <td>
                <a href="{{ route('edit', ['id' => $bullet->id]) }}"><button type="submit" class="btn btn-warning">Edit</button></a>
                <a href="{{ route('delete', ['id' => $bullet->id]) }}"><button type="submit" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
        @endforeach
  </tbody>
</table>


    </body>
</html>

