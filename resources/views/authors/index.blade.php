<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Authors</title>
</head>
<body>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Bio</th>
            <th scope="col">Website</th>
            <th scope="col">Pic</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $authors as $author )
                <tr>
                    <th scope="row">{{ $author->id }}</th>
                    <td>{{ $author->name }}</a></td>
                    <td>{{ $author->surname }}</td>
                    <td>{{ $author->email }}</td>
                    <td>{{ $author->detail->bio }}</td>
                    <td>{{ $author->detail->website }}</td>
                    <td><img src="{{ $author->detail->pic }}" width="250" alt=""></td>
                </tr>
            @endforeach
        </tbody>
      </table>

</body>
</html>
