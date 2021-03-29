<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Comments</title>
</head>
<body>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Comment</th>
            <th scope="col">Post title</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $comments as $comment )
                <tr>
                    <th scope="row">{{ $comment->id }}</th>
                    <td>{{ $comment->content }}</a></td>
                    <td>{{ $comment->post->title }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

</body>
</html>
