<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="{{ URL::asset('css/post/style.css'); }}" class="css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="title">
                <h1>My Blog</h1>
            </div>
        </div>
        <div class="main-content">
            <div class="all-posts">
                @foreach ($posts as $post)
                <div class="single-post">
                    <div class="post-content">
                        <h1>{{$post->title}}</h1>
                        <p>{{$post->body}}</p>
                    </div>
                    <div class="post-actions">
                        <button><a href="{{$post->id}}/edit">Edit</a></button>
                        <form action="/posts/{{$post->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="delete-button">Delete</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="post-btn">
                <button><a href="/posts/create">New Post</a></button>
            </div>
        </div>
    </div>
</body>

</html>