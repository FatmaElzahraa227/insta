@include('layouts.appp');
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="container">
    <div class="profile">
        <h1>{{$profile['user']['username']}}</h1>
    </div>
</div>
</body>

</html>