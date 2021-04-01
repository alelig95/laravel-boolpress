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
            <th scope="col">Img</th>
            <th scope="col">Tags</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $posts as $post )
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</a></td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->author->name}} {{ $post->author->surname }}</td>
                    <td><img src="{{ asset($post->img) }}" width="100" alt=""></td>
                    <td>
                        @foreach ($post->tags as $tag)
                            {{$tag->name}},
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

</body>
</html>
