<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900&display=swap" rel="stylesheet">
</head>


<body>
    <div class="navbar">
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('blog')}}">Blog</a></li>
            <li><a href="{{url('project')}}">Projects</a></li>
            <li><a href="{{url('about')}}">About</a></li>
        </ul>
    </div>
    <div class="wrapper-content">

        <div class="post-info">
            <h2>{{$post->title}}</h2>
            <div class="time">{{$Time}}</div>
            <div class="tag">
            @foreach ($allTag as $Tag)
                <span>{{$Tag}}</span>  
            @endforeach
            </div>
            <div class="author">
                <h5>Author:
                    <b>{{$post->author}}</b>
                </h5>
            </div>
        </div>
        <div class="sumary">
            <h3>Summary</h3>
            <p>{{$post->description}}</p>
        </div>
        <div class="content">
            <h3>Content</h3>
            <p>
                {{$post->content}}
            </p>
        </div>
    </div>

    <div class="info border-bottom"></div>
    <div class="footer">
        <p> D - D © 2019 </p>
        <p>Theme by DungDat</p>
    </div>

</body>
<html>


</html>