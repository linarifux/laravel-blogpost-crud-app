<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Edit</title>
    <link rel="stylesheet" href="{{ URL::asset('css/post/style.css'); }}" class="css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="title">
                <h1>My Blog</h1>
            </div>
        </div>
        <form method="POST" action="/posts/{{$post->id}}">
            @method('PUT')
            @csrf
            <div class="main-content">
                <div class="title-field">
                    <input name="title" type="text" value="{{$post->title}}">
                </div>
                <div class="body-field">
                    <textarea name="body" id="" cols="30" rows="10">{{$post->body}}</textarea>
                </div>
            </div>
            <div class="primary-btn"><button>Update</button></div>
        </form>
    </div>
</body>

</html>