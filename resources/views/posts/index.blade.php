<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <title>Respuesta Post</title>
</head>
<body>
    <div class="container">
        <h1>Publicaciones</h1>

        @foreach ($posts as $post)

        <div class="panel panel-default">
            <div class="panel-body">

                <a href="/posts/{{$post->id}}">
                    {{$post->title}}
                </a>
            </div>
        </div>

        @endforeach

    </div>
    


</body>
</html>