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
            <li><a href="{{url('project')}}">Project</a></li>
        </ul>
    </div>
    <div class="info-about">
        <img src="{{asset('img/avt.jpg')}}" alt="" width="280px" height="280px">
        <p class="text">
            Nguyễn Công Dũng </br>
            Phạm Thành Đạt</br>
            56k4</br>
            Sản phẩm đầu tiên </br>
        </p>
        <h2>Skills</h2>
        <ul>
            <li>Marco call team</li>
            <li>Làm việc Nhóm</li>
            <li>HTML - CSS - JS</li>
            <li>HTML - Jade - EJS</li>
            <li>HTML - Jade - EJS</li>
            <li>HTML - Jade - EJS</li>
        </ul>
        <h2>Project</h2>
        <ul>
            <li><a href="https://www.facebook.com/dred.lyver">Nguyễn Công Dũng</a></li>
            <li><a href="https://www.facebook.com/profile.php?id=100009910118836">Phạm Thành Đạt</a></li>
        </ul>
    </div>
    <div class="footer">
        <p> D - D © 2019 </p>
        <p>Theme by DungDat</p>
    </div>
</body>

</html>