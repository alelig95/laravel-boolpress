<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Posts</title>
</head>
<body>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Author</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $posts as $post )
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</a></td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->author->name}} {{ $post->author->surname }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

</body>
</html>
