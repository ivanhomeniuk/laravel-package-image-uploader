<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>
        <form action="{{ route('upload.image') }}" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="profile_image" class="col-md-4 col-form-label text-md-right">Profile Image</label>
                <div class="col-md-6">
                    <input id="profile_image" type="file" class="form-control" name="profile_image">
                </div>
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </form>
        @if (isset($images) || !empty($images))
            @foreach($images as $item)
                {{ HTML::image($item->url, 'alt text', ['class' => 'pull-xs-right']) }}
            @endforeach
        @endif
    </div>
</div>
</body>
</html>
