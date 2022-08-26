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
            @foreach($profiles as $profile)

            <div class="profile">

                <div class="profile-image">

                    @if($profile['image'])
                    <img src="{{Storage::disk('public')->url('/images//'.$profile['image'])}}" class="img-thumbnail" width="250" height="200">
                    @else
                    <h1> no image</h1>
                    @endif

                </div>

                <div class="profile-user-settings">

                    <h1 class="profile-user-name">{{$profile['user']['username']}}</h1>

                    <br>
                    <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>

                </div>
                <a href="">add post</a>
                <div class="profile-stats">

                    <ul>
                        <li><span class="profile-stat-count">1</span> posts</li>
                        <li><span class="profile-stat-count">1</span> followers</li>
                        <li><span class="profile-stat-count">1</span> following</li>
                    </ul>

                </div>

                <div class="profile-bio">


                    <p><span class="profile-real-name">Gender : </span>{{$profile['gender']}}</p>
                    <p><span class="profile-real-name">Bio : </span>{{$profile['bio']}}</p>
                    <p><span class="profile-real-name">Webiste : </span>{{$profile['website']}}</p>

                </div>
                @endforeach


            </div>
        </div>
        <!-- End of profile section -->
        
</body>
</html>