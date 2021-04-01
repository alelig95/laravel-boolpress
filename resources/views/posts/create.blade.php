<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create post</title>
</head>
<body>

    <div class="container">
        <form action=" {{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="author_id">Autore</label>
                <select class="form-control" id="author_id" name="author_id">
                    @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }} {{ $author->surname }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" id="title" name="title" placeholder="Post title" value="">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="6"></textarea>
            </div>
            <div class="form-group">
                <label for="img">Immagine</label>
                <input class="form-control" type="file" name="img" id="img">
            </div>
            <div class="form-group">
                <label for="tags[]">Tags</label>
                <select multiple class="form-control" id="tags" name="tags[]">
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>

        </form>
    </div>
</body>
</html>
