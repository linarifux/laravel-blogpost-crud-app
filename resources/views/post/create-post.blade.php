<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post</title>
    <link rel="stylesheet" href="{{ URL::asset('css/post/style.css'); }}" class="css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="title">
                <h1>My Blog</h1>
            </div>
        </div>
        <form method="POST" action="/posts">
            @csrf
            <div class="main-content">
                <div class="title-field">
                    <input name="title" type="text" placeholder="Post Title">
                </div>
                <div class="body-field">
                    <textarea cols="30" rows="10" placeholder="Post Body" name="body"></textarea>
                </div>
            </div>
            <div class="primary-btn"><button>Add Post</button></div>
        </form>
    </div>
</body>

</html>